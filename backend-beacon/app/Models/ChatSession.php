<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ChatSession extends Model
{
    protected $fillable = [
        'session_token',
        'visitor_name',
        'visitor_email',
        'visitor_phone',
        'visitor_organization',
        'visitor_ip',
        'status',
        'assigned_to',
        'topic_summary',
        'last_activity_at',
    ];

    protected $casts = [
        'last_activity_at' => 'datetime',
    ];

    public function messages(): HasMany
    {
        return $this->hasMany(ChatMessage::class);
    }

    public function agent(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function isLive(): bool
    {
        return in_array($this->status, ['escalated', 'live']);
    }

    public function unreadVisitorCount(): int
    {
        return $this->messages()
            ->where('sender_type', 'visitor')
            ->where('is_read', false)
            ->count();
    }
}
