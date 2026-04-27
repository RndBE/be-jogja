<script lang="ts">
	import { MapPin, Calendar, Filter, ArrowRight } from '@lucide/svelte';

	let activeFilter = $state('semua');

	const categories = ['semua', 'Water Security', 'Weather Forecast', 'Early Warning', 'Pressure', 'STESY'];

	const projects = [
		{ name: 'Telemetri ADR Bendungan Ciawi-Sukamahi', year: '2024', client: 'BBWS Ciliwung-Cisadane', location: 'Bogor, Jawa Barat', products: ['ADR', 'STESY'], category: 'Water Security' },
		{ name: 'Telemetri AWLR Bendungan Sepaku IKN', year: '2024', client: 'BWS Kalimantan IV', location: 'Kalimantan Timur', products: ['AWLR', 'STESY'], category: 'Water Security' },
		{ name: 'Telemetri APLR Kawah Ijen', year: '2023', client: 'PT Medco Energi', location: 'Banyuwangi, Jawa Timur', products: ['APLR'], category: 'Pressure' },
		{ name: 'Telemetri AWGC Sungai Cisadane BKC 3', year: '2023', client: 'BBWS Ciliwung-Cisadane', location: 'Tangerang, Banten', products: ['AWGC', 'STESY'], category: 'Water Security' },
		{ name: 'Sistem Telemetri Bendungan Keureuto', year: '2023', client: 'BWS Sumatera I', location: 'Aceh', products: ['AWLR', 'ADR', 'STESY'], category: 'Water Security' },
		{ name: 'Stasiun Cuaca Otomatis DAS Bogowonto', year: '2023', client: 'BBWS Serayu Opak', location: 'Jawa Tengah', products: ['AWR', 'ARR'], category: 'Weather Forecast' },
		{ name: 'EWS Peringatan Dini Banjir Citarum', year: '2022', client: 'BBWS Citarum', location: 'Jawa Barat', products: ['EWS', 'AWLR'], category: 'Early Warning' },
		{ name: 'Monitoring Bendungan Cipanas', year: '2022', client: 'BWS Ciliwung-Cisadane', location: 'Jawa Barat', products: ['AWLR', 'ADR', 'STESY'], category: 'Water Security' },
		{ name: 'Telemetri AWLR Sungai Bengawan Solo', year: '2022', client: 'BBWS Bengawan Solo', location: 'Jawa Timur', products: ['AWLR', 'STESY'], category: 'Water Security' },
	];

	let filteredProjects = $derived(
		activeFilter === 'semua' ? projects : projects.filter(p => p.category === activeFilter)
	);
</script>

<svelte:head>
	<title>Proyek — Beacon Engineering</title>
	<meta name="description" content="300+ proyek telemetri dari Aceh sampai Papua. Lihat track record Beacon Engineering di infrastruktur strategis Indonesia." />
</svelte:head>

<!-- Hero -->
<section class="relative py-20 lg:py-28 overflow-hidden" style="background: linear-gradient(165deg, #FFFFFF 0%, #FFF5F6 40%, #FBE9EC 100%);">
	<div class="absolute -top-20 -left-20 w-72 h-72 rounded-full pointer-events-none opacity-[0.06]" style="border: 2px solid #C8102E;"></div>
	<svg class="absolute top-[40%] right-[5%] w-10 h-10 opacity-[0.05] pointer-events-none" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="1.5">
		<polygon points="12,2 22,22 2,22"/>
	</svg>

	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
		<span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest mb-6" style="background: #FBE9EC; color: #C8102E;">Portfolio</span>
		<h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight mb-6" style="letter-spacing: -0.03em; color: #1A1A1A;">
			<span class="gradient-text">300+</span> Titik. Satu Indonesia.
		</h1>
		<p class="text-lg max-w-2xl mx-auto" style="color: #5C5C5C;">
			Setiap pin di peta ini adalah cerita tentang bendungan yang dijaga, sungai yang dipantau, atau wilayah yang dilindungi dari bencana.
		</p>
	</div>

	<div class="absolute bottom-0 left-0 right-0 pointer-events-none" style="transform: translateY(1px);">
		<svg viewBox="0 0 1440 50" fill="none" preserveAspectRatio="none" class="w-full h-10"><path d="M0,50 L0,25 Q360,0 720,25 T1440,25 L1440,50 Z" fill="white"/></svg>
	</div>
</section>

<!-- Filter + Grid -->
<section class="py-16 lg:py-20 bg-white">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Filters -->
		<div class="flex flex-wrap gap-2 mb-10">
			{#each categories as cat}
				<button
					class="px-4 py-2 rounded-full text-sm font-medium transition-all duration-200"
					style="
						background: {activeFilter === cat ? '#C8102E' : '#FAFAFA'};
						color: {activeFilter === cat ? 'white' : '#5C5C5C'};
						border: 1px solid {activeFilter === cat ? '#C8102E' : '#E5E5E5'};
					"
					onclick={() => activeFilter = cat}
				>
					{cat === 'semua' ? 'Semua' : cat}
				</button>
			{/each}
		</div>

		<!-- Project Grid -->
		<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
			{#each filteredProjects as project}
				<div class="group p-6 rounded-2xl bg-[#FAFAFA] transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:bg-white" style="border: 1px solid #E5E5E5;">
					<!-- Year Badge -->
					<div class="flex items-center gap-3 mb-3">
						<span class="text-xs font-semibold px-2.5 py-1 rounded-md text-white tabular-nums" style="background: #C8102E;">{project.year}</span>
						<span class="text-xs flex items-center gap-1" style="color: #7A7A7A;">
							<MapPin size={11} />
							{project.location}
						</span>
					</div>

					<h3 class="font-heading text-base font-bold mb-2 group-hover:text-[#C8102E] transition-colors" style="color: #1A1A1A;">{project.name}</h3>
					<p class="text-sm mb-4" style="color: #5C5C5C;">{project.client}</p>

					<div class="flex flex-wrap gap-1.5">
						{#each project.products as prod}
							<span class="text-[10px] px-2 py-0.5 rounded-full font-medium" style="background: #FBE9EC; color: #C8102E;">{prod}</span>
						{/each}
					</div>
				</div>
			{/each}
		</div>
	</div>
</section>
