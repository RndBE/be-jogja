<script lang="ts">
	import { ArrowRight, Check, MessageCircle, Droplets, Activity, Waves, TriangleAlert, Beaker, Radio } from '@lucide/svelte';
	import Ornaments from '$lib/components/Ornaments.svelte';

	const products = [
		{ slug: 'awlr', name: 'AWLR', full: 'Automatic Water Level Recorder', hook: 'Setiap kenaikan 1 cm muka air, terekam dan terkirim dalam hitungan detik.', icon: Waves, desc: 'Pengukuran ketinggian muka air otomatis, 100% online, terkirim langsung ke STESY. Tersedia varian BL-1100 dan BL-110 untuk berbagai kebutuhan pos hidrologi.', specs: ['Akurasi ±1mm', 'Range 0–30m', 'IP68 Waterproof', '24/7 Real-time'] },
		{ slug: 'awgc', name: 'AWGC', full: 'Automatic Water Gate Controller', hook: 'Buka-tutup pintu air dari smartphone Anda. Tidak perlu lagi operator turun ke lapangan saat hujan deras tengah malam.', icon: Activity, desc: 'Kontrol pintu air otomatis berbasis telemetri. Atur level air secara remote dengan presisi tinggi dan monitoring status pintu real-time.', specs: ['Remote Control', 'Auto-leveling', 'Fail-safe Mode', 'STESY Integration'] },
		{ slug: 'afmr', name: 'AFMR', full: 'Automatic Flow Meter Recorder', hook: 'Debit air bukan tebakan — ukur akurat, 24 jam, tanpa interupsi.', icon: Waves, desc: 'Pencatatan debit air otomatis menggunakan sensor ultrasonik non-kontak. Ideal untuk sungai, saluran irigasi, dan outflow bendungan.', specs: ['Non-contact', 'Akurasi ±2%', 'Multi-channel', 'Auto-logging'] },
		{ slug: 'adr', name: 'ADR', full: 'Automatic Deformation Recorder', hook: 'Bendungan tidak runtuh tiba-tiba. Mereka mengirim sinyal kecil dulu — pastikan Anda yang pertama tahu.', icon: TriangleAlert, desc: 'Rekam pergeseran dan deformasi struktur bendungan dalam satuan mikro-milimeter. Sistem early warning untuk keamanan struktur.', specs: ['Resolusi 0.001mm', 'Multi-axis', '24/7 Monitoring', 'Alert System'] },
		{ slug: 'awqr', name: 'AWQR', full: 'Automatic Water Quality Recorder', hook: 'Logam berat, sedimentasi, limbah — terdeteksi sebelum sampai ke ledeng masyarakat.', icon: Beaker, desc: 'Monitoring kualitas air real-time: pH, turbidity, DO, TDS, suhu, dan parameter lainnya. Data langsung ke dashboard STESY.', specs: ['Multi-parameter', 'Auto-cleaning', 'Lab-grade Accuracy', 'Cloud Data'] },
		{ slug: 'avwr', name: 'AVWR', full: 'Automatic Vibrating Wire Recorder', hook: 'Puluhan sensor vibrating wire, dibaca simultan, dipantau dari satu layar.', icon: Radio, desc: 'Pembacaan otomatis sensor vibrating wire untuk monitoring tekanan pore, settlement, dan stress pada struktur bendungan.', specs: ['32 Channel', 'Simultaneous Read', 'High Resolution', 'Auto-calibrate'] }
	];
</script>

<svelte:head>
	<title>Water Security — Beacon Engineering</title>
	<meta name="description" content="Enam perangkat Water Security Beacon: AWLR, AWGC, AFMR, ADR, AWQR, AVWR — amankan setiap meter kubik air Indonesia." />
</svelte:head>

<!-- Hero -->
<section class="relative py-20 lg:py-32 overflow-hidden" style="background: linear-gradient(165deg, #FFFFFF 0%, #EBF8FF 30%, #FFF5F6 60%, #FBE9EC 100%);">
	<Ornaments variant="hero" />

	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="max-w-3xl">
		<div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest mb-6" style="background: #FBE9EC; color: #C8102E; border: 1px solid rgba(200,16,46,0.15);">
			<Droplets size={12} />
			Water Security
		</div>
		<h1 class="font-heading text-3xl sm:text-4xl lg:text-[56px] font-extrabold leading-tight mb-6" style="letter-spacing: -0.03em; color: #1A1A1A;">
			Air adalah Hidup. <span style="color: #C8102E;">Dan Risiko.</span>
		</h1>
		<p class="text-base sm:text-lg leading-relaxed max-w-2xl mx-auto mb-4" style="color: #5C5C5C;">
			Banjir, kekeringan, jebolnya tanggul, pencemaran sungai, deformasi bendungan — semua bermula dari satu hal yang sama: <strong style="color: #1A1A1A;">data yang terlambat, atau tidak ada sama sekali.</strong>
		</p>
		<p class="text-lg font-heading font-semibold" style="color: #C8102E;">
			Enam perangkat Water Security Beacon dirancang supaya Anda tidak pernah terlambat lagi.
		</p>
		</div>
	</div>

	<!-- Wave divider -->
	<div class="absolute bottom-0 left-0 right-0 pointer-events-none" style="transform: translateY(1px);">
		<svg viewBox="0 0 1440 60" fill="none" preserveAspectRatio="none" class="w-full h-12">
			<path d="M0,60 L0,30 Q240,10 480,30 T960,25 T1440,30 L1440,60 Z" fill="white"/>
		</svg>
	</div>
</section>

