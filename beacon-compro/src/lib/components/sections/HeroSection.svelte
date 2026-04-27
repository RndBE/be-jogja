<script lang="ts">
	import { onMount } from 'svelte';
	import { ChevronDown, ArrowRight } from '@lucide/svelte';

	let mounted = $state(false);
	let cursorX = $state(50);
	let cursorY = $state(50);

	// Floating card data tickers
	let levelValue = $state(142.3);
	let rainfallValue = $state(12.8);

	onMount(() => {
		mounted = true;

		const interval = setInterval(() => {
			levelValue = +(142 + Math.random() * 0.8).toFixed(1);
			rainfallValue = +(12 + Math.random() * 2).toFixed(1);
		}, 3000);

		return () => clearInterval(interval);
	});

	function handleMouseMove(e: MouseEvent) {
		const rect = (e.currentTarget as HTMLElement).getBoundingClientRect();
		cursorX = ((e.clientX - rect.left) / rect.width) * 100;
		cursorY = ((e.clientY - rect.top) / rect.height) * 100;
	}
</script>

<section
	class="relative min-h-[92vh] flex items-center overflow-hidden"
	onmousemove={handleMouseMove}
	id="hero"
	style="background: linear-gradient(165deg, #FFFFFF 0%, #FFF5F6 40%, #FBE9EC 70%, #F8D7DC 100%);"
