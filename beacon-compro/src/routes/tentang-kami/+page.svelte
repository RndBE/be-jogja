<script lang="ts">
	import { onMount } from 'svelte';
	import { Target, Eye, Building2, MapPin, ArrowUpRight, ShieldCheck, Award, FileBadge, CheckCircle2 } from '@lucide/svelte';
	import Ornaments from '$lib/components/Ornaments.svelte';

	let timelineVisible = $state(false);
	let contribVisible = $state(false);

	onMount(() => {
		const observer = new IntersectionObserver(
			(entries) => {
				entries.forEach(e => {
					if (e.target.id === 'timeline' && e.isIntersecting) timelineVisible = true;
					if (e.target.id === 'kontribusi' && e.isIntersecting) contribVisible = true;
				});
			},
			{ threshold: 0.1 }
		);
		const el1 = document.getElementById('timeline');
		const el2 = document.getElementById('kontribusi');
		if (el1) observer.observe(el1);
		if (el2) observer.observe(el2);
		return () => observer.disconnect();
	});

	const timeline = [
		{ year: '2013', title: 'Beacon Didirikan', desc: 'Berawal dari pertanyaan: "Kenapa monitoring infrastruktur strategis Indonesia harus bergantung pada perangkat impor?"' },
		{ year: '2015', title: 'Produk Pertama', desc: 'AWLR generasi pertama berhasil dipasang di pos hidrologi Jawa Tengah.' },
		{ year: '2017', title: 'Hak Cipta & Sertifikasi', desc: 'Mendapatkan hak cipta produk dan sertifikasi standar nasional.' },
		{ year: '2019', title: '100 Proyek', desc: 'Milestone 100 proyek tercapai. Ekspansi ke Kalimantan dan Sulawesi.' },
		{ year: '2021', title: 'STESY Diluncurkan', desc: 'Platform Smart Telemetry System hadir untuk menyatukan seluruh perangkat dalam satu dashboard.' },
		{ year: '2023', title: 'Proyek IKN & Ijen', desc: 'Dipercaya untuk monitoring Bendungan IKN dan Kawah Ijen — bukti kematangan teknologi.' },
		{ year: '2024', title: '300+ Proyek', desc: 'Tersebar dari Aceh sampai Papua, 200+ partner, 30+ BBWS & BUMN.' },
		{ year: '2026', title: 'STESY 3.0 & AI', desc: 'Mengintegrasikan AI analytics dan prediktif monitoring ke dalam ekosistem STESY.' }
	];

	const contributions = [
		{ icon: Target, title: 'Water Management', desc: 'Monitoring ketinggian muka air, debit, dan kualitas air sungai serta bendungan di seluruh Indonesia.', metric: '200+', metricLabel: 'Stasiun Air' },
		{ icon: Eye, title: 'Dam Safety', desc: 'Sistem deformation recorder dan vibrating wire untuk memantau keamanan struktur bendungan 24/7.', metric: '50+', metricLabel: 'Bendungan' },
		{ icon: Building2, title: 'Structure Monitoring', desc: 'Pengawasan tekanan, getaran, dan pergerakan struktur kritis termasuk geothermal dan infrastruktur BUMN.', metric: '30+', metricLabel: 'Struktur Kritis' }
	];
</script>

<svelte:head>
	<title>Tentang Kami — Beacon Engineering</title>
	<meta name="description" content="Beacon Engineering, didirikan 2013, adalah pionir sistem telemetri pintar buatan Indonesia dengan 300+ proyek infrastruktur strategis." />
</svelte:head>

