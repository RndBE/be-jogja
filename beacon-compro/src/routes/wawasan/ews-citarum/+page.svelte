<script lang="ts">
	import { ArrowLeft, Clock, Calendar, Tag, MessageCircle, ArrowRight } from '@lucide/svelte';
	import Ornaments from '$lib/components/Ornaments.svelte';
</script>

<svelte:head>
	<title>Implementasi EWS di DAS Citarum — Beacon Engineering</title>
	<meta name="description" content="Studi kasus implementasi Early Warning System di DAS Citarum: tantangan lapangan, solusi teknis, dan pelajaran dari proyek multi-sensor." />
</svelte:head>

<section class="relative py-16 lg:py-24 overflow-hidden" style="background: linear-gradient(165deg, #FFFFFF 0%, #FEF9C3 30%, #FFF5F6 60%, #FBE9EC 100%);">
	<Ornaments variant="hero" />
	<div class="relative z-10 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
		<a href="/wawasan" class="inline-flex items-center gap-2 text-sm font-medium mb-8 transition-colors hover:text-[#C8102E]" style="color: #5C5C5C;"><ArrowLeft size={14} /> Kembali ke Wawasan</a>
		<div class="flex items-center gap-3 mb-4">
			<span class="text-[10px] font-semibold uppercase tracking-wider px-2.5 py-1 rounded-md text-white" style="background: #C8102E;">Studi Kasus</span>
			<span class="text-xs flex items-center gap-1" style="color: #9A9A9A;"><Calendar size={11} /> 20 Mar 2026</span>
			<span class="text-xs flex items-center gap-1" style="color: #9A9A9A;"><Clock size={11} /> 10 min baca</span>
		</div>
		<h1 class="font-heading text-3xl sm:text-4xl lg:text-[44px] font-extrabold leading-tight mb-6" style="letter-spacing: -0.02em; color: #1A1A1A;">Implementasi EWS di DAS Citarum: Pelajaran dari Lapangan</h1>
		<p class="text-lg leading-relaxed" style="color: #5C5C5C;">Bagaimana sistem peringatan dini multi-sensor berhasil diimplementasikan di salah satu daerah aliran sungai paling kritis di Indonesia.</p>
	</div>
	<div class="absolute bottom-0 left-0 right-0 pointer-events-none" style="transform: translateY(1px);"><svg viewBox="0 0 1440 50" fill="none" preserveAspectRatio="none" class="w-full h-10"><path d="M0,50 L0,25 Q360,0 720,25 T1440,25 L1440,50 Z" fill="white"/></svg></div>
</section>

