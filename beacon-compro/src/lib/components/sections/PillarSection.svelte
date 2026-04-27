<script lang="ts">
	import { onMount } from 'svelte';
	import { ArrowRight, Droplets, Cloud, AlertTriangle, Gauge, Monitor } from '@lucide/svelte';

	let visible = $state(false);

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
			cta: 'Eksplor Water Security',
			href: '/solusi/water-security'
		},
		{
			icon: Cloud,
			name: 'Weather Forecast',
			hook: 'Cuaca tidak bisa dilawan, tapi bisa diprediksi. Stasiun cuaca otomatis untuk pertanian, bendungan, dan aviasi.',
			cta: 'Eksplor Weather Forecast',
			href: '/solusi/weather-forecast'
		},
		{
			icon: AlertTriangle,
			name: 'Early Warning',
			hook: 'Detik pertama menentukan nyawa. Sistem peringatan dini multi-level untuk wilayah rawan.',
			cta: 'Eksplor Early Warning',
			href: '/solusi/early-warning'
		},
		{
			icon: Gauge,
			name: 'Pressure Measurement',
			hook: 'Akurasi tinggi untuk medan ekstrem — geothermal, well testing, infrastruktur kritis.',
			cta: 'Eksplor Pressure Measurement',
			href: '/solusi/pressure-measurement'
		},
		{
			icon: Monitor,
			name: 'STESY Application',
			hook: 'Platform tunggal yang mengikat semua perangkat menjadi satu dashboard real-time.',
			cta: 'Pelajari STESY',
			href: '/solusi/stesy'
		}
	];
</script>

<section id="pilar-solusi" class="relative py-20 lg:py-28 bg-white overflow-hidden">
	<!-- Decorative ornaments -->
	<div class="absolute top-10 left-[3%] w-20 h-20 rounded-full pointer-events-none opacity-[0.04]" style="border: 2px solid #C8102E;"></div>
	<div class="absolute bottom-16 right-[5%] w-8 h-8 rotate-12 pointer-events-none opacity-[0.04]" style="border: 2px solid #C8102E;"></div>
	<svg class="absolute top-[60%] left-[2%] w-6 h-6 opacity-[0.04] pointer-events-none" viewBox="0 0 24 24" fill="#C8102E">
		<circle cx="12" cy="12" r="4"/>
	</svg>

	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Heading -->
		<div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
			<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">5 Pilar Solusi</span>
			<h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold text-[#1A1A1A] leading-tight" style="letter-spacing: -0.02em;">
				Lima Lini Pertahanan untuk Air, Cuaca, dan Struktur Indonesia
			</h2>
			<p class="text-base text-[#5C5C5C] max-w-2xl mx-auto">
				Dari pemantauan ketinggian air bendungan hingga peringatan dini bencana — solusi Beacon dirancang untuk skenario nyata di lapangan Indonesia.
			</p>
		</div>

		<!-- Grid: 3 top + 2 bottom centered -->
		<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
			{#each pillars as pillar, i}
				<div
					class="group relative p-8 rounded-2xl bg-white transition-all duration-300 hover:-translate-y-1 cursor-pointer {i >= 3 ? 'lg:col-span-1 lg:last:col-start-2' : ''}"
					style="
						border: 1px solid #E5E5E5;
						box-shadow: 0 1px 3px rgba(0,0,0,0.04);
						opacity: {visible ? 1 : 0};
						transform: translateY({visible ? 0 : 24}px);
						transition: opacity 0.6s ease-out {i * 0.08}s, transform 0.6s ease-out {i * 0.08}s, box-shadow 0.3s ease, border-color 0.3s ease;
					"
				>
					<!-- Hover border glow -->
					<div class="absolute inset-[-1px] rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none" style="
						border: 1px solid rgba(200,16,46,0.3);
						box-shadow: 0 0 20px rgba(200,16,46,0.08);
					"></div>

					<div class="relative z-10">
						<div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6 transition-all duration-300 group-hover:scale-110" style="background: #FBE9EC;">
							<svelte:component this={pillar.icon} size={24} style="color: #C8102E;" />
						</div>
						<h3 class="font-heading text-xl font-bold text-[#1A1A1A] mb-3 group-hover:text-[#C8102E] transition-colors">
							{pillar.name}
						</h3>
						<p class="text-sm text-[#5C5C5C] leading-relaxed mb-6">
							{pillar.hook}
						</p>
						<a
							href={pillar.href}
							class="inline-flex items-center gap-2 text-sm font-semibold transition-colors group-hover:text-[#C8102E]"
							style="color: #C8102E;"
						>
							{pillar.cta}
							<ArrowRight size={14} class="group-hover:translate-x-1 transition-transform" />
						</a>
					</div>
				</div>
			{/each}
		</div>
	</div>
</section>
