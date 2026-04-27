<script lang="ts">
	import { onMount } from 'svelte';
	import { ArrowRight, Droplets, Cloud, AlertTriangle, Gauge, Monitor, ChevronRight, MessageCircle } from '@lucide/svelte';

	let mounted = $state(false);
	let activePillar = $state(0);
	let mouseX = $state(0);
	let mouseY = $state(0);

	onMount(() => {
		mounted = true;
		// Auto-rotate pillars
		const interval = setInterval(() => {
			activePillar = (activePillar + 1) % solutions.length;
		}, 5000);
		return () => clearInterval(interval);
	});

	function handleCardMouse(e: MouseEvent) {
		const rect = (e.currentTarget as HTMLElement).getBoundingClientRect();
		mouseX = e.clientX - rect.left;
		mouseY = e.clientY - rect.top;
	}

	const solutions = [
		{
			icon: Droplets, name: 'Water Security',
			tagline: 'Amankan setiap meter kubik air',
			desc: 'Dari ketinggian, debit, kualitas, hingga deformasi struktur penampungnya. Enam perangkat dirancang supaya Anda tidak pernah terlambat lagi.',
			products: ['AWLR', 'AWGC', 'AFMR', 'ADR', 'AWQR', 'AVWR'],
			href: '/solusi/water-security',
			color: '#0EA5E9',
			stat: '6', statLabel: 'Produk',
			accent: 'from-sky-500/10 to-blue-500/5'
		},
		{
			icon: Cloud, name: 'Weather Forecast',
			tagline: 'Pantau cuaca akurat',
			desc: 'Cuaca tidak bisa dilawan, tapi bisa diprediksi. Stasiun cuaca otomatis untuk pertanian, bendungan, dan aviasi.',
			products: ['AWR', 'ARR'],
			href: '/solusi/weather-forecast',
			color: '#6366F1',
			stat: '2', statLabel: 'Produk',
			accent: 'from-indigo-500/10 to-violet-500/5'
		},
		{
			icon: AlertTriangle, name: 'Early Warning',
			tagline: 'Cegah bencana',
			desc: 'Detik pertama menentukan nyawa. Sistem peringatan dini multi-level untuk wilayah rawan banjir, longsor, dan bencana hidrometeorologi.',
			products: ['EWS'],
			href: '/solusi/early-warning',
			color: '#F59E0B',
			stat: '4', statLabel: 'Level Alert',
			accent: 'from-amber-500/10 to-yellow-500/5'
		},
		{
			icon: Gauge, name: 'Pressure Measurement',
			tagline: 'Tekanan presisi tinggi',
			desc: 'Akurasi tinggi untuk medan ekstrem — geothermal, well testing, infrastruktur kritis. Terbukti di Kawah Ijen.',
			products: ['APLR'],
			href: '/solusi/pressure-measurement',
			color: '#10B981',
			stat: '1', statLabel: 'Produk',
			accent: 'from-emerald-500/10 to-green-500/5'
		},
		{
			icon: Monitor, name: 'STESY Application',
			tagline: 'Platform monitoring 1 pintu',
			desc: 'Platform tunggal yang mengikat semua perangkat menjadi satu dashboard real-time. Cross-platform, multi-tenant, AI-powered.',
			products: ['Smart Telemetry System'],
			href: '/solusi/stesy',
			color: '#C8102E',
			stat: '47', statLabel: 'Stasiun Aktif',
			accent: 'from-red-500/10 to-rose-500/5'
		}
	];
</script>

<svelte:head>
	<title>Solusi — Beacon Engineering</title>
	<meta name="description" content="Lima pilar solusi telemetri Beacon Engineering: Water Security, Weather Forecast, Early Warning, Pressure Measurement, dan STESY." />
</svelte:head>

