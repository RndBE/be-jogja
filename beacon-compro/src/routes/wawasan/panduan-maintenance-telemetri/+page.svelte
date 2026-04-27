<script lang="ts">
	import { Wrench } from '@lucide/svelte';
	import ArticleLayout from '$lib/components/ArticleLayout.svelte';
</script>

<ArticleLayout
	title="Panduan Maintenance Perangkat Telemetri: Kapan dan Bagaimana"
	description="Investasi perangkat telemetri tanpa maintenance yang tepat ibarat membeli mobil tanpa servis. Panduan ini membantu Anda menjaga kinerja optimal."
	category="Artikel Teknis"
	categoryColor="#0EA5E9"
	date="10 Mar 2026"
	readTime="7 min"
	tags={['Maintenance', 'Kalibrasi', 'Sensor', 'Tips Teknis', 'After-Sales']}
	ctaTitle="Jadwalkan Maintenance Perangkat Anda"
	ctaDesc="Tim teknis kami siap datang ke lokasi — dari Aceh sampai Papua."
	ctaButtonLabel="Jadwalkan Maintenance"
	ctaWhatsApp="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20ingin%20menjadwalkan%20maintenance%20perangkat%20telemetri."
	ctaSecondary={{ href: '/solusi', label: 'Lihat Semua Solusi' }}
	relatedArticles={[
		{ href: '/wawasan/standar-sni-awlr', category: 'Artikel Teknis', categoryColor: '#0EA5E9', title: 'Memahami Standar SNI untuk Sistem Telemetri AWLR', readTime: '12 min' },
		{ href: '/wawasan/stesy-3-update', category: 'Berita Produk', categoryColor: '#1B7F3A', title: 'STESY 3.0: Fitur Baru yang Mengubah Monitoring Infrastruktur', readTime: '5 min' }
	]}
>
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
</ArticleLayout>