>
	<!-- Cursor-aware gradient glow -->
	<div
		class="absolute inset-0 transition-opacity duration-500 pointer-events-none"
		style="
			background: radial-gradient(600px circle at {cursorX}% {cursorY}%, rgba(200,16,46,0.06), transparent 50%);
			opacity: {mounted ? 1 : 0};
		"
	></div>

	<!-- Dot grid pattern -->
	<div class="absolute inset-0 opacity-[0.04] pointer-events-none" style="
		background-image: radial-gradient(circle, rgba(200,16,46,0.4) 1px, transparent 1px);
		background-size: 28px 28px;
	"></div>

	<!-- Decorative ornaments -->
	<!-- Large circle ornament top-right -->
	<div class="absolute -top-32 -right-32 w-[500px] h-[500px] rounded-full pointer-events-none opacity-[0.07]" style="border: 2px solid #C8102E;"></div>
	<div class="absolute -top-20 -right-20 w-[400px] h-[400px] rounded-full pointer-events-none opacity-[0.05]" style="border: 1.5px solid #C8102E;"></div>

	<!-- Floating geometric shapes -->
	<div class="absolute top-20 right-[15%] w-16 h-16 rotate-45 rounded-lg pointer-events-none opacity-[0.06] animate-float" style="background: #C8102E;"></div>
	<div class="absolute bottom-32 left-[8%] w-10 h-10 rounded-full pointer-events-none opacity-[0.08] animate-float-delayed" style="background: #C8102E;"></div>
	<div class="absolute top-[40%] left-[5%] w-6 h-6 rotate-12 pointer-events-none opacity-[0.05]" style="border: 2px solid #C8102E;"></div>

	<!-- Cross/plus ornament -->
	<svg class="absolute bottom-[20%] right-[10%] w-8 h-8 opacity-[0.08] animate-float pointer-events-none" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="2">
		<line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
	</svg>

	<!-- Wavy line ornament -->
	<svg class="absolute top-[60%] left-[2%] w-24 h-12 opacity-[0.06] pointer-events-none" viewBox="0 0 100 40" fill="none">
		<path d="M0,20 Q25,0 50,20 T100,20" stroke="#C8102E" stroke-width="2" fill="none"/>
	</svg>

	<!-- Content -->
	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-0 w-full">
		<div class="grid lg:grid-cols-5 gap-12 items-center">
			<!-- Text Content - 3 cols -->
			<div class="lg:col-span-3 space-y-8">
				<!-- Eyebrow -->
				<div class="overflow-hidden" class:animate-fade-in-up={mounted}>
					<span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest" style="background: #FBE9EC; color: #C8102E; border: 1px solid rgba(200,16,46,0.15);">
						<span class="w-2 h-2 rounded-full bg-[#1B7F3A] animate-pulse-dot"></span>
						Produk Andalan Indonesia
					</span>
				</div>

				<!-- Headline -->
				<div class="space-y-4" class:animate-fade-in-up={mounted} style="animation-delay: 100ms;">
					<h1 class="font-heading text-4xl sm:text-5xl lg:text-[68px] font-extrabold leading-[1.08]" style="letter-spacing: -0.03em; color: #1A1A1A;">
						Pantau Setiap Tetes, Setiap Getaran, <span style="color: #C8102E;">Setiap Awan.</span>
					</h1>
					<p class="text-lg sm:text-xl leading-relaxed max-w-xl" style="color: #5C5C5C;">
						Sistem telemetri pintar <span class="red-underline font-semibold" style="color: #C8102E;">buatan Indonesia</span> untuk infrastruktur paling strategis negeri ini.
					</p>
				</div>

				<!-- Subheadline -->
				<p class="text-sm sm:text-base leading-relaxed max-w-lg opacity-0" style="color: #7A7A7A;" class:animate-fade-in-up={mounted} style:animation-delay="200ms">
					Dari Bendungan IKN sampai Kawah Ijen, dari DAS Bogowonto sampai Bendungan Keureuto Aceh — perangkat dan platform Beacon merekam data, mendeteksi bahaya, dan mengirim peringatan 24 jam non-stop.
				</p>

				<!-- Dual CTA -->
				<div class="flex flex-col sm:flex-row gap-4 opacity-0" class:animate-fade-in-up={mounted} style:animation-delay="300ms">
					<a
						href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20tertarik%20dengan%20solusi%20telemetri%20Anda."
						target="_blank"
						rel="noopener"
						class="inline-flex items-center justify-center gap-2 px-7 py-4 rounded-[12px] text-sm font-semibold text-white transition-all duration-200 hover:scale-[1.02] active:scale-[0.98] group"
						style="
							background: linear-gradient(135deg, #C8102E 0%, #A50D25 100%);
							box-shadow: 0 2px 4px rgba(200,16,46,0.15), 0 8px 24px rgba(200,16,46,0.2), inset 0 1px 0 rgba(255,255,255,0.15);
						"
					>
						Konsultasi Gratis dengan Engineer Kami
						<ArrowRight size={16} class="group-hover:translate-x-1 transition-transform" />
					</a>
					<a
						href="#pilar-solusi"
						class="inline-flex items-center justify-center gap-2 px-7 py-4 rounded-[12px] text-sm font-semibold transition-all duration-200 hover:bg-[#FBE9EC]"
						style="border: 1.5px solid #E5E5E5; color: #1A1A1A;"
					>
						Lihat 5 Pilar Solusi
					</a>
				</div>
			</div>

			<!-- Floating Data Cards - 2 cols -->
			<div class="lg:col-span-2 hidden lg:flex flex-col items-end gap-4">
				<!-- Card 1: Water Level -->
				<div class="rounded-2xl p-5 w-64 animate-float" style="background: white; border: 1px solid #E5E5E5; box-shadow: 0 8px 32px rgba(0,0,0,0.06);">
					<div class="flex items-center justify-between mb-2">
						<span class="text-[10px] uppercase tracking-wider font-medium" style="color: #5C5C5C;">Bendungan Cipanas</span>
						<span class="w-2 h-2 rounded-full bg-[#1B7F3A] animate-pulse-dot"></span>
					</div>
					<div class="flex items-baseline gap-1">
						<span class="text-3xl font-mono font-bold tabular-nums" style="color: #1A1A1A;">{levelValue}</span>
						<span class="text-xs" style="color: #5C5C5C;">m</span>
					</div>
					<div class="flex items-center gap-1 mt-1">
						<svg class="w-3 h-3 text-[#1B7F3A]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/></svg>
						<span class="text-xs text-[#1B7F3A] tabular-nums">+0.2m</span>
						<span class="text-[10px] ml-1" style="color: #9A9A9A;">from 1h ago</span>
					</div>
				</div>

				<!-- Card 2: Rainfall -->
				<div class="rounded-2xl p-5 w-56 animate-float-delayed" style="background: white; border: 1px solid #E5E5E5; box-shadow: 0 8px 32px rgba(0,0,0,0.06); transform: translateX(-20px);">
					<div class="flex items-center justify-between mb-2">
						<span class="text-[10px] uppercase tracking-wider font-medium" style="color: #5C5C5C;">Stasiun Cuaca Jogja</span>
						<span class="w-2 h-2 rounded-full bg-[#1B7F3A] animate-pulse-dot"></span>
					</div>
					<div class="flex items-baseline gap-1">
						<span class="text-3xl font-mono font-bold tabular-nums" style="color: #1A1A1A;">{rainfallValue}</span>
						<span class="text-xs" style="color: #5C5C5C;">mm/h</span>
					</div>
					<div class="mt-1">
						<span class="text-[10px] px-2 py-0.5 rounded-full font-medium" style="background: rgba(245,166,35,0.12); color: #D4910F;">Hujan Ringan</span>
					</div>
				</div>

				<!-- Card 3: STESY Status -->
				<div class="rounded-2xl p-5 w-60 animate-float" style="background: white; border: 1px solid #E5E5E5; box-shadow: 0 8px 32px rgba(0,0,0,0.06); animation-delay: 0.5s; transform: translateX(10px);">
					<div class="flex items-center justify-between mb-2">
						<span class="text-[10px] uppercase tracking-wider font-medium" style="color: #5C5C5C;">STESY Platform</span>
						<span class="text-[10px] px-2 py-0.5 rounded-full font-medium" style="background: rgba(27,127,58,0.1); color: #1B7F3A;">Online</span>
					</div>
					<div class="flex items-center gap-4">
						<div class="text-center">
							<span class="text-2xl font-mono font-bold" style="color: #1A1A1A;">47</span>
							<span class="block text-[10px]" style="color: #9A9A9A;">Stasiun</span>
						</div>
						<div class="h-8 w-px" style="background: #E5E5E5;"></div>
						<div class="text-center">
							<span class="text-2xl font-mono font-bold" style="color: #1A1A1A;">98.7<span class="text-sm">%</span></span>
							<span class="block text-[10px]" style="color: #9A9A9A;">Uptime</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Trust Strip -->
	<div class="absolute bottom-0 left-0 right-0 z-10">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-8">
			<div class="flex flex-wrap items-center justify-center lg:justify-start gap-6 sm:gap-10 py-4 px-6 rounded-2xl" style="background: white; border: 1px solid #E5E5E5; box-shadow: 0 4px 16px rgba(0,0,0,0.04);">
				{#each [
					{ number: '14', label: 'Tahun' },
					{ number: '300+', label: 'Proyek' },
					{ number: '200+', label: 'Partner' },
					{ number: '30+', label: 'BBWS & BUMN' }
				] as stat}
					<div class="flex items-center gap-2">
						<span class="font-heading text-xl sm:text-2xl font-extrabold gradient-text tabular-nums">{stat.number}</span>
						<span class="text-xs uppercase tracking-wider" style="color: #5C5C5C;">{stat.label}</span>
					</div>
				{/each}
			</div>
		</div>
	</div>

	<!-- Wave divider at bottom -->
	<div class="absolute bottom-0 left-0 right-0 pointer-events-none" style="transform: translateY(1px);">
		<svg viewBox="0 0 1440 60" fill="none" preserveAspectRatio="none" class="w-full h-12">
			<path d="M0,60 L0,30 Q360,0 720,30 T1440,30 L1440,60 Z" fill="#FAFAFA"/>
		</svg>
	</div>

	<!-- Scroll Indicator -->
	<div class="absolute bottom-16 left-1/2 -translate-x-1/2 z-10 flex flex-col items-center gap-1 opacity-50 hover:opacity-80 transition-opacity">
		<span class="text-[10px] uppercase tracking-widest" style="color: #5C5C5C;">Lihat solusi</span>
		<ChevronDown size={16} class="animate-chevron-bounce" style="color: #C8102E;" />
	</div>
</section>
