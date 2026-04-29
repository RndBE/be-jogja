<script lang="ts">
	import { Bot, X, Send, Command, Sparkles } from '@lucide/svelte';

	let isOpen = $state(false);
	let isHovered = $state(false);
	let message = $state('');

	function toggleChat() {
		isOpen = !isOpen;
	}

	const predefinedQuestions = [
		"Berapa harga sensor AWLR?",
		"Bagaimana cara kalibrasi ADR?",
		"Integrasi STESY API"
	];
</script>

<!-- Floating Action Button (FAB) -->
<button
	class="fixed bottom-[84px] lg:bottom-6 right-6 z-[999] w-14 h-14 rounded-2xl flex items-center justify-center transition-all duration-500 hover:scale-105 active:scale-95 group shadow-2xl"
	style="
		background: {isOpen ? '#18181B' : 'linear-gradient(135deg, #C8102E 0%, #910B20 100%)'};
		border: 1px solid {isOpen ? '#27272A' : '#E11D48'};
		box-shadow: {isOpen ? 'none' : '0 10px 30px -10px rgba(200,16,46,0.6), inset 0 2px 4px rgba(255,255,255,0.2)'};
	"
	onclick={toggleChat}
	onmouseenter={() => isHovered = true}
	onmouseleave={() => isHovered = false}
	aria-label="Toggle AI Assistant"
>
	<!-- Perpetual Pulse when closed -->
	{#if !isOpen}
		<div class="absolute inset-0 rounded-2xl bg-[#C8102E] opacity-50 animate-ping" style="animation-duration: 3s;"></div>
	{/if}

	<div class="absolute inset-0 flex items-center justify-center text-white transition-transform duration-300 {isOpen ? 'rotate-90 scale-0 opacity-0' : 'rotate-0 scale-100 opacity-100'}">
		<Bot size={24} />
	</div>
	<div class="absolute inset-0 flex items-center justify-center text-white transition-transform duration-300 {isOpen ? 'rotate-0 scale-100 opacity-100' : '-rotate-90 scale-0 opacity-0'}">
		<X size={24} />
	</div>
</button>

<!-- Chatbot Window (Liquid Glass & Cockpit Mode) -->
<div
	class="fixed bottom-[150px] lg:bottom-24 right-6 z-[998] w-[380px] max-w-[calc(100vw-3rem)] rounded-[2rem] overflow-hidden origin-bottom-right transition-all duration-500 ease-[cubic-bezier(0.16,1,0.3,1)] bg-zinc-950"
	style="
		opacity: {isOpen ? 1 : 0};
		transform: scale({isOpen ? 1 : 0.95}) translateY({isOpen ? 0 : 20}px);
		pointer-events: {isOpen ? 'auto' : 'none'};
		box-shadow: 0 40px 80px -20px rgba(0,0,0,0.5), inset 0 1px 1px rgba(255,255,255,0.1);
		border: 1px solid rgba(255,255,255,0.08);
	"
>
	<!-- Holographic Glow Background -->
	<div class="absolute top-0 right-0 w-64 h-64 bg-[#C8102E]/10 rounded-full blur-[80px] pointer-events-none"></div>

	<!-- Header -->
	<div class="relative z-10 p-5 border-b border-white/5 flex items-start justify-between bg-zinc-950/50 backdrop-blur-md">
		<div class="flex items-center gap-3">
			<div class="relative w-10 h-10 rounded-xl flex items-center justify-center bg-zinc-900 border border-white/10 shadow-inner">
				<Sparkles size={18} class="text-[#C8102E]" />
				<!-- Active Status Dot -->
				<div class="absolute -top-1 -right-1 w-3 h-3 rounded-full bg-zinc-950 flex items-center justify-center">
					<div class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></div>
				</div>
			</div>
			<div>
				<h3 class="text-sm font-bold text-white tracking-tight">Beacon AI Assistant</h3>
				<span class="text-[10px] font-mono font-semibold uppercase tracking-widest text-zinc-500">System Ready</span>
			</div>
		</div>
	</div>

	<!-- Chat Area -->
	<div class="relative z-10 p-5 h-[320px] overflow-y-auto flex flex-col gap-4 bg-zinc-950/80">
		<!-- Bot Message -->
		<div class="flex flex-col gap-1 items-start max-w-[85%]">
			<div class="p-3.5 rounded-2xl rounded-tl-sm bg-zinc-900 border border-white/5 text-sm text-zinc-300 leading-relaxed shadow-sm">
				Halo! Saya engineer virtual Beacon. Ada pertanyaan mengenai spesifikasi, instalasi, atau kalibrasi perangkat kami?
			</div>
			<span class="text-[10px] font-mono text-zinc-600 pl-1">10:42 AM</span>
		</div>

		<!-- Smart Suggestions (The Intelligent List) -->
		<div class="flex flex-col gap-2 mt-2">
			<span class="text-[10px] font-mono font-bold text-zinc-500 uppercase tracking-widest pl-1 mb-1">Saran Topik</span>
			{#each predefinedQuestions as q}
				<button class="text-left px-4 py-2.5 rounded-xl bg-white/5 hover:bg-white/10 border border-white/5 hover:border-[#C8102E]/30 text-xs font-medium text-zinc-400 hover:text-white transition-all duration-300 hover:translate-x-1 group">
					{q}
					<span class="float-right opacity-0 group-hover:opacity-100 text-[#C8102E] transition-opacity">→</span>
				</button>
			{/each}
		</div>
	</div>

	<!-- Input Area (The Command Input) -->
	<div class="relative z-10 p-4 border-t border-white/5 bg-zinc-950">
		<form onsubmit={(e) => { e.preventDefault(); message = ''; }} class="relative group">
			<!-- Glowing Border on Focus-Within -->
			<div class="absolute -inset-[1px] rounded-xl bg-gradient-to-r from-[#C8102E]/50 to-[#910B20]/50 opacity-0 group-focus-within:opacity-100 transition-opacity duration-500 blur-[2px]"></div>
			
			<div class="relative flex items-center bg-zinc-900 border border-white/10 rounded-xl overflow-hidden shadow-inner">
				<div class="pl-3 pr-2 py-3">
					<Command size={14} class="text-zinc-500" />
				</div>
				<input
					type="text"
					bind:value={message}
					placeholder="Ketik pertanyaan..."
					class="w-full bg-transparent text-sm text-white placeholder:text-zinc-600 focus:outline-none py-3"
				/>
				<button
					type="submit"
					disabled={!message.trim()}
					class="p-2 mr-1 rounded-lg transition-colors {message.trim() ? 'bg-[#C8102E] text-white hover:bg-[#910B20]' : 'bg-transparent text-zinc-600'}"
				>
					<Send size={14} />
				</button>
			</div>
		</form>
		<div class="text-center mt-3">
			<span class="text-[9px] font-mono uppercase tracking-[0.2em] text-zinc-600">Powered by LLM Ops</span>
		</div>
	</div>
</div>
