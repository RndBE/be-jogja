<script lang="ts">
	import { ArrowRight, Clock, BookOpen, FileText, Newspaper, Search } from '@lucide/svelte';
	import Ornaments from '$lib/components/Ornaments.svelte';

	let activeTab = $state('semua');
	let searchQuery = $state('');
	const tabs = ['semua', 'Studi Kasus', 'Artikel Teknis', 'Berita Produk'];

	const articles = [
		{ title: 'Bagaimana Telemetri ADR Menyelamatkan Keamanan Bendungan Ciawi', excerpt: 'Studi kasus implementasi Automatic Deformation Recorder di Bendungan Ciawi-Sukamahi yang mampu mendeteksi pergeseran mikro-milimeter secara real-time.', category: 'Studi Kasus', readTime: '8 min', date: '12 Apr 2026', href: '/wawasan/adr-bendungan-ciawi', featured: true, products: ['ADR', 'STESY'] },
		{ title: 'Memahami Standar SNI untuk Sistem Telemetri AWLR di Indonesia', excerpt: 'Panduan teknis lengkap mengenai standar SNI yang berlaku untuk pemasangan dan kalibrasi AWLR di pos hidrologi Indonesia.', category: 'Artikel Teknis', readTime: '12 min', date: '5 Apr 2026', href: '/wawasan/standar-sni-awlr', featured: false, products: ['AWLR'] },
		{ title: 'STESY 3.0: Fitur Baru yang Mengubah Cara Anda Memantau Infrastruktur', excerpt: 'Pembaruan platform STESY 3.0 membawa AI-powered analytics, multi-tenant dashboard, dan integrasi CCTV real-time.', category: 'Berita Produk', readTime: '5 min', date: '28 Mar 2026', href: '/wawasan/stesy-3-update', featured: true, products: ['STESY'] },
		{ title: 'Implementasi EWS di DAS Citarum: Pelajaran dari Lapangan', excerpt: 'Bagaimana sistem peringatan dini multi-sensor berhasil diimplementasikan di salah satu DAS paling kritis di Indonesia.', category: 'Studi Kasus', readTime: '10 min', date: '20 Mar 2026', href: '/wawasan/ews-citarum', featured: false, products: ['EWS', 'AWLR', 'ARR'] },
		{ title: 'Panduan Maintenance Perangkat Telemetri: Kapan dan Bagaimana', excerpt: 'Investasi perangkat telemetri tanpa maintenance yang tepat ibarat membeli mobil tanpa servis. Panduan lengkap dari Beacon.', category: 'Artikel Teknis', readTime: '7 min', date: '10 Mar 2026', href: '/wawasan/panduan-maintenance-telemetri', featured: false, products: ['Maintenance'] },
		{ title: 'Vibrating Wire vs Strain Gauge: Mana yang Cocok untuk Bendungan Anda?', excerpt: 'Perbandingan teknis dua jenis sensor deformasi untuk monitoring keamanan bendungan — kelebihan, kekurangan, dan rekomendasi.', category: 'Artikel Teknis', readTime: '7 min', date: '1 Mar 2026', href: '/wawasan/panduan-maintenance-telemetri', featured: false, products: ['AVWR', 'ADR'] },
		{ title: 'Beacon Dipercaya untuk Monitoring Bendungan IKN', excerpt: 'PT Arta Teknologi Comunindo dipercaya BWS Kalimantan IV untuk memasang sistem telemetri AWLR di Bendungan Sepaku, Ibu Kota Nusantara.', category: 'Berita Produk', readTime: '4 min', date: '20 Feb 2026', href: '/wawasan/adr-bendungan-ciawi', featured: false, products: ['AWLR', 'STESY'] },
		{ title: 'AWGC: Revolusi Pengelolaan Pintu Air di Indonesia', excerpt: 'Bagaimana Automatic Water Gate Controller mengubah cara operator mengelola pintu air — dari lapangan ke smartphone.', category: 'Studi Kasus', readTime: '9 min', date: '10 Feb 2026', href: '/wawasan/adr-bendungan-ciawi', featured: false, products: ['AWGC'] },
		{ title: 'Geothermal Monitoring: APLR di Kawah Ijen bersama Medco Energi', excerpt: 'Studi kasus implementasi APLR untuk well testing geothermal di Kawah Ijen — tantangan medan ekstrem dan solusi teknis.', category: 'Studi Kasus', readTime: '6 min', date: '1 Feb 2026', href: '/wawasan/adr-bendungan-ciawi', featured: false, products: ['APLR'] }
	];

	const categoryColors: Record<string, string> = {
		'Studi Kasus': '#C8102E',
		'Artikel Teknis': '#0EA5E9',
		'Berita Produk': '#8B5CF6'
	};

	let filtered = $derived(() => {
		let result = activeTab === 'semua' ? articles : articles.filter(a => a.category === activeTab);
		if (searchQuery.trim()) {
			const q = searchQuery.toLowerCase();
			result = result.filter(a => a.title.toLowerCase().includes(q) || a.excerpt.toLowerCase().includes(q));
		}
		return result;
	});