<!-- Hero — SKILL: Left-aligned, asymmetric, premium gradients -->
<section class="relative py-24 lg:py-36 min-h-[75dvh] flex flex-col justify-center overflow-hidden bg-[#FAFAFA] border-b border-[#E5E5E5]">
	<!-- Subtle Grid Pattern -->
	<div class="absolute inset-0 z-0 opacity-[0.03]" style="background-image: radial-gradient(#000 1px, transparent 1px); background-size: 24px 24px;"></div>

	<div class="relative z-10 max-w-[1400px] mx-auto px-6 sm:px-8 lg:px-12 w-full">
		<div class="max-w-4xl">
			<div class="flex items-center gap-3 mb-8">
				<div class="w-8 h-[1px] bg-[#C8102E]"></div>
				<span class="text-xs font-mono font-semibold uppercase tracking-[0.2em] text-[#C8102E]">
					Tentang Kami
				</span>
			</div>
			<h1 class="font-heading text-5xl sm:text-6xl lg:text-[72px] font-extrabold leading-[1.05] tracking-tighter text-zinc-950 mb-8">
				Kami Mulai Tahun 2013 dengan Satu Pertanyaan Sederhana.
			</h1>
			<p class="text-2xl font-heading font-bold mb-6 text-[#C8102E] leading-tight max-w-[30ch]">
				"Kenapa monitoring infrastruktur strategis Indonesia harus selalu bergantung pada perangkat impor?"
			</p>
			<p class="text-lg leading-relaxed max-w-[55ch] font-medium text-zinc-600">
				Tiga belas tahun kemudian, jawaban itu terbentang dari Aceh sampai Papua — dalam wujud lebih dari 300 sistem telemetri yang berjalan setiap hari.
			</p>
		</div>
	</div>
</section>

