<script lang="ts">
	import { MessageCircle, Mail, MapPin, Clock } from '@lucide/svelte';
</script>

<section class="relative py-20 lg:py-28 overflow-hidden" style="background: linear-gradient(135deg, #FBE9EC 0%, #F8D7DC 40%, #FBE9EC 100%);">
	<!-- Decorative ornaments -->
	<div class="absolute -top-16 -left-16 w-64 h-64 rounded-full pointer-events-none opacity-[0.1]" style="border: 2px solid #C8102E;"></div>
	<div class="absolute -bottom-20 -right-20 w-80 h-80 rounded-full pointer-events-none opacity-[0.06]" style="border: 2px solid #C8102E;"></div>
	<div class="absolute top-[30%] right-[5%] w-10 h-10 rotate-45 rounded-sm pointer-events-none opacity-[0.05]" style="background: #C8102E;"></div>
	<svg class="absolute bottom-[20%] left-[3%] w-10 h-10 opacity-[0.06] animate-float pointer-events-none" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="1.5">
		<circle cx="12" cy="12" r="10"/>
	</svg>

	<!-- Dot pattern -->
	<div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="
		background-image: radial-gradient(circle, #C8102E 1px, transparent 1px);
		background-size: 20px 20px;
	"></div>

	<div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
		<!-- Red accent badge -->
		<div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest mb-8" style="background: #C8102E; color: white;">
			Mulai Sekarang
		</div>

		<h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight mb-6" style="letter-spacing: -0.02em; color: #1A1A1A;">
			Punya Bendungan, Sungai, atau Stasiun Cuaca yang Perlu Dipantau?
		</h2>
		<p class="text-base sm:text-lg max-w-2xl mx-auto mb-10 leading-relaxed" style="color: #5C5C5C;">
			Bicara langsung dengan engineer kami. Konsultasi pertama selalu gratis — kami akan bantu memetakan kebutuhan, menyarankan konfigurasi, dan memberikan estimasi.
		</p>

		<div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-12">
			<a
				href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20tertarik%20dengan%20solusi%20telemetri%20Anda."
				target="_blank" rel="noopener"
				class="inline-flex items-center gap-2 px-8 py-4 rounded-[12px] text-sm font-semibold text-white transition-all duration-200 hover:scale-[1.02] active:scale-[0.98]"
				style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 20px rgba(200,16,46,0.3);"
			>
				<MessageCircle size={18} />
				Chat WhatsApp
			</a>
			<a
				href="mailto:info@bejogja.com"
				class="inline-flex items-center gap-2 px-8 py-4 rounded-[12px] text-sm font-semibold transition-all duration-200 hover:bg-white/60"
				style="border: 1.5px solid #C8102E; color: #C8102E; background: white;"
			>
				<Mail size={18} />
				Kirim Email
			</a>
		</div>

		<!-- Office info -->
		<div class="flex flex-col sm:flex-row items-center justify-center gap-6 text-xs" style="color: #7A7A7A;">
			<span class="flex items-center gap-1.5">
				<MapPin size={12} style="color: #C8102E;" />
				Kadirojo I, Purwomartani, Kalasan, Sleman, DIY
			</span>
			<span class="hidden sm:inline" style="color: #E5E5E5;">·</span>
			<span class="flex items-center gap-1.5">
				<Clock size={12} style="color: #C8102E;" />
				Senin–Jumat, 08:00–17:00 WIB
			</span>
		</div>
	</div>
</section>
