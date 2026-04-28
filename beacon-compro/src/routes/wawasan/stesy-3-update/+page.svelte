<script lang="ts">
	import { onMount } from 'svelte';
	import { Monitor, Smartphone, BarChart3, Camera, Bell, Shield } from '@lucide/svelte';
	import ArticleLayout from '$lib/components/ArticleLayout.svelte';

	let mounted = $state(false);
	onMount(() => { mounted = true; });
</script>

<ArticleLayout
	title="STESY 3.0: Fitur Baru yang Mengubah Cara Anda Memantau Infrastruktur"
	description="Pembaruan platform STESY 3.0 membawa AI-powered analytics, multi-tenant dashboard, dan integrasi CCTV real-time untuk monitoring infrastruktur yang lebih cerdas."
	category="Berita Produk"
	categoryColor="#1B7F3A"
	date="28 Mar 2026"
	readTime="5 min"
	tags={['STESY', 'Software Update', 'AI Analytics', 'Dashboard', 'Platform']}
	ctaTitle="Lihat STESY 3.0 Beraksi"
	ctaDesc="Minta demo live untuk melihat bagaimana STESY menyatukan semua data telemetri Anda."
	ctaButtonLabel="Minta Demo STESY"
	ctaWhatsApp="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20ingin%20minta%20demo%20STESY%203.0."
	ctaSecondary={{ href: '/solusi', label: 'Lihat Semua Solusi' }}
	relatedArticles={[
		{ href: '/wawasan/adr-bendungan-ciawi', category: 'Studi Kasus', categoryColor: '#C8102E', title: 'Bagaimana ADR Menyelamatkan Keamanan Bendungan Ciawi', readTime: '8 min' },
		{ href: '/wawasan/standar-sni-awlr', category: 'Artikel Teknis', categoryColor: '#0EA5E9', title: 'Memahami Standar SNI untuk Sistem Telemetri AWLR', readTime: '12 min' }
	]}
>
	<div class="p-6 rounded-2xl" style="background: #ECFDF5; border-left: 4px solid #1B7F3A;">
		<p class="text-sm font-medium" style="color: #166534;"><strong>Update terbaru:</strong> STESY 3.0 sudah tersedia untuk semua pengguna Beacon aktif. Migrasi otomatis — tidak perlu instalasi ulang.</p>
	</div>

	<h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Evolusi STESY</h2>
	<p class="text-sm leading-relaxed" style="color: #3A3A3A;">STESY (Smart Telemetry System) adalah platform monitoring yang menyatukan semua perangkat Beacon — dari AWLR di pos hidrologi sampai ADR di bendungan — dalam satu dashboard. Dengan versi 3.0, STESY mengalami lompatan signifikan dalam kemampuan analitik dan pengalaman pengguna.</p>

	<h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">6 Fitur Baru STESY 3.0</h2>
	<div class="grid sm:grid-cols-2 gap-4">
		{#each [
			{ icon: BarChart3, title: 'AI-Powered Analytics', desc: 'Deteksi anomali otomatis menggunakan machine learning. Sistem akan memberi peringatan sebelum threshold kritis tercapai.' },
			{ icon: Monitor, title: 'Multi-Tenant Dashboard', desc: 'Setiap instansi punya workspace terpisah dengan role-based access. Aman, terisolasi, dan mudah dikelola.' },
			{ icon: Camera, title: 'Integrasi CCTV Real-time', desc: 'Lihat kondisi visual lokasi bersamaan dengan data telemetri. Split screen dashboard + live camera.' },
			{ icon: Smartphone, title: 'Progressive Web App', desc: 'Akses STESY seperti native app di Android dan iOS tanpa download dari Play Store/App Store.' },
			{ icon: Bell, title: 'Smart Notification', desc: 'Alert berdasarkan pola data, bukan hanya threshold statis. Notifikasi via push, SMS, dan email sekaligus.' },
			{ icon: Shield, title: 'End-to-End Encryption', desc: 'Semua data dienkripsi dari sensor ke dashboard. Compliance dengan standar keamanan data pemerintah.' }
		] as feat}
			<div class="group p-5 rounded-xl hover:bg-[#ECFDF5] transition-all active:scale-[0.98]" style="border: 1px solid #E5E5E5; opacity: {mounted ? 1 : 0}; transform: translateY({mounted ? 0 : 16}px); transition: opacity 0.5s ease-out {0.1 + i * 0.08}s, transform 0.5s ease-out {0.1 + i * 0.08}s, background-color 0.2s;">
				<div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: #ECFDF5;">
					<feat.icon size={18} style="color: #1B7F3A;" />
				</div>
				<h3 class="font-heading text-sm font-bold mb-1 group-hover:text-[#C8102E] transition-colors" style="color: #1A1A1A;">{feat.title}</h3>
				<p class="text-xs leading-relaxed" style="color: #5C5C5C;">{feat.desc}</p>
			</div>
		{/each}
	</div>

	<h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Perbandingan Versi</h2>
	<div class="rounded-2xl overflow-hidden" style="border: 1px solid #E5E5E5;">
		<div class="grid grid-cols-3 gap-0" style="background: #1A1A1A;">
			<div class="p-3"><span class="text-xs font-semibold text-white">Fitur</span></div>
			<div class="p-3 text-center"><span class="text-xs font-semibold text-white">STESY 2.x</span></div>
			<div class="p-3 text-center"><span class="text-xs font-semibold" style="color: #C8102E;">STESY 3.0</span></div>
		</div>
		{#each [
			{ feature: 'Dashboard real-time', v2: 'Ya', v3: 'Ya' },
			{ feature: 'Multi-sensor support', v2: 'Ya', v3: 'Ya' },
			{ feature: 'AI anomaly detection', v2: '—', v3: 'Ya' },
			{ feature: 'Multi-tenant', v2: '—', v3: 'Ya' },
			{ feature: 'CCTV integration', v2: 'Terpisah', v3: 'Built-in' },
			{ feature: 'PWA mobile', v2: '—', v3: 'Ya' },
			{ feature: 'Smart notification', v2: 'Email only', v3: 'Push+SMS+Email' },
			{ feature: 'End-to-end encryption', v2: 'Partial', v3: 'Ya' }
		] as row, i}
			<div class="grid grid-cols-3 gap-0 {i % 2 === 0 ? 'bg-[#FAFAFA]' : 'bg-white'}" style="border-bottom: 1px solid #E5E5E5;">
				<div class="p-3"><span class="text-xs" style="color: #3A3A3A;">{row.feature}</span></div>
				<div class="p-3 text-center"><span class="text-xs" style="color: #9A9A9A;">{row.v2}</span></div>
				<div class="p-3 text-center"><span class="text-xs font-semibold" style="color: #C8102E;">{row.v3}</span></div>
			</div>
		{/each}
	</div>

	<h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Cara Mendapatkan STESY 3.0</h2>
	<p class="text-sm leading-relaxed" style="color: #3A3A3A;">Semua pengguna Beacon aktif dengan kontrak maintenance mendapatkan akses otomatis ke STESY 3.0 — tanpa biaya upgrade tambahan. Migrasi data dari versi sebelumnya dilakukan otomatis oleh tim teknis kami.</p>
	<p class="text-sm leading-relaxed" style="color: #3A3A3A;">Untuk pengguna baru atau instansi yang ingin mencoba, tersedia <strong>demo langsung</strong> dari tim engineer kami. Cukup hubungi via WhatsApp atau email.</p>
</ArticleLayout>
