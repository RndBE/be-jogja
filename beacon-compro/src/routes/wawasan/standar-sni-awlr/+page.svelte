<script lang="ts">
	import { ArrowLeft, Clock, Calendar, Tag, MessageCircle, ArrowRight } from '@lucide/svelte';
	import Ornaments from '$lib/components/Ornaments.svelte';
</script>

<svelte:head>
	<title>Memahami Standar SNI untuk Sistem Telemetri AWLR — Beacon Engineering</title>
	<meta name="description" content="Panduan teknis lengkap mengenai standar SNI yang berlaku untuk pemasangan dan kalibrasi AWLR di pos hidrologi Indonesia." />
</svelte:head>

<section class="relative py-16 lg:py-24 overflow-hidden" style="background: linear-gradient(165deg, #FFFFFF 0%, #FFF5F6 40%, #FBE9EC 100%);">
	<Ornaments variant="hero" />
	<div class="relative z-10 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
		<a href="/wawasan" class="inline-flex items-center gap-2 text-sm font-medium mb-8 transition-colors hover:text-[#C8102E]" style="color: #5C5C5C;"><ArrowLeft size={14} />Kembali ke Wawasan</a>
		<div class="flex items-center gap-3 mb-4">
			<span class="text-[10px] font-semibold uppercase tracking-wider px-2.5 py-1 rounded-md text-white" style="background: #0EA5E9;">Artikel Teknis</span>
			<span class="text-xs flex items-center gap-1" style="color: #9A9A9A;"><Calendar size={11} /> 5 Apr 2026</span>
			<span class="text-xs flex items-center gap-1" style="color: #9A9A9A;"><Clock size={11} /> 12 min baca</span>
		</div>
		<h1 class="font-heading text-3xl sm:text-4xl lg:text-[44px] font-extrabold leading-tight mb-6" style="letter-spacing: -0.02em; color: #1A1A1A;">Memahami Standar SNI untuk Sistem Telemetri AWLR di Indonesia</h1>
		<p class="text-lg leading-relaxed" style="color: #5C5C5C;">Panduan teknis lengkap mengenai standar SNI yang berlaku untuk pemasangan dan kalibrasi AWLR di pos hidrologi — penting bagi PPK, engineer, dan vendor telemetri.</p>
	</div>
	<div class="absolute bottom-0 left-0 right-0 pointer-events-none" style="transform: translateY(1px);"><svg viewBox="0 0 1440 50" fill="none" preserveAspectRatio="none" class="w-full h-10"><path d="M0,50 L0,25 Q360,0 720,25 T1440,25 L1440,50 Z" fill="white"/></svg></div>
</section>

