<script lang="ts">
	import { onMount } from 'svelte';
	import { Quote, ArrowRight, ChevronLeft, ChevronRight } from '@lucide/svelte';

	let visible = $state(false);
	let activeIndex = $state(0);

	onMount(() => {
		const observer = new IntersectionObserver(
			(entries) => { if (entries[0].isIntersecting) visible = true; },
			{ threshold: 0.15 }
		);
		const el = document.getElementById('suara-mitra');
		if (el) observer.observe(el);

		// Auto-rotate
		const interval = setInterval(() => {
			activeIndex = (activeIndex + 1) % testimonials.length;
		}, 6000);

		return () => { observer.disconnect(); clearInterval(interval); };
	});

	const testimonials = [
		{
			name: 'Prahasdipta Bayu Adhi Koesoemo',
			title: 'Kepala Satuan Unit Pengelola Bendungan Ciawi-Sukamahi-Gintung',
			quote: 'Perangkat ADR dari Beacon memberikan presisi data deformasi yang sangat kami butuhkan untuk monitoring keamanan bendungan secara real-time. Respons tim teknis mereka terhadap kebutuhan di lapangan sangat cepat dan profesional.',
			initials: 'PB',
			org: 'BBWS Ciliwung-Cisadane'
		},
		{
			name: 'Ali Sukali, S.Sos, S.T, M.Si',
			title: 'PPK Bendungan II',
			quote: 'Mitra yang berkomitmen terhadap kualitas buatan anak negeri. Beacon membuktikan bahwa produk lokal mampu bersaing dengan impor, bahkan dalam hal after-sales support jauh lebih unggul karena tim teknisnya ada di Indonesia.',
			initials: 'AS',
			org: 'Kementerian PUPR'
		},
		{
			name: 'Seto Ariwibowo, ST. MT.',
			title: 'PPKom Operasi & Pemeliharaan Pos Hidrologi',
			quote: 'Akurasi dan konektivitas perangkat Beacon sudah teruji di berbagai kondisi lapangan yang ekstrem. Data terkirim real-time 24 jam, dan ketika ada kendala, tim support selalu bisa diandalkan untuk penyelesaian cepat.',
			initials: 'SA',
			org: 'BBWS Serayu Opak'
		}
	];

	function nextSlide() { activeIndex = (activeIndex + 1) % testimonials.length; }
	function prevSlide() { activeIndex = (activeIndex - 1 + testimonials.length) % testimonials.length; }
</script>

