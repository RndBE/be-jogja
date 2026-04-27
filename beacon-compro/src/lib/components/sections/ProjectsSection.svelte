<script lang="ts">
	import { onMount } from 'svelte';
	import { ArrowRight, MapPin, Calendar } from '@lucide/svelte';
	import Ornaments from '$lib/components/Ornaments.svelte';

	let visible = $state(false);
	let activeProject = $state(0);

	onMount(() => {
		const observer = new IntersectionObserver(
			(entries) => { if (entries[0].isIntersecting) visible = true; },
			{ threshold: 0.15 }
		);
		const el = document.getElementById('bukti-lapangan');
		if (el) observer.observe(el);

		// Auto-rotate carousel
		const interval = setInterval(() => {
			activeProject = (activeProject + 1) % projects.length;
		}, 5000);

		return () => { observer.disconnect(); clearInterval(interval); };
	});

	const projects = [
		{
			name: 'Telemetri ADR Bendungan Ciawi-Sukamahi',
			year: '2024',
			client: 'BBWS Ciliwung-Cisadane',
			products: ['ADR', 'STESY'],
			location: 'Bogor, Jawa Barat'
		},
		{
			name: 'Telemetri AWLR Bendungan Sepaku IKN',
			year: '2024',
			client: 'BWS Kalimantan IV',
			products: ['AWLR', 'STESY'],
			location: 'Kalimantan Timur'
		},
		{
			name: 'Telemetri APLR Kawah Ijen',
			year: '2023',
			client: 'PT Medco Energi',
			products: ['APLR'],
			location: 'Banyuwangi, Jawa Timur'
		},
		{
			name: 'Telemetri AWGC Sungai Cisadane BKC 3',
			year: '2023',
			client: 'BBWS Ciliwung-Cisadane',
			products: ['AWGC', 'STESY'],
			location: 'Tangerang, Banten'
		},
		{
			name: 'Sistem Telemetri Bendungan Keureuto',
			year: '2023',
			client: 'BWS Sumatera I',
			products: ['AWLR', 'ADR', 'STESY'],
			location: 'Aceh'
		}
	];

	// Indonesia map pins (approximate positions for SVG viewBox)
	const mapPins = [
		{ x: 28, y: 55, label: 'Aceh' },
		{ x: 47, y: 62, label: 'Bogor' },
		{ x: 48, y: 60, label: 'Tangerang' },
		{ x: 52, y: 62, label: 'Banyuwangi' },
		{ x: 60, y: 52, label: 'Kalimantan' },
		{ x: 45, y: 58, label: 'Yogyakarta' }
	];
</script>