<article class="py-12 lg:py-16 bg-white">
	<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
		<div class="p-6 rounded-2xl" style="background: #EBF8FF; border-left: 4px solid #0EA5E9;">
			<p class="text-sm font-medium" style="color: #0369A1;"><strong>Untuk siapa artikel ini:</strong> PPK, Kepala Satuan, engineer di BBWS/BWS, dan vendor telemetri yang akan memasang AWLR pada pos hidrologi standar pemerintah.</p>
		</div>

		<h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Apa Itu AWLR dan Mengapa SNI Penting?</h2>
		<p class="text-sm leading-relaxed" style="color: #3A3A3A;">AWLR (Automatic Water Level Recorder) adalah perangkat pencatatan ketinggian muka air otomatis yang menjadi tulang punggung sistem monitoring hidrologi Indonesia. Setiap pos hidrologi yang dikelola BBWS, BWS, atau Dinas SDA wajib mengacu pada standar SNI untuk memastikan data yang dihasilkan akurat, konsisten, dan bisa dipertanggungjawabkan.</p>

		<h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Standar SNI yang Berlaku</h2>
		<div class="rounded-2xl overflow-hidden" style="border: 1px solid #E5E5E5;">
			{#each [
				{ sni: 'SNI 7716:2011', title: 'Tata cara pemasangan peralatan ukur muka air', desc: 'Mengatur lokasi pemasangan, orientasi sensor, proteksi perangkat, dan validasi instalasi.' },
				{ sni: 'SNI 7741:2011', title: 'Tata cara pengelolaan pos hidrologi', desc: 'Mengatur operasional harian pos hidrologi, interval pengukuran, dan pelaporan data.' },
				{ sni: 'SNI 2415:2016', title: 'Tata cara perhitungan debit air sungai', desc: 'Standar perhitungan debit menggunakan data level air dari AWLR.' }
			] as item, i}
				<div class="p-5 {i % 2 === 0 ? 'bg-[#FAFAFA]' : 'bg-white'}" style="border-bottom: 1px solid #E5E5E5;">
					<span class="text-xs font-mono font-bold" style="color: #C8102E;">{item.sni}</span>
					<h3 class="font-heading text-sm font-bold mt-1" style="color: #1A1A1A;">{item.title}</h3>
					<p class="text-xs mt-1" style="color: #5C5C5C;">{item.desc}</p>
				</div>
			{/each}
		</div>

		<h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Persyaratan Teknis AWLR Sesuai SNI</h2>
		<div class="grid sm:grid-cols-2 gap-4">
			{#each [
				{ label: 'Akurasi Minimum', value: '±1 cm (level air)' },
				{ label: 'Resolusi', value: '≤ 1 mm' },
				{ label: 'Interval Data', value: '≤ 15 menit' },
				{ label: 'Penyimpanan Data', value: '≥ 1 tahun offline' },
				{ label: 'Proteksi', value: 'IP67 atau lebih' },
				{ label: 'Komunikasi', value: 'GSM/4G atau satelit' }
			] as spec}
				<div class="p-4 rounded-xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
					<span class="text-[10px] uppercase tracking-wider" style="color: #9A9A9A;">{spec.label}</span>
					<span class="block text-sm font-mono font-bold mt-0.5" style="color: #1A1A1A;">{spec.value}</span>
				</div>
			{/each}
		</div>

		<h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Bagaimana AWLR Beacon Memenuhi SNI?</h2>
		<p class="text-sm leading-relaxed" style="color: #3A3A3A;">AWLR Beacon (model BL-1100 dan BL-110) dirancang dari awal untuk memenuhi dan melampaui persyaratan SNI:</p>
		<ul class="space-y-2">
			{#each ['Akurasi ±1mm — 10x lebih presisi dari persyaratan minimum SNI', 'IP68 waterproof — di atas standar IP67 yang disyaratkan', 'Interval data konfigurabel 1-60 menit — melebihi kebutuhan 15 menit', 'Kapasitas penyimpanan 100.000+ data points', 'Multi-konektivitas: 4G/LTE, GSM, opsi satelit', 'Terintegrasi STESY untuk akses data online 24/7'] as point}
					<li class="flex items-start gap-3"><div class="w-5 h-5 rounded-full flex items-center justify-center shrink-0 mt-0.5" style="background: #FBE9EC;"><svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></div><span class="text-sm" style="color: #3A3A3A;">{point}</span></li>
			{/each}
		</ul>

		<h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Tips Pemasangan Sesuai SNI</h2>
		<div class="space-y-3">
			{#each [
				{ num: '1', title: 'Pemilihan Lokasi', desc: 'Pilih titik di penampang sungai yang lurus minimal 10x lebar sungai. Hindari area turbulensi, sedimentasi tinggi, atau vegetasi rapat.' },
				{ num: '2', title: 'Pemasangan Sensor', desc: 'Sensor pressure transducer harus terlindung dari benturan debris. Gunakan stilling well atau pipa pelindung yang sesuai.' },
				{ num: '3', title: 'Kalibrasi Awal', desc: 'Lakukan kalibrasi terhadap peil tetap (benchmark) terdekat. Catat offset dan faktor koreksi.' },
				{ num: '4', title: 'Validasi Data', desc: 'Bandingkan data AWLR dengan pembacaan manual staff gauge minimal 7 hari setelah pemasangan.' },
				{ num: '5', title: 'Maintenance Berkala', desc: 'Jadwalkan kalibrasi ulang setiap 6-12 bulan sesuai rekomendasi SNI.' }
			] as tip}
				<div class="flex gap-4 p-4 rounded-xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
					<div class="w-8 h-8 rounded-lg flex items-center justify-center shrink-0" style="background: #C8102E;"><span class="text-white text-xs font-bold">{tip.num}</span></div>
					<div>
						<h3 class="text-sm font-bold" style="color: #1A1A1A;">{tip.title}</h3>
						<p class="text-xs mt-0.5 leading-relaxed" style="color: #5C5C5C;">{tip.desc}</p>
					</div>
				</div>
			{/each}
		</div>

		<div class="flex flex-wrap items-center gap-2 pt-4" style="border-top: 1px solid #E5E5E5;">
			<Tag size={12} style="color: #9A9A9A;" />
			{#each ['AWLR', 'SNI', 'Standar Nasional', 'Pos Hidrologi', 'Kalibrasi'] as tag}
				<span class="text-[10px] px-2.5 py-1 rounded-full font-medium" style="background: #FAFAFA; border: 1px solid #E5E5E5; color: #5C5C5C;">{tag}</span>
			{/each}
		</div>
	</div>
</article>

<section class="relative py-12 overflow-hidden" style="background: linear-gradient(135deg, #FBE9EC 0%, #F8D7DC 100%);">
	<Ornaments />
	<div class="relative z-10 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
		<h3 class="font-heading text-xl font-bold mb-3" style="color: #1A1A1A;">Butuh AWLR yang Memenuhi Standar SNI?</h3>
		<p class="text-sm mb-6" style="color: #5C5C5C;">AWLR Beacon sudah terpasang di 200+ pos hidrologi seluruh Indonesia.</p>
		<a href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20perlu%20AWLR%20standar%20SNI." target="_blank" rel="noopener"
			class="inline-flex items-center gap-2 px-6 py-3 rounded-[12px] text-sm font-semibold text-white transition-all hover:scale-[1.02]"
			style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 12px rgba(200,16,46,0.25);">
			<MessageCircle size={15} /> Konsultasi AWLR
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
			<a href="/wawasan/ews-citarum" class="group p-5 rounded-xl hover:bg-[#FBE9EC] transition-all" style="border: 1px solid #E5E5E5;">
				<span class="text-[10px] font-semibold uppercase tracking-wider" style="color: #C8102E;">Studi Kasus</span>
				<h4 class="font-heading text-sm font-bold mt-1 group-hover:text-[#C8102E] transition-colors" style="color: #1A1A1A;">Implementasi EWS di DAS Citarum: Pelajaran dari Lapangan</h4>
			</a>
		</div>
	</div>
</section>
