<script lang="ts">
	import { onMount } from 'svelte';
	import Ornaments from '$lib/components/Ornaments.svelte';

	let visible = $state(false);

	onMount(() => {
		const observer = new IntersectionObserver(
			(entries) => { if (entries[0].isIntersecting) visible = true; },
			{ threshold: 0.2 }
		);
		const el = document.getElementById('logo-klien');
		if (el) observer.observe(el);
		return () => observer.disconnect();
	});

	const row1 = [
		'BBWS Ciliwung-Cisadane', 'BBWS Serayu Opak', 'BBWS Brantas', 'BBWS Bengawan Solo',
		'BBWS Cimanuk-Cisanggarung', 'BBWS Citanduy', 'BBWS Citarum', 'BWS Sumatra I',
		'BWS Kalimantan IV', 'BWS NT1', 'BWS NT2', 'BWS Papua Barat', 'BWS Sulawesi I',
		'Perum Jasa Tirta I', 'Perum Jasa Tirta II', 'Dinas PUSDA Jatim', 'Dinas SDA DKI', 'SDA ESDM DIY'
	];

	const row2 = [
		'Waskita Karya', 'Hutama Karya', 'Brantas Abipraya', 'Adhi Karya', 'Wijaya Karya',
		'PP', 'Nindya Karya', 'PLN UIB JBT II', 'Linde Indonesia', 'Medco Energi',
		'Dyfco Energy', 'Hydro Techno Utama', 'ASABA', 'Teknindo Geosistem',
		'Multi Fabrindo Gemilang', 'UGM'
	];
</script>

<section id="logo-klien" class="relative py-16 lg:py-24 bg-white overflow-hidden">
	<Ornaments />
	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="max-w-3xl mb-12 space-y-3">
			<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">Mitra & Klien</span>
			<h2 class="font-heading text-2xl sm:text-3xl lg:text-[40px] font-bold text-[#1A1A1A] leading-[1.15]" style="letter-spacing: -0.025em;">
				Dipercaya Lembaga & Korporasi yang Memegang Tanggung Jawab Besar
			</h2>
		</div>
	</div>

	<!-- Marquee Row 1: Government/BBWS -->
	<div class="relative mb-4">
		<div class="absolute left-0 top-0 bottom-0 w-20 z-10" style="background: linear-gradient(90deg, white, transparent);"></div>
		<div class="absolute right-0 top-0 bottom-0 w-20 z-10" style="background: linear-gradient(270deg, white, transparent);"></div>
		<div class="flex animate-marquee">
			{#each [...row1, ...row1] as name}
				<div class="flex-shrink-0 mx-3">
					<div class="px-5 py-3 rounded-xl border border-[#E5E5E5] bg-[#FAFAFA] hover:border-[#C8102E] hover:bg-[#FBE9EC] transition-all duration-300 cursor-default group">
						<span class="text-xs font-medium text-[#5C5C5C] group-hover:text-[#C8102E] transition-colors whitespace-nowrap">{name}</span>
					</div>
				</div>
			{/each}
		</div>
	</div>

	<!-- Marquee Row 2: BUMN & Private (reversed direction) -->
	<div class="relative">
		<div class="absolute left-0 top-0 bottom-0 w-20 z-10" style="background: linear-gradient(90deg, white, transparent);"></div>
		<div class="absolute right-0 top-0 bottom-0 w-20 z-10" style="background: linear-gradient(270deg, white, transparent);"></div>
		<div class="flex animate-marquee-reverse">
			{#each [...row2, ...row2] as name}
				<div class="flex-shrink-0 mx-3">
					<div class="px-5 py-3 rounded-xl border border-[#E5E5E5] bg-[#FAFAFA] hover:border-[#C8102E] hover:bg-[#FBE9EC] transition-all duration-300 cursor-default group">
						<span class="text-xs font-medium text-[#5C5C5C] group-hover:text-[#C8102E] transition-colors whitespace-nowrap">{name}</span>
					</div>
				</div>
			{/each}
		</div>
	</div>
</section>
