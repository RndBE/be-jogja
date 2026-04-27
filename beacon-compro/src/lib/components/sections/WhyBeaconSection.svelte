<script lang="ts">
	import { onMount } from 'svelte';
	import { Wrench, ShieldCheck, Globe } from '@lucide/svelte';

	let visible = $state(false);

	onMount(() => {
		const observer = new IntersectionObserver(
			(entries) => {
				if (entries[0].isIntersecting) visible = true;
			},
			{ threshold: 0.2 }
		);
		const section = document.getElementById('mengapa-beacon');
		if (section) observer.observe(section);
		return () => observer.disconnect();
	});

	const propositions = [
		{
			icon: Wrench,
			title: 'Dimengerti oleh Tangan Indonesia',
			desc: 'Hak cipta sendiri. R&D di Yogyakarta. Tim teknis yang bisa datang ke lokasi proyek dalam hitungan hari, bukan bulan.'
		},
		{
			icon: ShieldCheck,
			title: 'Terbukti di Infrastruktur Strategis',
			desc: 'Dipasang di Bendungan IKN, Ciawi-Sukamahi, Cipanas, Keureuto, Kawah Ijen, dan ratusan titik lainnya. Bertahan di iklim tropis, banjir, dan suhu ekstrem.'
		},
		{
			icon: Globe,
			title: 'Satu Ekosistem, Real-time',
			desc: 'Semua perangkat tersambung ke STESY — platform monitoring tunggal, lintas Windows, macOS, iOS, Android. Plus integrasi CCTV.'
		}
	];
</script>

<section id="mengapa-beacon" class="relative py-20 lg:py-28 section-offwhite overflow-hidden">
	<!-- Decorative ornaments -->
	<div class="absolute -top-10 -right-10 w-40 h-40 rounded-full pointer-events-none opacity-[0.05]" style="border: 2px solid #C8102E;"></div>
	<div class="absolute bottom-20 left-[3%] w-6 h-6 rotate-45 pointer-events-none opacity-[0.04]" style="background: #C8102E;"></div>
	<svg class="absolute top-[50%] right-[4%] w-8 h-8 opacity-[0.04] pointer-events-none" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="2">
		<line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
	</svg>
	<svg class="absolute bottom-[15%] right-[15%] w-16 h-8 opacity-[0.04] pointer-events-none" viewBox="0 0 100 40" fill="none">
		<path d="M0,20 Q25,0 50,20 T100,20" stroke="#C8102E" stroke-width="2" fill="none"/>
	</svg>

	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Heading -->
		<div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
			<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">Mengapa Beacon</span>
			<h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold text-[#1A1A1A] leading-tight" style="letter-spacing: -0.02em;">
				Bukan Sekedar Pilihan Lokal.<br />
				<span style="color: #C8102E;">Pilihan yang Lebih Tepat</span> untuk Indonesia.
			</h2>
		</div>

		<!-- 3 Value Props -->
		<div class="grid md:grid-cols-3 gap-8">
			{#each propositions as prop, i}
				<div
					class="group relative p-8 rounded-2xl bg-white transition-all duration-300 hover:-translate-y-1"
					style="
						border: 1px solid #E5E5E5;
						box-shadow: 0 1px 3px rgba(0,0,0,0.04);
						opacity: {visible ? 1 : 0};
						transform: translateY({visible ? 0 : 24}px);
						transition: opacity 0.6s ease-out {i * 0.08}s, transform 0.6s ease-out {i * 0.08}s, box-shadow 0.3s, border-color 0.3s;
					"
					class:hover:shadow-xl={true}
				>
					<!-- Hover glow border (pseudo via gradient) -->
					<div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none" style="
						background: conic-gradient(from 0deg, rgba(200,16,46,0.1), transparent 30%, transparent 70%, rgba(200,16,46,0.1));
						padding: 1px;
						mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
						mask-composite: xor;
						-webkit-mask-composite: xor;
					"></div>

					<div class="relative z-10">
						<div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5" style="background: #FBE9EC;">
							<svelte:component this={prop.icon} size={22} style="color: #C8102E;" />
						</div>
						<h3 class="font-heading text-xl font-bold text-[#1A1A1A] mb-3 group-hover:text-[#C8102E] transition-colors">
							{prop.title}
						</h3>
						<p class="text-sm text-[#5C5C5C] leading-relaxed">
							{prop.desc}
						</p>
					</div>
				</div>
			{/each}
		</div>
	</div>
</section>
