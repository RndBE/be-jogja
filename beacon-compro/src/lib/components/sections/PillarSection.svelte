<script lang="ts">
	import { onMount } from 'svelte';
	import { ArrowRight, Droplets, Cloud, AlertTriangle, Gauge, Monitor } from '@lucide/svelte';

	let visible = $state(false);
	let activePillar = $state(0);

	onMount(() => {
		const observer = new IntersectionObserver(
			(entries) => { if (entries[0].isIntersecting) visible = true; },
			{ threshold: 0.15 }
		);
		const el = document.getElementById('pilar-solusi');
		if (el) observer.observe(el);
		return () => observer.disconnect();
	});

	const pillars = [
		{
			icon: Droplets,
			name: 'Water Security',
			hook: 'Amankan setiap meter kubik air. Dari ketinggian, debit, kualitas, hingga deformasi struktur penampungnya.',
			products: ['AWLR', 'AWGC', 'AFMR', 'ADR', 'AWQR', 'AVWR'],
			cta: 'Eksplor Water Security',
			href: '/solusi/water-security',
			accent: '#0EA5E9'
		},
		{
			icon: Cloud,
			name: 'Weather Forecast',
			hook: 'Cuaca tidak bisa dilawan, tapi bisa diprediksi. Stasiun cuaca otomatis untuk pertanian, bendungan, dan aviasi.',
			products: ['AWR', 'ARR'],
			cta: 'Eksplor Weather Forecast',
			href: '/solusi/weather-forecast',
			accent: '#F5A623'
		},
		{
			icon: AlertTriangle,
			name: 'Early Warning',
			hook: 'Detik pertama menentukan nyawa. Sistem peringatan dini multi-level untuk wilayah rawan.',
			products: ['EWS'],
			cta: 'Eksplor Early Warning',
			href: '/solusi/early-warning',
			accent: '#E53935'
		},
		{
			icon: Gauge,
			name: 'Pressure Measurement',
			hook: 'Akurasi tinggi untuk medan ekstrem — geothermal, well testing, infrastruktur kritis.',
			products: ['APLR'],
			cta: 'Eksplor Pressure Measurement',
			href: '/solusi/pressure-measurement',
			accent: '#7C3AED'
		},
		{
			icon: Monitor,
			name: 'STESY Application',
			hook: 'Platform tunggal yang mengikat semua perangkat menjadi satu dashboard real-time.',
			products: ['Smart Telemetry System'],
			cta: 'Pelajari STESY',
			href: '/solusi/stesy',
			accent: '#C8102E'
		}
	];
</script>

