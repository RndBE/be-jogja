<script lang="ts">
	import ArticleLayout from '$lib/components/ArticleLayout.svelte';
</script>

<ArticleLayout
	title="Bagaimana Telemetri ADR Menyelamatkan Keamanan Bendungan Ciawi"
	description="Studi kasus implementasi Automatic Deformation Recorder di Bendungan Ciawi-Sukamahi yang mampu mendeteksi pergeseran mikro-milimeter — proyek kolaborasi dengan BBWS Ciliwung-Cisadane."
	category="Studi Kasus"
	categoryColor="#C8102E"
	date="12 Apr 2026"
	readTime="8 min"
	tags={['ADR', 'Bendungan', 'Deformasi', 'BBWS', 'Monitoring Struktur']}
	ctaTitle="Punya Kebutuhan Monitoring Deformasi Serupa?"
	ctaDesc="Bicara dengan tim engineer kami untuk merancang solusi ADR yang tepat untuk proyek Anda."
	ctaButtonLabel="Konsultasi ADR"
	ctaWhatsApp="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20tertarik%20dengan%20ADR%20setelah%20membaca%20studi%20kasus%20Bendungan%20Ciawi."
	ctaSecondary={{ href: '/solusi/water-security', label: 'Lihat Water Security' }}
	relatedArticles={[
		{ href: '/wawasan/standar-sni-awlr', category: 'Artikel Teknis', categoryColor: '#0EA5E9', title: 'Memahami Standar SNI untuk Sistem Telemetri AWLR di Indonesia', readTime: '12 min' },
		{ href: '/wawasan/stesy-3-update', category: 'Berita Produk', categoryColor: '#1B7F3A', title: 'STESY 3.0: Fitur Baru yang Mengubah Monitoring Infrastruktur', readTime: '5 min' }
	]}
