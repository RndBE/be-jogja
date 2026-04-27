<script lang="ts">
	import { ArrowRight, Clock } from '@lucide/svelte';
	import { onMount } from 'svelte';
	import Ornaments from '$lib/components/Ornaments.svelte';

	let visible = $state(false);

	onMount(() => {
		const observer = new IntersectionObserver(
			(entries) => { if (entries[0].isIntersecting) visible = true; },
			{ threshold: 0.2 }
		);
		const el = document.getElementById('wawasan-terbaru');
		if (el) observer.observe(el);
		return () => observer.disconnect();
	});

	const articles = [
		{
			title: 'Bagaimana Telemetri ADR Menyelamatkan Keamanan Bendungan Ciawi',
			excerpt: 'Studi kasus implementasi Automatic Deformation Recorder di Bendungan Ciawi-Sukamahi yang mampu mendeteksi pergeseran mikro-milimeter...',
			category: 'Studi Kasus',
			readTime: '8 min',
			date: '12 Apr 2026',
			href: '/wawasan/adr-bendungan-ciawi'
		},
		{
			title: 'Memahami Standar SNI untuk Sistem Telemetri AWLR di Indonesia',
			excerpt: 'Panduan teknis lengkap mengenai standar SNI yang berlaku untuk pemasangan dan kalibrasi AWLR di pos hidrologi...',
			category: 'Artikel Teknis',
			readTime: '12 min',
			date: '5 Apr 2026',
			href: '/wawasan/standar-sni-awlr'
		},
		{
			title: 'STESY 3.0: Fitur Baru yang Mengubah Cara Anda Memantau Infrastruktur',
			excerpt: 'Pembaruan platform STESY 3.0 membawa AI-powered analytics, multi-tenant dashboard, dan integrasi CCTV real-time...',
			category: 'Berita Produk',
			readTime: '5 min',
			date: '28 Mar 2026',
			href: '/wawasan/stesy-3-update'
		}
	];
</script>

<section id="wawasan-terbaru" class="relative py-20 lg:py-28 section-offwhite overflow-hidden">
	<Ornaments variant="dense" />
	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Heading -->
		<div class="flex items-end justify-between mb-12">
			<div class="space-y-2">
				<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">Wawasan</span>
				<h2 class="font-heading text-3xl sm:text-4xl font-bold text-[#1A1A1A]" style="letter-spacing: -0.02em;">
					Wawasan Terbaru
				</h2>
			</div>
			<a href="/wawasan" class="hidden sm:inline-flex items-center gap-2 text-sm font-semibold transition-colors hover:gap-3" style="color: #C8102E;">
				Baca Wawasan Lainnya
				<ArrowRight size={14} />
			</a>
		</div>

		<!-- Articles Grid -->
		<div class="grid md:grid-cols-3 gap-6">
			{#each articles as article, i}
				<a
					href={article.href}
					class="group rounded-2xl overflow-hidden bg-white transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
					style="
						border: 1px solid #E5E5E5;
						opacity: {visible ? 1 : 0};
						transform: translateY({visible ? 0 : 20}px);
						transition: opacity 0.6s ease-out {i * 0.1}s, transform 0.6s ease-out {i * 0.1}s, box-shadow 0.3s;
					"
				>
					<!-- Thumbnail placeholder with gradient -->
					<div class="relative h-48 overflow-hidden" style="background: linear-gradient(135deg, #FBE9EC 0%, #FAFAFA 100%);">
						<div class="absolute inset-0 flex items-center justify-center">
							<div class="w-16 h-16 rounded-2xl flex items-center justify-center" style="background: rgba(200,16,46,0.1);">
								<span class="text-2xl font-heading font-bold" style="color: #C8102E;">{article.category.charAt(0)}</span>
							</div>
						</div>
						<!-- Category badge -->
						<div class="absolute top-3 left-3">
							<span class="text-[10px] font-semibold uppercase tracking-wider px-2.5 py-1 rounded-md text-white" style="background: #C8102E;">
								{article.category}
							</span>
						</div>
					</div>

					<div class="p-6">
						<h3 class="font-heading text-base font-bold text-[#1A1A1A] mb-2 group-hover:text-[#C8102E] transition-colors leading-snug">
							{article.title}
						</h3>
						<p class="text-sm text-[#5C5C5C] leading-relaxed mb-4 line-clamp-2">
							{article.excerpt}
						</p>
						<div class="flex items-center justify-between">
							<span class="text-xs text-[#5C5C5C]">{article.date}</span>
							<span class="flex items-center gap-1 text-xs text-[#5C5C5C]">
								<Clock size={11} />
								{article.readTime}
							</span>
						</div>
					</div>
				</a>
			{/each}
		</div>

		<!-- Mobile CTA -->
		<div class="sm:hidden mt-8 text-center">
			<a href="/wawasan" class="inline-flex items-center gap-2 text-sm font-semibold" style="color: #C8102E;">
				Baca Wawasan Lainnya
				<ArrowRight size={14} />
			</a>
		</div>
	</div>
</section>
