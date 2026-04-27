<script lang="ts">
	import { onMount } from 'svelte';
	import { ArrowRight, Check, MessageCircle, Download, ChevronRight, Beaker, Droplets, Thermometer, Wifi, ShieldCheck, RefreshCw } from '@lucide/svelte';
	import Ornaments from '$lib/components/Ornaments.svelte';

	let mounted = $state(false);
	onMount(() => { mounted = true; });

	const specs = [
		{ label: 'Parameter pH', value: '0 – 14 pH (±0.1)' },
		{ label: 'Turbidity', value: '0 – 4000 NTU (±2%)' },
		{ label: 'Dissolved Oxygen', value: '0 – 20 mg/L (±0.2)' },
		{ label: 'TDS', value: '0 – 50,000 mg/L' },
		{ label: 'Suhu Air', value: '-5°C – 50°C (±0.5°C)' },
		{ label: 'Conductivity', value: '0 – 200 mS/cm' },
		{ label: 'Proteksi', value: 'IP68' },
		{ label: 'Self-cleaning', value: 'Auto wiper + air purge' },
		{ label: 'Komunikasi', value: '4G/LTE, GSM' },
		{ label: 'Power Supply', value: 'Solar Panel + Battery' },
		{ label: 'Platform', value: 'STESY Integration' },
		{ label: 'Standar', value: 'ISO 17025 Compatible' }
	];

	const variants = [
		{ name: 'BQ-500', subtitle: 'Multi-Parameter Probe', desc: 'Sonde multi-parameter terintegrasi: pH, DO, turbidity, TDS, suhu, dan conductivity dalam satu probe. Auto-cleaning terjadwal.', use: 'Sungai utama, intake PDAM, outlet IPAL' },
		{ name: 'BQ-510', subtitle: 'Modular Sensor Array', desc: 'Konfigurasi modular — pilih parameter yang dibutuhkan. Setiap sensor bisa diganti individual tanpa mengganggu sistem.', use: 'Riset, laboratorium lapangan, custom monitoring' }
	];

	const useCases = [
		'Sungai yang menjadi sumber air baku PDAM',
		'Outlet industri yang wajib dipantau kualitas limbahnya',
		'Waduk dengan risiko eutrofikasi dan algae bloom',
		'Kawasan tambang yang berpotensi mencemari perairan',
		'Estuari dan muara dengan dinamika salinitas tinggi'
	];

	const projects = [
		{ name: 'Sungai Citarum Hilir', client: 'BWS Citarum', year: '2024' },
		{ name: 'Waduk Jatiluhur', client: 'Perum Jasa Tirta II', year: '2023' },
		{ name: 'Intake PDAM Surakarta', client: 'PDAM Kota Surakarta', year: '2023' },
		{ name: 'Sungai Brantas Tengah', client: 'BBWS Brantas', year: '2024' }
	];

	const features = [
		{ title: 'Multi-Parameter', desc: 'Satu probe mengukur 6+ parameter kualitas air secara simultan. Hemat ruang, hemat biaya instalasi.', icon: Beaker },
		{ title: 'Auto Self-cleaning', desc: 'Wiper otomatis dan air purge membersihkan sensor secara terjadwal — akurasi tetap terjaga tanpa turun ke lapangan.', icon: RefreshCw },
		{ title: 'Lab-grade Accuracy', desc: 'Akurasi setara peralatan laboratorium. Data bisa langsung digunakan untuk pelaporan regulasi.', icon: Thermometer },
		{ title: 'Cloud Data Real-time', desc: 'Setiap pembacaan langsung masuk ke STESY. Monitoring trend kualitas air dari mana saja.', icon: Wifi },
		{ title: 'Alert Pencemaran', desc: 'Threshold otomatis untuk parameter kritis. Notifikasi instan saat terjadi anomali kualitas air.', icon: Droplets },
		{ title: 'IP68 Submersible', desc: 'Probe terendam penuh di air secara permanen. Dirancang untuk sungai deras dan kedalaman hingga 10m.', icon: ShieldCheck }
	];
</script>

<svelte:head>
	<title>AWQR — Automatic Water Quality Recorder — Beacon Engineering</title>
	<meta name="description" content="AWQR Beacon Engineering: monitoring kualitas air real-time — pH, turbidity, DO, TDS, suhu — data langsung ke dashboard STESY." />
</svelte:head>

