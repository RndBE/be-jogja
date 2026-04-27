<script lang="ts">
	import { onMount } from 'svelte';
	import { Brain, Wrench, Monitor, Users } from '@lucide/svelte';
	import Ornaments from '$lib/components/Ornaments.svelte';

	let visible = $state(false);

	onMount(() => {
		const observer = new IntersectionObserver(
			(entries) => { if (entries[0].isIntersecting) visible = true; },
			{ threshold: 0.2 }
		);
		const el = document.getElementById('layanan-beyond');
		if (el) observer.observe(el);
		return () => observer.disconnect();
	});

	const services = [
		{
			icon: Brain,
			title: 'Telemetri Berbasis AI',
			desc: 'Pengumpulan, analisa, dan komparasi data otomatis untuk insight yang lebih dalam.'
		},
		{
			icon: Wrench,
			title: 'Garansi & Maintenance',
			desc: 'Pengecekan teknis, kebersihan, penggantian suku cadang, kalibrasi, uji fungsional.'
		},
		{
			icon: Monitor,
			title: 'Monitoring Terintegrasi',
			desc: 'Akses lewat satu aplikasi STESY, tidak peduli berapa banyak perangkat.'
		},
		{
			icon: Users,
			title: 'Konsultasi Teknis',
			desc: 'Tim engineer kami membantu sejak fase desain sampai operasional.'
		}
	];
</script>

<section id="layanan-beyond" class="relative py-20 lg:py-28 bg-white overflow-hidden">
	<Ornaments />
	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Heading -->
		<div class="max-w-3xl mb-16 space-y-4">
			<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">Layanan</span>
			<h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold text-[#1A1A1A] leading-tight" style="letter-spacing: -0.02em;">
				Kami Tidak Berhenti Setelah Perangkat Terpasang.
			</h2>
		</div>

		<!-- 4 Cards Horizontal -->
		<div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
			{#each services as service, i}
				<div
					class="group relative p-6 rounded-2xl bg-[#FAFAFA] hover:bg-white transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
					style="
						border: 1px solid #E5E5E5;
						opacity: {visible ? 1 : 0};
						transform: translateY({visible ? 0 : 20}px);
						transition: opacity 0.6s ease-out {i * 0.1}s, transform 0.6s ease-out {i * 0.1}s, background 0.3s, box-shadow 0.3s;
					"
				>
				<div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5 transition-transform duration-300 group-hover:scale-110" style="background: #FBE9EC;">
						<svelte:component this={service.icon} size={22} style="color: #C8102E;" />
					</div>
					<h3 class="font-heading text-base font-bold text-[#1A1A1A] mb-2 group-hover:text-[#C8102E] transition-colors">
						{service.title}
					</h3>
					<p class="text-sm text-[#5C5C5C] leading-relaxed">
						{service.desc}
					</p>
				</div>
			{/each}
		</div>
	</div>
</section>
