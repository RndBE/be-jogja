<script lang="ts">
	import { onMount } from 'svelte';
	import { ChevronDown, ArrowRight, Activity, Zap } from '@lucide/svelte';

	let mounted = $state(false);
	let cursorX = $state(50);
	let cursorY = $state(50);

	// Floating card data tickers
	let levelValue = $state(142.3);
	let rainfallValue = $state(12.8);
	let uptimeValue = $state(98.7);

	onMount(() => {
		mounted = true;

		const interval = setInterval(() => {
			levelValue = +(142 + Math.random() * 0.8).toFixed(1);
			rainfallValue = +(12 + Math.random() * 2).toFixed(1);
			uptimeValue = +(98 + Math.random() * 1.2).toFixed(1);
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
	class="relative min-h-[100dvh] flex flex-col overflow-hidden"
	onmousemove={handleMouseMove}
	id="hero"
	style="background: linear-gradient(168deg, #FFFFFF 0%, #FFF8F9 30%, #FBE9EC 65%, #F5D2D8 100%);"
>
	<!-- Cursor-aware gradient glow -->
	<div
		class="absolute inset-0 transition-opacity duration-700 pointer-events-none"
		style="
			background: radial-gradient(800px circle at {cursorX}% {cursorY}%, rgba(200,16,46,0.05), transparent 50%);
			opacity: {mounted ? 1 : 0};
		"
	></div>

	<!-- Dot grid pattern -->
	<div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="
		background-image: radial-gradient(circle, rgba(200,16,46,0.5) 1px, transparent 1px);
		background-size: 32px 32px;
	"></div>

	<!-- Decorative ornaments — asymmetric scatter -->
	<div class="absolute -top-40 -right-40 w-[600px] h-[600px] rounded-full pointer-events-none opacity-[0.05]" style="border: 2px solid #C8102E;"></div>
	<div class="absolute -top-24 -right-24 w-[450px] h-[450px] rounded-full pointer-events-none opacity-[0.03]" style="border: 1.5px solid #C8102E;"></div>
	<div class="absolute top-[20%] right-[12%] w-20 h-20 rotate-45 rounded-xl pointer-events-none opacity-[0.04] animate-float" style="background: #C8102E;"></div>
	<div class="absolute bottom-[30%] left-[5%] w-12 h-12 rounded-full pointer-events-none opacity-[0.06] animate-float-delayed" style="background: #C8102E;"></div>
	<div class="absolute top-[45%] left-[3%] w-6 h-6 rotate-12 pointer-events-none opacity-[0.04]" style="border: 2px solid #C8102E;"></div>

	<!-- Animated diagonal lines -->
	<svg class="absolute bottom-[25%] right-[8%] w-10 h-10 opacity-[0.06] animate-float pointer-events-none" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="2">
		<line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
	</svg>
	<svg class="absolute top-[65%] left-[2%] w-28 h-10 opacity-[0.04] pointer-events-none" viewBox="0 0 100 40" fill="none">
		<path d="M0,20 Q25,0 50,20 T100,20" stroke="#C8102E" stroke-width="2" fill="none"/>
	</svg>

	<!-- Content — SKILL: Asymmetric, left-aligned, no centered hero -->
	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-0 w-full flex-1 flex items-center">
		<div class="grid lg:grid-cols-12 gap-8 lg:gap-0 items-center">
			<!-- Text Content — 7 cols (asymmetric split) -->
			<div class="lg:col-span-7 space-y-7 lg:pr-12">
				<!-- Eyebrow badge -->
				<div class="overflow-hidden" class:animate-fade-in-up={mounted}>
					<span class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-widest" style="background: rgba(255,255,255,0.65); backdrop-filter: blur(12px); color: #C8102E; border: 1px solid rgba(200,16,46,0.12); box-shadow: inset 0 1px 0 rgba(255,255,255,0.3);">
						<span class="w-2 h-2 rounded-full bg-[#1B7F3A] animate-pulse-dot"></span>
						Produk Andalan Indonesia
					</span>
				</div>

				<!-- Headline — SKILL: tracking-tighter, leading-none, controlled scale -->
				<div class="space-y-5" class:animate-fade-in-up={mounted} style="animation-delay: 100ms;">
					<h1 class="font-heading text-4xl sm:text-5xl lg:text-[64px] font-extrabold leading-[1.06]" style="letter-spacing: -0.035em; color: #1A1A1A;">
						Pantau Setiap Tetes,<br/>
						Setiap Getaran,<br/>
						<span class="gradient-text-animated">Setiap Awan.</span>
					</h1>
					<p class="text-lg sm:text-xl leading-relaxed max-w-[540px]" style="color: #5C5C5C;">
						Sistem telemetri pintar <span class="red-underline font-semibold" style="color: #C8102E;">buatan Indonesia</span> untuk infrastruktur paling strategis negeri ini.
					</p>
				</div>

				<!-- Subheadline -->
				<p class="text-sm sm:text-[15px] leading-relaxed max-w-[520px] opacity-0" style="color: #7A7A7A;" class:animate-fade-in-up={mounted} style:animation-delay="200ms">
					Dari Bendungan IKN sampai Kawah Ijen, dari DAS Bogowonto sampai Bendungan Keureuto Aceh — perangkat dan platform Beacon merekam data, mendeteksi bahaya, dan mengirim peringatan 24 jam non-stop.
				</p>

				<!-- Dual CTA — SKILL: Tactile feedback -->
				<div class="flex flex-col sm:flex-row gap-4 opacity-0" class:animate-fade-in-up={mounted} style:animation-delay="300ms">
					<a
						href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20tertarik%20dengan%20solusi%20telemetri%20Anda."
						target="_blank"
						rel="noopener"
						class="btn-tactile inline-flex items-center justify-center gap-2 px-7 py-4 rounded-[14px] text-sm font-semibold text-white group"
						style="
							background: linear-gradient(135deg, #C8102E 0%, #A50D25 100%);
							box-shadow: 0 2px 4px rgba(200,16,46,0.12), 0 8px 24px rgba(200,16,46,0.18), inset 0 1px 0 rgba(255,255,255,0.15);
						"
					>
						Konsultasi Gratis dengan Engineer Kami
						<ArrowRight size={16} class="group-hover:translate-x-1 transition-transform" />
					</a>
					<a
						href="#pilar-solusi"
						class="btn-tactile inline-flex items-center justify-center gap-2 px-7 py-4 rounded-[14px] text-sm font-semibold transition-all duration-300 hover:bg-[#FBE9EC] hover:border-[#C8102E]"
						style="border: 1.5px solid #E5E5E5; color: #1A1A1A; background: rgba(255,255,255,0.6); backdrop-filter: blur(8px);"
					>
						Lihat 5 Pilar Solusi
					</a>
				</div>
			</div>

			<!-- Floating Data Cards — 5 cols (right side) -->
			<div class="lg:col-span-5 hidden lg:flex flex-col items-end gap-5 relative">
				<!-- Card 1: Water Level — offset left -->
				<div
					class="rounded-[20px] p-5 w-[280px] animate-float glass-premium"
					style="
						border: 1px solid rgba(229,229,229,0.6);
						box-shadow: 0 12px 40px rgba(0,0,0,0.06), inset 0 1px 0 rgba(255,255,255,0.25);
						opacity: {mounted ? 1 : 0};
						transform: translateX({mounted ? 0 : 30}px);
						transition: opacity 0.8s cubic-bezier(0.16,1,0.3,1) 0.4s, transform 0.8s cubic-bezier(0.16,1,0.3,1) 0.4s;
					"
				>
					<div class="flex items-center justify-between mb-3">
						<span class="text-[10px] uppercase tracking-wider font-medium" style="color: #5C5C5C;">Bendungan Cipanas</span>
						<span class="w-2 h-2 rounded-full bg-[#1B7F3A] animate-pulse-dot"></span>
					</div>
					<div class="flex items-baseline gap-1.5">
						<span class="text-[32px] font-mono font-bold tabular-nums leading-none" style="color: #1A1A1A;">{levelValue}</span>
						<span class="text-xs font-medium" style="color: #5C5C5C;">m</span>
					</div>
					<div class="flex items-center gap-1.5 mt-2">
						<svg class="w-3.5 h-3.5 text-[#1B7F3A]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/></svg>
						<span class="text-xs text-[#1B7F3A] font-medium tabular-nums">+0.2m</span>
						<span class="text-[10px] ml-1" style="color: #9A9A9A;">from 1h ago</span>
					</div>
				</div>

				<!-- Card 2: Rainfall — offset further left -->
				<div
					class="rounded-[20px] p-5 w-[248px] animate-float-delayed glass-premium"
					style="
						border: 1px solid rgba(229,229,229,0.6);
						box-shadow: 0 12px 40px rgba(0,0,0,0.06), inset 0 1px 0 rgba(255,255,255,0.25);
						transform: translateX(-28px);
						opacity: {mounted ? 1 : 0};
						transition: opacity 0.8s cubic-bezier(0.16,1,0.3,1) 0.55s;
					"
				>
					<div class="flex items-center justify-between mb-3">
						<span class="text-[10px] uppercase tracking-wider font-medium" style="color: #5C5C5C;">Stasiun Cuaca Jogja</span>
						<span class="w-2 h-2 rounded-full bg-[#1B7F3A] animate-pulse-dot"></span>
					</div>
					<div class="flex items-baseline gap-1.5">
						<span class="text-[32px] font-mono font-bold tabular-nums leading-none" style="color: #1A1A1A;">{rainfallValue}</span>
						<span class="text-xs font-medium" style="color: #5C5C5C;">mm/h</span>
					</div>
					<div class="mt-2">
						<span class="text-[10px] px-2.5 py-1 rounded-full font-medium" style="background: rgba(245,166,35,0.12); color: #D4910F;">Hujan Ringan</span>
					</div>
				</div>

				<!-- Card 3: STESY Status — wide, offset right -->
				<div
					class="rounded-[20px] p-5 w-[264px] animate-float glass-premium"
					style="
						animation-delay: 0.5s;
						border: 1px solid rgba(229,229,229,0.6);
						box-shadow: 0 12px 40px rgba(0,0,0,0.06), inset 0 1px 0 rgba(255,255,255,0.25);
						transform: translateX(12px);
						opacity: {mounted ? 1 : 0};
						transition: opacity 0.8s cubic-bezier(0.16,1,0.3,1) 0.7s;
					"
				>
					<div class="flex items-center justify-between mb-3">
						<div class="flex items-center gap-2">
							<Activity size={13} style="color: #C8102E;" />
							<span class="text-[10px] uppercase tracking-wider font-medium" style="color: #5C5C5C;">STESY Platform</span>
						</div>
						<span class="text-[10px] px-2.5 py-0.5 rounded-full font-medium" style="background: rgba(27,127,58,0.1); color: #1B7F3A;">Online</span>
					</div>
					<div class="flex items-center gap-5">
						<div>
							<span class="text-2xl font-mono font-bold tabular-nums" style="color: #1A1A1A;">47</span>
							<span class="block text-[10px] mt-0.5" style="color: #9A9A9A;">Stasiun</span>
						</div>
						<div class="h-9 w-px" style="background: #E5E5E5;"></div>
						<div>
							<span class="text-2xl font-mono font-bold tabular-nums" style="color: #1A1A1A;">{uptimeValue}<span class="text-sm">%</span></span>
							<span class="block text-[10px] mt-0.5" style="color: #9A9A9A;">Uptime</span>
						</div>
					</div>
				</div>

				<!-- Perpetual live data badge -->
				<div
					class="absolute -bottom-2 left-4 flex items-center gap-2 px-3 py-1.5 rounded-full animate-breathe"
					style="background: rgba(200,16,46,0.06); border: 1px solid rgba(200,16,46,0.1);"
				>
					<Zap size={11} style="color: #C8102E;" />
					<span class="text-[10px] font-medium" style="color: #C8102E;">Live Data Stream</span>
				</div>
			</div>
		</div>
	</div>

	<!-- Scroll Indicator -->
	<div class="relative z-10 flex flex-col items-center gap-1 py-4 opacity-50 hover:opacity-80 transition-opacity">
		<span class="text-[10px] uppercase tracking-widest font-medium" style="color: #5C5C5C;">Lihat solusi</span>
		<ChevronDown size={16} class="animate-chevron-bounce" style="color: #C8102E;" />
	</div>

	<!-- Trust Strip -->
	<div class="relative z-10 pb-6">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="flex flex-wrap items-center justify-center lg:justify-start gap-6 sm:gap-10 py-4 px-6 rounded-[16px] glass-premium" style="border: 1px solid rgba(229,229,229,0.5);">
				{#each [
					{ number: '14', label: 'Tahun' },
					{ number: '300+', label: 'Proyek' },
					{ number: '200+', label: 'Partner' },
					{ number: '30+', label: 'BBWS & BUMN' }
				] as stat}
					<div class="flex items-center gap-2.5">
						<span class="font-heading text-xl sm:text-2xl font-extrabold gradient-text tabular-nums">{stat.number}</span>
						<span class="text-xs uppercase tracking-wider font-medium" style="color: #5C5C5C;">{stat.label}</span>
					</div>
				{/each}
			</div>
		</div>
	</div>

	<!-- Wave divider at bottom -->
	<div class="pointer-events-none" style="margin-bottom: -1px;">
		<svg viewBox="0 0 1440 60" fill="none" preserveAspectRatio="none" class="w-full h-12">
			<path d="M0,60 L0,30 Q360,0 720,30 T1440,30 L1440,60 Z" fill="#FAFAFA"/>
		</svg>
	</div>
</section>