<!-- SKILL: Replace 3-equal-column with single-spotlight carousel + side dots -->
<section id="suara-mitra" class="relative py-20 lg:py-28 overflow-hidden" style="background: linear-gradient(180deg, #FFF5F6 0%, #FBE9EC 50%, #F8D7DC 100%);">
	<!-- Decorative ornaments -->
	<div class="absolute -top-20 -right-20 w-72 h-72 rounded-full pointer-events-none opacity-[0.06]" style="border: 2px solid #C8102E;"></div>
	<div class="absolute bottom-10 left-[5%] w-12 h-12 rotate-45 rounded-lg pointer-events-none opacity-[0.04]" style="background: #C8102E;"></div>

	<!-- Large decorative quote watermark -->
	<div class="absolute top-8 left-8 opacity-[0.03] pointer-events-none">
		<Quote size={200} style="color: #C8102E;" />
	</div>

	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Heading — left-aligned with nav controls on right -->
		<div class="flex items-end justify-between mb-16">
			<div class="max-w-2xl space-y-4">
				<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">Testimoni</span>
				<h2 class="font-heading text-3xl sm:text-4xl lg:text-[44px] font-bold leading-[1.1]" style="letter-spacing: -0.025em; color: #1A1A1A;">
					"Mitra yang Berkomitmen Terhadap Kualitas <span style="color: #C8102E;">Buatan Anak Negeri</span>."
				</h2>
			</div>
			<!-- Navigation arrows — desktop only -->
			<div class="hidden md:flex items-center gap-2">
				<button
					onclick={prevSlide}
					class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-200 hover:bg-[#C8102E] hover:text-white btn-tactile"
					style="border: 1.5px solid #E5E5E5; color: #5C5C5C; background: white;"
				>
					<ChevronLeft size={18} />
				</button>
				<button
					onclick={nextSlide}
					class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-200 hover:bg-[#C8102E] hover:text-white btn-tactile"
					style="border: 1.5px solid #E5E5E5; color: #5C5C5C; background: white;"
				>
					<ChevronRight size={18} />
				</button>
			</div>
		</div>

		<!-- Single spotlight testimonial — SKILL: Asymmetric grid layout -->
		<div class="grid lg:grid-cols-12 gap-8 items-start">
			<!-- Left: Active testimonial card — 8 cols -->
			<div class="lg:col-span-8 relative">
				{#each testimonials as test, i}
					<div
						class="rounded-[24px] p-8 lg:p-12 bg-white transition-all duration-500"
						style="
							border: 1px solid #E5E5E5;
							box-shadow: 0 8px 40px rgba(0,0,0,0.06), inset 0 1px 0 rgba(255,255,255,0.5);
							opacity: {activeIndex === i ? 1 : 0};
							transform: translateX({activeIndex === i ? 0 : 20}px);
							position: {i === 0 ? 'relative' : 'absolute'};
							top: {i === 0 ? 'auto' : '0'};
							left: {i === 0 ? 'auto' : '0'};
							right: {i === 0 ? 'auto' : '0'};
							pointer-events: {activeIndex === i ? 'auto' : 'none'};
							transition: opacity 0.5s cubic-bezier(0.16,1,0.3,1), transform 0.5s cubic-bezier(0.16,1,0.3,1);
						"
					>
						<!-- Red accent bar at top -->
						<div class="absolute top-0 left-8 right-8 h-[3px] rounded-full" style="background: linear-gradient(90deg, #C8102E, rgba(200,16,46,0.15));"></div>

						<Quote size={28} class="mb-6" style="color: #C8102E; opacity: 0.25;" />

						<p class="text-base sm:text-lg leading-relaxed mb-8" style="color: #3A3A3A; font-style: italic; max-width: 60ch;">
							"{test.quote}"
						</p>

						<div class="flex items-center gap-4">
							<div class="w-12 h-12 rounded-full flex items-center justify-center text-sm font-bold text-white" style="background: linear-gradient(135deg, #C8102E, #E8384F); box-shadow: 0 4px 12px rgba(200,16,46,0.2);">
								{test.initials}
							</div>
							<div>
								<span class="block text-sm font-semibold" style="color: #1A1A1A;">{test.name}</span>
								<span class="block text-xs leading-tight" style="color: #7A7A7A;">{test.title}</span>
								<span class="block text-[10px] uppercase tracking-wider font-medium mt-1" style="color: #C8102E;">{test.org}</span>
							</div>
						</div>
					</div>
				{/each}
			</div>

			<!-- Right: Dot indicators + mini cards — 4 cols -->
			<div class="lg:col-span-4 space-y-3">
				{#each testimonials as test, i}
					<button
						class="w-full text-left p-4 rounded-[16px] transition-all duration-300 cursor-pointer"
						style="
							background: {activeIndex === i ? 'white' : 'transparent'};
							border: 1px solid {activeIndex === i ? '#C8102E' : 'rgba(200,16,46,0.1)'};
							box-shadow: {activeIndex === i ? '0 4px 16px rgba(200,16,46,0.08)' : 'none'};
						"
						onclick={() => activeIndex = i}
					>
						<div class="flex items-center gap-3">
							<div
								class="w-9 h-9 rounded-full flex items-center justify-center text-xs font-bold shrink-0 transition-all duration-300"
								style="
									background: {activeIndex === i ? 'linear-gradient(135deg, #C8102E, #E8384F)' : '#FBE9EC'};
									color: {activeIndex === i ? 'white' : '#C8102E'};
								"
							>
								{test.initials}
							</div>
							<div class="min-w-0">
								<span class="block text-sm font-semibold text-[#1A1A1A] truncate">{test.name}</span>
								<span class="block text-[11px] text-[#9A9A9A] truncate">{test.org}</span>
							</div>
						</div>
					</button>
				{/each}

				<a href="/tentang-kami#testimoni" class="inline-flex items-center gap-2 text-sm font-semibold mt-4 transition-colors hover:gap-3 pl-4" style="color: #C8102E;">
					Lihat semua testimoni
					<ArrowRight size={14} />
				</a>
			</div>
		</div>

		<!-- Mobile dots -->
		<div class="flex justify-center gap-2 mt-6 lg:hidden">
			{#each testimonials as _, i}
				<button
					class="w-2.5 h-2.5 rounded-full transition-all duration-300"
					style="background: {activeIndex === i ? '#C8102E' : '#E5E5E5'}; transform: scale({activeIndex === i ? 1.2 : 1});"
					onclick={() => activeIndex = i}
				></button>
			{/each}
		</div>
	</div>

	<!-- Wave divider -->
	<div class="absolute bottom-0 left-0 right-0 pointer-events-none" style="transform: translateY(1px);">
		<svg viewBox="0 0 1440 50" fill="none" preserveAspectRatio="none" class="w-full h-10">
			<path d="M0,50 L0,20 Q240,40 480,20 T960,20 T1440,20 L1440,50 Z" fill="white"/>
		</svg>
	</div>
</section>
