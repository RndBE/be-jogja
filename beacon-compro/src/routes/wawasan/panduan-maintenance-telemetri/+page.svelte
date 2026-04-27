<script lang="ts">
	import { ArrowLeft, Clock, Calendar, Tag, MessageCircle, Wrench } from '@lucide/svelte';
	import Ornaments from '$lib/components/Ornaments.svelte';
</script>

<svelte:head>
	<title>Panduan Maintenance Perangkat Telemetri — Beacon Engineering</title>
	<meta name="description" content="Panduan lengkap maintenance perangkat telemetri: jadwal kalibrasi, checklist perawatan, dan tips memperpanjang usia operasional sensor." />
</svelte:head>

<section class="relative py-16 lg:py-24 overflow-hidden" style="background: linear-gradient(165deg, #FFFFFF 0%, #FFF5F6 40%, #FBE9EC 100%);">
	<Ornaments variant="hero" />
	<div class="relative z-10 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
		<a href="/wawasan" class="inline-flex items-center gap-2 text-sm font-medium mb-8 transition-colors hover:text-[#C8102E]" style="color: #5C5C5C;"><ArrowLeft size={14} /> Kembali ke Wawasan</a>
		<div class="flex items-center gap-3 mb-4">
			<span class="text-[10px] font-semibold uppercase tracking-wider px-2.5 py-1 rounded-md text-white" style="background: #0EA5E9;">Artikel Teknis</span>
			<span class="text-xs flex items-center gap-1" style="color: #9A9A9A;"><Calendar size={11} /> 10 Mar 2026</span>
			<span class="text-xs flex items-center gap-1" style="color: #9A9A9A;"><Clock size={11} /> 7 min baca</span>
		</div>
		<h1 class="font-heading text-3xl sm:text-4xl lg:text-[44px] font-extrabold leading-tight mb-6" style="letter-spacing: -0.02em; color: #1A1A1A;">Panduan Maintenance Perangkat Telemetri: Kapan dan Bagaimana</h1>
		<p class="text-lg leading-relaxed" style="color: #5C5C5C;">Investasi perangkat telemetri tanpa maintenance yang tepat ibarat membeli mobil tanpa servis. Panduan ini membantu Anda menjaga kinerja optimal.</p>
	</div>
	<div class="absolute bottom-0 left-0 right-0 pointer-events-none" style="transform: translateY(1px);"><svg viewBox="0 0 1440 50" fill="none" preserveAspectRatio="none" class="w-full h-10"><path d="M0,50 L0,25 Q360,0 720,25 T1440,25 L1440,50 Z" fill="white"/></svg></div>
</section>