<!-- Visi Misi — SKILL: Asymmetric 5/7 layout Bento 2.0 -->
<section id="visi-misi" class="py-24 lg:py-32 bg-white">
	<div class="max-w-[1400px] mx-auto px-6 sm:px-8 lg:px-12">
		<div class="grid lg:grid-cols-12 gap-8 lg:gap-10">
			<!-- Visi Card -->
			<div class="lg:col-span-5 p-10 lg:p-14 rounded-[2.5rem] relative overflow-hidden group hover:-translate-y-1 transition-transform duration-500" style="background: linear-gradient(145deg, #FBE9EC 0%, #FFF5F6 100%); box-shadow: 0 20px 40px -15px rgba(200,16,46,0.1);">
				<!-- Liquid Glass Border -->
				<div class="absolute inset-0 rounded-[2.5rem] border border-white pointer-events-none shadow-[inset_0_2px_4px_rgba(255,255,255,0.8)]"></div>
				<!-- Background glow -->
				<div class="absolute top-0 right-0 w-48 h-48 bg-white rounded-full blur-3xl opacity-60 pointer-events-none"></div>

				<div class="relative z-10">
					<div class="w-16 h-16 rounded-[20px] flex items-center justify-center mb-8 shadow-sm transition-transform duration-500 group-hover:scale-110" style="background: #C8102E;">
						<Eye size={28} class="text-white" />
					</div>
					<h3 class="font-heading text-3xl font-bold text-zinc-950 tracking-tight mb-5">Visi</h3>
					<p class="text-lg leading-relaxed font-semibold text-zinc-700">
						Menjadi perusahaan teknologi telemetri terdepan di Indonesia yang memberikan solusi monitoring real-time terpercaya untuk infrastruktur strategis negara.
					</p>
				</div>
			</div>

			<!-- Misi Card -->
			<div class="lg:col-span-7 p-10 lg:p-14 rounded-[2.5rem] relative overflow-hidden group hover:-translate-y-1 transition-transform duration-500" style="background: #FAFAFA; border: 1px solid rgba(229,229,229,0.8); box-shadow: 0 10px 30px -10px rgba(0,0,0,0.05);">
				<div class="absolute inset-0 rounded-[2.5rem] border border-white/50 pointer-events-none shadow-[inset_0_1px_2px_rgba(255,255,255,0.8)]"></div>

				<div class="relative z-10">
					<div class="w-16 h-16 rounded-[20px] flex items-center justify-center mb-8 shadow-sm transition-transform duration-500 group-hover:scale-110" style="background: #C8102E;">
						<Target size={28} class="text-white" />
					</div>
					<h3 class="font-heading text-3xl font-bold text-zinc-950 tracking-tight mb-6">Misi</h3>
					<ul class="space-y-4">
						{#each ['Mengembangkan produk telemetri berkualitas tinggi dengan hak cipta lokal', 'Menyediakan after-sales support terbaik melalui tim teknis Indonesia', 'Mengintegrasikan AI dan IoT dalam ekosistem monitoring STESY', 'Mendukung program nasional pengelolaan sumber daya air dan bencana'] as mission}
							<li class="flex items-start gap-4">
								<div class="w-2 h-2 rounded-full shrink-0 mt-2.5" style="background: #C8102E; box-shadow: 0 0 8px rgba(200,16,46,0.4);"></div>
								<span class="text-base leading-relaxed font-medium text-zinc-600">{mission}</span>
							</li>
						{/each}
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- 3 Contributions — SKILL: Zig-zag rows, Bento styling -->
<section id="kontribusi" class="py-24 lg:py-32 relative overflow-hidden bg-[#FAFAFA]">
	<Ornaments variant="dense" />

	<div class="max-w-[1400px] mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
		<div class="max-w-2xl mb-20 space-y-4">
			<div class="flex items-center gap-3 mb-6">
				<div class="w-8 h-[1px] bg-[#C8102E]"></div>
				<span class="text-xs font-mono font-semibold uppercase tracking-[0.2em] text-[#C8102E]">
					Bidang Kontribusi
				</span>
			</div>
			<h2 class="font-heading text-4xl sm:text-5xl lg:text-[56px] font-bold leading-[1.05] tracking-tight text-zinc-950">
				Tiga Pilar Kontribusi Beacon
			</h2>
		</div>

		<div class="space-y-8">
			{#each contributions as item, i}
				<div
					class="group flex flex-col md:flex-row gap-0 rounded-[2rem] overflow-hidden transition-all duration-500 hover:shadow-[0_20px_40px_-15px_rgba(200,16,46,0.15)] hover:-translate-y-1 relative"
					style="
						background: #FFFFFF; border: 1px solid rgba(229,229,229,0.8);
						opacity: {contribVisible ? 1 : 0};
						transform: translateY({contribVisible ? 0 : 40}px);
						transition: opacity 0.8s cubic-bezier(0.16,1,0.3,1) {i * 0.15}s, transform 0.8s cubic-bezier(0.16,1,0.3,1) {i * 0.15}s, box-shadow 0.5s ease, transform 0.5s ease;
					"
				>
					<div class="absolute inset-0 border border-white pointer-events-none rounded-[2rem] z-20"></div>

					<div class="w-full md:w-1/3 p-8 lg:p-12 flex flex-col justify-center items-center text-center relative overflow-hidden {i % 2 === 1 ? 'md:order-2' : ''}" style="background: linear-gradient(135deg, #FFF8F9 0%, #FBE9EC 100%);">
						<div class="absolute top-0 right-0 w-32 h-32 bg-white rounded-full blur-2xl opacity-60 pointer-events-none"></div>
						<div class="absolute inset-y-0 {i % 2 === 1 ? 'left-0' : 'right-0'} w-[1px] bg-gradient-to-b from-transparent via-[#C8102E]/20 to-transparent"></div>

						<span class="relative z-10 font-heading text-5xl lg:text-[72px] font-extrabold text-[#C8102E] tracking-tighter tabular-nums leading-none mb-3">{item.metric}</span>
						<span class="relative z-10 text-[13px] font-mono font-bold uppercase tracking-[0.2em] text-[#C8102E]/80">{item.metricLabel}</span>
					</div>
					<div class="w-full md:w-2/3 p-8 sm:p-10 lg:p-14 flex items-center {i % 2 === 1 ? 'md:order-1' : ''} bg-white relative">
						<div class="absolute inset-0 bg-gradient-to-br from-zinc-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none rounded-[2rem]"></div>

						<div class="relative z-10 flex flex-col sm:flex-row items-start gap-6 lg:gap-8">
							<div class="w-16 h-16 rounded-[20px] flex items-center justify-center shrink-0 transition-transform duration-500 group-hover:scale-110 group-hover:-rotate-3 shadow-sm border border-zinc-100" style="background: #FBE9EC;">
								<svelte:component this={item.icon} size={28} style="color: #C8102E;" />
							</div>
							<div class="flex-1 mt-2 sm:mt-0">
								<h3 class="font-heading text-2xl lg:text-3xl font-bold text-zinc-950 tracking-tight mb-4 group-hover:text-[#C8102E] transition-colors duration-300">{item.title}</h3>
								<p class="text-base lg:text-lg text-zinc-500 font-medium leading-relaxed max-w-[55ch]">{item.desc}</p>
							</div>
						</div>
					</div>
				</div>
			{/each}
		</div>
	</div>
</section>

<!-- Timeline — SKILL: Left-aligned heading, polished UI -->
<section id="timeline" class="py-24 lg:py-32 bg-white">
	<div class="max-w-[1400px] mx-auto px-6 sm:px-8 lg:px-12">
		<div class="grid lg:grid-cols-12 gap-16 lg:gap-20">
			<!-- Left: Heading sticky -->
			<div class="lg:col-span-4 lg:sticky lg:top-40 lg:self-start">
				<div class="flex items-center gap-3 mb-6">
					<div class="w-8 h-[1px] bg-[#C8102E]"></div>
					<span class="text-xs font-mono font-semibold uppercase tracking-[0.2em] text-[#C8102E]">
						Perjalanan
					</span>
				</div>
				<h2 class="font-heading text-4xl sm:text-5xl font-bold tracking-tight text-zinc-950 leading-[1.05] mb-5">Timeline Beacon Engineering</h2>
				<p class="text-lg font-medium leading-relaxed text-zinc-500">Dari garasi kecil di Yogyakarta hingga mengamankan infrastruktur strategis nasional.</p>
			</div>

			<!-- Right: Timeline items -->
			<div class="lg:col-span-8">
				<div class="relative pb-10">
					<!-- Animated Line -->
					<div class="absolute left-7 top-4 bottom-0 w-[2px] rounded-full" style="background: linear-gradient(180deg, #C8102E 0%, #FBE9EC 80%, transparent 100%);"></div>
					
					<div class="space-y-12">
						{#each timeline as item, i}
							<div
								class="group relative flex items-start gap-8 pl-3"
								style="
									opacity: {timelineVisible ? 1 : 0};
									transform: translateX({timelineVisible ? 0 : -30}px);
									transition: opacity 0.8s cubic-bezier(0.16,1,0.3,1) {i * 0.1}s, transform 0.8s cubic-bezier(0.16,1,0.3,1) {i * 0.1}s;
								"
							>
								<!-- Timeline Node -->
								<div class="relative z-10 w-10 h-10 rounded-[14px] flex items-center justify-center shrink-0 transition-transform duration-500 group-hover:scale-110 shadow-sm" style="background: {i === timeline.length - 1 ? '#C8102E' : '#FFFFFF'}; border: 2px solid #C8102E;">
									<span class="text-[11px] font-mono font-bold" style="color: {i === timeline.length - 1 ? 'white' : '#C8102E'};">{item.year.slice(2)}</span>
								</div>
								
								<div class="pb-4 group-hover:translate-x-2 transition-transform duration-500 ease-[cubic-bezier(0.16,1,0.3,1)]">
									<span class="inline-block px-3 py-1 rounded-md text-xs font-mono font-bold tracking-[0.1em] mb-3" style="background: #FBE9EC; color: #C8102E;">{item.year}</span>
									<h3 class="font-heading text-2xl font-bold tracking-tight text-zinc-950 mb-2">{item.title}</h3>
									<p class="text-base font-medium leading-relaxed text-zinc-500 max-w-[50ch]">{item.desc}</p>
								</div>
							</div>
						{/each}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Sertifikasi & HAKI -->
<section id="sertifikasi" class="py-24 lg:py-32 bg-[#FAFAFA] border-y border-[#E5E5E5] relative overflow-hidden">
	<!-- Ornamental Background -->
	<div class="absolute inset-0 z-0 opacity-30 mix-blend-multiply" style="background: radial-gradient(circle at top right, rgba(200,16,46,0.05), transparent 40%), radial-gradient(circle at bottom left, rgba(200,16,46,0.05), transparent 40%);"></div>

	<div class="max-w-[1400px] mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
		<div class="flex flex-col md:flex-row md:items-end justify-between gap-8 mb-16">
			<div class="max-w-2xl">
				<div class="flex items-center gap-3 mb-6">
					<div class="w-8 h-[1px] bg-[#C8102E]"></div>
					<span class="text-xs font-mono font-semibold uppercase tracking-[0.2em] text-[#C8102E]">Standar Kualitas</span>
				</div>
				<h2 class="font-heading text-4xl sm:text-5xl font-extrabold tracking-tighter text-zinc-950 leading-[1.05]">Sertifikasi & <span style="color: #C8102E;">HAKI</span></h2>
			</div>
			<p class="text-lg font-medium leading-relaxed text-zinc-500 max-w-md">Berkomitmen pada standar kualitas dan keamanan internasional dalam setiap lini produk telemetri kami.</p>
		</div>

		<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
			<!-- ISO 9001 -->
			<div class="group relative p-8 rounded-[2rem] bg-white border border-[#E5E5E5] hover:border-[#C8102E]/30 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(200,16,46,0.1)]">
				<div class="absolute inset-0 bg-gradient-to-br from-white to-zinc-50/50 rounded-[2rem] opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
				
				<div class="relative z-10 flex flex-col h-full">
					<div class="w-14 h-14 rounded-2xl flex items-center justify-center shrink-0 mb-6 transition-transform duration-500 group-hover:scale-110 shadow-sm" style="background: #FBE9EC;">
						<Award size={24} style="color: #C8102E;" />
					</div>
					<h3 class="font-heading text-2xl font-bold text-zinc-950 tracking-tight mb-2">ISO 9001:2025</h3>
					<span class="inline-block text-[11px] font-mono font-bold uppercase tracking-widest text-[#C8102E] mb-4">Manajemen Mutu</span>
					<p class="text-sm font-medium leading-relaxed text-zinc-500 flex-1">Standar internasional untuk sistem manajemen mutu R&D dan manufaktur perangkat.</p>
					
					<div class="pt-6 mt-6 border-t border-[#E5E5E5] flex items-center gap-2">
						<CheckCircle2 size={16} class="text-[#1B7F3A]" />
						<span class="text-xs font-bold text-zinc-900">Certified</span>
					</div>
				</div>
			</div>

			<!-- ISO 27001 -->
			<div class="group relative p-8 rounded-[2rem] bg-white border border-[#E5E5E5] hover:border-[#C8102E]/30 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(200,16,46,0.1)]">
				<div class="absolute inset-0 bg-gradient-to-br from-white to-zinc-50/50 rounded-[2rem] opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
				
				<div class="relative z-10 flex flex-col h-full">
					<div class="w-14 h-14 rounded-2xl flex items-center justify-center shrink-0 mb-6 transition-transform duration-500 group-hover:scale-110 shadow-sm" style="background: #FBE9EC;">
						<ShieldCheck size={24} style="color: #C8102E;" />
					</div>
					<h3 class="font-heading text-2xl font-bold text-zinc-950 tracking-tight mb-2">ISO 27001</h3>
					<span class="inline-block text-[11px] font-mono font-bold uppercase tracking-widest text-[#C8102E] mb-4">Keamanan Informasi</span>
					<p class="text-sm font-medium leading-relaxed text-zinc-500 flex-1">Jaminan keamanan data tingkat tinggi untuk arsitektur STESY dan perlindungan data klien.</p>
					
					<div class="pt-6 mt-6 border-t border-[#E5E5E5] flex items-center gap-2">
						<CheckCircle2 size={16} class="text-[#1B7F3A]" />
						<span class="text-xs font-bold text-zinc-900">Certified</span>
					</div>
				</div>
			</div>

			<!-- ISO 30141 -->
			<div class="group relative p-8 rounded-[2rem] bg-white border border-[#E5E5E5] hover:border-[#C8102E]/30 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(200,16,46,0.1)]">
				<div class="absolute inset-0 bg-gradient-to-br from-white to-zinc-50/50 rounded-[2rem] opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
				
				<div class="relative z-10 flex flex-col h-full">
					<div class="w-14 h-14 rounded-2xl flex items-center justify-center shrink-0 mb-6 transition-transform duration-500 group-hover:scale-110 shadow-sm" style="background: #FBE9EC;">
						<Target size={24} style="color: #C8102E;" />
					</div>
					<h3 class="font-heading text-2xl font-bold text-zinc-950 tracking-tight mb-2">ISO 30141</h3>
					<span class="inline-block text-[11px] font-mono font-bold uppercase tracking-widest text-[#C8102E] mb-4">IoT Architecture</span>
					<p class="text-sm font-medium leading-relaxed text-zinc-500 flex-1">Kepatuhan arsitektur standar sistem Internet of Things (IoT) berskala enterprise.</p>
					
					<div class="pt-6 mt-6 border-t border-[#E5E5E5] flex items-center gap-2">
						<CheckCircle2 size={16} class="text-[#1B7F3A]" />
						<span class="text-xs font-bold text-zinc-900">Certified</span>
					</div>
				</div>
			</div>

			<!-- HAKI -->
			<div class="group relative p-8 rounded-[2rem] bg-zinc-950 border border-white/10 hover:border-white/20 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(0,0,0,0.5)]">
				<div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent rounded-[2rem] opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
				<div class="absolute -top-10 -right-10 w-32 h-32 bg-[#C8102E]/20 blur-2xl rounded-full pointer-events-none"></div>
				
				<div class="relative z-10 flex flex-col h-full">
					<div class="w-14 h-14 rounded-2xl flex items-center justify-center shrink-0 mb-6 transition-transform duration-500 group-hover:scale-110 border border-white/10" style="background: rgba(255,255,255,0.05);">
						<FileBadge size={24} class="text-white" />
					</div>
					<h3 class="font-heading text-2xl font-bold text-white tracking-tight mb-2">HAKI Terdaftar</h3>
					<span class="inline-block text-[11px] font-mono font-bold uppercase tracking-widest text-zinc-400 mb-4">Kekayaan Intelektual</span>
					<p class="text-sm font-medium leading-relaxed text-zinc-400 flex-1">Desain industri dan algoritma perangkat lunak kami telah terlindungi secara hukum nasional.</p>
					
					<div class="pt-6 mt-6 border-t border-white/10 flex items-center gap-2">
						<CheckCircle2 size={16} class="text-emerald-500" />
						<span class="text-xs font-bold text-white">Registered</span>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- Office — SKILL: High-end Contact Block -->
<section class="py-24 lg:py-32 relative overflow-hidden" style="background: linear-gradient(180deg, #FAFAFA 0%, #FBE9EC 100%);">
	<div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-[0.03] pointer-events-none mix-blend-multiply"></div>
	
	<div class="max-w-[1400px] mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
		<div class="max-w-3xl flex flex-col items-start text-left">
			<div class="flex items-center gap-3 mb-6">
				<div class="w-8 h-[1px] bg-[#C8102E]"></div>
				<span class="text-xs font-mono font-semibold uppercase tracking-[0.2em] text-[#C8102E]">
					Kantor Kami
				</span>
			</div>
			<h2 class="font-heading text-4xl sm:text-5xl lg:text-[64px] font-extrabold tracking-tighter text-zinc-950 leading-[1.05] mb-6">Dirancang & Dirakit <br/><span class="text-zinc-400">di Yogyakarta</span></h2>
			<p class="text-xl font-medium leading-relaxed text-zinc-600 mb-10 max-w-[45ch]">
				Seluruh kegiatan R&D, produksi, dan support teknis kami berpusat secara mandiri di Daerah Istimewa Yogyakarta.
			</p>
			
			<a
				href="https://goo.gl/maps/placeholder"
				class="group relative inline-flex items-center gap-4 px-8 py-5 rounded-[1.25rem] overflow-hidden transition-transform active:scale-95 bg-white border border-zinc-200 shadow-[0_12px_24px_-8px_rgba(0,0,0,0.05)] hover:shadow-[0_20px_40px_-15px_rgba(200,16,46,0.15)] hover:border-[#C8102E]/30"
				target="_blank"
				rel="noopener"
			>
				<div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0 transition-transform duration-500 group-hover:scale-110" style="background: #FBE9EC;">
					<MapPin size={22} style="color: #C8102E;" />
				</div>
				<div class="flex flex-col text-left">
					<span class="text-[11px] font-mono font-bold uppercase tracking-[0.15em] text-zinc-400 mb-0.5">Alamat HQ</span>
					<span class="text-base font-bold text-zinc-900 group-hover:text-[#C8102E] transition-colors">Kadirojo I, Kalasan, Sleman, DIY 55571</span>
				</div>
				<ArrowUpRight size={20} class="ml-4 text-zinc-300 group-hover:text-[#C8102E] group-hover:translate-x-1 group-hover:-translate-y-1 transition-all" />
			</a>
		</div>
	</div>
</section>
