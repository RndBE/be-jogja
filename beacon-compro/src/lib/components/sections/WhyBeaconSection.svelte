<script lang="ts">
	import { onMount } from 'svelte';
	import { Wrench, ShieldCheck, Network } from '@lucide/svelte';
	import Ornaments from '$lib/components/Ornaments.svelte';

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
			icon: Network,
			title: 'Satu Ekosistem, Real-time',
			desc: 'Semua perangkat tersambung ke STESY — platform monitoring tunggal, lintas Windows, macOS, iOS, Android. Plus integrasi CCTV.',
			metric: '98.7%',
			metricLabel: 'Avg Uptime'
		}
	];
</script>

<section id="mengapa-beacon" class="relative py-24 lg:py-32 bg-[#FAFAFA] overflow-hidden">
	<Ornaments variant="dense" />

	<div class="relative z-10 max-w-[1400px] mx-auto px-6 sm:px-8 lg:px-12">
		<!-- Heading — SKILL: Left-aligned (LAYOUT_VARIANCE=8) -->
		<div class="max-w-2xl mb-20 space-y-4">
			<div class="flex items-center gap-3 mb-6">
				<div class="w-8 h-[1px] bg-[#C8102E]"></div>
				<span class="text-xs font-mono font-semibold uppercase tracking-[0.2em] text-[#C8102E]">
					Mengapa Beacon
				</span>
			</div>
			<h2 class="font-heading text-4xl sm:text-5xl lg:text-[56px] font-bold text-zinc-950 leading-[1.05] tracking-tight">
				Bukan Sekedar Pilihan Lokal.<br/>
				<span class="text-[#C8102E]">Pilihan yang Lebih Tepat</span> untuk Indonesia.
			</h2>
		</div>

		<!-- Zig-zag layout: alternating full-width rows -->
		<div class="space-y-8">
			{#each propositions as prop, i}
				<div
					class="group flex flex-col md:flex-row gap-0 rounded-[2rem] overflow-hidden transition-all duration-500 hover:shadow-[0_20px_40px_-15px_rgba(200,16,46,0.15)] hover:-translate-y-1 relative"
					style="
						background: #FFFFFF;
						border: 1px solid rgba(229,229,229,0.8);
						opacity: {visible ? 1 : 0};
						transform: translateY({visible ? 0 : 40}px);
						transition: opacity 0.8s cubic-bezier(0.16,1,0.3,1) {i * 0.15}s, transform 0.8s cubic-bezier(0.16,1,0.3,1) {i * 0.15}s, box-shadow 0.5s ease, transform 0.5s ease;
					"
				>
					<!-- Inner Glass Border -->
					<div class="absolute inset-0 border border-white pointer-events-none rounded-[2rem] z-20"></div>

					<!-- Metric block — alternating side -->
					<div
						class="w-full md:w-1/3 p-8 lg:p-12 flex flex-col justify-center items-center text-center relative overflow-hidden {i % 2 === 1 ? 'md:order-2' : ''}"
						style="background: linear-gradient(135deg, #FFF8F9 0%, #FBE9EC 100%);"
					>
						<!-- Decorative background elements -->
						<div class="absolute top-0 right-0 w-32 h-32 bg-white rounded-full blur-2xl opacity-60 pointer-events-none"></div>
						<div class="absolute inset-y-0 {i % 2 === 1 ? 'left-0' : 'right-0'} w-[1px] bg-gradient-to-b from-transparent via-[#C8102E]/20 to-transparent"></div>

						<span class="relative z-10 font-heading text-5xl lg:text-[72px] font-extrabold text-[#C8102E] tracking-tighter tabular-nums leading-none mb-3">
							{prop.metric}
						</span>
						<span class="relative z-10 text-[13px] font-mono font-bold uppercase tracking-[0.2em] text-[#C8102E]/80">
							{prop.metricLabel}
						</span>
					</div>

					<!-- Content block -->
					<div class="w-full md:w-2/3 p-8 sm:p-10 lg:p-14 flex items-center {i % 2 === 1 ? 'md:order-1' : ''} bg-white relative">
						<!-- Subtle gradient mesh on hover -->
						<div class="absolute inset-0 bg-gradient-to-br from-zinc-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none rounded-[2rem]"></div>

						<div class="relative z-10 flex flex-col sm:flex-row items-start gap-6 lg:gap-8">
							<div class="w-16 h-16 rounded-[20px] flex items-center justify-center shrink-0 transition-transform duration-500 group-hover:scale-110 group-hover:-rotate-3 shadow-sm border border-zinc-100" style="background: #FBE9EC;">
								<svelte:component this={prop.icon} size={28} style="color: #C8102E;" />
							</div>
							<div class="flex-1 mt-2 sm:mt-0">
								<h3 class="font-heading text-2xl lg:text-3xl font-bold text-zinc-950 tracking-tight mb-4 group-hover:text-[#C8102E] transition-colors duration-300">
									{prop.title}
								</h3>
								<p class="text-base lg:text-lg text-zinc-500 leading-relaxed font-medium max-w-[55ch]">
									{prop.desc}
								</p>
							</div>
						</div>
					</div>
				</div>
			{/each}
		</div>
	</div>
</section>