<!-- SKILL: Accordion Image Slider style — narrow strips expand on hover/click -->
<section id="pilar-solusi" class="relative py-20 lg:py-28 bg-white overflow-hidden">
	<!-- Decorative ornaments — SKILL: Asymmetric for DESIGN_VARIANCE 8 -->
	<div class="absolute top-10 left-[3%] w-20 h-20 rounded-full pointer-events-none opacity-[0.03]" style="border: 2px solid #C8102E;"></div>
	<div class="absolute -top-12 -right-12 w-48 h-48 rounded-full pointer-events-none opacity-[0.04]" style="border: 2px solid #C8102E;"></div>
	<div class="absolute -top-6 -right-6 w-32 h-32 rounded-full pointer-events-none opacity-[0.03]" style="border: 1.5px solid #C8102E;"></div>

	<!-- Floating diamond -->
	<div class="absolute top-[20%] right-[6%] w-8 h-8 rotate-45 rounded-md pointer-events-none opacity-[0.04] animate-float" style="background: #C8102E;"></div>
	<div class="absolute bottom-[15%] left-[5%] w-6 h-6 rotate-45 pointer-events-none opacity-[0.03]" style="border: 1.5px solid #C8102E;"></div>

	<!-- Dot circle -->
	<svg class="absolute top-[60%] left-[2%] w-6 h-6 opacity-[0.03] pointer-events-none" viewBox="0 0 24 24" fill="#C8102E">
		<circle cx="12" cy="12" r="4"/>
	</svg>

	<!-- Plus sign -->
	<svg class="absolute bottom-[30%] right-[4%] w-7 h-7 opacity-[0.04] pointer-events-none" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="2">
		<line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
	</svg>

	<!-- Dot grid cluster -->
	<svg class="absolute top-[35%] left-[1.5%] w-12 h-12 opacity-[0.04] pointer-events-none" viewBox="0 0 40 40" fill="#C8102E">
		<circle cx="5" cy="5" r="2"/><circle cx="15" cy="5" r="2"/><circle cx="25" cy="5" r="2"/>
		<circle cx="5" cy="15" r="2"/><circle cx="15" cy="15" r="2"/><circle cx="25" cy="15" r="2"/>
		<circle cx="5" cy="25" r="2"/><circle cx="15" cy="25" r="2"/><circle cx="25" cy="25" r="2"/>
	</svg>

	<!-- Triangle -->
	<svg class="absolute bottom-[20%] right-[10%] w-8 h-8 opacity-[0.03] pointer-events-none" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="1.5">
		<polygon points="12,3 22,21 2,21"/>
	</svg>

	<!-- Wavy line -->
	<svg class="absolute bottom-[40%] right-[2%] w-16 h-6 opacity-[0.03] pointer-events-none" viewBox="0 0 100 30" fill="none">
		<path d="M0,15 Q25,30 50,15 T100,15" stroke="#C8102E" stroke-width="1.5" fill="none"/>
	</svg>

	<!-- Arc -->
	<svg class="absolute top-[75%] left-[6%] w-10 h-10 opacity-[0.03] pointer-events-none" viewBox="0 0 50 50" fill="none">
		<path d="M50,0 A50,50 0 0,1 0,50" stroke="#C8102E" stroke-width="1.5" fill="none"/>
	</svg>

	<!-- Scattered small circles -->
	<div class="absolute top-[40%] right-[16%] w-2 h-2 rounded-full pointer-events-none opacity-[0.05]" style="background: #C8102E;"></div>
	<div class="absolute bottom-[8%] left-[12%] w-3 h-3 rounded-full pointer-events-none opacity-[0.03]" style="border: 1.5px solid #C8102E;"></div>

	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Heading — SKILL: Left-aligned -->
		<div class="max-w-3xl mb-16 space-y-4">
			<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">5 Pilar Solusi</span>
			<h2 class="font-heading text-3xl sm:text-4xl lg:text-[48px] font-bold text-[#1A1A1A] leading-[1.1]" style="letter-spacing: -0.025em;">
				Lima Lini Pertahanan untuk Air, Cuaca, dan Struktur Indonesia
			</h2>
			<p class="text-base text-[#5C5C5C] max-w-2xl leading-relaxed">
				Dari pemantauan ketinggian air bendungan hingga peringatan dini bencana — solusi Beacon dirancang untuk skenario nyata di lapangan Indonesia.
			</p>
		</div>

		<!-- Accordion strip layout for desktop, stack for mobile -->
		<div class="hidden lg:flex gap-2 h-[380px]">
			{#each pillars as pillar, i}
				<button
					class="group relative rounded-[20px] overflow-hidden cursor-pointer transition-all duration-500 ease-[cubic-bezier(0.16,1,0.3,1)]"
					style="
						flex: {activePillar === i ? 4 : 1};
						opacity: {visible ? 1 : 0};
						transform: translateY({visible ? 0 : 30}px);
						transition: flex 0.5s cubic-bezier(0.16,1,0.3,1), opacity 0.6s ease-out {i * 0.06}s, transform 0.6s ease-out {i * 0.06}s;
					"
					onclick={() => activePillar = i}
					onmouseenter={() => activePillar = i}
				>
					<!-- Background gradient -->
					<div class="absolute inset-0" style="background: linear-gradient(135deg, {pillar.accent}08 0%, {pillar.accent}15 100%);"></div>
					<div class="absolute inset-0" style="border: 1px solid {activePillar === i ? pillar.accent + '30' : '#E5E5E5'}; border-radius: 20px; transition: border-color 0.3s;"></div>

					<!-- Collapsed state — vertical label -->
					<div
						class="absolute inset-0 flex flex-col items-center justify-center gap-4 transition-opacity duration-300"
						style="opacity: {activePillar === i ? 0 : 1}; pointer-events: {activePillar === i ? 'none' : 'auto'};"
					>
						<div class="w-12 h-12 rounded-xl flex items-center justify-center" style="background: {pillar.accent}15;">
							<svelte:component this={pillar.icon} size={22} style="color: {pillar.accent};" />
						</div>
						<span class="text-sm font-semibold text-[#1A1A1A] [writing-mode:vertical-lr] rotate-180">{pillar.name}</span>
					</div>

					<!-- Expanded state -->
					<div
						class="absolute inset-0 p-8 flex flex-col justify-between transition-opacity duration-300"
						style="opacity: {activePillar === i ? 1 : 0}; pointer-events: {activePillar === i ? 'auto' : 'none'};"
					>
						<div>
							<div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6" style="background: {pillar.accent}15;">
								<svelte:component this={pillar.icon} size={26} style="color: {pillar.accent};" />
							</div>
							<h3 class="font-heading text-2xl font-bold text-[#1A1A1A] mb-3">{pillar.name}</h3>
							<p class="text-sm text-[#5C5C5C] leading-relaxed max-w-sm mb-4">{pillar.hook}</p>
							<div class="flex flex-wrap gap-1.5">
								{#each pillar.products as prod}
									<span class="text-[10px] px-2.5 py-1 rounded-full font-medium" style="background: {pillar.accent}10; color: {pillar.accent}; border: 1px solid {pillar.accent}20;">{prod}</span>
								{/each}
							</div>
						</div>
						<a
							href={pillar.href}
							class="inline-flex items-center gap-2 text-sm font-semibold transition-all hover:gap-3"
							style="color: {pillar.accent};"
						>
							{pillar.cta}
							<ArrowRight size={14} />
						</a>
					</div>
				</button>
			{/each}
		</div>

		<!-- Mobile: stacked cards -->
		<div class="lg:hidden space-y-4">
			{#each pillars as pillar, i}
				<a
					href={pillar.href}
					class="group flex items-center gap-5 p-6 rounded-[16px] bg-white transition-all duration-300 hover:-translate-y-0.5 hover:shadow-lg"
					style="
						border: 1px solid #E5E5E5;
						opacity: {visible ? 1 : 0};
						transform: translateY({visible ? 0 : 20}px);
						transition: opacity 0.5s ease-out {i * 0.08}s, transform 0.5s ease-out {i * 0.08}s, box-shadow 0.3s;
					"
				>
					<div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform" style="background: {pillar.accent}12;">
						<svelte:component this={pillar.icon} size={22} style="color: {pillar.accent};" />
					</div>
					<div class="flex-1 min-w-0">
						<h3 class="font-heading text-base font-bold text-[#1A1A1A] group-hover:text-[#C8102E] transition-colors">{pillar.name}</h3>
						<p class="text-xs text-[#5C5C5C] mt-1 line-clamp-2">{pillar.hook}</p>
					</div>
					<ArrowRight size={16} class="shrink-0 text-[#C8102E] group-hover:translate-x-1 transition-transform" />
				</a>
			{/each}
		</div>
	</div>
</section>