>
	<!-- Ringkasan -->
	<div class="p-6 rounded-2xl" style="background: #FBE9EC; border-left: 4px solid #C8102E;">
		<p class="text-sm font-medium" style="color: #8B0A1F;">
			<strong>Ringkasan:</strong> Bendungan Ciawi-Sukamahi di Bogor adalah salah satu infrastruktur pengendalian banjir paling kritis di Jabodetabek. Monitoring deformasi struktur bendungan menjadi kebutuhan vital — dan di sinilah ADR Beacon berperan.
		</p>
	</div>

	<h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Latar Belakang</h2>
	<p class="text-sm leading-relaxed" style="color: #3A3A3A;">
		Bendungan Ciawi dan Sukamahi dibangun sebagai bagian dari sistem pengendalian banjir DKI Jakarta dan sekitarnya. Terletak di hulu Sungai Ciliwung, kedua bendungan ini menampung volume air yang signifikan dan berperan krusial dalam mitigasi banjir.
	</p>
	<p class="text-sm leading-relaxed" style="color: #3A3A3A;">
		Monitoring keamanan struktural bendungan — khususnya deformasi (pergeseran) — adalah keharusan. Pergeseran sekecil apapun pada tubuh bendungan bisa menjadi indikator awal masalah serius. Metode konvensional yang mengandalkan pengukuran manual periodik memiliki keterbatasan: interval pengukuran panjang, tergantung cuaca, dan rentan human error.
	</p>

	<h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Tantangan</h2>
	<div class="grid sm:grid-cols-2 gap-4">
		{#each ['Deteksi pergeseran dalam satuan sub-milimeter', 'Monitoring 24/7 tanpa interupsi', 'Transmisi data real-time ke pusat kendali', 'Ketahanan perangkat di kondisi outdoor ekstrem'] as challenge}
			<div class="flex items-start gap-3 p-4 rounded-xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
				<div class="w-2 h-2 rounded-full mt-1.5 shrink-0" style="background: #C8102E;"></div>
				<span class="text-sm" style="color: #3A3A3A;">{challenge}</span>
			</div>
		{/each}
	</div>

	<h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Solusi: ADR Beacon + STESY</h2>
	<p class="text-sm leading-relaxed" style="color: #3A3A3A;">
		Beacon Engineering memasang sistem <strong>ADR (Automatic Deformation Recorder)</strong> yang mengkombinasikan <strong>Beacon Logger BL-1100</strong> dengan <strong>Robotic Total Station</strong>. Sistem ini mampu:
	</p>
	<ul class="space-y-2">
		{#each ['Mendeteksi pergeseran struktur hingga resolusi 0.001mm', 'Melakukan pengukuran otomatis multi-axis secara simultan', 'Mengirim data real-time ke dashboard STESY 24/7', 'Memberikan alert otomatis ketika pergeseran melampaui threshold'] as point}
			<li class="flex items-start gap-3">
				<div class="w-5 h-5 rounded-full flex items-center justify-center shrink-0 mt-0.5" style="background: #FBE9EC;">
					<svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
				</div>
				<span class="text-sm" style="color: #3A3A3A;">{point}</span>
			</li>
		{/each}
	</ul>

	<h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Hasil & Dampak</h2>
	<div class="grid sm:grid-cols-3 gap-4">
		{#each [
			{ value: '0.001mm', label: 'Resolusi deteksi' },
			{ value: '24/7', label: 'Monitoring non-stop' },
			{ value: 'Real-time', label: 'Transmisi data' }
		] as stat}
			<div class="text-center p-5 rounded-2xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
				<span class="font-heading text-xl font-bold tabular-nums" style="color: #C8102E;">{stat.value}</span>
				<span class="block text-xs mt-1" style="color: #5C5C5C;">{stat.label}</span>
			</div>
		{/each}
	</div>

	<!-- Testimoni -->
	<div class="relative p-8 rounded-2xl" style="background: rgba(200,16,46,0.04); border: 1px solid rgba(200,16,46,0.08); box-shadow: inset 0 1px 0 rgba(255,255,255,0.5);">
		<div class="absolute top-4 left-6 text-5xl font-heading font-bold" style="color: #C8102E; opacity: 0.1;">"</div>
		<p class="text-sm leading-relaxed mb-4 relative z-10" style="color: #3A3A3A; font-style: italic;">
			"Hasil pengukuran lapangan cukup presisi dan konsisten di lapangan, interface alat mudah dipahami dan intuitif, sangat membantu untuk mendapatkan hasil pengukuran deformasi permukaan bendungan dengan cepat dan akurat."
		</p>
		<div class="flex items-center gap-3 relative z-10">
			<div class="w-9 h-9 rounded-full flex items-center justify-center text-xs font-bold text-white" style="background: #C8102E;">PB</div>
			<div>
				<span class="text-sm font-semibold" style="color: #1A1A1A;">Prahasdipta Bayu Adhi Koesoemo</span>
				<span class="block text-xs" style="color: #7A7A7A;">Kepala Satuan Unit Pengelola Bendungan Ciawi-Sukamahi-Gintung</span>
			</div>
		</div>
	</div>

	<h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Kesimpulan</h2>
	<p class="text-sm leading-relaxed" style="color: #3A3A3A;">
		Implementasi ADR Beacon di Bendungan Ciawi-Sukamahi membuktikan bahwa teknologi monitoring deformasi buatan Indonesia mampu memberikan presisi setara standar internasional. Dengan dukungan STESY sebagai platform monitoring terpadu, data deformasi tersedia real-time untuk pengambilan keputusan cepat terkait keamanan bendungan.
	</p>
	<p class="text-sm leading-relaxed" style="color: #3A3A3A;">
		Proyek ini menjadi referensi kuat bahwa produk lokal — dengan after-sales support langsung dari tim teknis di Yogyakarta — bukan kompromi, melainkan pilihan strategis.
	</p>
</ArticleLayout>
