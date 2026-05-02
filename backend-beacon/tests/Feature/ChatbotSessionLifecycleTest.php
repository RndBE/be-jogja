<?php

namespace Tests\Feature;

use App\Models\ChatSession;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ChatbotSessionLifecycleTest extends TestCase
{
    use RefreshDatabase;

    public function test_chat_with_closed_session_token_starts_new_session(): void
    {
        config(['openai.api_key' => '']);

        $closedSession = ChatSession::create([
            'session_token' => 'closed-session-token',
            'visitor_ip' => '127.0.0.1',
            'status' => 'closed',
            'last_activity_at' => now()->subMinute(),
        ]);

        $response = $this->postJson('/api/v1/chatbot', [
            'session_token' => $closedSession->session_token,
            'message' => 'Halo, saya mau mulai tanya lagi.',
        ]);

        $response
            ->assertOk()
            ->assertJsonPath('mode', 'ai')
            ->assertJsonStructure([
                'session_token',
                'reply',
                'reply_message_id',
            ]);

        $newToken = $response->json('session_token');

        $this->assertNotSame($closedSession->session_token, $newToken);
        $this->assertDatabaseHas('chat_sessions', [
            'session_token' => $closedSession->session_token,
            'status' => 'closed',
        ]);
        $this->assertDatabaseHas('chat_sessions', [
            'session_token' => $newToken,
            'status' => 'ai',
        ]);
    }

    public function test_escalate_returns_reply_message_id_for_poll_deduplication(): void
    {
        $session = ChatSession::create([
            'session_token' => 'active-session-token',
            'visitor_ip' => '127.0.0.1',
            'status' => 'ai',
            'last_activity_at' => now(),
        ]);

        $session->messages()->create([
            'sender_type' => 'visitor',
            'content' => 'Saya ingin dihubungkan dengan sales.',
        ]);

        $response = $this->postJson('/api/v1/chatbot/escalate', [
            'session_token' => $session->session_token,
            'name' => 'Budi',
            'organization' => 'Dinas SDA',
            'phone' => '081234567890',
        ]);

        $response
            ->assertOk()
            ->assertJsonPath('mode', 'escalated')
            ->assertJsonStructure([
                'session_token',
                'reply',
                'reply_message_id',
            ]);

        $replyMessageId = $response->json('reply_message_id');

        $this->assertIsInt($replyMessageId);
        $this->assertDatabaseHas('chat_messages', [
            'id' => $replyMessageId,
            'sender_type' => 'ai',
        ]);
    }

    public function test_poll_reports_closed_mode_and_closing_message(): void
    {
        $session = ChatSession::create([
            'session_token' => 'closed-poll-session-token',
            'visitor_ip' => '127.0.0.1',
            'status' => 'closed',
            'last_activity_at' => now(),
        ]);

        $closingMessage = $session->messages()->create([
            'sender_type' => 'agent',
            'sender_name' => 'Agent',
            'content' => 'Chat ini telah ditutup.',
        ]);

        $response = $this->getJson('/api/v1/chatbot/poll?'.http_build_query([
            'session_token' => $session->session_token,
        ]));

        $response
            ->assertOk()
            ->assertJsonPath('mode', 'closed')
            ->assertJsonPath('messages.0.id', $closingMessage->id)
            ->assertJsonPath('messages.0.sender_type', 'agent');
    }
}