<!-- Products Grid -->
<section class="relative py-16 lg:py-24 bg-white overflow-hidden">
	<Ornaments />

	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="max-w-2xl mb-14 space-y-3">
			<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">6 Produk Water Security</span>
			<h2 class="font-heading text-3xl sm:text-4xl font-bold leading-[1.1]" style="color: #1A1A1A; letter-spacing: -0.025em;">Satu Ekosistem untuk Keamanan Air</h2>
		</div>

		<div class="grid md:grid-cols-2 gap-6">
			{#each products as product, i}
				<a
					href="/solusi/water-security/{product.slug}"
					class="group relative p-8 rounded-[20px] bg-[#FAFAFA] transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:bg-white"
					style="border: 1px solid #E5E5E5;"
				>
					<!-- Red top accent -->
					<div class="absolute top-0 left-6 right-6 h-[3px] rounded-full opacity-0 group-hover:opacity-100 transition-opacity" style="background: linear-gradient(90deg, #C8102E, rgba(200,16,46,0.2));"></div>

					<div class="flex items-center gap-3 mb-4">
						<div class="w-12 h-12 rounded-xl flex items-center justify-center transition-transform group-hover:scale-110" style="background: #FBE9EC;">
							<svelte:component this={product.icon} size={22} style="color: #C8102E;" />
						</div>
						<div>
							<span class="font-heading text-lg font-bold group-hover:text-[#C8102E] transition-colors" style="color: #1A1A1A;">{product.name}</span>
							<span class="block text-[10px] uppercase tracking-wider" style="color: #9A9A9A;">{product.full}</span>
						</div>
					</div>

					<p class="text-sm font-medium mb-3" style="color: #C8102E; font-style: italic;">
						"{product.hook}"
					</p>

					<p class="text-sm leading-relaxed mb-5" style="color: #5C5C5C;">
						{product.desc}
					</p>

					<!-- Mini specs -->
					<div class="flex flex-wrap gap-1.5 mb-4">
						{#each product.specs as spec}
							<span class="text-[10px] px-2 py-0.5 rounded-full font-medium" style="background: #FBE9EC; color: #C8102E;">{spec}</span>
						{/each}
					</div>

					<div class="flex items-center gap-2 text-sm font-semibold transition-all group-hover:gap-3" style="color: #C8102E;">
						Lihat Detail {product.name}
						<ArrowRight size={14} />
					</div>
				</a>
			{/each}
		</div>
	</div>
</section>

<!-- Why Beacon Water Security -->
<section class="relative py-16 lg:py-24 overflow-hidden" style="background: linear-gradient(180deg, #FAFAFA 0%, #FBE9EC 100%);">
	<Ornaments variant="dense" />

	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid lg:grid-cols-2 gap-12 items-center">
			<div class="space-y-6">
				<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">Mengapa Water Security Beacon</span>
				<h2 class="font-heading text-3xl sm:text-4xl font-bold" style="color: #1A1A1A;">Dipercaya di Infrastruktur Paling Kritis Indonesia</h2>
				<ul class="space-y-4">
					{#each ['Presisi tinggi — sensor-grade accuracy untuk standar SNI', 'Tahan iklim tropis — IP67/IP68, teruji di cuaca ekstrem Indonesia', 'Real-time 24/7 — data terkirim setiap detik ke STESY', 'After-sales lokal — tim teknis di Jogja, respons cepat', 'Terintegrasi penuh — semua perangkat tersambung ke satu dashboard', 'Hak cipta Indonesia — tidak tergantung vendor asing'] as point}
						<li class="flex items-start gap-3">
							<div class="w-5 h-5 rounded-full flex items-center justify-center shrink-0 mt-0.5" style="background: #FBE9EC;"><Check size={12} style="color: #C8102E;" /></div>
							<span class="text-sm" style="color: #3A3A3A;">{point}</span>
						</li>
					{/each}
				</ul>
			</div>
			<div class="space-y-4">
				{#each ['Bendungan Ciawi-Sukamahi — BBWS Ciliwung-Cisadane', 'Bendungan Sepaku IKN — BWS Kalimantan IV', 'Bendungan Cipanas — BWS Ciliwung-Cisadane', 'Bendungan Keureuto — BWS Sumatera I', 'DAS Bogowonto — BBWS Serayu Opak'] as project}
					<div class="flex items-center gap-3 p-4 rounded-xl bg-white" style="border: 1px solid #E5E5E5; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
						<div class="w-2 h-2 rounded-full bg-[#1B7F3A] animate-pulse-dot shrink-0"></div>
						<span class="text-sm font-medium" style="color: #1A1A1A;">{project}</span>
					</div>
				{/each}
			</div>
		</div>
	</div>
</section>

<!-- CTA -->
<section class="relative py-16 lg:py-20 overflow-hidden" style="background: linear-gradient(135deg, #FBE9EC 0%, #F8D7DC 100%);">
	<Ornaments />
	<div class="relative z-10 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
		<h2 class="font-heading text-2xl sm:text-3xl font-bold mb-4" style="color: #1A1A1A;">Butuh Solusi Water Security untuk Proyek Anda?</h2>
		<p class="text-sm mb-8" style="color: #5C5C5C;">Tim engineer kami akan bantu Anda memilih konfigurasi yang tepat untuk lokasi proyek Anda.</p>
		<a href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20tertarik%20dengan%20solusi%20Water%20Security." target="_blank" rel="noopener"
			class="btn-tactile inline-flex items-center gap-2 px-7 py-3.5 rounded-[14px] text-sm font-semibold text-white"
			style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 16px rgba(200,16,46,0.25);">
			<MessageCircle size={16} />
			Konsultasi Water Security
		</a>
	</div>
</section>
