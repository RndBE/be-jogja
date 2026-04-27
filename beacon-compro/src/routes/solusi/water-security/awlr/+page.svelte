<script lang="ts">
	import { ArrowRight, Check, MessageCircle, Download, ChevronRight, Waves } from '@lucide/svelte';
	import Ornaments from '$lib/components/Ornaments.svelte';

	const specs = [
		{ label: 'Range Pengukuran', value: '0 – 30 m' },
		{ label: 'Akurasi', value: '±1 mm' },
		{ label: 'Resolusi', value: '0.1 mm' },
		{ label: 'Tipe Sensor', value: 'Pressure transducer' },
		{ label: 'Proteksi', value: 'IP68' },
		{ label: 'Interval Data', value: '1 – 60 menit (konfigurabel)' },
		{ label: 'Komunikasi', value: '4G/LTE, GSM, Satellite' },
		{ label: 'Power Supply', value: 'Solar Panel + Battery' },
		{ label: 'Kapasitas Logger', value: '100.000+ data points' },
		{ label: 'Operasi Suhu', value: '-20°C sampai +60°C' },
		{ label: 'Platform', value: 'STESY Integration' },
		{ label: 'Standar', value: 'SNI Compliant' }
	];

	const variants = [
		{ name: 'BL-1100', desc: 'Varian utama untuk pos hidrologi bendungan dan sungai besar. Full feature, multi-sensor.', use: 'Bendungan, sungai besar, DAS utama' },
		{ name: 'BL-110', desc: 'Varian kompak untuk sumur pantau, saluran irigasi, dan titik monitoring terdistribusi.', use: 'Sumur pantau, irigasi, monitoring terdistribusi' }
	];

	const useCases = [
		'Sistem irigasi yang harus presisi',
		'Bendungan yang tidak boleh kehilangan data sehari pun',
		'Sungai yang melayani jutaan jiwa',
		'Sumur pantau yang tersebar dan sulit diakses',
		'Pos hidrologi BBWS/BWS standar SNI'
	];

	const projects = [
		{ name: 'Bendungan Cipanas', client: 'BWS Ciliwung-Cisadane', year: '2022' },
		{ name: 'Bendungan Sepaku IKN', client: 'BWS Kalimantan IV', year: '2024' },
		{ name: 'Bendungan Keureuto Aceh', client: 'BWS Sumatera I', year: '2023' },
		{ name: 'Sungai Bengawan Solo', client: 'BBWS Bengawan Solo', year: '2022' },
		{ name: 'DAS Bogowonto', client: 'BBWS Serayu Opak', year: '2023' }
	];

	const features = [
		{ title: 'Akurasi Lab-Grade', desc: 'Sensor pressure transducer dengan akurasi ±1mm, melebihi standar SNI untuk pos hidrologi.' },
		{ title: 'Real-time 24/7', desc: 'Data terkirim setiap interval yang dikonfigurasi langsung ke dashboard STESY.' },
		{ title: 'Tahan Iklim Tropis', desc: 'IP68 waterproof, teruji di banjir, sungai deras, dan suhu ekstrem Indonesia.' },
		{ title: 'Solar Powered', desc: 'Panel surya + baterai backup — beroperasi tanpa listrik PLN di lokasi remote.' },
		{ title: 'Multi-Konektivitas', desc: '4G/LTE, GSM, dan opsi satelit untuk area tanpa sinyal seluler.' },
		{ title: 'Alert Otomatis', desc: 'Alarm threshold otomatis via SMS dan notifikasi STESY saat level kritis.' }
	];
</script>

