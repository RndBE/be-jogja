<script lang="ts">
	import { onMount } from 'svelte';
	import { Quote, ArrowRight } from '@lucide/svelte';

	let visible = $state(false);

	onMount(() => {
		const observer = new IntersectionObserver(
			(entries) => { if (entries[0].isIntersecting) visible = true; },
			{ threshold: 0.15 }
		);
		const el = document.getElementById('suara-mitra');
		if (el) observer.observe(el);
		return () => observer.disconnect();
	});

	const testimonials = [
		{
			name: 'Prahasdipta Bayu Adhi Koesoemo',
			title: 'Kepala Satuan Unit Pengelola Bendungan Ciawi-Sukamahi-Gintung',
			quote: 'Perangkat ADR dari Beacon memberikan presisi data deformasi yang sangat kami butuhkan untuk monitoring keamanan bendungan secara real-time. Respons tim teknis mereka terhadap kebutuhan di lapangan sangat cepat dan profesional.',
			initials: 'PB'
		},
		{
			name: 'Ali Sukali, S.Sos, S.T, M.Si',
			title: 'PPK Bendungan II',
			quote: 'Mitra yang berkomitmen terhadap kualitas buatan anak negeri. Beacon membuktikan bahwa produk lokal mampu bersaing dengan impor, bahkan dalam hal after-sales support jauh lebih unggul karena tim teknisnya ada di Indonesia.',
			initials: 'AS'
		},
		{
			name: 'Seto Ariwibowo, ST. MT.',
			title: 'PPKom Operasi & Pemeliharaan Pos Hidrologi',
			quote: 'Akurasi dan konektivitas perangkat Beacon sudah teruji di berbagai kondisi lapangan yang ekstrem. Data terkirim real-time 24 jam, dan ketika ada kendala, tim support selalu bisa diandalkan untuk penyelesaian cepat.',
			initials: 'SA'
		}
	];
</script>

<section id="suara-mitra" class="relative py-20 lg:py-28 overflow-hidden" style="background: linear-gradient(180deg, #FFF5F6 0%, #FBE9EC 50%, #F8D7DC 100%);">
	<!-- Decorative ornaments -->
	<div class="absolute -top-20 -right-20 w-72 h-72 rounded-full pointer-events-none opacity-[0.08]" style="border: 2px solid #C8102E;"></div>
	<div class="absolute bottom-10 left-[5%] w-12 h-12 rotate-45 rounded-lg pointer-events-none opacity-[0.05]" style="background: #C8102E;"></div>
	<svg class="absolute top-[20%] right-[3%] w-10 h-10 opacity-[0.06] pointer-events-none" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="1.5">
		<polygon points="12,2 22,22 2,22"/>
	</svg>

	<!-- Large decorative quote watermark -->
	<div class="absolute top-8 left-8 opacity-[0.04] pointer-events-none">
		<Quote size={180} style="color: #C8102E;" />
	</div>

	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Heading -->
		<div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
			<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">Testimoni</span>
			<h2 class="font-heading text-3xl sm:text-4xl lg:text-[44px] font-bold leading-tight" style="letter-spacing: -0.02em; color: #1A1A1A;">
				"Mitra yang Berkomitmen Terhadap Kualitas <span style="color: #C8102E;">Buatan Anak Negeri</span>."
			</h2>
		</div>

		<!-- 3 Testimonials Grid -->
		<div class="grid md:grid-cols-3 gap-6">
			{#each testimonials as test, i}
				<div
					class="relative rounded-2xl p-8 bg-white transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
					style="
						border: 1px solid #E5E5E5;
						box-shadow: 0 2px 8px rgba(0,0,0,0.04);
						opacity: {visible ? 1 : 0};
						transform: translateY({visible ? 0 : 30}px);
						transition: opacity 0.6s ease-out {i * 0.12}s, transform 0.6s ease-out {i * 0.12}s, box-shadow 0.3s;
					"
				>
					<!-- Red accent line at top -->
					<div class="absolute top-0 left-6 right-6 h-[3px] rounded-full" style="background: linear-gradient(90deg, #C8102E, rgba(200,16,46,0.2));"></div>

					<Quote size={20} class="mb-4" style="color: #C8102E; opacity: 0.3;" />

					<p class="text-sm leading-relaxed mb-6" style="color: #3A3A3A; font-style: italic;">
						"{test.quote}"
					</p>

					<div class="flex items-center gap-3">
						<div class="w-10 h-10 rounded-full flex items-center justify-center text-sm font-bold text-white" style="background: linear-gradient(135deg, #C8102E, #E8384F);">
							{test.initials}
						</div>
						<div>
							<span class="block text-sm font-semibold" style="color: #1A1A1A;">{test.name}</span>
							<span class="block text-xs leading-tight" style="color: #7A7A7A;">{test.title}</span>
						</div>
					</div>
				</div>
			{/each}
		</div>

		<div class="text-center mt-10">
			<a href="/tentang-kami#testimoni" class="inline-flex items-center gap-2 text-sm font-semibold transition-colors hover:gap-3" style="color: #C8102E;">
				Lihat semua testimoni
				<ArrowRight size={14} />
			</a>
		</div>
	</div>

	<!-- Wave divider -->
	<div class="absolute bottom-0 left-0 right-0 pointer-events-none" style="transform: translateY(1px);">
		<svg viewBox="0 0 1440 50" fill="none" preserveAspectRatio="none" class="w-full h-10">
			<path d="M0,50 L0,20 Q240,40 480,20 T960,20 T1440,20 L1440,50 Z" fill="white"/>
		</svg>
	</div>
</section>
