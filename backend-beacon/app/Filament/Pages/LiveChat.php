<?php

namespace App\Filament\Pages;

use App\Models\ChatMessage;
use App\Models\ChatSession;
use BackedEnum;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Support\Enums\Width;
use Illuminate\Support\Facades\Auth;

class LiveChat extends Page
{
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    protected static ?string $navigationLabel = 'Live Chat';

    protected static ?string $title = 'Live Chat';

    protected static string|\UnitEnum|null $navigationGroup = 'Layanan';

    protected static ?int $navigationSort = 10;

    protected static ?string $slug = 'live-chat';

    protected string $view = 'filament.pages.live-chat';

    public ?int $activeSessionId = null;

    public string $replyMessage = '';

    /**
     * Get escalated/live sessions for the sidebar.
     *
     * @return \Illuminate\Support\Collection<int, ChatSession>
     */
    public function getSessions(): \Illuminate\Support\Collection
    {
        return ChatSession::query()
            ->whereIn('status', ['escalated', 'live'])
            ->orderByDesc('last_activity_at')
            ->get();
    }

    /**
     * Get all sessions including closed (for history).
     *
     * @return \Illuminate\Support\Collection<int, ChatSession>
     */
    public function getClosedSessions(): \Illuminate\Support\Collection
    {
        return ChatSession::query()
            ->where('status', 'closed')
            ->orderByDesc('last_activity_at')
            ->take(20)
            ->get();
    }

    /**
     * Get messages for the active session.
     *
     * @return \Illuminate\Support\Collection<int, ChatMessage>
     */
    public function getMessages(): \Illuminate\Support\Collection
    {
        if (! $this->activeSessionId) {
            return collect();
        }

        return ChatMessage::where('chat_session_id', $this->activeSessionId)
            ->orderBy('created_at')
            ->get();
    }

    public function getActiveSession(): ?ChatSession
    {
        if (! $this->activeSessionId) {
            return null;
        }

        return ChatSession::find($this->activeSessionId);
    }

    public function selectSession(int $sessionId): void
    {
        $this->activeSessionId = $sessionId;

        $session = ChatSession::find($sessionId);
        if ($session) {
            // Mark as live and assign to current agent
            if ($session->status === 'escalated') {
                $session->update([
                    'status' => 'live',
                    'assigned_to' => Auth::id(),
                ]);
            }

            // Mark all visitor messages as read
            $session->messages()
                ->where('sender_type', 'visitor')
                ->where('is_read', false)
                ->update(['is_read' => true]);
        }
    }

    public function sendReply(): void
    {
        if (! $this->activeSessionId || ! trim($this->replyMessage)) {
            return;
        }

        $session = ChatSession::find($this->activeSessionId);
        if (! $session) {
            return;
        }

        $user = Auth::user();

        $session->messages()->create([
            'sender_type' => 'agent',
            'sender_name' => $user?->name ?? 'Agent',
            'content' => trim($this->replyMessage),
            'is_read' => false,
        ]);

        $session->update(['last_activity_at' => now()]);

        $this->replyMessage = '';

        Notification::make()
            ->success()
            ->title('Pesan terkirim')
            ->duration(2000)
            ->send();
    }

    public function closeSession(?int $sessionId = null): void
    {
        $id = $sessionId ?? $this->activeSessionId;
        $session = ChatSession::find($id);

        if ($session) {
            $session->update(['status' => 'closed']);

            // Send closing message
            $session->messages()->create([
                'sender_type' => 'agent',
                'sender_name' => Auth::user()?->name ?? 'Agent',
                'content' => 'Terima kasih sudah menghubungi Beacon Engineering. Chat ini telah ditutup. Jika ada pertanyaan lain, silakan mulai chat baru.',
            ]);

            if ($this->activeSessionId === $id) {
                $this->activeSessionId = null;
            }

            Notification::make()
                ->success()
                ->title('Sesi ditutup')
                ->send();
        }
    }

    public static function getNavigationBadge(): ?string
    {
        $count = ChatSession::whereIn('status', ['escalated', 'live'])->count();

        return $count > 0 ? (string) $count : null;
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'danger';
    }

    public function getMaxContentWidth(): Width|string|null
    {
        return Width::Full;
    }
}