<article class="py-12 lg:py-16 bg-white">
	<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
		<div class="p-6 rounded-2xl" style="background: #FEF9C3; border-left: 4px solid #D97706;">
			<p class="text-sm font-medium" style="color: #92400E;"><strong>Konteks:</strong> DAS Citarum melayani 28 juta penduduk di Jawa Barat. Sistem peringatan dini yang andal bukan lagi pilihan — melainkan keharusan.</p>
		</div>

		<h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">DAS Citarum: Sungai Paling Kritis di Jawa Barat</h2>
		<p class="text-sm leading-relaxed" style="color: #3A3A3A;">Sungai Citarum adalah sungai terpanjang di Jawa Barat dengan catchment area yang meliputi wilayah padat penduduk dan industri. Risiko banjir, longsor, dan pencemaran air menjadi ancaman nyata setiap musim hujan. BBWS Citarum membutuhkan sistem early warning yang bisa mendeteksi dan memperingatkan secara otomatis — dari sensor di hulu sampai sirene di hilir.</p>

		<h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Arsitektur Sistem EWS</h2>
		<p class="text-sm leading-relaxed" style="color: #3A3A3A;">Implementasi menggunakan pendekatan multi-layer dengan komponen berikut:</p>
		
		<div class="space-y-3">
			{#each [
				{ layer: 'Layer 1 — Sensing', desc: 'AWLR di pos hidrologi hulu untuk monitoring muka air + ARR untuk curah hujan real-time. Data dikirim setiap 5 menit via 4G/LTE.', color: '#0EA5E9' },
				{ layer: 'Layer 2 — Processing', desc: 'Beacon Logger BL-1100 mengolah data sensor dan mengirim ke cloud server STESY. AI engine mendeteksi pola anomali.', color: '#8B5CF6' },
				{ layer: 'Layer 3 — Warning', desc: 'STESY mengevaluasi threshold dan mengirim perintah ke sirene outdoor. Notifikasi SMS ke PPK, Camat, dan Lurah secara bersamaan.', color: '#D97706' },
				{ layer: 'Layer 4 — Response', desc: 'Dashboard STESY menampilkan status real-time semua stasiun. CCTV live feed untuk verifikasi visual kondisi lapangan.', color: '#C8102E' }
			] as layer}
				<div class="flex gap-4 p-5 rounded-xl" style="border: 1px solid {layer.color}20; background: {layer.color}05;">
					<div class="w-1 shrink-0 rounded-full" style="background: {layer.color};"></div>
					<div>
						<h3 class="text-sm font-bold" style="color: {layer.color};">{layer.layer}</h3>
						<p class="text-xs mt-1 leading-relaxed" style="color: #3A3A3A;">{layer.desc}</p>
					</div>
				</div>
			{/each}
		</div>

		<h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Tantangan di Lapangan</h2>
		<div class="grid sm:grid-cols-2 gap-4">
			{#each [
				{ title: 'Konektivitas', desc: 'Beberapa pos hidrologi di hulu berada di area dengan sinyal seluler lemah. Solusi: dual-SIM 4G/LTE + opsi modem satelit.' },
				{ title: 'Power Supply', desc: 'Tidak ada akses PLN di lokasi remote. Solusi: panel surya 100W + baterai deep cycle dengan backup 3 hari tanpa matahari.' },
				{ title: 'Debris & Sedimen', desc: 'Sensor sering terhalang debris saat banjir. Solusi: stilling well yang dirancang khusus + jadwal maintenance bulanan.' },
				{ title: 'Sosialisasi Masyarakat', desc: 'Sirene yang berbunyi tanpa edukasi bisa menimbulkan panik. Solusi: program sosialisasi bersama Pemda.' }
			] as challenge}
				<div class="p-4 rounded-xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
					<h3 class="text-sm font-bold mb-1" style="color: #1A1A1A;">{challenge.title}</h3>
					<p class="text-xs leading-relaxed" style="color: #5C5C5C;">{challenge.desc}</p>
				</div>
			{/each}
		</div>

		<h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Hasil Implementasi</h2>
		<div class="grid grid-cols-3 gap-4">
			{#each [
				{ value: '8', label: 'Stasiun monitoring' },
				{ value: '< 30s', label: 'Waktu respons alert' },
				{ value: '99.2%', label: 'Uptime sistem' }
			] as stat}
				<div class="text-center p-5 rounded-2xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
					<span class="font-heading text-xl font-bold" style="color: #C8102E;">{stat.value}</span>
					<span class="block text-xs mt-1" style="color: #5C5C5C;">{stat.label}</span>
				</div>
			{/each}
		</div>

		<h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Pelajaran Utama</h2>
		<ul class="space-y-2">
			{#each [
				'Redundansi konektivitas (dual-SIM + satelit) adalah investasi wajib untuk pos hidrologi di area kritis.',
				'Maintenance preventif lebih murah daripada respons darurat. Jadwalkan kalibrasi setiap 6 bulan.',
				'Dashboard yang intuitif mengurangi waktu keputusan PPK dari jam menjadi menit.',
				'Sosialisasi masyarakat harus berjalan paralel dengan instalasi teknis — sirene tanpa edukasi bisa kontraproduktif.'
			] as lesson}
				<li class="flex items-start gap-3">
					<div class="w-5 h-5 rounded-full flex items-center justify-center shrink-0 mt-0.5" style="background: #FBE9EC;">
						<svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
					</div>
					<span class="text-sm" style="color: #3A3A3A;">{lesson}</span>
				</li>
			{/each}
		</ul>

		<div class="flex flex-wrap items-center gap-2 pt-4" style="border-top: 1px solid #E5E5E5;">
			<Tag size={12} style="color: #9A9A9A;" />
			{#each ['EWS', 'Citarum', 'Banjir', 'Multi-Sensor', 'Sirene'] as tag}
				<span class="text-[10px] px-2.5 py-1 rounded-full font-medium" style="background: #FAFAFA; border: 1px solid #E5E5E5; color: #5C5C5C;">{tag}</span>
			{/each}
		</div>
	</div>
</article>

<section class="relative py-12 overflow-hidden" style="background: linear-gradient(135deg, #FBE9EC 0%, #F8D7DC 100%);">
	<Ornaments />
	<div class="relative z-10 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
		<h3 class="font-heading text-xl font-bold mb-3" style="color: #1A1A1A;">Wilayah Anda Butuh EWS?</h3>
		<p class="text-sm mb-6" style="color: #5C5C5C;">Tim kami berpengalaman merancang EWS end-to-end dari sensor sampai sirene.</p>
		<a href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20tertarik%20dengan%20EWS%20setelah%20membaca%20studi%20kasus%20Citarum." target="_blank" rel="noopener"
			class="inline-flex items-center gap-2 px-6 py-3 rounded-[12px] text-sm font-semibold text-white transition-all hover:scale-[1.02]"
			style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 12px rgba(200,16,46,0.25);">
			<MessageCircle size={15} /> Konsultasi EWS
		</a>
	</div>
</section>

<section class="py-12 bg-white">
	<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
		<h3 class="font-heading text-lg font-bold mb-6" style="color: #1A1A1A;">Baca Juga</h3>
		<div class="grid md:grid-cols-2 gap-4">
			<a href="/wawasan/adr-bendungan-ciawi" class="group p-5 rounded-xl hover:bg-[#FBE9EC] transition-all" style="border: 1px solid #E5E5E5;">
				<span class="text-[10px] font-semibold uppercase tracking-wider" style="color: #C8102E;">Studi Kasus</span>
				<h4 class="font-heading text-sm font-bold mt-1 group-hover:text-[#C8102E] transition-colors" style="color: #1A1A1A;">Bagaimana ADR Menyelamatkan Keamanan Bendungan Ciawi</h4>
			</a>
			<a href="/wawasan/panduan-maintenance-telemetri" class="group p-5 rounded-xl hover:bg-[#FBE9EC] transition-all" style="border: 1px solid #E5E5E5;">
				<span class="text-[10px] font-semibold uppercase tracking-wider" style="color: #0EA5E9;">Artikel Teknis</span>
				<h4 class="font-heading text-sm font-bold mt-1 group-hover:text-[#C8102E] transition-colors" style="color: #1A1A1A;">Panduan Maintenance Perangkat Telemetri: Kapan dan Bagaimana</h4>
			</a>
		</div>
	</div>
</section>
