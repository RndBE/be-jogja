<script lang="ts">
	import { onMount } from 'svelte';
	import { ArrowRight, Check, MessageCircle, Download, ChevronRight, Cloud, Sun, Wind, Thermometer, Wifi, ShieldCheck } from '@lucide/svelte';
	import Ornaments from '$lib/components/Ornaments.svelte';

	let mounted = $state(false);
	onMount(() => { mounted = true; });

	const specs = [
		{ label: 'Suhu Udara', value: '-40°C – +60°C (±0.3°C)' },
		{ label: 'Kelembaban Relatif', value: '0 – 100% RH (±2%)' },
		{ label: 'Tekanan Udara', value: '300 – 1100 hPa (±0.5)' },
		{ label: 'Kec. Angin', value: '0 – 60 m/s (±0.3 m/s)' },
		{ label: 'Arah Angin', value: '0 – 360° (±3°)' },
		{ label: 'Radiasi Matahari', value: '0 – 1500 W/m² (±5%)' },
		{ label: 'Curah Hujan', value: '0 – 500 mm/jam (±0.2mm)' },
		{ label: 'Interval Data', value: '1 – 60 menit' },
		{ label: 'Komunikasi', value: '4G/LTE, GSM, Satellite' },
		{ label: 'Power Supply', value: 'Solar Panel + Battery' },
		{ label: 'Platform', value: 'STESY Integration' },
		{ label: 'Standar', value: 'WMO / BMKG Compatible' }
	];

	const variants = [
		{ name: 'BW-700', subtitle: 'Full AWS Station', desc: 'Stasiun cuaca otomatis lengkap dengan 7+ parameter. Tiang met-tower, sensor suite, data logger, dan panel surya — siap pasang.', use: 'Bandara, pertanian skala besar, BMKG, bendungan' },
		{ name: 'BW-710', subtitle: 'Compact AWS', desc: 'Stasiun cuaca kompak dengan parameter esensial: suhu, kelembaban, curah hujan, dan angin. Form factor mini untuk instalasi cepat.', use: 'Perkebunan, pos hujan, sekolah lapang, riset' }
	];

	const useCases = [
		'Pertanian presisi yang bergantung pada data cuaca akurat',
		'Bandara dan helipad yang memerlukan data aviasi real-time',
		'Bendungan yang wajib mencatat data klimatologi harian',
		'Perkebunan sawit dan karet dengan area ribuan hektar',
		'Proyek IKN dan infrastruktur skala nasional'
	];

	const projects = [
		{ name: 'BMKG Stasiun Tangerang', client: 'BMKG', year: '2023' },
		{ name: 'Perkebunan Sawit Kaltim', client: 'PT Sawit Nusantara', year: '2024' },
		{ name: 'Bendungan Margatiga', client: 'BWS Mesuji-Sekampung', year: '2023' },
		{ name: 'IKN Area Sepaku', client: 'OIKN', year: '2024' }
	];

	const features = [
		{ title: 'Multi-Parameter', desc: '7+ parameter cuaca direkam simultan dari satu stasiun: suhu, kelembaban, angin, tekanan, radiasi, hujan.', icon: Cloud },
		{ title: 'WMO Compatible', desc: 'Spesifikasi sensor sesuai standar World Meteorological Organization — data Anda diterima di level internasional.', icon: Check },
		{ title: 'Solar Independent', desc: 'Beroperasi mandiri dengan panel surya dan baterai lithium. Tidak butuh listrik PLN di lokasi remote.', icon: Sun },
		{ title: 'Tahan Angin Kencang', desc: 'Met-tower dan sensor suite dirancang tahan angin hingga 60 m/s. Stabil di cuaca ekstrem Indonesia.', icon: Wind },
		{ title: 'Real-time ke STESY', desc: 'Data dikirim setiap menit ke dashboard STESY. Akses dari smartphone, tablet, atau desktop.', icon: Wifi },
		{ title: 'Tahan Iklim Tropis', desc: 'Semua sensor IP65+, anti-korosi, teruji di suhu dan kelembaban tinggi khas Indonesia.', icon: ShieldCheck }
	];
</script>

<svelte:head>
	<title>AWR — Automatic Weather Recorder — Beacon Engineering</title>
	<meta name="description" content="AWR Beacon Engineering: stasiun cuaca otomatis multi-parameter, WMO compatible, terintegrasi STESY." />
