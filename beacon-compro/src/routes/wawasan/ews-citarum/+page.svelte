<script lang="ts">
	import ArticleLayout from '$lib/components/ArticleLayout.svelte';
</script>

<ArticleLayout
	title="Implementasi EWS di DAS Citarum: Pelajaran dari Lapangan"
	description="Bagaimana sistem peringatan dini multi-sensor berhasil diimplementasikan di salah satu daerah aliran sungai paling kritis di Indonesia."
	category="Studi Kasus"
	categoryColor="#C8102E"
	date="20 Mar 2026"
	readTime="10 min"
	tags={['EWS', 'Citarum', 'Banjir', 'Multi-Sensor', 'Sirene']}
	ctaTitle="Wilayah Anda Butuh EWS?"
	ctaDesc="Tim kami berpengalaman merancang EWS end-to-end dari sensor sampai sirene."
	ctaButtonLabel="Konsultasi EWS"
	ctaWhatsApp="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20tertarik%20dengan%20EWS%20setelah%20membaca%20studi%20kasus%20Citarum."
	ctaSecondary={{ href: '/solusi/early-warning', label: 'Lihat Solusi EWS' }}
	relatedArticles={[
		{ href: '/wawasan/adr-bendungan-ciawi', category: 'Studi Kasus', categoryColor: '#C8102E', title: 'Bagaimana ADR Menyelamatkan Keamanan Bendungan Ciawi', readTime: '8 min' },
		{ href: '/wawasan/panduan-maintenance-telemetri', category: 'Artikel Teknis', categoryColor: '#0EA5E9', title: 'Panduan Maintenance Perangkat Telemetri: Kapan dan Bagaimana', readTime: '7 min' }
	]}
>
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
			{ layer: 'Layer 2 — Processing', desc: 'Beacon Logger BL-1100 mengolah data sensor dan mengirim ke cloud server STESY. AI engine mendeteksi pola anomali.', color: '#1B7F3A' },
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
	<div class="grid sm:grid-cols-2 gap-4">
		<div class="p-5 rounded-2xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
			<span class="text-[10px] uppercase tracking-widest font-semibold" style="color: #9A9A9A;">Stasiun monitoring</span>
			<span class="block font-heading text-2xl font-bold mt-1 font-mono tabular-nums" style="color: #C8102E;">8 unit</span>
		</div>
		<div class="p-5 rounded-2xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
			<span class="text-[10px] uppercase tracking-widest font-semibold" style="color: #9A9A9A;">Waktu respons alert</span>
			<span class="block font-heading text-2xl font-bold mt-1 font-mono tabular-nums" style="color: #C8102E;">&lt; 30 detik</span>
		</div>
		<div class="sm:col-span-2 p-5 rounded-2xl flex items-center justify-between" style="background: #FBE9EC; border: 1px solid rgba(200,16,46,0.1);">
			<div>
				<span class="text-[10px] uppercase tracking-widest font-semibold" style="color: #9A9A9A;">Uptime sistem</span>
				<span class="block font-heading text-lg font-bold mt-0.5 font-mono tabular-nums" style="color: #C8102E;">97.8%</span>
			</div>
			<div class="w-2 h-2 rounded-full animate-pulse" style="background: #1B7F3A;"></div>
		</div>
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
</ArticleLayout>
