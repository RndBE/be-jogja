<script lang="ts">
	import { MessageCircle } from '@lucide/svelte';

	let { contextMessage = 'Halo Beacon, saya tertarik dengan solusi telemetri Anda.' } : { contextMessage?: string } = $props();

	const waUrl = `https://wa.me/628112850986?text=${encodeURIComponent(contextMessage)}`;
</script>

<a
	href={waUrl}
	target="_blank"
	rel="noopener"
	class="fixed bottom-6 right-6 z-50 w-14 h-14 rounded-full flex items-center justify-center text-white shadow-lg transition-all duration-300 hover:scale-110 active:scale-95 group"
	style="background: #C8102E; box-shadow: 0 4px 20px rgba(200,16,46,0.4);"
	aria-label="Chat WhatsApp"
>
	<MessageCircle size={24} class="group-hover:animate-bounce" />

	<!-- Pulse ring -->
	<span class="absolute inset-0 rounded-full animate-ping opacity-20" style="background: #C8102E;"></span>
</a>

<!-- Mobile Sticky CTA Strip -->
<div class="fixed bottom-0 left-0 right-0 z-40 lg:hidden" style="backdrop-filter: blur(12px); background: rgba(255,255,255,0.95); border-top: 1px solid #E5E5E5;">
	<div class="flex h-[60px]">
		<a
			href={waUrl}
			target="_blank"
			rel="noopener"
			class="flex-1 flex items-center justify-center gap-2 text-sm font-semibold text-white"
			style="background: #C8102E;"
		>
			<MessageCircle size={16} />
			WhatsApp
		</a>
		<a
			href="tel:02744986899"
			class="flex-1 flex items-center justify-center gap-2 text-sm font-semibold text-[#1A1A1A] border-l border-[#E5E5E5]"
		>
			<svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
			Telepon
		</a>
	</div>
</div>
