<x-filament-panels::page>
    <div class="grid grid-cols-12 gap-6 h-[calc(100vh-12rem)]" wire:poll.3s>

        {{-- Session List Sidebar --}}
        <div class="col-span-4 xl:col-span-3 bg-white rounded-xl border border-gray-200 flex flex-col overflow-hidden">

            {{-- Sidebar Header --}}
            <div class="p-4 border-b border-gray-200 ">
                <h3 class="text-sm font-bold text-gray-900 ">Percakapan Aktif</h3>
                <p class="text-xs text-gray-500 mt-1">Klik untuk membalas</p>
            </div>

            {{-- Session Items --}}
            <div class="flex-1 overflow-y-auto divide-y divide-gray-100 ">
                @forelse($this->getSessions() as $session)
                    <button
                        wire:click="selectSession({{ $session->id }})"
                        class="w-full text-left px-4 py-3 hover:bg-gray-50 :bg-gray-800 transition-colors {{ $activeSessionId === $session->id ? 'bg-primary-50 border-l-2 border-primary-500' : '' }}"
                    >
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                {{-- Status indicator --}}
                                <span class="inline-block w-2 h-2 rounded-full {{ $session->status === 'escalated' ? 'bg-amber-500 animate-pulse' : 'bg-emerald-500' }}"></span>
                                <span class="text-sm font-medium text-gray-900 ">
                                    {{ $session->visitor_name ?: 'Pengunjung #' . $session->id }}
                                </span>
                            </div>
                            @if($session->unreadVisitorCount() > 0)
                                <span class="inline-flex items-center justify-center w-5 h-5 text-[10px] font-bold text-white bg-red-500 rounded-full">
                                    {{ $session->unreadVisitorCount() }}
                                </span>
                            @endif
                        </div>

                        <p class="text-xs text-gray-500 mt-1 truncate">
                            {{ $session->topic_summary ?: ($session->messages()->latest()->first()?->content ?? 'Percakapan baru') }}
                        </p>

                        <div class="flex items-center justify-between mt-1">
                            <span class="text-[10px] uppercase tracking-wide font-semibold {{ $session->status === 'escalated' ? 'text-amber-600' : 'text-emerald-600' }}">
                                {{ $session->status === 'escalated' ? 'Menunggu' : 'Live' }}
                            </span>
                            <span class="text-[10px] text-gray-400">
                                {{ $session->last_activity_at?->diffForHumans(short: true) }}
                            </span>
                        </div>
                    </button>
                @empty
                    <div class="p-8 text-center">
                        <x-filament::icon icon="heroicon-o-chat-bubble-left-right" class="w-10 h-10 text-gray-300 mx-auto mb-3" />
                        <p class="text-sm text-gray-500">Belum ada percakapan yang perlu direspon.</p>
                        <p class="text-xs text-gray-400 mt-1">Percakapan akan muncul ketika pengunjung meminta bantuan CS.</p>
                    </div>
                @endforelse
            </div>

            {{-- Closed Sessions Toggle --}}
            <div class="p-3 border-t border-gray-200 bg-gray-50 ">
                <p class="text-[10px] font-bold uppercase tracking-widest text-gray-400 mb-2">Riwayat (20 terakhir)</p>
                <div class="max-h-32 overflow-y-auto space-y-1">
                    @foreach($this->getClosedSessions() as $closedSession)
                        <button
                            wire:click="selectSession({{ $closedSession->id }})"
                            class="w-full text-left px-2 py-1 text-xs text-gray-500 hover:text-gray-700 :text-gray-300 rounded hover:bg-gray-100 :bg-gray-700 truncate"
                        >
                            #{{ $closedSession->id }} — {{ $closedSession->topic_summary ?: 'Tanpa topik' }}
                        </button>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Chat Area --}}
        <div class="col-span-8 xl:col-span-9 bg-white rounded-xl border border-gray-200 flex flex-col overflow-hidden">

            @if($activeSessionId && $this->getActiveSession())
                @php $activeSession = $this->getActiveSession(); @endphp

                {{-- Chat Header --}}
                <div class="p-4 border-b border-gray-200 bg-gray-50 ">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <h3 class="text-sm font-bold text-gray-900 ">
                                {{ $activeSession->visitor_name ?: 'Pengunjung #' . $activeSession->id }}
                            </h3>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-1 mt-1">
                                @if($activeSession->visitor_organization)
                                    <span class="text-xs text-gray-700 font-medium">
                                        {{ $activeSession->visitor_organization }}
                                    </span>
                                @endif
                                @if($activeSession->visitor_phone)
                                    <a href="tel:{{ $activeSession->visitor_phone }}" class="text-xs text-primary-600 hover:underline font-medium">
                                        {{ $activeSession->visitor_phone }}
                                    </a>
                                @endif
                                @if($activeSession->visitor_email)
                                    <span class="text-xs text-gray-500">{{ $activeSession->visitor_email }}</span>
                                @endif
                                <span class="text-xs text-gray-400">
                                    IP: {{ $activeSession->visitor_ip ?? '-' }}
                                </span>
                                <span class="text-xs text-gray-400">
                                    {{ $activeSession->created_at->format('d M Y, H:i') }}
                                </span>
                                <span class="inline-flex items-center gap-1 text-[10px] uppercase tracking-wide font-semibold {{ $activeSession->status === 'closed' ? 'text-gray-400' : ($activeSession->status === 'escalated' ? 'text-amber-600' : 'text-emerald-600') }}">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $activeSession->status === 'closed' ? 'bg-gray-400' : ($activeSession->status === 'escalated' ? 'bg-amber-500' : 'bg-emerald-500') }}"></span>
                                    {{ ucfirst($activeSession->status) }}
                                </span>
                            </div>
                        </div>
                        @if($activeSession->status !== 'closed')
                            <button
                                wire:click="closeSession"
                                wire:confirm="Yakin ingin menutup sesi ini?"
                                class="px-3 py-1.5 text-xs font-medium text-red-600 hover:text-white bg-red-50 hover:bg-red-600 border border-red-200 hover:border-red-600 rounded-lg transition-colors shrink-0 ml-3"
                            >
                                Tutup Sesi
                            </button>
                        @endif
                    </div>
                </div>

                {{-- Messages --}}
                <div
                    class="flex-1 overflow-y-auto p-6 space-y-4"
                    x-data
                    x-init="$nextTick(() => $el.scrollTop = $el.scrollHeight)"
                    x-effect="$wire.activeSessionId; $nextTick(() => $el.scrollTop = $el.scrollHeight)"
                >
                    @foreach($this->getMessages() as $msg)
                        <div class="flex {{ $msg->sender_type === 'visitor' ? 'justify-start' : 'justify-end' }}">
                            <div class="max-w-[70%]">
                                {{-- Sender label --}}
                                <div class="flex items-center gap-2 mb-1 {{ $msg->sender_type === 'visitor' ? '' : 'justify-end' }}">
                                    <span class="text-[10px] font-semibold uppercase tracking-wide
                                        {{ $msg->sender_type === 'visitor' ? 'text-blue-600' : ($msg->sender_type === 'ai' ? 'text-purple-600' : 'text-emerald-600') }}">
                                        {{ $msg->sender_type === 'visitor' ? 'Pengunjung' : ($msg->sender_type === 'ai' ? 'AI Bot' : ($msg->sender_name ?? 'Agent')) }}
                                    </span>
                                    <span class="text-[10px] text-gray-400">{{ $msg->created_at->format('H:i') }}</span>
                                </div>

                                {{-- Message bubble --}}
                                <div class="px-4 py-3 rounded-2xl text-sm leading-relaxed whitespace-pre-wrap
                                    {{ $msg->sender_type === 'visitor'
                                        ? 'bg-gray-100 text-gray-900 rounded-tl-sm'
                                        : ($msg->sender_type === 'ai'
                                            ? 'bg-purple-50 text-purple-900 border border-purple-200 rounded-tr-sm'
                                            : 'bg-primary-600 text-white rounded-tr-sm')
                                    }}">{{ $msg->content }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Reply Input --}}
                @if($activeSession->status !== 'closed')
                    <div class="p-4 border-t border-gray-200 bg-gray-50 ">
                        <form wire:submit.prevent="sendReply" class="flex gap-3">
                            <input
                                type="text"
                                wire:model="replyMessage"
                                placeholder="Ketik balasan..."
                                class="flex-1 px-4 py-2.5 text-sm bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-colors"
                                autofocus
                            />
                            <button
                                type="submit"
                                class="px-5 py-2.5 text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 rounded-xl transition-colors disabled:opacity-50"
                                @disabled(!trim($replyMessage))
                            >
                                Kirim
                            </button>
                        </form>
                    </div>
                @endif

            @else
                {{-- Empty State --}}
                <div class="flex-1 flex items-center justify-center">
                    <div class="text-center max-w-md">
                        <x-filament::icon icon="heroicon-o-chat-bubble-bottom-center-text" class="w-16 h-16 text-gray-200 mx-auto mb-4" />
                        <h3 class="text-lg font-semibold text-gray-600 ">Pilih Percakapan</h3>
                        <p class="text-sm text-gray-400 mt-2">
                            Pilih percakapan dari panel kiri untuk mulai membalas pengunjung.
                            Percakapan baru akan muncul secara otomatis ketika pengunjung meminta bantuan CS.
                        </p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-filament-panels::page>
