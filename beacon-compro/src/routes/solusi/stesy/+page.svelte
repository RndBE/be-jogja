<script lang="ts">
	import { onMount } from 'svelte';
	import { ArrowRight, Check, MessageCircle, Monitor, Smartphone, Laptop, Shield, BarChart3, Camera, Bell } from '@lucide/svelte';
	import Ornaments from '$lib/components/Ornaments.svelte';
	import { stesyFeatures as features } from '$lib/data/solutions';

	let { data } = $props();

	let visible = $state(false);
	onMount(() => {
		const observer = new IntersectionObserver(
			(entries) => { if (entries[0].isIntersecting) visible = true; },
			{ threshold: 0.1 }
		);
		const el = document.getElementById('stesy-features');
		if (el) observer.observe(el);
		return () => observer.disconnect();
	});
</script>

<svelte:head>
	<title>STESY — Smart Telemetry System — Beacon Engineering</title>
	<meta name="description" content="STESY: platform monitoring tunggal yang menyatukan semua perangkat telemetri Beacon dalam satu dashboard real-time." />
</svelte:head>

<section class="relative pt-24 pb-16 lg:pt-32 lg:pb-24 bg-[#FAFAFA] border-b border-[#E5E5E5] overflow-hidden">
	<!-- Subtle Grid Pattern -->
	<div class="absolute inset-0 z-0 opacity-[0.03]" style="background-image: radial-gradient(#000 1px, transparent 1px); background-size: 24px 24px;"></div>

	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="max-w-3xl">
			<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-[11px] font-semibold uppercase tracking-widest mb-6" style="background: #FBE9EC; color: #C8102E; border: 1px solid rgba(200,16,46,0.15);">
				<Monitor size={12} />
				STESY Platform
			</div>
			
			<h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tighter leading-[1.1] mb-6" style="color: #1A1A1A;">
				Satu Layar untuk <br/>
				<span style="color: #C8102E;">Semua Aset Anda.</span>
			</h1>
			
			<p class="text-base md:text-lg text-gray-600 leading-relaxed max-w-[65ch] mb-8">
				Ketinggian air Bendungan A, curah hujan Stasiun B, deformasi Lereng C, status pintu air Bendung D — semua di satu dashboard. Real-time. Dari mana saja.
			</p>
			
			<div class="flex flex-wrap gap-3">
				<a href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20ingin%20minta%20demo%20STESY." target="_blank" rel="noopener"
					class="inline-flex items-center gap-2 px-7 py-3.5 rounded-[12px] text-sm font-semibold text-white transition-all hover:scale-[1.02]"
					style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 16px rgba(200,16,46,0.25);">
					<MessageCircle size={15} /> Minta Demo STESY
				</a>
				<a href="/solusi/stesy/smart-telemetry-system" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-[12px] text-sm font-semibold transition-all hover:bg-[#FBE9EC]" style="border: 1.5px solid #E5E5E5; color: #1A1A1A;">
					Lihat Detail Produk <ArrowRight size={14} />
				</a>
				<a href="#stesy-features" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-[12px] text-sm font-semibold transition-all hover:bg-[#FBE9EC]" style="border: 1.5px solid #E5E5E5; color: #1A1A1A;">
					Lihat Fitur <ArrowRight size={14} />
				</a>
			</div>
		</div>
	</div>
</section>

<!-- Dashboard Mockup -->
<section class="relative py-16 lg:py-24 bg-white overflow-hidden">
	<Ornaments />
	<div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="rounded-[24px] overflow-hidden p-[2px]" style="background: linear-gradient(135deg, #C8102E 0%, #E5E5E5 50%, #C8102E 100%); box-shadow: 0 20px 60px rgba(0,0,0,0.08);">
			<div class="rounded-[22px] overflow-hidden bg-white">
				<div class="flex items-center gap-2 px-4 py-2.5" style="background: #F5F5F5; border-bottom: 1px solid #E5E5E5;">
					<div class="flex gap-1.5"><div class="w-2.5 h-2.5 rounded-full" style="background: #FF5F56;"></div><div class="w-2.5 h-2.5 rounded-full" style="background: #FFBD2E;"></div><div class="w-2.5 h-2.5 rounded-full" style="background: #27C93F;"></div></div>
					<div class="flex-1 text-center"><span class="text-[10px] font-mono" style="color: #9A9A9A;">stesy.bejogja.com</span></div>
				</div>
				<div class="p-6 space-y-4" style="background: #FAFAFA;">
					<div class="grid grid-cols-4 gap-3">
						{#each [{ label: 'Stasiun Aktif', value: '47', color: '#1B7F3A' }, { label: 'Data Points', value: '12.4K', color: '#C8102E' }, { label: 'Uptime', value: '98.7%', color: '#0EA5E9' }, { label: 'Alerts Aktif', value: '2', color: '#F59E0B' }] as stat}
							<div class="rounded-xl p-4 bg-white" style="border: 1px solid #E5E5E5;"><span class="block text-[10px] uppercase tracking-wider" style="color: #9A9A9A;">{stat.label}</span><span class="block text-2xl font-mono font-bold tabular-nums mt-1" style="color: {stat.color};">{stat.value}</span></div>
						{/each}
					</div>
					<div class="grid md:grid-cols-3 gap-3">
						<div class="md:col-span-2 rounded-xl p-4 bg-white" style="border: 1px solid #E5E5E5;">
							<span class="text-xs font-medium" style="color: #5C5C5C;">Water Level — Multi Station</span>
							<svg class="w-full h-24 mt-2" viewBox="0 0 400 80" fill="none">
								<defs><linearGradient id="sg" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" style="stop-color:#C8102E;stop-opacity:0.2"/><stop offset="100%" style="stop-color:#C8102E;stop-opacity:0"/></linearGradient></defs>
								<path d="M0,50 Q50,40 100,45 T200,35 T300,40 T400,25" stroke="#C8102E" stroke-width="2" fill="none"/>
								<path d="M0,50 Q50,40 100,45 T200,35 T300,40 T400,25 V80 H0 Z" fill="url(#sg)"/>
								<path d="M0,60 Q50,55 100,58 T200,50 T300,55 T400,45" stroke="#0EA5E9" stroke-width="1.5" fill="none" opacity="0.5"/>
							</svg>
						</div>
						<div class="rounded-xl p-4 bg-white space-y-2" style="border: 1px solid #E5E5E5;">
							<span class="text-xs font-medium" style="color: #5C5C5C;">Stasiun</span>
							{#each ['Cipanas AWLR', 'Ciawi ADR', 'Sepaku AWLR', 'Ijen APLR'] as st}
								<div class="flex items-center justify-between text-xs py-1" style="border-bottom: 1px solid #F5F5F5;">
									<span class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-[#1B7F3A]"></span>{st}</span>
									<span class="font-mono tabular-nums" style="color: #9A9A9A;">Online</span>
								</div>
							{/each}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Features Grid -->
<section id="stesy-features" class="relative py-16 lg:py-24 overflow-hidden" style="background: linear-gradient(180deg, #FAFAFA 0%, #FBE9EC 100%);">
	<Ornaments variant="dense" />
	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="max-w-2xl mb-14 space-y-3">
			<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">Fitur Utama</span>
			<h2 class="font-heading text-3xl sm:text-4xl font-bold leading-[1.1]" style="color: #1A1A1A; letter-spacing: -0.025em;">Semua yang Anda Butuhkan, dalam Satu Platform</h2>
		</div>
		<div class="grid sm:grid-cols-2 gap-6">
			{#each features as feat, i}
				<div
					class="group p-8 rounded-[20px] bg-white hover:-translate-y-1 hover:shadow-lg transition-all duration-300"
					style="border: 1px solid #E5E5E5; opacity: {visible ? 1 : 0}; transform: translateY({visible ? 0 : 24}px); transition: opacity 0.6s ease-out {i * 0.08}s, transform 0.6s ease-out {i * 0.08}s, box-shadow 0.3s;"
				>
					<div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform" style="background: #FBE9EC;">
						<svelte:component this={feat.icon} size={22} style="color: #C8102E;" />
					</div>
					<h3 class="font-heading text-base font-bold mb-2 group-hover:text-[#C8102E] transition-colors" style="color: #1A1A1A;">{feat.title}</h3>
					<p class="text-sm leading-relaxed" style="color: #5C5C5C;">{feat.desc}</p>
				</div>
			{/each}
		</div>
	</div>
</section>

<!-- Premium Floating CTA (SKILL: Cockpit Mode) -->
<section class="relative py-20 bg-white">
	<div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
		<div class="relative overflow-hidden rounded-[2.5rem] bg-zinc-950 p-10 sm:p-16 lg:p-20 shadow-2xl flex flex-col lg:flex-row items-center justify-between gap-12 group" style="box-shadow: 0 40px 80px -20px rgba(0,0,0,0.25), inset 0 2px 4px rgba(255,255,255,0.05);">
			
			<!-- Subtle glow / Liquid Glass refraction -->
			<div class="absolute inset-0 bg-gradient-to-br from-[#C8102E]/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none z-0"></div>
			<div class="absolute -top-32 -left-32 w-96 h-96 rounded-full bg-[#C8102E]/10 blur-3xl pointer-events-none z-0"></div>

			<div class="relative z-10 text-center lg:text-left flex-1 max-w-2xl">
				<span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest mb-6" style="background: rgba(200,16,46,0.15); color: #FF4D6D; border: 1px solid rgba(200,16,46,0.3);">
					<span class="w-1.5 h-1.5 rounded-full" style="background: #FF4D6D; box-shadow: 0 0 10px #FF4D6D;"></span>
					Next Step
				</span>
				<h2 class="font-heading text-4xl sm:text-5xl font-extrabold text-white tracking-tighter mb-4">Mulai Proyek dengan Beacon</h2>
				<p class="text-lg text-zinc-400 font-medium">Tim engineer kami akan merancang arsitektur telemetri yang tepat dan menghitung kebutuhan riil proyek Anda.</p>
			</div>

			<div class="relative z-10 flex flex-col sm:flex-row items-center gap-4 w-full lg:w-auto shrink-0">
				<a href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20ingin%20konsultasi%20tentang%20Beacon%20untuk%20proyek%20saya." target="_blank" rel="noopener"
					class="w-full sm:w-auto inline-flex justify-center items-center gap-2 px-8 py-4 rounded-full text-sm font-bold text-zinc-950 bg-white transition-all hover:scale-105 active:scale-95 shadow-[0_0_20px_rgba(255,255,255,0.1)] btn-tactile">
					<MessageCircle size={18} />
					Konsultasi Beacon
				</a>
				<a href="/solusi" class="w-full sm:w-auto inline-flex justify-center items-center gap-2 px-8 py-4 rounded-full text-sm font-bold text-white transition-all hover:bg-zinc-800 btn-tactile" style="border: 1px solid rgba(255,255,255,0.15);">
					<ArrowRight size={18} />
					Jelajahi Produk Lain
				</a>
			</div>
		</div>
	</div>
</section>
