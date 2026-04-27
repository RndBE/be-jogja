<script lang="ts">
	import { ArrowRight, Droplets, Cloud, AlertTriangle, Gauge, Monitor } from '@lucide/svelte';

	const solutions = [
		{
			icon: Droplets,
			name: 'Water Security',
			tagline: 'Amankan setiap meter kubik air',
			desc: 'Dari ketinggian, debit, kualitas, hingga deformasi struktur penampungnya. Enam perangkat Water Security Beacon dirancang supaya Anda tidak pernah terlambat lagi.',
			products: ['AWLR', 'AWGC', 'AFMR', 'ADR', 'AWQR', 'AVWR'],
			href: '/solusi/water-security',
			color: '#0EA5E9'
		},
		{
			icon: Cloud,
			name: 'Weather Forecast',
			tagline: 'Pantau cuaca akurat',
			desc: 'Cuaca tidak bisa dilawan, tapi bisa diprediksi. Stasiun cuaca otomatis untuk pertanian, bendungan, dan aviasi.',
			products: ['AWR', 'ARR'],
			href: '/solusi/weather-forecast',
			color: '#6366F1'
		},
		{
			icon: AlertTriangle,
			name: 'Early Warning',
			tagline: 'Cegah bencana',
			desc: 'Detik pertama menentukan nyawa. Sistem peringatan dini multi-level untuk wilayah rawan.',
			products: ['EWS'],
			href: '/solusi/early-warning',
			color: '#F59E0B'
		},
		{
			icon: Gauge,
			name: 'Pressure Measurement',
			tagline: 'Tekanan presisi tinggi',
			desc: 'Akurasi tinggi untuk medan ekstrem — geothermal, well testing, infrastruktur kritis.',
			products: ['APLR'],
			href: '/solusi/pressure-measurement',
			color: '#10B981'
		},
		{
			icon: Monitor,
			name: 'STESY Application',
			tagline: 'Platform monitoring 1 pintu',
			desc: 'Platform tunggal yang mengikat semua perangkat menjadi satu dashboard real-time. Cross-platform, multi-tenant, AI-powered.',
			products: ['Smart Telemetry System'],
			href: '/solusi/stesy',
			color: '#C8102E'
		}
	];
</script>

<svelte:head>
	<title>Solusi — Beacon Engineering</title>
	<meta name="description" content="Lima pilar solusi telemetri Beacon Engineering: Water Security, Weather Forecast, Early Warning, Pressure Measurement, dan STESY." />
</svelte:head>

<!-- Hero -->
<section class="relative py-20 lg:py-28 overflow-hidden" style="background: linear-gradient(165deg, #FFFFFF 0%, #FFF5F6 40%, #FBE9EC 100%);">
	<!-- Ornaments -->
	<div class="absolute -top-20 -right-20 w-80 h-80 rounded-full pointer-events-none opacity-[0.06]" style="border: 2px solid #C8102E;"></div>
	<div class="absolute bottom-10 left-[5%] w-8 h-8 rotate-45 rounded-sm pointer-events-none opacity-[0.05]" style="background: #C8102E;"></div>

	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
		<span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest mb-6" style="background: #FBE9EC; color: #C8102E;">Solusi Kami</span>
		<h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight mb-6" style="letter-spacing: -0.03em; color: #1A1A1A;">
			Lima Pilar Pertahanan untuk <span style="color: #C8102E;">Indonesia</span>
		</h1>
		<p class="text-lg max-w-2xl mx-auto" style="color: #5C5C5C;">
			Dari pemantauan ketinggian air bendungan hingga peringatan dini bencana — solusi Beacon dirancang untuk skenario nyata di lapangan Indonesia.
		</p>
	</div>

	<div class="absolute bottom-0 left-0 right-0 pointer-events-none" style="transform: translateY(1px);">
		<svg viewBox="0 0 1440 50" fill="none" preserveAspectRatio="none" class="w-full h-10"><path d="M0,50 L0,25 Q360,0 720,25 T1440,25 L1440,50 Z" fill="white"/></svg>
	</div>
</section>

<!-- Solutions Grid -->
<section class="py-16 lg:py-24 bg-white">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="space-y-8">
			{#each solutions as sol, i}
				<a
					href={sol.href}
					class="group grid md:grid-cols-5 gap-6 p-8 rounded-2xl transition-all duration-300 hover:-translate-y-1 hover:shadow-xl {i % 2 === 0 ? '' : 'md:flex-row-reverse'}"
					style="background: #FAFAFA; border: 1px solid #E5E5E5;"
				>
					<!-- Icon & Title -->
					<div class="md:col-span-2 flex flex-col justify-center">
						<div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-4 transition-transform duration-300 group-hover:scale-110" style="background: {sol.color}10;">
							<svelte:component this={sol.icon} size={28} style="color: {sol.color};" />
						</div>
						<h2 class="font-heading text-2xl font-bold mb-1 group-hover:text-[#C8102E] transition-colors" style="color: #1A1A1A;">{sol.name}</h2>
						<p class="text-sm font-medium" style="color: {sol.color};">{sol.tagline}</p>
					</div>

					<!-- Description -->
					<div class="md:col-span-2 flex flex-col justify-center">
						<p class="text-sm leading-relaxed mb-4" style="color: #5C5C5C;">{sol.desc}</p>
						<div class="flex flex-wrap gap-2">
							{#each sol.products as prod}
								<span class="text-[11px] px-3 py-1 rounded-full font-medium bg-white" style="border: 1px solid #E5E5E5; color: #5C5C5C;">{prod}</span>
							{/each}
						</div>
					</div>

					<!-- CTA -->
					<div class="md:col-span-1 flex items-center justify-end">
						<div class="flex items-center gap-2 text-sm font-semibold transition-all group-hover:gap-3" style="color: #C8102E;">
							Eksplor
							<ArrowRight size={16} />
						</div>
					</div>
				</a>
			{/each}
		</div>
	</div>
</section>