<article class="py-12 lg:py-16 bg-white">
	<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
		<div class="p-6 rounded-2xl" style="background: #EBF8FF; border-left: 4px solid #0EA5E9;">
			<p class="text-sm font-medium" style="color: #0369A1;"><strong>Penting:</strong> Maintenance berkala bukan pengeluaran — melainkan investasi. Perangkat yang terawat bertahan 2-3x lebih lama dan menghasilkan data yang lebih akurat.</p>
		</div>

		<h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Mengapa Maintenance Penting?</h2>
		<p class="text-sm leading-relaxed" style="color: #3A3A3A;">Perangkat telemetri beroperasi 24/7 di kondisi outdoor yang keras — panas terik, hujan deras, kelembaban tinggi, dan paparan debris. Tanpa maintenance teratur, akurasi sensor menurun secara gradual, konektivitas terganggu, dan usia operasional berkurang drastis.</p>

		<h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Jadwal Maintenance Rekomendasi</h2>
		<div class="rounded-2xl overflow-hidden" style="border: 1px solid #E5E5E5;">
			{#each [
				{ freq: 'Bulanan', items: ['Inspeksi visual panel surya (keretakan, kotoran)', 'Cek level baterai dan charging status', 'Verifikasi konektivitas data ke STESY', 'Bersihkan housing sensor dari lumut/debris'] },
				{ freq: 'Per 3 Bulan', items: ['Kalibrasi sensor terhadap referensi manual', 'Update firmware data logger (jika tersedia)', 'Periksa konektor dan kabel — ganti yang korosi', 'Test alarm/alert threshold'] },
				{ freq: 'Per 6 Bulan', items: ['Kalibrasi penuh dengan standar referensi', 'Ganti baterai backup jika kapasitas < 80%', 'Servis mechanical parts (tipping bucket ARR, actuator AWGC)', 'Audit data: bandingkan AWLR vs staff gauge manual'] },
				{ freq: 'Tahunan', items: ['Overhaul lengkap: bongkar, bersihkan, rakit ulang', 'Penggantian O-ring, gasket, dan seal', 'Evaluasi kinerja vs spesifikasi awal', 'Laporan kondisi perangkat untuk renewal garansi'] }
			] as schedule, i}
				<div class="p-5 {i % 2 === 0 ? 'bg-[#FAFAFA]' : 'bg-white'}" style="border-bottom: 1px solid #E5E5E5;">
					<div class="flex items-center gap-2 mb-2">
						<Wrench size={14} style="color: #C8102E;" />
						<h3 class="text-sm font-bold" style="color: #C8102E;">{schedule.freq}</h3>
					</div>
					<ul class="space-y-1">
						{#each schedule.items as item}
							<li class="flex items-start gap-2">
								<div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0" style="background: #C8102E;"></div>
								<span class="text-xs" style="color: #3A3A3A;">{item}</span>
							</li>
						{/each}
					</ul>
				</div>
			{/each}
		</div>

		<h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">5 Tanda Perangkat Butuh Servis Segera</h2>
		<div class="space-y-3">
			{#each [
				{ sign: 'Data Gap', desc: 'Ada jeda kosong dalam log data yang sebelumnya tidak pernah terjadi — bisa indikasi masalah konektivitas atau power.' },
				{ sign: 'Drift Sensor', desc: 'Pembacaan sensor bergeser secara gradual dari nilai referensi — sensor perlu dikalibrasi ulang.' },
				{ sign: 'Battery Drain Cepat', desc: 'Baterai habis lebih cepat dari biasa — bisa panel surya kotor, baterai aging, atau firmware bug.' },
				{ sign: 'Noise Data', desc: 'Data menunjukkan fluktuasi yang tidak wajar — bisa koneksi kabel longgar atau interferensi elektrik.' },
				{ sign: 'Physical Damage', desc: 'Retak pada housing, korosi pada konektor, atau kabel terkelupas — segera ganti untuk mencegah kerusakan lebih lanjut.' }
			] as sign, i}
				<div class="flex gap-4 p-4 rounded-xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
					<div class="w-8 h-8 rounded-lg flex items-center justify-center shrink-0" style="background: #FBE9EC;"><span class="text-xs font-bold" style="color: #C8102E;">{i + 1}</span></div>
					<div><h3 class="text-sm font-bold" style="color: #1A1A1A;">{sign.sign}</h3><p class="text-xs mt-0.5 leading-relaxed" style="color: #5C5C5C;">{sign.desc}</p></div>
				</div>
			{/each}
		</div>

		<h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Layanan Maintenance Beacon</h2>
		<p class="text-sm leading-relaxed" style="color: #3A3A3A;">Beacon Engineering menyediakan paket maintenance komprehensif yang mencakup:</p>
		<div class="grid sm:grid-cols-2 gap-3">
			{#each ['Kunjungan teknisi ke lokasi', 'Kalibrasi sensor dengan sertifikat', 'Penggantian suku cadang asli', 'Update firmware & software', 'Uji fungsional lengkap', 'Laporan kondisi perangkat'] as item}
				<div class="flex items-center gap-2 p-3 rounded-lg" style="background: #FBE9EC;">
					<svg class="w-3.5 h-3.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
					<span class="text-xs font-medium" style="color: #3A3A3A;">{item}</span>
				</div>
			{/each}
		</div>

		<div class="flex flex-wrap items-center gap-2 pt-4" style="border-top: 1px solid #E5E5E5;">
			<Tag size={12} style="color: #9A9A9A;" />
			{#each ['Maintenance', 'Kalibrasi', 'Sensor', 'Tips Teknis', 'After-Sales'] as tag}
				<span class="text-[10px] px-2.5 py-1 rounded-full font-medium" style="background: #FAFAFA; border: 1px solid #E5E5E5; color: #5C5C5C;">{tag}</span>
			{/each}
		</div>
	</div>
</article>

<section class="relative py-12 overflow-hidden" style="background: linear-gradient(135deg, #FBE9EC 0%, #F8D7DC 100%);">
	<Ornaments />
	<div class="relative z-10 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
		<h3 class="font-heading text-xl font-bold mb-3" style="color: #1A1A1A;">Jadwalkan Maintenance Perangkat Anda</h3>
		<p class="text-sm mb-6" style="color: #5C5C5C;">Tim teknis kami siap datang ke lokasi — dari Aceh sampai Papua.</p>
		<a href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20ingin%20menjadwalkan%20maintenance%20perangkat%20telemetri." target="_blank" rel="noopener"
			class="inline-flex items-center gap-2 px-6 py-3 rounded-[12px] text-sm font-semibold text-white transition-all hover:scale-[1.02]"
			style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 12px rgba(200,16,46,0.25);">
			<MessageCircle size={15} /> Jadwalkan Maintenance
		</a>
	</div>
</section>

<section class="py-12 bg-white">
	<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
		<h3 class="font-heading text-lg font-bold mb-6" style="color: #1A1A1A;">Baca Juga</h3>
		<div class="grid md:grid-cols-2 gap-4">
			<a href="/wawasan/standar-sni-awlr" class="group p-5 rounded-xl hover:bg-[#FBE9EC] transition-all" style="border: 1px solid #E5E5E5;">
				<span class="text-[10px] font-semibold uppercase tracking-wider" style="color: #0EA5E9;">Artikel Teknis</span>
				<h4 class="font-heading text-sm font-bold mt-1 group-hover:text-[#C8102E] transition-colors" style="color: #1A1A1A;">Memahami Standar SNI untuk Sistem Telemetri AWLR</h4>
			</a>
			<a href="/wawasan/stesy-3-update" class="group p-5 rounded-xl hover:bg-[#FBE9EC] transition-all" style="border: 1px solid #E5E5E5;">
				<span class="text-[10px] font-semibold uppercase tracking-wider" style="color: #8B5CF6;">Berita Produk</span>
				<h4 class="font-heading text-sm font-bold mt-1 group-hover:text-[#C8102E] transition-colors" style="color: #1A1A1A;">STESY 3.0: Fitur Baru yang Mengubah Monitoring Infrastruktur</h4>
			</a>
		</div>
	</div>
</section>
