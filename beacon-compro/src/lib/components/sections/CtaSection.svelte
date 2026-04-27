<script lang="ts">
	import { onMount } from 'svelte';
	import { MessageCircle, Mail, MapPin, Clock, ArrowRight } from '@lucide/svelte';

	let visible = $state(false);

	onMount(() => {
		const observer = new IntersectionObserver(
			(entries) => { if (entries[0].isIntersecting) visible = true; },
			{ threshold: 0.2 }
		);
		const el = document.getElementById('cta-final');
		if (el) observer.observe(el);
		return () => observer.disconnect();
	});
</script>

<!-- SKILL: Premium CTA with asymmetric layout, dark accent, and breathing animation -->
<section id="cta-final" class="relative py-24 lg:py-32 overflow-hidden noise-overlay" style="background: linear-gradient(145deg, #1A0508 0%, #2A0A10 50%, #1A0508 100%);">
	<!-- Animated gradient orbs -->
	<div class="absolute top-0 left-[20%] w-[500px] h-[500px] rounded-full pointer-events-none opacity-20 animate-breathe" style="background: radial-gradient(circle, rgba(200,16,46,0.3), transparent 70%);"></div>
	<div class="absolute bottom-0 right-[15%] w-[400px] h-[400px] rounded-full pointer-events-none opacity-15 animate-float" style="background: radial-gradient(circle, rgba(200,16,46,0.25), transparent 70%);"></div>

	<!-- Decorative ornaments -->
	<div class="absolute -top-16 -left-16 w-64 h-64 rounded-full pointer-events-none opacity-[0.08]" style="border: 2px solid #C8102E;"></div>
	<div class="absolute -bottom-20 -right-20 w-80 h-80 rounded-full pointer-events-none opacity-[0.05]" style="border: 2px solid #C8102E;"></div>

	<!-- Dot pattern -->
	<div class="absolute inset-0 opacity-[0.04] pointer-events-none" style="
		background-image: radial-gradient(circle, rgba(200,16,46,0.6) 1px, transparent 1px);
		background-size: 24px 24px;
	"></div>

	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Asymmetric grid: copy left, actions right -->
		<div class="grid lg:grid-cols-12 gap-10 items-center">
			<!-- Left: Copy — 7 cols -->
			<div
				class="lg:col-span-7"
				style="
					opacity: {visible ? 1 : 0};
					transform: translateX({visible ? 0 : -30}px);
					transition: opacity 0.8s ease-out, transform 0.8s ease-out;
				"
			>
				<!-- Red accent badge -->
				<div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest mb-8" style="background: rgba(200,16,46,0.15); color: #E8384F; border: 1px solid rgba(200,16,46,0.2);">
					<span class="w-2 h-2 rounded-full animate-breathe" style="background: #C8102E;"></span>
					Mulai Sekarang
				</div>

				<h2 class="font-heading text-3xl sm:text-4xl lg:text-[52px] font-bold leading-[1.08] mb-6" style="letter-spacing: -0.03em; color: #FAFAFA;">
					Punya Bendungan, Sungai, atau Stasiun Cuaca yang Perlu Dipantau?
				</h2>
				<p class="text-base sm:text-lg max-w-xl mb-10 leading-relaxed" style="color: rgba(250,250,250,0.55);">
					Bicara langsung dengan engineer kami. Konsultasi pertama selalu gratis — kami akan bantu memetakan kebutuhan, menyarankan konfigurasi, dan memberikan estimasi.
				</p>

				<!-- Office info -->
				<div class="flex flex-col sm:flex-row gap-4 text-xs" style="color: rgba(250,250,250,0.4);">
					<span class="flex items-center gap-2">
						<MapPin size={13} style="color: #C8102E;" />
						Kadirojo I, Purwomartani, Kalasan, Sleman, DIY
					</span>
					<span class="hidden sm:inline" style="color: rgba(200,16,46,0.3);">|</span>
					<span class="flex items-center gap-2">
						<Clock size={13} style="color: #C8102E;" />
						Senin–Jumat, 08:00–17:00 WIB
					</span>
				</div>
			</div>

			<!-- Right: Action cards — 5 cols -->
			<div
				class="lg:col-span-5 space-y-4"
				style="
					opacity: {visible ? 1 : 0};
					transform: translateX({visible ? 0 : 30}px);
					transition: opacity 0.8s ease-out 0.15s, transform 0.8s ease-out 0.15s;
				"
			>
				<!-- WhatsApp CTA — primary -->
				<a
					href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20tertarik%20dengan%20solusi%20telemetri%20Anda."
					target="_blank" rel="noopener"
					class="group flex items-center gap-5 p-6 rounded-[20px] transition-all duration-300 hover:scale-[1.02] active:scale-[0.98]"
					style="background: linear-gradient(135deg, #C8102E 0%, #A50D25 100%); box-shadow: 0 8px 32px rgba(200,16,46,0.3), inset 0 1px 0 rgba(255,255,255,0.1);"
				>
					<div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0" style="background: rgba(255,255,255,0.15);">
						<MessageCircle size={22} class="text-white" />
					</div>
					<div class="flex-1">
						<span class="block text-base font-semibold text-white">Chat WhatsApp</span>
						<span class="block text-xs mt-0.5" style="color: rgba(255,255,255,0.6);">Respons dalam waktu kurang dari 1 jam</span>
					</div>
					<ArrowRight size={18} class="text-white/60 group-hover:translate-x-1 transition-transform" />
				</a>

				<!-- Email CTA — secondary -->
				<a
					href="mailto:info@bejogja.com"
					class="group flex items-center gap-5 p-6 rounded-[20px] transition-all duration-300 hover:scale-[1.02] active:scale-[0.98]"
					style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); backdrop-filter: blur(8px);"
				>
					<div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0" style="background: rgba(200,16,46,0.1);">
						<Mail size={22} style="color: #E8384F;" />
					</div>
					<div class="flex-1">
						<span class="block text-base font-semibold" style="color: #FAFAFA;">Kirim Email</span>
						<span class="block text-xs mt-0.5" style="color: rgba(250,250,250,0.4);">info@bejogja.com</span>
					</div>
					<ArrowRight size={18} style="color: rgba(250,250,250,0.3);" class="group-hover:translate-x-1 transition-transform" />
				</a>
			</div>
		</div>
	</div>
</section>