</svelte:head>

<!-- Breadcrumb -->
<div class="bg-[#FAFAFA] border-b" style="border-color: #E5E5E5;">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
		<nav class="flex items-center gap-1.5 text-xs" style="color: #9A9A9A;">
			<a href="/" class="hover:text-[#C8102E] transition-colors">Beranda</a>
			<ChevronRight size={11} />
			<a href="/solusi" class="hover:text-[#C8102E] transition-colors">Solusi</a>
			<ChevronRight size={11} />
			<a href="/solusi/weather-forecast" class="hover:text-[#C8102E] transition-colors">Weather Forecast</a>
			<ChevronRight size={11} />
			<span style="color: #6366F1;" class="font-medium">AWR</span>
		</nav>
	</div>
</div>

<!-- Hero -->
<section class="relative py-16 lg:py-28 overflow-hidden" style="background: linear-gradient(165deg, #FFFFFF 0%, #EDE9FE 30%, #FFF5F6 60%, #FBE9EC 100%);">
	<Ornaments variant="hero" />
	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid lg:grid-cols-2 gap-12 items-center">
			<div class="space-y-6">
				<div class="flex items-center gap-2">
					<span class="text-xs font-semibold uppercase tracking-widest" style="color: #6366F1;">Weather Forecast</span>
					<span style="color: #E5E5E5;">·</span>
					<span class="text-xs" style="color: #9A9A9A;">AWS Station</span>
				</div>
				<h1
					class="font-heading text-3xl sm:text-4xl lg:text-[52px] font-extrabold leading-tight"
					style="letter-spacing: -0.03em; color: #1A1A1A; opacity: {mounted ? 1 : 0}; transform: translateY({mounted ? 0 : 20}px); transition: all 0.8s cubic-bezier(0.16,1,0.3,1) 0.15s;"
				>
					Data Cuaca Akurat <span style="color: #C8102E;">Setiap Menit</span>
				</h1>
				<div>
					<span class="font-heading text-xl font-bold" style="color: #1A1A1A;">AWR</span>
					<span class="text-sm ml-2" style="color: #5C5C5C;">— Automatic Weather Recorder</span>
				</div>
				<p class="text-base leading-relaxed" style="color: #5C5C5C;">
					Cuaca tidak bisa dilawan, tapi bisa diprediksi — dengan data akurat setiap menit. Stasiun cuaca otomatis 7+ parameter, standar WMO, terintegrasi STESY.
				</p>
				<div class="flex flex-wrap gap-3">
					<a href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20ingin%20konsultasi%20tentang%20AWR." target="_blank" rel="noopener"
						class="inline-flex items-center gap-2 px-6 py-3 rounded-[12px] text-sm font-semibold text-white transition-all hover:scale-[1.02]"
						style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 12px rgba(200,16,46,0.25);">
						<MessageCircle size={15} />
						Konsultasi AWR
					</a>
					<button class="inline-flex items-center gap-2 px-6 py-3 rounded-[12px] text-sm font-semibold transition-all hover:bg-[#EDE9FE]" style="border: 1.5px solid #E5E5E5; color: #1A1A1A;">
						<Download size={15} />
						Download Datasheet
					</button>
				</div>
			</div>

			<div class="relative flex justify-center">
				<div class="relative w-64 h-80 rounded-3xl overflow-hidden" style="background: linear-gradient(180deg, #6366F1 0%, #4338CA 100%); box-shadow: 0 20px 60px rgba(99,102,241,0.2);">
					<div class="absolute inset-0 flex flex-col items-center justify-center p-6 text-white">
						<Cloud size={48} class="mb-4 opacity-80" />
						<span class="font-heading text-3xl font-extrabold">AWR</span>
						<span class="text-xs mt-1 opacity-70 uppercase tracking-widest">BW-700</span>
						<div class="mt-6 w-full space-y-2">
							<div class="flex justify-between text-xs opacity-80">
								<span>Temp</span>
								<span class="font-mono tabular-nums">28.4°C</span>
							</div>
							<div class="flex justify-between text-xs opacity-80">
								<span>Wind</span>
								<span class="font-mono tabular-nums">12.3 km/h NW</span>
							</div>
							<div class="flex justify-between text-xs opacity-80">
								<span>Status</span>
								<span class="flex items-center gap-1"><span class="w-1.5 h-1.5 rounded-full bg-green-400"></span>Online</span>
							</div>
						</div>
					</div>
				</div>
				<div class="absolute -bottom-3 -right-3 px-4 py-2 rounded-xl bg-white text-xs font-semibold" style="border: 1px solid #E5E5E5; box-shadow: 0 4px 12px rgba(0,0,0,0.06); color: #6366F1;">
					WMO Compatible
				</div>
			</div>
		</div>
	</div>

	<div class="absolute bottom-0 left-0 right-0 pointer-events-none" style="transform: translateY(1px);">
		<svg viewBox="0 0 1440 50" fill="none" preserveAspectRatio="none" class="w-full h-10"><path d="M0,50 L0,25 Q360,0 720,25 T1440,25 L1440,50 Z" fill="white"/></svg>
	</div>
