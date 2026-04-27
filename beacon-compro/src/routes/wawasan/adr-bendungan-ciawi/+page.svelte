<script lang="ts">
	import { ArrowLeft, Clock, Calendar, Tag, MessageCircle, ArrowRight, Share2 } from '@lucide/svelte';
	import Ornaments from '$lib/components/Ornaments.svelte';
</script>

<svelte:head>
	<title>Bagaimana Telemetri ADR Menyelamatkan Keamanan Bendungan Ciawi — Beacon Engineering</title>
	<meta name="description" content="Studi kasus implementasi Automatic Deformation Recorder di Bendungan Ciawi-Sukamahi yang mampu mendeteksi pergeseran mikro-milimeter secara real-time." />
</svelte:head>

<!-- Article Header -->
<section class="relative py-16 lg:py-24 overflow-hidden" style="background: linear-gradient(165deg, #FFFFFF 0%, #FFF5F6 40%, #FBE9EC 100%);">
	<Ornaments variant="hero" />
	<div class="relative z-10 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
		<a href="/wawasan" class="inline-flex items-center gap-2 text-sm font-medium mb-8 transition-colors hover:text-[#C8102E]" style="color: #5C5C5C;">
			<ArrowLeft size={14} />
			Kembali ke Wawasan
		</a>

		<div class="flex items-center gap-3 mb-4">
			<span class="text-[10px] font-semibold uppercase tracking-wider px-2.5 py-1 rounded-md text-white" style="background: #C8102E;">Studi Kasus</span>
			<span class="text-xs flex items-center gap-1" style="color: #9A9A9A;"><Calendar size={11} /> 12 Apr 2026</span>
			<span class="text-xs flex items-center gap-1" style="color: #9A9A9A;"><Clock size={11} /> 8 min baca</span>
		</div>

		<h1 class="font-heading text-3xl sm:text-4xl lg:text-[44px] font-extrabold leading-tight mb-6" style="letter-spacing: -0.02em; color: #1A1A1A;">
			Bagaimana Telemetri ADR Menyelamatkan Keamanan Bendungan Ciawi
		</h1>

		<p class="text-lg leading-relaxed" style="color: #5C5C5C;">
			Studi kasus implementasi Automatic Deformation Recorder di Bendungan Ciawi-Sukamahi yang mampu mendeteksi pergeseran mikro-milimeter — proyek kolaborasi dengan BBWS Ciliwung-Cisadane.
		</p>
	</div>
	<div class="absolute bottom-0 left-0 right-0 pointer-events-none" style="transform: translateY(1px);"><svg viewBox="0 0 1440 50" fill="none" preserveAspectRatio="none" class="w-full h-10"><path d="M0,50 L0,25 Q360,0 720,25 T1440,25 L1440,50 Z" fill="white"/></svg></div>
</section>

<!-- Article Body -->
<article class="py-12 lg:py-16 bg-white">
	<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="prose-beacon space-y-8">
			<!-- Intro -->
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
						<span class="font-heading text-xl font-bold" style="color: #C8102E;">{stat.value}</span>
						<span class="block text-xs mt-1" style="color: #5C5C5C;">{stat.label}</span>
					</div>
				{/each}
			</div>

			<!-- Testimoni -->
			<div class="relative p-8 rounded-2xl" style="background: #FBE9EC; border: 1px solid rgba(200,16,46,0.1);">
				<div class="absolute top-4 left-6 text-4xl font-heading font-bold" style="color: #C8102E; opacity: 0.15;">"</div>
				<p class="text-sm leading-relaxed mb-4 relative z-10" style="color: #3A3A3A; font-style: italic;">
					"Hasil pengukuran lapangan cukup presisi dan konsisten di lapangan, interface alat mudah dipahami dan intuitif, sangat membantu untuk mendapatkan hasil pengukuran deformasi permukaan bendungan dengan cepat dan akurat."
				</p>
				<div class="flex items-center gap-3 relative z-10">
					<div class="w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold text-white" style="background: #C8102E;">PB</div>
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

			<!-- Tags -->
			<div class="flex flex-wrap items-center gap-2 pt-4" style="border-top: 1px solid #E5E5E5;">
				<Tag size={12} style="color: #9A9A9A;" />
				{#each ['ADR', 'Bendungan', 'Deformasi', 'BBWS', 'Monitoring Struktur'] as tag}
					<span class="text-[10px] px-2.5 py-1 rounded-full font-medium" style="background: #FAFAFA; border: 1px solid #E5E5E5; color: #5C5C5C;">{tag}</span>
				{/each}
			</div>
		</div>
	</div>
</article>

<!-- CTA Kontekstual -->
<section class="relative py-12 overflow-hidden" style="background: linear-gradient(135deg, #FBE9EC 0%, #F8D7DC 100%);">
	<Ornaments />
	<div class="relative z-10 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
		<h3 class="font-heading text-xl font-bold mb-3" style="color: #1A1A1A;">Punya Kebutuhan Monitoring Deformasi Serupa?</h3>
		<p class="text-sm mb-6" style="color: #5C5C5C;">Bicara dengan tim engineer kami untuk solusi yang tepat.</p>
		<div class="flex flex-col sm:flex-row items-center justify-center gap-3">
			<a href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20tertarik%20dengan%20ADR%20setelah%20membaca%20studi%20kasus%20Bendungan%20Ciawi." target="_blank" rel="noopener"
				class="inline-flex items-center gap-2 px-6 py-3 rounded-[12px] text-sm font-semibold text-white transition-all hover:scale-[1.02]"
				style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 12px rgba(200,16,46,0.25);">
				<MessageCircle size={15} /> Konsultasi ADR
			</a>
			<a href="/solusi/water-security" class="inline-flex items-center gap-2 px-6 py-3 rounded-[12px] text-sm font-semibold" style="border: 1.5px solid #C8102E; color: #C8102E; background: white;">
				Lihat Produk Water Security <ArrowRight size={14} />
			</a>
		</div>
	</div>
</section>

<!-- Related Articles -->
<section class="py-12 bg-white">
	<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
		<h3 class="font-heading text-lg font-bold mb-6" style="color: #1A1A1A;">Baca Juga</h3>
		<div class="grid md:grid-cols-2 gap-4">
			<a href="/wawasan/standar-sni-awlr" class="group p-5 rounded-xl hover:bg-[#FBE9EC] transition-all" style="border: 1px solid #E5E5E5;">
				<span class="text-[10px] font-semibold uppercase tracking-wider" style="color: #C8102E;">Artikel Teknis</span>
				<h4 class="font-heading text-sm font-bold mt-1 group-hover:text-[#C8102E] transition-colors" style="color: #1A1A1A;">Memahami Standar SNI untuk Sistem Telemetri AWLR di Indonesia</h4>
			</a>
			<a href="/wawasan/stesy-3-update" class="group p-5 rounded-xl hover:bg-[#FBE9EC] transition-all" style="border: 1px solid #E5E5E5;">
				<span class="text-[10px] font-semibold uppercase tracking-wider" style="color: #C8102E;">Berita Produk</span>
				<h4 class="font-heading text-sm font-bold mt-1 group-hover:text-[#C8102E] transition-colors" style="color: #1A1A1A;">STESY 3.0: Fitur Baru yang Mengubah Monitoring Infrastruktur</h4>
			</a>
		</div>
	</div>
</section>