<!-- Hero — SKILL: Asymmetric, gradient text, animated ornaments -->
<section class="relative min-h-[85dvh] flex flex-col justify-center overflow-hidden" style="background: linear-gradient(168deg, #FFFFFF 0%, #FFF8F9 30%, #FBE9EC 65%, #F5D2D8 100%);">
	<!-- Animated ambient orbs -->
	<div class="absolute top-[15%] right-[12%] w-[300px] h-[300px] rounded-full pointer-events-none animate-breathe" style="background: radial-gradient(circle, rgba(200,16,46,0.06) 0%, transparent 70%);"></div>
	<div class="absolute bottom-[20%] left-[8%] w-[200px] h-[200px] rounded-full pointer-events-none animate-breathe" style="animation-delay: 2s; background: radial-gradient(circle, rgba(14,165,233,0.05) 0%, transparent 70%);"></div>

	<!-- Floating geometric ornaments -->
	<div class="absolute top-[20%] right-[6%] w-12 h-12 rotate-12 pointer-events-none opacity-[0.06] animate-float" style="border: 2px solid #C8102E; border-radius: 12px;"></div>
	<div class="absolute bottom-[25%] right-[15%] w-6 h-6 pointer-events-none opacity-[0.05]" style="background: #C8102E; border-radius: 50%;"></div>
	<div class="absolute top-[45%] left-[3%] w-8 h-8 rotate-45 pointer-events-none opacity-[0.04]" style="border: 2px solid #C8102E;"></div>

	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
		<div class="grid lg:grid-cols-12 gap-8 items-center">
			<!-- Left: Text — 7 cols -->
			<div class="lg:col-span-7 lg:pr-12">
				<span
					class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-widest mb-8"
					style="
						background: rgba(255,255,255,0.65); backdrop-filter: blur(12px);
						color: #C8102E; border: 1px solid rgba(200,16,46,0.12);
						box-shadow: inset 0 1px 0 rgba(255,255,255,0.3);
						opacity: {mounted ? 1 : 0};
						transform: translateY({mounted ? 0 : 12}px);
						transition: all 0.7s cubic-bezier(0.16,1,0.3,1) 0.1s;
					"
				>
					<span class="w-2 h-2 rounded-full bg-[#1B7F3A] animate-pulse-dot"></span>
					Ekosistem Solusi
				</span>

				<h1
					class="font-heading text-4xl sm:text-5xl lg:text-[64px] font-extrabold leading-[1.04] mb-7"
					style="
						letter-spacing: -0.04em; color: #1A1A1A;
						opacity: {mounted ? 1 : 0};
						transform: translateY({mounted ? 0 : 20}px);
						transition: all 0.8s cubic-bezier(0.16,1,0.3,1) 0.2s;
					"
				>
					Lima Pilar<br/>Pertahanan untuk<br/><span class="gradient-text-animated">Indonesia</span>
				</h1>

				<p
					class="text-lg leading-relaxed max-w-[50ch] mb-10"
					style="
						color: #5C5C5C;
						opacity: {mounted ? 1 : 0};
						transform: translateY({mounted ? 0 : 16}px);
						transition: all 0.8s cubic-bezier(0.16,1,0.3,1) 0.35s;
					"
				>
					Dari pemantauan ketinggian air bendungan hingga peringatan dini bencana — solusi Beacon dirancang untuk skenario nyata di lapangan.
				</p>

				<!-- Quick nav pills -->
				<div
					class="flex flex-wrap gap-2"
					style="
						opacity: {mounted ? 1 : 0};
						transform: translateY({mounted ? 0 : 12}px);
						transition: all 0.8s cubic-bezier(0.16,1,0.3,1) 0.45s;
					"
				>
					{#each solutions as sol, i}
						<button
							class="group flex items-center gap-2 px-4 py-2.5 rounded-full text-xs font-semibold transition-all duration-300 btn-tactile"
							style="
								background: {activePillar === i ? sol.color : 'rgba(255,255,255,0.65)'};
								color: {activePillar === i ? 'white' : '#5C5C5C'};
								border: 1px solid {activePillar === i ? sol.color : 'rgba(229,229,229,0.6)'};
								backdrop-filter: blur(8px);
								box-shadow: {activePillar === i ? `0 4px 14px ${sol.color}30` : 'none'};
							"
							onclick={() => activePillar = i}
						>
							<svelte:component this={sol.icon} size={13} />
							{sol.name}
						</button>
					{/each}
				</div>
			</div>

			<!-- Right: Active Pillar Preview — 5 cols -->
			<div class="lg:col-span-5 hidden lg:block">
				{#each solutions as sol, i}
					{#if activePillar === i}
						<div
							class="rounded-[28px] p-8 glass-premium relative overflow-hidden"
							style="
								border: 1px solid rgba(229,229,229,0.5);
								box-shadow: 0 20px 60px rgba(0,0,0,0.06), inset 0 1px 0 rgba(255,255,255,0.25);
								animation: scaleIn 0.5s cubic-bezier(0.16,1,0.3,1);
							"
						>
							<!-- Number watermark -->
							<span class="absolute -top-4 -right-2 font-heading text-[120px] font-extrabold leading-none pointer-events-none tabular-nums" style="color: {sol.color}; opacity: 0.06;">
								0{i + 1}
							</span>

							<div class="relative z-10">
								<div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-5" style="background: {sol.color}12;">
									<svelte:component this={sol.icon} size={26} style="color: {sol.color};" />
								</div>

								<h3 class="font-heading text-2xl font-bold mb-1" style="color: #1A1A1A;">{sol.name}</h3>
								<p class="text-sm font-medium mb-4" style="color: {sol.color};">{sol.tagline}</p>
								<p class="text-sm leading-relaxed mb-6" style="color: #5C5C5C;">{sol.desc}</p>

								<!-- Products -->
								<div class="flex flex-wrap gap-1.5 mb-6">
									{#each sol.products as prod}
										<span class="text-[10px] px-2.5 py-1 rounded-full font-medium" style="background: {sol.color}10; color: {sol.color}; border: 1px solid {sol.color}20;">{prod}</span>
									{/each}
								</div>

								<!-- Stat + CTA -->
								<div class="flex items-center justify-between">
									<div>
										<span class="font-heading text-3xl font-extrabold tabular-nums" style="color: {sol.color};">{sol.stat}</span>
										<span class="text-[11px] uppercase tracking-wider font-medium ml-1.5" style="color: #9A9A9A;">{sol.statLabel}</span>
									</div>
									<a href={sol.href} class="flex items-center gap-2 text-sm font-semibold btn-tactile px-4 py-2 rounded-[12px] transition-all" style="background: {sol.color}; color: white; box-shadow: 0 4px 12px {sol.color}30;">
										Eksplor <ArrowRight size={14} />
									</a>
								</div>
							</div>
						</div>
					{/if}
				{/each}
			</div>
		</div>
	</div>

	<!-- Wave divider -->
	<div class="pointer-events-none mt-auto" style="margin-bottom: -1px;">
		<svg viewBox="0 0 1440 60" fill="none" preserveAspectRatio="none" class="w-full h-12">
			<path d="M0,60 L0,30 Q360,0 720,30 T1440,30 L1440,60 Z" fill="white"/>
		</svg>
	</div>
</section>

<!-- Solutions Deep Dive — SKILL: Spotlight cards with hover glow -->
<section class="py-20 lg:py-28 bg-white relative overflow-hidden">
	<!-- Subtle grid texture -->
	<div class="absolute inset-0 pointer-events-none opacity-[0.015]" style="background-image: radial-gradient(#C8102E 0.5px, transparent 0.5px); background-size: 24px 24px;"></div>

	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Section header -->
		<div class="max-w-2xl mb-16">
			<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">Ekosistem Lengkap</span>
			<h2 class="font-heading text-3xl sm:text-4xl lg:text-[44px] font-bold mt-3 leading-[1.1]" style="letter-spacing: -0.03em; color: #1A1A1A;">
				Dari Sensor ke Dashboard,<br/>Semuanya Kami Tangani.
			</h2>
			<p class="text-base leading-relaxed mt-4 max-w-[50ch]" style="color: #5C5C5C;">
				Setiap pilar saling terhubung dalam satu ekosistem. Pilih sesuai kebutuhan, integrasikan di satu platform.
			</p>
		</div>

		<!-- Card grid — SKILL: Asymmetric bento, NOT equal columns -->
		<div class="grid md:grid-cols-2 gap-5">
			{#each solutions as sol, i}
				<a
					href={sol.href}
					class="group relative rounded-[24px] p-8 lg:p-10 overflow-hidden transition-all duration-500 hover:shadow-2xl hover:-translate-y-1 {i === 4 ? 'md:col-span-2' : ''}"
					style="
						background: white; border: 1px solid #E5E5E5;
						opacity: {mounted ? 1 : 0};
						transform: translateY({mounted ? 0 : 32}px);
						transition: opacity 0.7s cubic-bezier(0.16,1,0.3,1) {0.6 + i * 0.1}s, transform 0.7s cubic-bezier(0.16,1,0.3,1) {0.6 + i * 0.1}s, box-shadow 0.4s, border-color 0.4s;
					"
					onmousemove={handleCardMouse}
				>
					<!-- Spotlight glow on hover -->
					<div
						class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none rounded-[24px]"
						style="background: radial-gradient(400px circle at {mouseX}px {mouseY}px, {sol.color}08, transparent 70%);"
					></div>

					<!-- Top accent line -->
					<div class="absolute top-0 left-8 right-8 h-[3px] rounded-full opacity-0 group-hover:opacity-100 transition-all duration-300 origin-left scale-x-0 group-hover:scale-x-100" style="background: linear-gradient(90deg, {sol.color}, {sol.color}30);"></div>

					<!-- Number watermark -->
					<span class="absolute top-4 right-6 font-heading text-[80px] font-extrabold leading-none pointer-events-none tabular-nums opacity-[0.03] group-hover:opacity-[0.06] transition-opacity" style="color: {sol.color};">
						0{i + 1}
					</span>

					<div class="relative z-10 {i === 4 ? 'grid md:grid-cols-2 gap-8 items-center' : ''}">
						<div>
							<!-- Icon + Title row -->
							<div class="flex items-start gap-4 mb-5">
								<div class="w-14 h-14 rounded-2xl flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-300" style="background: {sol.color}10;">
									<svelte:component this={sol.icon} size={26} style="color: {sol.color};" />
								</div>
								<div>
									<h3 class="font-heading text-xl lg:text-2xl font-bold group-hover:text-[#C8102E] transition-colors" style="color: #1A1A1A;">{sol.name}</h3>
									<p class="text-sm font-medium mt-0.5" style="color: {sol.color};">{sol.tagline}</p>
								</div>
							</div>

							<p class="text-sm leading-relaxed mb-5 max-w-[48ch]" style="color: #5C5C5C;">{sol.desc}</p>

							<!-- Product tags -->
							<div class="flex flex-wrap gap-1.5 mb-6">
								{#each sol.products as prod}
									<span class="text-[10px] px-2.5 py-1 rounded-full font-medium" style="background: {sol.color}08; color: {sol.color}; border: 1px solid {sol.color}15;">{prod}</span>
								{/each}
							</div>
						</div>

						<div class="{i === 4 ? '' : 'flex items-center justify-between'}">
							<!-- Stat block -->
							<div class="{i === 4 ? 'flex items-center gap-8 mb-6' : ''}">
								<div>
									<span class="font-heading text-3xl lg:text-4xl font-extrabold tabular-nums leading-none" style="color: {sol.color};">{sol.stat}</span>
									<span class="block text-[10px] uppercase tracking-widest font-medium mt-1" style="color: #9A9A9A;">{sol.statLabel}</span>
								</div>
							</div>

							<!-- CTA -->
							<div class="flex items-center gap-2 text-sm font-semibold group-hover:gap-3 transition-all {i === 4 ? '' : 'mt-0'}" style="color: #C8102E;">
								Eksplor {sol.name}
								<ArrowRight size={15} class="group-hover:translate-x-1 transition-transform" />
							</div>
						</div>
					</div>
				</a>
			{/each}
		</div>
	</div>
</section>

<!-- Trust / Summary Strip -->
<section class="py-16 relative overflow-hidden" style="background: #FAFAFA;">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid grid-cols-2 md:grid-cols-4 gap-6">
			{#each [
				{ number: '14', label: 'Tahun Pengalaman', color: '#C8102E' },
				{ number: '300+', label: 'Proyek Selesai', color: '#0EA5E9' },
				{ number: '98.7%', label: 'Uptime Rata-rata', color: '#10B981' },
				{ number: '30+', label: 'BBWS & BUMN', color: '#6366F1' }
			] as stat}
				<div class="p-6 rounded-[20px] glass-premium" style="border: 1px solid rgba(229,229,229,0.5);">
					<span class="font-heading text-3xl sm:text-4xl font-extrabold tabular-nums leading-none" style="color: {stat.color};">{stat.number}</span>
					<span class="block text-[11px] uppercase tracking-widest font-medium mt-2" style="color: #5C5C5C;">{stat.label}</span>
				</div>
			{/each}
		</div>
	</div>
</section>

<!-- CTA — SKILL: Dark themed premium -->
<section class="relative py-20 lg:py-28 overflow-hidden" style="background: #1A0508;">
	<!-- Animated orbs -->
	<div class="absolute top-0 right-[10%] w-[400px] h-[400px] rounded-full pointer-events-none animate-breathe" style="background: radial-gradient(circle, rgba(200,16,46,0.12) 0%, transparent 60%);"></div>
	<div class="absolute bottom-0 left-[5%] w-[300px] h-[300px] rounded-full pointer-events-none animate-breathe" style="animation-delay: 3s; background: radial-gradient(circle, rgba(200,16,46,0.08) 0%, transparent 60%);"></div>

	<!-- Noise overlay -->
	<div class="absolute inset-0 pointer-events-none opacity-[0.35]" style="background-image: url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 200 200%22><filter id=%22n%22><feTurbulence type=%22fractalNoise%22 baseFrequency=%220.9%22 numOctaves=%224%22 stitchTiles=%22stitch%22/></filter><rect width=%22200%22 height=%22200%22 filter=%22url(%23n)%22 opacity=%220.08%22/></svg>');"></div>

	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid lg:grid-cols-12 gap-8 items-center">
			<div class="lg:col-span-7">
				<span class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-widest mb-6" style="background: rgba(200,16,46,0.12); color: #FF6B6B; border: 1px solid rgba(200,16,46,0.2);">
					<span class="w-2 h-2 rounded-full bg-[#FF6B6B] animate-pulse-dot"></span>
					Siap Memulai
				</span>
				<h2 class="font-heading text-3xl sm:text-4xl lg:text-[48px] font-bold leading-[1.08] mb-5" style="letter-spacing: -0.03em; color: white;">
					Butuh Konfigurasi yang Tepat untuk Proyek Anda?
				</h2>
				<p class="text-base leading-relaxed max-w-[50ch]" style="color: rgba(255,255,255,0.5);">
					Tim engineer kami akan bantu memilih produk dan konfigurasi yang optimal — gratis, tanpa komitmen.
				</p>
			</div>
			<div class="lg:col-span-5 flex flex-col gap-4">
				<a
					href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20ingin%20konsultasi%20tentang%20solusi%20telemetri."
					target="_blank" rel="noopener"
					class="group flex items-center gap-4 p-5 rounded-[20px] btn-tactile transition-all duration-300"
					style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 8px 24px rgba(200,16,46,0.3);"
				>
					<div class="w-12 h-12 rounded-xl flex items-center justify-center" style="background: rgba(255,255,255,0.15);">
						<MessageCircle size={20} class="text-white" />
					</div>
					<div class="flex-1">
						<span class="text-sm font-semibold block text-white">Konsultasi via WhatsApp</span>
						<span class="text-xs" style="color: rgba(255,255,255,0.5);">Respons cepat di jam kerja</span>
					</div>
					<ArrowRight size={16} class="text-white/40 group-hover:translate-x-1 transition-transform" />
				</a>
				<a
					href="/kontak"
					class="group flex items-center gap-4 p-5 rounded-[20px] btn-tactile transition-all duration-300"
					style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);"
				>
					<div class="w-12 h-12 rounded-xl flex items-center justify-center" style="background: rgba(255,255,255,0.06);">
						<ArrowRight size={20} style="color: rgba(255,255,255,0.6);" />
					</div>
					<div class="flex-1">
						<span class="text-sm font-semibold block text-white">Form Konsultasi</span>
						<span class="text-xs" style="color: rgba(255,255,255,0.35);">Isi form dan kami yang hubungi Anda</span>
					</div>
					<ChevronRight size={16} class="text-white/20 group-hover:translate-x-1 transition-transform" />
				</a>
			</div>
		</div>
	</div>
</section>