</section>

<!-- Use Cases -->
<section class="relative py-16 lg:py-20 bg-white overflow-hidden">
	<Ornaments />
	<div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
		<h2 class="font-heading text-2xl sm:text-3xl font-bold mb-8" style="color: #1A1A1A;">Untuk Anda yang Bertanggung Jawab Atas...</h2>
		<div class="flex flex-wrap justify-center gap-3">
			{#each useCases as useCase}
				<div class="px-5 py-3 rounded-xl text-sm font-medium bg-[#FAFAFA] transition-all hover:bg-[#EDE9FE] hover:-translate-y-0.5" style="border: 1px solid #E5E5E5; color: #3A3A3A;">
					{useCase}
				</div>
			{/each}
		</div>
	</div>
</section>

<!-- Features -->
<section class="relative py-16 lg:py-24 overflow-hidden" style="background: linear-gradient(180deg, #FAFAFA 0%, #FFF5F6 100%);">
	<Ornaments variant="dense" />
	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="text-center mb-12">
			<span class="text-xs font-semibold uppercase tracking-widest" style="color: #6366F1;">Keunggulan</span>
			<h2 class="font-heading text-3xl sm:text-4xl font-bold mt-3" style="color: #1A1A1A;">Mengapa AWR Beacon</h2>
		</div>
		<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
			{#each features as feat, i}
				<div
					class="group p-6 rounded-2xl bg-white hover:-translate-y-1 hover:shadow-lg transition-all duration-300"
					style="border: 1px solid #E5E5E5; opacity: {mounted ? 1 : 0}; transform: translateY({mounted ? 0 : 24}px); transition: opacity 0.6s ease-out {0.3 + i * 0.08}s, transform 0.6s ease-out {0.3 + i * 0.08}s, box-shadow 0.3s;"
				>
					<div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4 transition-transform group-hover:scale-110" style="background: #EDE9FE;">
						<svelte:component this={feat.icon} size={18} style="color: #6366F1;" />
					</div>
					<h3 class="font-heading text-base font-bold mb-2 group-hover:text-[#6366F1] transition-colors" style="color: #1A1A1A;">{feat.title}</h3>
					<p class="text-sm leading-relaxed" style="color: #5C5C5C;">{feat.desc}</p>
				</div>
			{/each}
		</div>
	</div>
</section>

<!-- Specs -->
<section class="relative py-16 lg:py-24 bg-white overflow-hidden">
	<Ornaments />
	<div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="text-center mb-10">
			<span class="text-xs font-semibold uppercase tracking-widest" style="color: #6366F1;">Technical Specs</span>
			<h2 class="font-heading text-3xl sm:text-4xl font-bold mt-3" style="color: #1A1A1A;">Spesifikasi Teknis</h2>
		</div>
		<div class="rounded-2xl overflow-hidden" style="border: 1px solid #E5E5E5;">
			{#each specs as spec, i}
				<div class="flex items-center justify-between px-6 py-4 {i % 2 === 0 ? 'bg-[#FAFAFA]' : 'bg-white'}" style="border-bottom: 1px solid #E5E5E5;">
					<span class="text-sm font-medium" style="color: #5C5C5C;">{spec.label}</span>
					<span class="text-sm font-semibold font-mono tabular-nums" style="color: #1A1A1A;">{spec.value}</span>
				</div>
			{/each}
		</div>
		<div class="text-center mt-6">
			<button class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl text-sm font-semibold transition-all hover:scale-[1.02]" style="background: #EDE9FE; color: #6366F1;">
				<Download size={14} />
				Download Datasheet PDF
			</button>
		</div>
	</div>
</section>

<!-- Variants -->
<section class="relative py-16 lg:py-20 overflow-hidden" style="background: linear-gradient(180deg, #FAFAFA 0%, #EDE9FE 100%);">
	<Ornaments variant="dense" />
	<div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="text-center mb-10">
			<span class="text-xs font-semibold uppercase tracking-widest" style="color: #6366F1;">Varian</span>
			<h2 class="font-heading text-3xl font-bold mt-3" style="color: #1A1A1A;">Pilih Varian yang Tepat</h2>
		</div>
		<div class="grid md:grid-cols-2 gap-6">
			{#each variants as v}
				<div class="p-8 rounded-2xl bg-white hover:shadow-lg transition-all" style="border: 1px solid #E5E5E5;">
					<span class="font-heading text-2xl font-bold" style="color: #6366F1;">{v.name}</span>
					<span class="block text-xs uppercase tracking-wider font-medium mt-1 mb-3" style="color: #9A9A9A;">{v.subtitle}</span>
					<p class="text-sm leading-relaxed mb-4" style="color: #5C5C5C;">{v.desc}</p>
					<div class="flex items-center gap-2 text-xs" style="color: #9A9A9A;">
						<span class="font-semibold">Cocok untuk:</span>
						<span>{v.use}</span>
					</div>
				</div>
			{/each}
		</div>
	</div>
</section>

<!-- Track Record -->
<section class="relative py-16 lg:py-20 bg-white overflow-hidden">
	<Ornaments />
	<div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="text-center mb-10">
			<span class="text-xs font-semibold uppercase tracking-widest" style="color: #6366F1;">Track Record</span>
			<h2 class="font-heading text-3xl font-bold mt-3" style="color: #1A1A1A;">Sudah Terpasang Di</h2>
		</div>
		<div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
			{#each projects as proj}
				<div class="p-5 rounded-2xl bg-[#FAFAFA] hover:bg-[#EDE9FE] transition-all" style="border: 1px solid #E5E5E5;">
					<div class="flex items-center gap-2 mb-2">
						<span class="text-[10px] font-semibold px-2 py-0.5 rounded-md text-white tabular-nums" style="background: #6366F1;">{proj.year}</span>
						<div class="w-1.5 h-1.5 rounded-full bg-[#1B7F3A] animate-pulse-dot"></div>
					</div>
					<h3 class="font-heading text-sm font-bold" style="color: #1A1A1A;">{proj.name}</h3>
					<p class="text-xs mt-1" style="color: #5C5C5C;">{proj.client}</p>
				</div>
			{/each}
		</div>
	</div>
</section>

<!-- CTA -->
<section class="relative py-16 lg:py-20 overflow-hidden" style="background: linear-gradient(135deg, #FBE9EC 0%, #F8D7DC 100%);">
	<Ornaments variant="dense" />
	<div class="relative z-10 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
		<h2 class="font-heading text-2xl sm:text-3xl font-bold mb-4" style="color: #1A1A1A;">Tertarik dengan AWR Beacon?</h2>
		<p class="text-sm mb-8" style="color: #5C5C5C;">Tim engineer kami akan bantu Anda memilih stasiun cuaca yang tepat untuk lokasi Anda.</p>
		<div class="flex flex-col sm:flex-row items-center justify-center gap-3">
			<a href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20ingin%20konsultasi%20tentang%20AWR%20untuk%20proyek%20saya." target="_blank" rel="noopener"
				class="inline-flex items-center gap-2 px-7 py-3.5 rounded-[12px] text-sm font-semibold text-white transition-all hover:scale-[1.02]"
				style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 16px rgba(200,16,46,0.25);">
				<MessageCircle size={16} />
				Konsultasi AWR
			</a>
			<a href="/solusi/weather-forecast" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-[12px] text-sm font-semibold transition-all hover:bg-white/60" style="border: 1.5px solid #6366F1; color: #6366F1; background: white;">
				<ArrowRight size={14} />
				Lihat Produk Weather Forecast Lainnya
			</a>
		</div>
	</div>
</section>