<!-- Breadcrumb -->
<div class="bg-[#FAFAFA] border-b" style="border-color: #E5E5E5;">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
		<nav class="flex items-center gap-1.5 text-xs" style="color: #9A9A9A;">
			<a href="/" class="hover:text-[#C8102E] transition-colors">Beranda</a>
			<ChevronRight size={11} />
			<a href="/solusi" class="hover:text-[#C8102E] transition-colors">Solusi</a>
			<ChevronRight size={11} />
			<a href="/solusi/water-security" class="hover:text-[#C8102E] transition-colors">Water Security</a>
			<ChevronRight size={11} />
			<span style="color: #C8102E;" class="font-medium">AWQR</span>
		</nav>
	</div>
</div>

<!-- Hero -->
<section class="relative py-16 lg:py-28 overflow-hidden" style="background: linear-gradient(165deg, #FFFFFF 0%, #EBF8FF 30%, #FFF5F6 60%, #FBE9EC 100%);">
	<Ornaments variant="hero" />
	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid lg:grid-cols-2 gap-12 items-center">
			<div class="space-y-6">
				<div class="flex items-center gap-2">
					<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">Water Security</span>
					<span style="color: #E5E5E5;">·</span>
					<span class="text-xs" style="color: #9A9A9A;">Water Quality</span>
				</div>
				<h1
					class="font-heading text-3xl sm:text-4xl lg:text-[52px] font-extrabold leading-tight"
					style="letter-spacing: -0.03em; color: #1A1A1A; opacity: {mounted ? 1 : 0}; transform: translateY({mounted ? 0 : 20}px); transition: all 0.8s cubic-bezier(0.16,1,0.3,1) 0.15s;"
				>
					Deteksi Pencemaran <span style="color: #C8102E;">Sebelum Sampai ke Warga</span>
				</h1>
				<div>
					<span class="font-heading text-xl font-bold" style="color: #1A1A1A;">AWQR</span>
					<span class="text-sm ml-2" style="color: #5C5C5C;">— Automatic Water Quality Recorder</span>
				</div>
				<p class="text-base leading-relaxed" style="color: #5C5C5C;">
					Logam berat, sedimentasi, limbah — terdeteksi sebelum sampai ke ledeng masyarakat. Monitoring kualitas air real-time: pH, turbidity, DO, TDS, suhu, dan lebih banyak lagi.
				</p>
				<div class="flex flex-wrap gap-3">
					<a href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20ingin%20konsultasi%20tentang%20AWQR." target="_blank" rel="noopener"
						class="inline-flex items-center gap-2 px-6 py-3 rounded-[12px] text-sm font-semibold text-white transition-all hover:scale-[1.02]"
						style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 12px rgba(200,16,46,0.25);">
						<MessageCircle size={15} />
						Konsultasi AWQR
					</a>
					<button class="inline-flex items-center gap-2 px-6 py-3 rounded-[12px] text-sm font-semibold transition-all hover:bg-[#FBE9EC]" style="border: 1.5px solid #E5E5E5; color: #1A1A1A;">
						<Download size={15} />
						Download Datasheet
					</button>
				</div>
			</div>

			<div class="relative flex justify-center">
				<div class="relative w-64 h-80 rounded-3xl overflow-hidden" style="background: linear-gradient(180deg, #06B6D4 0%, #0E7490 100%); box-shadow: 0 20px 60px rgba(6,182,212,0.2);">
					<div class="absolute inset-0 flex flex-col items-center justify-center p-6 text-white">
						<Beaker size={48} class="mb-4 opacity-80" />
						<span class="font-heading text-3xl font-extrabold">AWQR</span>
						<span class="text-xs mt-1 opacity-70 uppercase tracking-widest">BQ-500</span>
						<div class="mt-6 w-full space-y-2">
							<div class="flex justify-between text-xs opacity-80">
								<span>pH</span>
								<span class="font-mono tabular-nums">7.24</span>
							</div>
							<div class="flex justify-between text-xs opacity-80">
								<span>Turb.</span>
								<span class="font-mono tabular-nums">18.6 NTU</span>
							</div>
							<div class="flex justify-between text-xs opacity-80">
								<span>Status</span>
								<span class="flex items-center gap-1"><span class="w-1.5 h-1.5 rounded-full bg-green-400"></span>Normal</span>
							</div>
						</div>
					</div>
				</div>
				<div class="absolute -bottom-3 -right-3 px-4 py-2 rounded-xl bg-white text-xs font-semibold" style="border: 1px solid #E5E5E5; box-shadow: 0 4px 12px rgba(0,0,0,0.06); color: #C8102E;">
					Auto Self-cleaning
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
				<div class="px-5 py-3 rounded-xl text-sm font-medium bg-[#FAFAFA] transition-all hover:bg-[#FBE9EC] hover:-translate-y-0.5" style="border: 1px solid #E5E5E5; color: #3A3A3A;">
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
			<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">Keunggulan</span>
			<h2 class="font-heading text-3xl sm:text-4xl font-bold mt-3" style="color: #1A1A1A;">Mengapa AWQR Beacon</h2>
		</div>
		<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
			{#each features as feat, i}
				<div
					class="group p-6 rounded-2xl bg-white hover:-translate-y-1 hover:shadow-lg transition-all duration-300"
					style="border: 1px solid #E5E5E5; opacity: {mounted ? 1 : 0}; transform: translateY({mounted ? 0 : 24}px); transition: opacity 0.6s ease-out {0.3 + i * 0.08}s, transform 0.6s ease-out {0.3 + i * 0.08}s, box-shadow 0.3s;"
				>
					<div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4 transition-transform group-hover:scale-110" style="background: #FBE9EC;">
						<svelte:component this={feat.icon} size={18} style="color: #C8102E;" />
					</div>
					<h3 class="font-heading text-base font-bold mb-2 group-hover:text-[#C8102E] transition-colors" style="color: #1A1A1A;">{feat.title}</h3>
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
			<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">Technical Specs</span>
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
			<button class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl text-sm font-semibold transition-all hover:scale-[1.02]" style="background: #FBE9EC; color: #C8102E;">
				<Download size={14} />
				Download Datasheet PDF
			</button>
		</div>
	</div>
</section>

<!-- Variants -->
<section class="relative py-16 lg:py-20 overflow-hidden" style="background: linear-gradient(180deg, #FAFAFA 0%, #FBE9EC 100%);">
	<Ornaments variant="dense" />
	<div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="text-center mb-10">
			<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">Varian</span>
			<h2 class="font-heading text-3xl font-bold mt-3" style="color: #1A1A1A;">Pilih Varian yang Tepat</h2>
		</div>
		<div class="grid md:grid-cols-2 gap-6">
			{#each variants as v}
				<div class="p-8 rounded-2xl bg-white hover:shadow-lg transition-all" style="border: 1px solid #E5E5E5;">
					<span class="font-heading text-2xl font-bold" style="color: #C8102E;">{v.name}</span>
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
			<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">Track Record</span>
			<h2 class="font-heading text-3xl font-bold mt-3" style="color: #1A1A1A;">Sudah Terpasang Di</h2>
		</div>
		<div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
			{#each projects as proj}
				<div class="p-5 rounded-2xl bg-[#FAFAFA] hover:bg-[#FBE9EC] transition-all" style="border: 1px solid #E5E5E5;">
					<div class="flex items-center gap-2 mb-2">
						<span class="text-[10px] font-semibold px-2 py-0.5 rounded-md text-white tabular-nums" style="background: #C8102E;">{proj.year}</span>
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
		<h2 class="font-heading text-2xl sm:text-3xl font-bold mb-4" style="color: #1A1A1A;">Tertarik dengan AWQR Beacon?</h2>
		<p class="text-sm mb-8" style="color: #5C5C5C;">Tim engineer kami akan bantu Anda memilih konfigurasi monitoring kualitas air yang tepat.</p>
		<div class="flex flex-col sm:flex-row items-center justify-center gap-3">
			<a href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20ingin%20konsultasi%20tentang%20AWQR%20untuk%20proyek%20saya." target="_blank" rel="noopener"
				class="inline-flex items-center gap-2 px-7 py-3.5 rounded-[12px] text-sm font-semibold text-white transition-all hover:scale-[1.02]"
				style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 16px rgba(200,16,46,0.25);">
				<MessageCircle size={16} />
				Konsultasi AWQR
			</a>
			<a href="/solusi/water-security" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-[12px] text-sm font-semibold transition-all hover:bg-white/60" style="border: 1.5px solid #C8102E; color: #C8102E; background: white;">
				<ArrowRight size={14} />
				Lihat Produk Water Security Lainnya
			</a>
		</div>
	</div>
</section>