</script>

<svelte:head>
	<title>Wawasan — Studi Kasus, Artikel Teknis & Berita — Beacon Engineering</title>
	<meta name="description" content="Studi kasus, artikel teknis, dan berita produk dari Beacon Engineering. Wawasan mendalam tentang telemetri dan monitoring infrastruktur Indonesia." />
</svelte:head>

<!-- Hero -->
<section class="relative py-20 lg:py-28 overflow-hidden" style="background: linear-gradient(165deg, #FFFFFF 0%, #FFF5F6 40%, #FBE9EC 100%);">
	<Ornaments variant="hero" />

	<div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
		<div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest mb-6" style="background: #FBE9EC; color: #C8102E; border: 1px solid rgba(200,16,46,0.15);">
			<BookOpen size={12} />
			Wawasan & Artikel
		</div>
		<h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight mb-6" style="letter-spacing: -0.03em; color: #1A1A1A;">
			Insight dari <span style="color: #C8102E;">Lapangan</span>
		</h1>
		<p class="text-lg max-w-2xl mx-auto mb-8" style="color: #5C5C5C;">
			Studi kasus, panduan teknis, dan update produk — dari engineer, untuk engineer.
		</p>

		<!-- Stats -->
		<div class="flex justify-center gap-8">
			{#each [
				{ icon: FileText, value: '4', label: 'Studi Kasus' },
				{ icon: BookOpen, value: '3', label: 'Artikel Teknis' },
				{ icon: Newspaper, value: '2', label: 'Berita Produk' }
			] as stat}
				<div class="text-center">
					<span class="font-heading text-2xl font-bold" style="color: #C8102E;">{stat.value}</span>
					<span class="block text-xs mt-0.5" style="color: #5C5C5C;">{stat.label}</span>
				</div>
			{/each}
		</div>
	</div>

	<div class="absolute bottom-0 left-0 right-0 pointer-events-none" style="transform: translateY(1px);"><svg viewBox="0 0 1440 50" fill="none" preserveAspectRatio="none" class="w-full h-10"><path d="M0,50 L0,25 Q360,0 720,25 T1440,25 L1440,50 Z" fill="white"/></svg></div>
</section>