<svelte:head>
	<title>AWLR — Automatic Water Level Recorder — Beacon Engineering</title>
	<meta name="description" content="AWLR Beacon Engineering: pengukuran ketinggian muka air otomatis, akurasi ±1mm, 100% online, terkirim langsung ke STESY." />
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
			<span style="color: #C8102E;" class="font-medium">AWLR</span>
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
					<span class="text-xs" style="color: #9A9A9A;">Produk Unggulan</span>
				</div>
				<h1 class="font-heading text-3xl sm:text-4xl lg:text-[52px] font-extrabold leading-tight" style="letter-spacing: -0.03em; color: #1A1A1A;">
					Karena Setiap Sentimeter <span style="color: #C8102E;">Berarti</span>
				</h1>
				<div>
					<span class="font-heading text-xl font-bold" style="color: #1A1A1A;">AWLR</span>
					<span class="text-sm ml-2" style="color: #5C5C5C;">— Automatic Water Level Recorder</span>
				</div>
				<p class="text-base leading-relaxed" style="color: #5C5C5C;">
					Pengukuran ketinggian muka air otomatis, 100% online, terkirim langsung ke STESY. Akurasi ±1mm, IP68, solar-powered — siap di pos hidrologi manapun di Indonesia.
				</p>
				<div class="flex flex-wrap gap-3">
					<a href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20ingin%20konsultasi%20tentang%20AWLR." target="_blank" rel="noopener"
						class="inline-flex items-center gap-2 px-6 py-3 rounded-[12px] text-sm font-semibold text-white transition-all hover:scale-[1.02]"
						style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 12px rgba(200,16,46,0.25);">
						<MessageCircle size={15} />
						Konsultasi AWLR
					</a>
					<button class="inline-flex items-center gap-2 px-6 py-3 rounded-[12px] text-sm font-semibold transition-all hover:bg-[#FBE9EC]" style="border: 1.5px solid #E5E5E5; color: #1A1A1A;">
						<Download size={15} />
						Download Datasheet
					</button>
				</div>
			</div>

			<!-- Product Visual Mockup -->
			<div class="relative flex justify-center">
				<div class="relative w-64 h-80 rounded-3xl overflow-hidden" style="background: linear-gradient(180deg, #0EA5E9 0%, #0369A1 100%); box-shadow: 0 20px 60px rgba(14,165,233,0.2);">
					<!-- Simulated product visual -->
					<div class="absolute inset-0 flex flex-col items-center justify-center p-6 text-white">
						<Waves size={48} class="mb-4 opacity-80" />
						<span class="font-heading text-3xl font-extrabold">AWLR</span>
						<span class="text-xs mt-1 opacity-70 uppercase tracking-widest">BL-1100</span>
						<div class="mt-6 w-full space-y-2">
							<div class="flex justify-between text-xs opacity-80">
								<span>Level</span>
								<span class="font-mono tabular-nums">142.3 m</span>
							</div>
							<div class="h-1 rounded-full bg-white/20">
								<div class="h-full rounded-full bg-white/80" style="width: 67%;"></div>
							</div>
							<div class="flex justify-between text-xs opacity-80">
								<span>Status</span>
								<span class="flex items-center gap-1"><span class="w-1.5 h-1.5 rounded-full bg-green-400"></span>Online</span>
							</div>
						</div>
					</div>
				</div>
				<!-- Float badge -->
				<div class="absolute -bottom-3 -right-3 px-4 py-2 rounded-xl bg-white text-xs font-semibold" style="border: 1px solid #E5E5E5; box-shadow: 0 4px 12px rgba(0,0,0,0.06); color: #C8102E;">
					SNI Compliant ✓
				</div>
			</div>
		</div>
	</div>

	<div class="absolute bottom-0 left-0 right-0 pointer-events-none" style="transform: translateY(1px);">
		<svg viewBox="0 0 1440 50" fill="none" preserveAspectRatio="none" class="w-full h-10"><path d="M0,50 L0,25 Q360,0 720,25 T1440,25 L1440,50 Z" fill="white"/></svg>
	</div>
</section>

<!-- "Untuk Anda yang..." -->
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

<!-- 6 Keunggulan -->
<section class="relative py-16 lg:py-24 overflow-hidden" style="background: linear-gradient(180deg, #FAFAFA 0%, #FFF5F6 100%);">
	<Ornaments variant="dense" />
	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="text-center mb-12">
			<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">Keunggulan</span>
			<h2 class="font-heading text-3xl sm:text-4xl font-bold mt-3" style="color: #1A1A1A;">Mengapa AWLR Beacon</h2>
		</div>
		<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
			{#each features as feat, i}
				<div class="group p-6 rounded-2xl bg-white hover:-translate-y-1 hover:shadow-lg transition-all duration-300" style="border: 1px solid #E5E5E5;">
					<div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4 transition-transform group-hover:scale-110" style="background: #FBE9EC;">
						<Check size={18} style="color: #C8102E;" />
					</div>
					<h3 class="font-heading text-base font-bold mb-2 group-hover:text-[#C8102E] transition-colors" style="color: #1A1A1A;">{feat.title}</h3>
					<p class="text-sm leading-relaxed" style="color: #5C5C5C;">{feat.desc}</p>
				</div>
			{/each}
		</div>
	</div>
</section>

<!-- Spesifikasi Teknis -->
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

<!-- Varian -->
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
					<p class="text-sm leading-relaxed mt-3 mb-4" style="color: #5C5C5C;">{v.desc}</p>
					<div class="flex items-center gap-2 text-xs" style="color: #9A9A9A;">
						<span class="font-semibold">Cocok untuk:</span>
						<span>{v.use}</span>
					</div>
				</div>
			{/each}
		</div>
	</div>
</section>

<!-- Sudah Terpasang Di -->
<section class="relative py-16 lg:py-20 bg-white overflow-hidden">
	<Ornaments />
	<div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="text-center mb-10">
			<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">Track Record</span>
			<h2 class="font-heading text-3xl font-bold mt-3" style="color: #1A1A1A;">Sudah Terpasang Di</h2>
		</div>
		<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
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

<!-- CTA Penutup -->
<section class="relative py-16 lg:py-20 overflow-hidden" style="background: linear-gradient(135deg, #FBE9EC 0%, #F8D7DC 100%);">
	<Ornaments variant="dense" />
	<div class="relative z-10 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
		<h2 class="font-heading text-2xl sm:text-3xl font-bold mb-4" style="color: #1A1A1A;">Tertarik dengan AWLR Beacon?</h2>
		<p class="text-sm mb-8" style="color: #5C5C5C;">Tim engineer kami akan bantu Anda memilih konfigurasi yang tepat untuk lokasi proyek Anda.</p>
		<div class="flex flex-col sm:flex-row items-center justify-center gap-3">
			<a href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20ingin%20konsultasi%20tentang%20AWLR%20untuk%20proyek%20saya." target="_blank" rel="noopener"
				class="inline-flex items-center gap-2 px-7 py-3.5 rounded-[12px] text-sm font-semibold text-white transition-all hover:scale-[1.02]"
				style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 16px rgba(200,16,46,0.25);">
				<MessageCircle size={16} />
				Konsultasi AWLR
			</a>
			<a href="/solusi/water-security" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-[12px] text-sm font-semibold transition-all hover:bg-white/60" style="border: 1.5px solid #C8102E; color: #C8102E; background: white;">
				<ArrowRight size={14} />
				Lihat Produk Water Security Lainnya
			</a>
		</div>
	</div>
</section>
