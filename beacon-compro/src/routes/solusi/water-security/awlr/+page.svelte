<script lang="ts">
	import { ArrowRight, Check, MessageCircle, Download, ChevronRight, Waves } from '@lucide/svelte';
	import Ornaments from '$lib/components/Ornaments.svelte';
	import productImage from '$lib/assets/product_awlr.webp';

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
		{ name: 'BL-1100', desc: 'Varian utama untuk pos hidrologi bendungan dan sungai besar. Full feature, multi-sensor.', use: 'Bendungan, sungai besar, DAS utama', image: productImage },
		{ name: 'BL-110', desc: 'Varian kompak untuk sumur pantau, saluran irigasi, dan titik monitoring terdistribusi.', use: 'Sumur pantau, irigasi, monitoring terdistribusi', image: null }
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

	<div class="relative z-10 max-w-[1400px] mx-auto px-6 sm:px-8 lg:px-12">
		<div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
			<div class="space-y-8">
				<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest" style="background: rgba(200,16,46,0.08); color: #C8102E; border: 1px solid rgba(200,16,46,0.15);">
					<span class="w-1.5 h-1.5 rounded-full" style="background: #C8102E;"></span>
					Water Security
					<span class="mx-1" style="color: #C8102E; opacity: 0.5;">/</span>
					Produk Unggulan
				</div>
				
				<h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-[1.05] tracking-tighter text-zinc-950">
					Karena Setiap Sentimeter <br /> <span style="color: #C8102E;">Berarti</span>
				</h1>
				
				<div>
					<span class="font-heading text-2xl font-bold text-zinc-950">AWLR</span>
					<span class="text-base ml-2 text-zinc-500 font-medium">— Automatic Water Level Recorder</span>
				</div>
				
				<p class="text-lg leading-relaxed text-zinc-600 max-w-[50ch] font-medium">
					Pengukuran ketinggian muka air otomatis, 100% online, terkirim langsung ke STESY. Akurasi ±1mm, IP68, solar-powered — siap di pos hidrologi manapun di Indonesia.
				</p>
				
				<div class="flex flex-wrap gap-4 pt-2">
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

			<!-- Product Visual Mockup using Uploaded Image -->
			<div class="relative flex justify-center lg:justify-end">
				<div class="relative w-full max-w-[460px] aspect-[4/5] sm:aspect-square rounded-[2rem] overflow-hidden group" style="background: #FAFAFA; border: 1px solid #E5E5E5; box-shadow: 0 30px 60px -15px rgba(0,0,0,0.08), inset 0 2px 4px rgba(255,255,255,1);">
                    <div class="absolute inset-0 bg-gradient-to-tr from-[#C8102E]/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none z-10"></div>
					<img src={productImage} alt="Varian Produk AWLR Beacon" class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105" />
					
					<!-- Inner Shadow Overlay for depth -->
					<div class="absolute inset-0 pointer-events-none" style="box-shadow: inset 0 0 0 1px rgba(0,0,0,0.04);"></div>
				</div>
				
				<!-- Premium Float Badge -->
				<div class="absolute -bottom-6 -left-4 sm:left-[-10%] px-5 py-4 rounded-2xl bg-white/85 backdrop-blur-xl z-20 hover:-translate-y-1 transition-transform cursor-default" style="border: 1px solid rgba(255,255,255,0.8); box-shadow: 0 20px 40px -10px rgba(0,0,0,0.1), inset 0 1px 0 rgba(255,255,255,0.6);">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-[#1B7F3A]/10 flex items-center justify-center">
                            <Check size={18} class="text-[#1B7F3A]" />
                        </div>
                        <div class="pr-4">
                            <span class="block text-[10px] font-bold uppercase tracking-[0.15em] text-zinc-500 mb-0.5">Sertifikasi Resmi</span>
                            <span class="block text-sm font-extrabold text-zinc-950 font-heading">SNI Compliant</span>
                        </div>
                    </div>
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

<!-- Varian (Bento 2.0 Architecture) -->
<section class="relative py-24 lg:py-32 overflow-hidden" style="background: linear-gradient(180deg, #FAFAFA 0%, #FBE9EC 100%);">
	<Ornaments variant="dense" />
	<div class="relative z-10 max-w-[1400px] mx-auto px-6 sm:px-8 lg:px-12">
		<div class="max-w-4xl mb-16 space-y-6 text-center mx-auto">
			<div class="inline-flex items-center justify-center gap-2 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest mx-auto" style="background: rgba(200,16,46,0.08); color: #C8102E; border: 1px solid rgba(200,16,46,0.15);">
				<span class="w-1.5 h-1.5 rounded-full" style="background: #C8102E;"></span>
				Varian Perangkat
			</div>
			<h2 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-[1.05] tracking-tighter text-zinc-950">
				Pilih <span style="color: #C8102E;">Varian</span> yang <span class="text-zinc-400">Tepat</span>
			</h2>
		</div>

		<div class="grid lg:grid-cols-2 gap-8 lg:gap-10">
			{#each variants as v, i}
				<div class="group relative flex flex-col rounded-[2.5rem] bg-white/80 backdrop-blur-xl transition-all duration-500 hover:-translate-y-2 cursor-pointer overflow-hidden" 
					style="border: 1px solid rgba(255,255,255,0.8); box-shadow: 0 20px 40px -15px rgba(200,16,46,0.08), inset 0 2px 4px rgba(255,255,255,0.8);">
					
					<!-- Glow Effect -->
					<div class="absolute -top-24 -right-24 w-64 h-64 rounded-full bg-gradient-to-bl from-[#C8102E]/10 to-transparent blur-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none z-0"></div>

					<!-- Image Area -->
					<div class="relative h-64 sm:h-80 w-full overflow-hidden bg-[#FAFAFA] flex items-center justify-center p-8 z-10" style="border-bottom: 1px solid #E5E5E5;">
						{#if v.image}
							<img src={v.image} alt="Varian {v.name}" class="w-full h-full object-contain transition-transform duration-700 group-hover:scale-110 drop-shadow-xl" />
						{:else}
							<div class="w-full h-full flex flex-col items-center justify-center border-2 border-dashed border-[#E5E5E5] rounded-2xl bg-white/50">
								<Waves size={32} class="text-zinc-300 mb-2" />
								<span class="text-xs font-semibold text-zinc-400 uppercase tracking-widest">Gambar Menyusul</span>
							</div>
						{/if}
						<div class="absolute inset-0 bg-gradient-to-t from-black/5 to-transparent pointer-events-none"></div>
					</div>

					<div class="relative z-10 p-10 sm:p-12 flex-1 flex flex-col">
						<div class="flex items-center justify-between mb-8">
							<h3 class="font-heading text-4xl sm:text-5xl font-extrabold text-[#C8102E] tracking-tighter group-hover:scale-105 group-hover:text-[#A50D25] transition-all duration-500 origin-left">{v.name}</h3>
							<div class="w-12 h-12 rounded-full bg-white flex items-center justify-center border border-[#E5E5E5] group-hover:bg-[#C8102E] group-hover:border-[#C8102E] transition-colors duration-300 shadow-sm">
								<ArrowRight size={20} class="text-zinc-400 group-hover:text-white transition-colors duration-300 group-hover:-rotate-45" />
							</div>
						</div>
						
						<p class="text-lg leading-relaxed text-zinc-600 font-medium mb-12 flex-1 max-w-[40ch]">{v.desc}</p>
						
						<div class="pt-6" style="border-top: 1px solid #E5E5E5;">
							<div class="flex flex-col sm:flex-row sm:items-center gap-3">
								<span class="inline-flex text-[10px] font-bold uppercase tracking-[0.15em] text-zinc-400 bg-[#FAFAFA] px-3 py-1.5 rounded-lg border border-[#E5E5E5]">Cocok Untuk</span>
								<span class="text-sm font-bold text-zinc-950">{v.use}</span>
							</div>
						</div>
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