<section id="bukti-lapangan" class="relative py-20 lg:py-28 section-offwhite overflow-hidden">
	<Ornaments variant="dense" />
	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Heading — SKILL: Left-aligned -->
		<div class="max-w-3xl mb-16 space-y-4">
			<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">Portfolio Proyek</span>
			<h2 class="font-heading text-3xl sm:text-4xl lg:text-[48px] font-bold text-[#1A1A1A] leading-[1.1]" style="letter-spacing: -0.025em;">
				Kami Sudah di Sana, Kami <span style="color: #C8102E;">Tetap</span> di Sana.
			</h2>
			<p class="text-base text-[#5C5C5C] max-w-2xl">
				Tiga ratus lebih proyek tersebar dari Aceh sampai Papua. Inilah beberapa yang membentuk siapa kami hari ini.
			</p>
		</div>

		<div class="grid lg:grid-cols-5 gap-8 items-start">
			<!-- Left: Map (2 cols) -->
			<div
				class="lg:col-span-2 relative"
				style="
					opacity: {visible ? 1 : 0};
					transform: translateX({visible ? 0 : -30}px);
					transition: all 0.8s ease-out;
				"
			>
				<div class="relative rounded-[20px] p-6" style="background: #FAFAFA; border: 1px solid #E5E5E5; box-shadow: 0 4px 16px rgba(0,0,0,0.03);">
					<!-- Simplified Indonesia Map SVG -->
					<svg viewBox="0 0 100 80" class="w-full h-auto" fill="none">
						<!-- Simplified map outline -->
						<path d="M20,50 Q25,45 30,48 Q35,50 38,47 Q42,44 45,48 Q48,52 52,50 Q55,48 58,50 Q62,52 65,48 Q68,45 70,48 Q73,51 75,48 Q78,45 80,50" stroke="#E5E5E5" stroke-width="0.5" fill="none" />

						<!-- Island shapes (simplified) -->
						<ellipse cx="30" cy="55" rx="12" ry="4" fill="#F0F0F0" stroke="#E5E5E5" stroke-width="0.3" />
						<ellipse cx="48" cy="58" rx="8" ry="5" fill="#F0F0F0" stroke="#E5E5E5" stroke-width="0.3" />
						<ellipse cx="52" cy="62" rx="6" ry="3" fill="#F0F0F0" stroke="#E5E5E5" stroke-width="0.3" />
						<ellipse cx="60" cy="50" rx="8" ry="6" fill="#F0F0F0" stroke="#E5E5E5" stroke-width="0.3" />
						<ellipse cx="72" cy="58" rx="5" ry="3" fill="#F0F0F0" stroke="#E5E5E5" stroke-width="0.3" />
						<ellipse cx="80" cy="55" rx="7" ry="4" fill="#F0F0F0" stroke="#E5E5E5" stroke-width="0.3" />

						<!-- Map pins -->
						{#each mapPins as pin}
							<circle cx={pin.x} cy={pin.y} r="1.5" fill="#C8102E" opacity="0.8">
								<animate attributeName="r" values="1.5;2.5;1.5" dur="2s" repeatCount="indefinite" />
								<animate attributeName="opacity" values="0.8;0.4;0.8" dur="2s" repeatCount="indefinite" />
							</circle>
							<circle cx={pin.x} cy={pin.y} r="0.8" fill="#C8102E" />
						{/each}
					</svg>

					<div class="mt-4 text-center">
						<span class="text-4xl font-heading font-extrabold gradient-text tabular-nums">300+</span>
						<p class="text-xs text-[#5C5C5C] uppercase tracking-wider mt-1">Titik Proyek di Indonesia</p>
					</div>
				</div>
			</div>

			<!-- Right: Project carousel (3 cols) -->
			<div class="lg:col-span-3 space-y-4">
				{#each projects as project, i}
					<button
						class="w-full text-left group relative p-5 rounded-[16px] transition-all duration-300 cursor-pointer"
						style="
							background: {activeProject === i ? '#FFFFFF' : 'transparent'};
							border: 1px solid {activeProject === i ? '#C8102E' : '#E5E5E5'};
							box-shadow: {activeProject === i ? '0 8px 24px rgba(200,16,46,0.08)' : 'none'};
							opacity: {visible ? 1 : 0};
							transform: translateY({visible ? 0 : 20}px);
							transition: opacity 0.6s ease-out {i * 0.08}s, transform 0.6s ease-out {i * 0.08}s, background 0.3s, border-color 0.3s, box-shadow 0.3s;
						"
						onclick={() => activeProject = i}
					>
						<div class="flex items-start justify-between">
							<div class="flex-1">
								<div class="flex items-center gap-3 mb-2">
									<span class="text-xs font-semibold px-2 py-0.5 rounded-md text-white tabular-nums" style="background: #C8102E;">{project.year}</span>
									<span class="text-xs text-[#5C5C5C] flex items-center gap-1">
										<MapPin size={11} />
										{project.location}
									</span>
								</div>
								<h3 class="font-heading text-base font-bold text-[#1A1A1A] mb-1 group-hover:text-[#C8102E] transition-colors">
									{project.name}
								</h3>
								<p class="text-sm text-[#5C5C5C]">{project.client}</p>
							</div>
							<div class="flex flex-wrap gap-1 ml-4">
								{#each project.products as prod}
									<span class="text-[10px] px-2 py-0.5 rounded-full font-medium" style="background: #FBE9EC; color: #C8102E;">{prod}</span>
								{/each}
							</div>
						</div>
					</button>
				{/each}

				<a
					href="/proyek"
					class="inline-flex items-center gap-2 text-sm font-semibold mt-4 transition-colors hover:gap-3"
					style="color: #C8102E;"
				>
					Jelajahi Semua 300+ Proyek
					<ArrowRight size={14} />
				</a>
			</div>
		</div>
	</div>
</section>