<!-- Featured Articles -->
<section class="relative py-12 lg:py-16 bg-white overflow-hidden">
	<Ornaments />
	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="flex items-center gap-2 mb-8">
			<div class="w-1 h-5 rounded-full" style="background: #C8102E;"></div>
			<span class="font-heading text-lg font-bold" style="color: #1A1A1A;">Pilihan Editor</span>
		</div>

		<div class="grid md:grid-cols-2 gap-6">
			{#each articles.filter(a => a.featured) as article}
				<a
					href={article.href}
					class="group relative p-8 rounded-2xl transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
					style="background: linear-gradient(135deg, #FBE9EC 0%, #FAFAFA 100%); border: 1px solid #E5E5E5;"
				>
					<div class="absolute top-0 left-8 right-8 h-[3px] rounded-full opacity-0 group-hover:opacity-100 transition-opacity" style="background: {categoryColors[article.category] || '#C8102E'};"></div>

					<div class="flex items-center gap-2 mb-4">
						<span class="text-[10px] font-semibold uppercase tracking-wider px-2 py-0.5 rounded-md text-white" style="background: {categoryColors[article.category] || '#C8102E'};">{article.category}</span>
						<span class="text-xs" style="color: #9A9A9A;">{article.date}</span>
					</div>

					<h2 class="font-heading text-xl font-bold mb-3 group-hover:text-[#C8102E] transition-colors leading-snug" style="color: #1A1A1A;">{article.title}</h2>
					<p class="text-sm leading-relaxed mb-4" style="color: #5C5C5C;">{article.excerpt}</p>

					<div class="flex items-center justify-between">
						<div class="flex gap-1.5">
							{#each article.products as prod}
								<span class="text-[10px] px-2 py-0.5 rounded-full font-medium" style="background: white; border: 1px solid #E5E5E5; color: #C8102E;">{prod}</span>
							{/each}
						</div>
						<span class="flex items-center gap-1 text-xs" style="color: #7A7A7A;"><Clock size={11} />{article.readTime}</span>
					</div>
				</a>
			{/each}
		</div>
	</div>
</section>

<!-- Filter + Grid -->
<section class="relative py-12 lg:py-20 overflow-hidden" style="background: linear-gradient(180deg, #FAFAFA 0%, #FFFFFF 100%);">
	<Ornaments variant="dense" />
	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Search + Filter -->
		<div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-10">
			<div class="flex flex-wrap gap-2">
				{#each tabs as tab}
					<button
						class="px-4 py-2 rounded-full text-sm font-medium transition-all duration-200"
						style="background: {activeTab === tab ? '#C8102E' : 'white'}; color: {activeTab === tab ? 'white' : '#5C5C5C'}; border: 1px solid {activeTab === tab ? '#C8102E' : '#E5E5E5'};"
						onclick={() => activeTab = tab}
					>
						{tab === 'semua' ? 'Semua Artikel' : tab}
					</button>
				{/each}
			</div>

			<div class="relative w-full sm:w-64">
				<Search size={14} class="absolute left-3 top-1/2 -translate-y-1/2" style="color: #9A9A9A;" />
				<input
					type="text"
					placeholder="Cari artikel..."
					bind:value={searchQuery}
					class="w-full pl-9 pr-4 py-2 rounded-xl text-sm outline-none transition-all focus:ring-2"
					style="background: white; border: 1px solid #E5E5E5; color: #1A1A1A;"
				/>
			</div>
		</div>

		<!-- Articles Grid -->
		<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
			{#each filtered() as article}
				<a href={article.href} class="group rounded-2xl overflow-hidden bg-white transition-all duration-300 hover:-translate-y-1 hover:shadow-xl" style="border: 1px solid #E5E5E5;">
					<!-- Thumbnail -->
					<div class="relative h-44 overflow-hidden" style="background: linear-gradient(135deg, {categoryColors[article.category] || '#C8102E'}10, #FAFAFA);">
						<div class="absolute inset-0 flex items-center justify-center">
							<div class="w-16 h-16 rounded-2xl flex items-center justify-center" style="background: {categoryColors[article.category] || '#C8102E'}15;">
								<span class="text-2xl font-heading font-bold" style="color: {categoryColors[article.category] || '#C8102E'};">{article.category.charAt(0)}</span>
							</div>
						</div>
						<!-- Category badge -->
						<div class="absolute top-3 left-3">
							<span class="text-[10px] font-semibold uppercase tracking-wider px-2.5 py-1 rounded-md text-white" style="background: {categoryColors[article.category] || '#C8102E'};">{article.category}</span>
						</div>
						<!-- Product tags -->
						<div class="absolute bottom-3 right-3 flex gap-1">
							{#each article.products.slice(0, 2) as prod}
								<span class="text-[9px] px-1.5 py-0.5 rounded font-medium" style="background: white; color: #5C5C5C;">{prod}</span>
							{/each}
						</div>
					</div>

					<div class="p-6">
						<h3 class="font-heading text-base font-bold mb-2 group-hover:text-[#C8102E] transition-colors leading-snug" style="color: #1A1A1A;">{article.title}</h3>
						<p class="text-sm leading-relaxed mb-4 line-clamp-2" style="color: #5C5C5C;">{article.excerpt}</p>
						<div class="flex items-center justify-between">
							<span class="text-xs" style="color: #7A7A7A;">{article.date}</span>
							<span class="flex items-center gap-1 text-xs" style="color: #7A7A7A;"><Clock size={11} />{article.readTime}</span>
						</div>
					</div>
				</a>
			{/each}
		</div>

		{#if filtered().length === 0}
			<div class="text-center py-16">
				<span class="font-heading text-lg font-bold" style="color: #9A9A9A;">Tidak ada artikel ditemukan</span>
				<p class="text-sm mt-2" style="color: #BFBFBF;">Coba ubah filter atau kata kunci pencarian</p>
			</div>
		{/if}
	</div>
</section>

<!-- Newsletter CTA -->
<section class="relative py-16 overflow-hidden" style="background: linear-gradient(135deg, #FBE9EC 0%, #F8D7DC 100%);">
	<Ornaments />
	<div class="relative z-10 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
		<h2 class="font-heading text-2xl sm:text-3xl font-bold mb-3" style="color: #1A1A1A;">Dapatkan Wawasan Terbaru</h2>
		<p class="text-sm mb-6" style="color: #5C5C5C;">Panduan teknis, studi kasus, dan update produk langsung ke email Anda — gratis.</p>
		<div class="flex flex-col sm:flex-row items-center justify-center gap-3 max-w-md mx-auto">
			<input
				type="email"
				placeholder="Email Anda"
				class="w-full sm:flex-1 px-4 py-3 rounded-[12px] text-sm outline-none"
				style="border: 1.5px solid #E5E5E5; color: #1A1A1A; background: white;"
			/>
			<button class="w-full sm:w-auto px-6 py-3 rounded-[12px] text-sm font-semibold text-white transition-all hover:scale-[1.02]" style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 12px rgba(200,16,46,0.25);">
				Berlangganan
			</button>
		</div>
	</div>
</section>
