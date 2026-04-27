<script lang="ts">
	import { onMount } from 'svelte';
	import { Target, Eye, Award, Users, Building2, MapPin } from '@lucide/svelte';

	let timelineVisible = $state(false);

	onMount(() => {
		const observer = new IntersectionObserver(
			(entries) => { if (entries[0].isIntersecting) timelineVisible = true; },
			{ threshold: 0.1 }
		);
		const el = document.getElementById('timeline');
		if (el) observer.observe(el);
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
		{ icon: Target, title: 'Water Management', desc: 'Monitoring ketinggian muka air, debit, dan kualitas air sungai serta bendungan di seluruh Indonesia.' },
		{ icon: Eye, title: 'Dam Safety', desc: 'Sistem deformation recorder dan vibrating wire untuk memantau keamanan struktur bendungan 24/7.' },
		{ icon: Building2, title: 'Structure Monitoring', desc: 'Pengawasan tekanan, getaran, dan pergerakan struktur kritis termasuk geothermal dan infrastruktur BUMN.' }
	];
</script>

<svelte:head>
	<title>Tentang Kami — Beacon Engineering</title>
	<meta name="description" content="Beacon Engineering, didirikan 2013, adalah pionir sistem telemetri pintar buatan Indonesia dengan 300+ proyek infrastruktur strategis." />
</svelte:head>

<!-- Hero -->
<section class="relative py-20 lg:py-32 overflow-hidden" style="background: linear-gradient(165deg, #FFFFFF 0%, #FFF5F6 40%, #FBE9EC 100%);">
	<div class="absolute -top-24 -right-24 w-96 h-96 rounded-full pointer-events-none opacity-[0.05]" style="border: 2px solid #C8102E;"></div>
	<div class="absolute bottom-16 left-[4%] w-10 h-10 rotate-45 rounded-sm pointer-events-none opacity-[0.04]" style="background: #C8102E;"></div>

	<div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
		<span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest mb-6" style="background: #FBE9EC; color: #C8102E;">Tentang Kami</span>
		<h1 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-extrabold leading-tight mb-6" style="letter-spacing: -0.02em; color: #1A1A1A;">
			Kami Mulai Tahun 2013 dengan Satu Pertanyaan:
		</h1>
		<p class="text-xl font-heading font-semibold mb-6" style="color: #C8102E;">
			"Kenapa monitoring infrastruktur strategis Indonesia harus selalu bergantung pada perangkat impor?"
		</p>
		<p class="text-base leading-relaxed max-w-2xl mx-auto" style="color: #5C5C5C;">
			Empat belas tahun kemudian, jawaban itu terbentang dari Aceh sampai Papua — dalam wujud lebih dari 300 sistem telemetri yang berjalan setiap hari, dirancang dan dirakit oleh tangan-tangan Indonesia.
		</p>
	</div>

	<div class="absolute bottom-0 left-0 right-0 pointer-events-none" style="transform: translateY(1px);">
		<svg viewBox="0 0 1440 50" fill="none" preserveAspectRatio="none" class="w-full h-10"><path d="M0,50 L0,25 Q360,0 720,25 T1440,25 L1440,50 Z" fill="white"/></svg>
	</div>
</section>

<!-- Visi Misi -->
<section id="visi-misi" class="py-16 lg:py-24 bg-white">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid md:grid-cols-2 gap-8">
			<div class="p-8 rounded-2xl" style="background: #FBE9EC; border: 1px solid rgba(200,16,46,0.1);">
				<div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4" style="background: #C8102E;">
					<Eye size={22} class="text-white" />
				</div>
				<h3 class="font-heading text-xl font-bold mb-3" style="color: #1A1A1A;">Visi</h3>
				<p class="text-sm leading-relaxed" style="color: #3A3A3A;">
					Menjadi perusahaan teknologi telemetri terdepan di Indonesia yang memberikan solusi monitoring real-time terpercaya untuk infrastruktur strategis negara.
				</p>
			</div>
			<div class="p-8 rounded-2xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
				<div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4" style="background: #C8102E;">
					<Target size={22} class="text-white" />
				</div>
				<h3 class="font-heading text-xl font-bold mb-3" style="color: #1A1A1A;">Misi</h3>
				<ul class="space-y-2 text-sm leading-relaxed" style="color: #3A3A3A;">
					<li>• Mengembangkan produk telemetri berkualitas tinggi dengan hak cipta lokal</li>
					<li>• Menyediakan after-sales support terbaik melalui tim teknis Indonesia</li>
					<li>• Mengintegrasikan AI dan IoT dalam ekosistem monitoring STESY</li>
					<li>• Mendukung program nasional pengelolaan sumber daya air dan bencana</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!-- 3 Contributions -->
<section class="py-16 lg:py-24 relative overflow-hidden" style="background: #FAFAFA;">
	<div class="absolute top-10 right-[4%] w-24 h-24 rounded-full pointer-events-none opacity-[0.04]" style="border: 2px solid #C8102E;"></div>

	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="text-center mb-12">
			<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">Bidang Kontribusi</span>
			<h2 class="font-heading text-3xl sm:text-4xl font-bold mt-3" style="color: #1A1A1A;">Tiga Pilar Kontribusi Beacon</h2>
		</div>

		<div class="grid md:grid-cols-3 gap-6">
			{#each contributions as item}
				<div class="group p-8 rounded-2xl bg-white hover:-translate-y-1 hover:shadow-lg transition-all duration-300" style="border: 1px solid #E5E5E5;">
					<div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform" style="background: #FBE9EC;">
						<svelte:component this={item.icon} size={24} style="color: #C8102E;" />
					</div>
					<h3 class="font-heading text-lg font-bold mb-2 group-hover:text-[#C8102E] transition-colors" style="color: #1A1A1A;">{item.title}</h3>
					<p class="text-sm leading-relaxed" style="color: #5C5C5C;">{item.desc}</p>
				</div>
			{/each}
		</div>
	</div>
</section>

<!-- Timeline -->
<section id="timeline" class="py-16 lg:py-24 bg-white">
	<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="text-center mb-12">
			<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">Perjalanan</span>
			<h2 class="font-heading text-3xl sm:text-4xl font-bold mt-3" style="color: #1A1A1A;">Timeline Beacon Engineering</h2>
		</div>

		<div class="relative">
			<!-- Timeline line -->
			<div class="absolute left-6 top-0 bottom-0 w-[2px]" style="background: linear-gradient(180deg, #C8102E 0%, #FBE9EC 100%);"></div>

			<div class="space-y-8">
				{#each timeline as item, i}
					<div
						class="relative flex items-start gap-6 pl-2"
						style="
							opacity: {timelineVisible ? 1 : 0};
							transform: translateX({timelineVisible ? 0 : -20}px);
							transition: opacity 0.6s ease-out {i * 0.1}s, transform 0.6s ease-out {i * 0.1}s;
						"
					>
						<!-- Dot -->
						<div class="relative z-10 w-10 h-10 rounded-full flex items-center justify-center shrink-0" style="background: {i === timeline.length - 1 ? '#C8102E' : 'white'}; border: 2px solid #C8102E;">
							<span class="text-[10px] font-bold" style="color: {i === timeline.length - 1 ? 'white' : '#C8102E'};">{item.year.slice(2)}</span>
						</div>

						<!-- Content -->
						<div class="pb-2">
							<span class="text-xs font-semibold uppercase tracking-wider" style="color: #C8102E;">{item.year}</span>
							<h3 class="font-heading text-base font-bold mt-1" style="color: #1A1A1A;">{item.title}</h3>
							<p class="text-sm leading-relaxed mt-1" style="color: #5C5C5C;">{item.desc}</p>
						</div>
					</div>
				{/each}
			</div>
		</div>
	</div>
</section>

<!-- Office -->
<section class="py-16 lg:py-24 relative overflow-hidden" style="background: linear-gradient(180deg, #FAFAFA 0%, #FBE9EC 100%);">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
		<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">Kantor Kami</span>
		<h2 class="font-heading text-3xl sm:text-4xl font-bold mt-3 mb-4" style="color: #1A1A1A;">Dirancang & Dirakit di Yogyakarta</h2>
		<p class="text-base max-w-2xl mx-auto mb-8" style="color: #5C5C5C;">
			Seluruh kegiatan R&D, produksi, dan support teknis kami berpusat di Kalasan, Sleman, Daerah Istimewa Yogyakarta.
		</p>
		<div class="inline-flex items-center gap-2 px-5 py-3 rounded-xl" style="background: white; border: 1px solid #E5E5E5; box-shadow: 0 4px 12px rgba(0,0,0,0.04);">
			<MapPin size={16} style="color: #C8102E;" />
			<span class="text-sm" style="color: #3A3A3A;">Kadirojo I, Purwomartani, Kalasan, Sleman, DIY 55571</span>
		</div>
	</div>
</section>
