<script lang="ts">
	import { onMount } from 'svelte';
	import { Wrench, ShieldCheck, Globe, ArrowRight } from '@lucide/svelte';

	let visible = $state(false);

	onMount(() => {
		const observer = new IntersectionObserver(
			(entries) => {
				if (entries[0].isIntersecting) visible = true;
			},
			{ threshold: 0.15 }
		);
		const section = document.getElementById('mengapa-beacon');
		if (section) observer.observe(section);
		return () => observer.disconnect();
	});

	const propositions = [
		{
			icon: Wrench,
			title: 'Dimengerti oleh Tangan Indonesia',
			desc: 'Hak cipta sendiri. R&D di Yogyakarta. Tim teknis yang bisa datang ke lokasi proyek dalam hitungan hari, bukan bulan.',
			metric: '14',
			metricLabel: 'Tahun R&D'
		},
		{
			icon: ShieldCheck,
			title: 'Terbukti di Infrastruktur Strategis',
			desc: 'Dipasang di Bendungan IKN, Ciawi-Sukamahi, Cipanas, Keureuto, Kawah Ijen, dan ratusan titik lainnya. Bertahan di iklim tropis, banjir, dan suhu ekstrem.',
			metric: '300+',
			metricLabel: 'Titik Proyek'
		},
		{
			icon: Globe,
			title: 'Satu Ekosistem, Real-time',
			desc: 'Semua perangkat tersambung ke STESY — platform monitoring tunggal, lintas Windows, macOS, iOS, Android. Plus integrasi CCTV.',
			metric: '98.7%',
			metricLabel: 'Avg Uptime'
		}
	];
</script>

<!-- SKILL: No 3-equal-column cards. Using zig-zag layout with metric emphasis -->
<section id="mengapa-beacon" class="relative py-20 lg:py-28 section-offwhite overflow-hidden">
	<!-- Decorative ornaments -->
	<div class="absolute -top-10 -right-10 w-40 h-40 rounded-full pointer-events-none opacity-[0.04]" style="border: 2px solid #C8102E;"></div>
	<div class="absolute bottom-20 left-[3%] w-6 h-6 rotate-45 pointer-events-none opacity-[0.04]" style="background: #C8102E;"></div>
	<svg class="absolute top-[50%] right-[4%] w-8 h-8 opacity-[0.04] pointer-events-none" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="2">
		<line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
	</svg>

	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Heading — SKILL: Left-aligned (LAYOUT_VARIANCE=8) -->
		<div class="max-w-2xl mb-16 space-y-4">
			<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">Mengapa Beacon</span>
			<h2 class="font-heading text-3xl sm:text-4xl lg:text-[48px] font-bold text-[#1A1A1A] leading-[1.1]" style="letter-spacing: -0.025em;">
				Bukan Sekedar Pilihan Lokal.<br/>
				<span style="color: #C8102E;">Pilihan yang Lebih Tepat</span> untuk Indonesia.
			</h2>
		</div>

		<!-- Zig-zag layout: alternating full-width rows -->
		<div class="space-y-6">
			{#each propositions as prop, i}
				<div
					class="group grid grid-cols-1 md:grid-cols-12 gap-0 rounded-[20px] overflow-hidden transition-all duration-500 hover:shadow-xl"
					style="
						background: white;
						border: 1px solid #E5E5E5;
						box-shadow: 0 1px 3px rgba(0,0,0,0.03);
						opacity: {visible ? 1 : 0};
						transform: translateY({visible ? 0 : 28}px);
						transition: opacity 0.7s cubic-bezier(0.16,1,0.3,1) {i * 0.1}s, transform 0.7s cubic-bezier(0.16,1,0.3,1) {i * 0.1}s, box-shadow 0.3s ease;
					"
				>
					<!-- Metric block — alternating side -->
					<div
						class="md:col-span-3 p-8 flex flex-col justify-center items-center text-center {i % 2 === 1 ? 'md:order-2' : ''}"
						style="background: linear-gradient(135deg, #FBE9EC 0%, #FFF5F6 100%); border-{i % 2 === 1 ? 'left' : 'right'}: 1px solid rgba(200,16,46,0.08);"
					>
						<span class="font-heading text-4xl lg:text-5xl font-extrabold gradient-text tabular-nums leading-none">{prop.metric}</span>
						<span class="text-[11px] uppercase tracking-widest font-medium mt-2" style="color: #C8102E;">{prop.metricLabel}</span>
					</div>

					<!-- Content block -->
					<div class="md:col-span-9 p-8 lg:p-10 flex items-center {i % 2 === 1 ? 'md:order-1' : ''}">
						<div class="flex items-start gap-5">
							<div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0 transition-all duration-300 group-hover:scale-110" style="background: #FBE9EC;">
								<svelte:component this={prop.icon} size={22} style="color: #C8102E;" />
							</div>
							<div>
								<h3 class="font-heading text-xl font-bold text-[#1A1A1A] mb-2 group-hover:text-[#C8102E] transition-colors">{prop.title}</h3>
								<p class="text-sm text-[#5C5C5C] leading-relaxed max-w-[50ch]">{prop.desc}</p>
							</div>
						</div>
					</div>
				</div>
			{/each}
		</div>
	</div>
</section>
