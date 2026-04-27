<script lang="ts">
	import { ArrowLeft, Clock, Calendar, Tag, MessageCircle, ArrowRight, Monitor, Smartphone, BarChart3, Camera, Bell, Shield } from '@lucide/svelte';
	import Ornaments from '$lib/components/Ornaments.svelte';
</script>

<svelte:head>
	<title>STESY 3.0: Fitur Baru yang Mengubah Monitoring Infrastruktur — Beacon Engineering</title>
	<meta name="description" content="Pembaruan STESY 3.0 membawa AI-powered analytics, multi-tenant dashboard, dan integrasi CCTV real-time untuk monitoring infrastruktur yang lebih cerdas." />
</svelte:head>

<section class="relative py-16 lg:py-24 overflow-hidden" style="background: linear-gradient(165deg, #FFFFFF 0%, #FFF5F6 40%, #FBE9EC 100%);">
	<Ornaments variant="hero" />
	<div class="relative z-10 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
		<a href="/wawasan" class="inline-flex items-center gap-2 text-sm font-medium mb-8 transition-colors hover:text-[#C8102E]" style="color: #5C5C5C;"><ArrowLeft size={14} /> Kembali ke Wawasan</a>
		<div class="flex items-center gap-3 mb-4">
			<span class="text-[10px] font-semibold uppercase tracking-wider px-2.5 py-1 rounded-md text-white" style="background: #8B5CF6;">Berita Produk</span>
			<span class="text-xs flex items-center gap-1" style="color: #9A9A9A;"><Calendar size={11} /> 28 Mar 2026</span>
			<span class="text-xs flex items-center gap-1" style="color: #9A9A9A;"><Clock size={11} /> 5 min baca</span>
		</div>
		<h1 class="font-heading text-3xl sm:text-4xl lg:text-[44px] font-extrabold leading-tight mb-6" style="letter-spacing: -0.02em; color: #1A1A1A;">STESY 3.0: Fitur Baru yang Mengubah Cara Anda Memantau Infrastruktur</h1>
		<p class="text-lg leading-relaxed" style="color: #5C5C5C;">Pembaruan platform STESY 3.0 membawa AI-powered analytics, multi-tenant dashboard, dan integrasi CCTV real-time untuk monitoring infrastruktur yang lebih cerdas.</p>
	</div>
	<div class="absolute bottom-0 left-0 right-0 pointer-events-none" style="transform: translateY(1px);"><svg viewBox="0 0 1440 50" fill="none" preserveAspectRatio="none" class="w-full h-10"><path d="M0,50 L0,25 Q360,0 720,25 T1440,25 L1440,50 Z" fill="white"/></svg></div>
</section>

<article class="py-12 lg:py-16 bg-white">
	<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
		<div class="p-6 rounded-2xl" style="background: #F5F3FF; border-left: 4px solid #8B5CF6;">
			<p class="text-sm font-medium" style="color: #6D28D9;"><strong>Update terbaru:</strong> STESY 3.0 sudah tersedia untuk semua pengguna Beacon aktif. Migrasi otomatis — tidak perlu instalasi ulang.</p>
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
				<div class="group p-5 rounded-xl hover:bg-[#FBE9EC] transition-all" style="border: 1px solid #E5E5E5;">
					<div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: #F5F3FF;">
						<svelte:component this={feat.icon} size={18} style="color: #8B5CF6;" />
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
				{ feature: 'Dashboard real-time', v2: '✓', v3: '✓' },
				{ feature: 'Multi-sensor support', v2: '✓', v3: '✓' },
				{ feature: 'AI anomaly detection', v2: '—', v3: '✓' },
				{ feature: 'Multi-tenant', v2: '—', v3: '✓' },
				{ feature: 'CCTV integration', v2: 'Terpisah', v3: 'Built-in' },
				{ feature: 'PWA mobile', v2: '—', v3: '✓' },
				{ feature: 'Smart notification', v2: 'Email only', v3: 'Push+SMS+Email' },
				{ feature: 'End-to-end encryption', v2: 'Partial', v3: '✓' }
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

		<div class="flex flex-wrap items-center gap-2 pt-4" style="border-top: 1px solid #E5E5E5;">
			<Tag size={12} style="color: #9A9A9A;" />
			{#each ['STESY', 'Software Update', 'AI Analytics', 'Dashboard', 'Platform'] as tag}
				<span class="text-[10px] px-2.5 py-1 rounded-full font-medium" style="background: #FAFAFA; border: 1px solid #E5E5E5; color: #5C5C5C;">{tag}</span>
			{/each}
		</div>
	</div>
</article>

<section class="relative py-12 overflow-hidden" style="background: linear-gradient(135deg, #FBE9EC 0%, #F8D7DC 100%);">
	<Ornaments />
	<div class="relative z-10 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
		<h3 class="font-heading text-xl font-bold mb-3" style="color: #1A1A1A;">Lihat STESY 3.0 Beraksi</h3>
		<p class="text-sm mb-6" style="color: #5C5C5C;">Minta demo live untuk melihat bagaimana STESY menyatukan semua data telemetri Anda.</p>
		<a href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20ingin%20minta%20demo%20STESY%203.0." target="_blank" rel="noopener"
			class="inline-flex items-center gap-2 px-6 py-3 rounded-[12px] text-sm font-semibold text-white transition-all hover:scale-[1.02]"
			style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 12px rgba(200,16,46,0.25);">
			<MessageCircle size={15} /> Minta Demo STESY
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
			<a href="/wawasan/standar-sni-awlr" class="group p-5 rounded-xl hover:bg-[#FBE9EC] transition-all" style="border: 1px solid #E5E5E5;">
				<span class="text-[10px] font-semibold uppercase tracking-wider" style="color: #0EA5E9;">Artikel Teknis</span>
				<h4 class="font-heading text-sm font-bold mt-1 group-hover:text-[#C8102E] transition-colors" style="color: #1A1A1A;">Memahami Standar SNI untuk Sistem Telemetri AWLR</h4>
			</a>
		</div>
	</div>
</section>
