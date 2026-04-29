<script lang="ts">
	import { ArrowRight, MessageCircle, AlertTriangle, Siren, Radio } from '@lucide/svelte';
	import Ornaments from '$lib/components/Ornaments.svelte';
	import { earlyWarningProducts as fallbackProducts } from '$lib/data/solutions';

	let { data } = $props();

	const products = $derived(
		data.solutionDetail?.sub_solutions && data.solutionDetail.sub_solutions.length > 0
			? data.solutionDetail.sub_solutions.map((s: any) => {
					const editorial = fallbackProducts.find(f => f.slug === s.slug);
					return {
						slug: s.slug,
						name: s.abbreviation || editorial?.name || s.name,
						full: s.name,
						hook: editorial?.hook ?? '',
						icon: editorial?.icon ?? Siren,
						desc: editorial?.desc ?? '',
						specs: editorial?.specs ?? [],
						thumbnail: editorial?.thumbnail ?? `https://picsum.photos/seed/${s.slug}/800/600`
					};
				})
			: fallbackProducts
	);
</script>

<svelte:head>
	<title>Early Warning System — Beacon Engineering</title>
	<meta name="description" content="Sistem peringatan dini bencana EWS Beacon Engineering: multi-level alert, sirene, SMS, integrasi STESY." />
</svelte:head>

<section class="relative pt-24 pb-16 lg:pt-32 lg:pb-24 bg-[#FAFAFA] border-b border-[#E5E5E5] overflow-hidden">
	<!-- Subtle Grid Pattern -->
	<div class="absolute inset-0 z-0 opacity-[0.03]" style="background-image: radial-gradient(#000 1px, transparent 1px); background-size: 24px 24px;"></div>

	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="max-w-3xl">
			<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-[11px] font-semibold uppercase tracking-widest mb-6" style="background: #FEF9C3; color: #D97706; border: 1px solid rgba(217,119,6,0.15);">
				<AlertTriangle size={12} />
				Early Warning
			</div>
			
			<h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tighter leading-[1.1] mb-6" style="color: #1A1A1A;">
				Detik Pertama <br/>
				<span style="color: #D97706;">Menentukan Nyawa.</span>
			</h1>
			
			<p class="text-base md:text-lg text-gray-600 leading-relaxed max-w-[65ch]">
				Sistem peringatan dini multi-level untuk wilayah rawan banjir, longsor, dan bencana hidrometeorologi. Real-time dari sensor ke sirene, SMS, dan dashboard.
			</p>
		</div>
	</div>
</section>

<section class="relative py-16 lg:py-24 bg-white overflow-hidden">
	<Ornaments variant="dense" />
	<div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- EWS Product Card -->
		{#each products as product}
		<div class="max-w-4xl mx-auto rounded-[28px] overflow-hidden relative flex flex-col justify-end bg-black min-h-[500px] transition-transform duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(217,119,6,0.3)]" style="border: 1px solid rgba(0,0,0,0.1);">
			<!-- Full Image Background -->
			<img src={product.thumbnail} alt={product.name} class="absolute inset-0 w-full h-full object-cover opacity-70 group-hover:opacity-90 transition-all duration-1000 group-hover:scale-110" />
			
			<!-- Darkening Gradient for Readability -->
			<div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/50 to-transparent pointer-events-none"></div>

			<!-- Accent Top -->
			<div class="absolute top-0 left-0 right-0 h-[3px] opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-20" style="background: linear-gradient(90deg, #D97706, transparent);"></div>

			<!-- Liquid Glass Content Panel -->
			<div class="relative z-10 m-5 p-8 rounded-[24px] transition-all duration-500 transform group-hover:-translate-y-1"
				 style="background: rgba(20, 20, 20, 0.5); backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.12); box-shadow: inset 0 1px 0 rgba(255,255,255,0.15), 0 10px 30px rgba(0,0,0,0.3);">
				
				<div class="flex items-center gap-5 mb-6">
					<div class="w-16 h-16 rounded-2xl flex items-center justify-center shrink-0 transition-transform duration-500 group-hover:scale-110" style="background: rgba(217,119,6,0.2); border: 1px solid rgba(217,119,6,0.3);">
						<svelte:component this={product.icon} size={30} style="color: #FBBF24;" />
					</div>
					<div>
						<h2 class="font-heading text-2xl md:text-3xl font-bold text-white tracking-tight">{product.name} <span class="text-white/40 font-normal ml-2 hidden sm:inline-block">— {product.full}</span></h2>
						<p class="text-sm font-medium italic text-white/80 mt-1">"{product.hook}"</p>
					</div>
				</div>
				
				<p class="text-sm leading-relaxed text-white/70 mb-6">
					{product.desc}
				</p>
				
				<div class="flex flex-wrap gap-2 mb-8">
					{#each product.specs as spec}
						<span class="text-[10px] px-3 py-1.5 rounded-full font-medium" style="background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.15); color: rgba(255,255,255,0.9);">{spec}</span>
					{/each}
				</div>

				<!-- Alert Levels -->
				<div class="grid grid-cols-2 md:grid-cols-4 gap-3 mb-8">
					{#each [
						{ level: '1', label: 'Waspada', color: '#4ADE80', bg: 'rgba(74,222,128,0.1)' },
						{ level: '2', label: 'Siaga', color: '#FBBF24', bg: 'rgba(251,191,36,0.1)' },
						{ level: '3', label: 'Awas', color: '#F87171', bg: 'rgba(248,113,113,0.1)' },
						{ level: '4', label: 'Darurat', color: '#EF4444', bg: 'rgba(239,68,68,0.15)' }
					] as alert}
						<div class="p-3.5 rounded-xl transition-colors hover:bg-white/5" style="background: {alert.bg}; border: 1px solid {alert.color}30;">
							<span class="font-heading text-xl font-bold" style="color: {alert.color};">L{alert.level}</span>
							<span class="block text-xs font-medium mt-0.5" style="color: {alert.color}; opacity: 0.9;">{alert.label}</span>
						</div>
					{/each}
				</div>

				<a href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20tertarik%20dengan%20{product.name}." target="_blank" rel="noopener"
					class="inline-flex items-center gap-2 px-6 py-3.5 rounded-[14px] text-sm font-semibold text-white transition-all hover:scale-[1.02]"
					style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 16px rgba(200,16,46,0.3);">
					<MessageCircle size={16} /> Konsultasi {product.name}
				</a>
			</div>
		</div>
		{/each}
	</div>
</section>

<section class="relative py-16 lg:py-20 overflow-hidden" style="background: linear-gradient(135deg, #FBE9EC 0%, #F8D7DC 100%);">
	<Ornaments />
	<div class="relative z-10 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
		<h2 class="font-heading text-2xl sm:text-3xl font-bold mb-4" style="color: #1A1A1A;">Wilayah Anda Rawan Banjir atau Longsor?</h2>
		<p class="text-sm mb-8" style="color: #5C5C5C;">Konsultasikan kebutuhan EWS Anda dengan engineer kami — gratis.</p>
		<a href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20ingin%20konsultasi%20tentang%20EWS%20untuk%20wilayah%20rawan%20bencana." target="_blank" rel="noopener"
			class="inline-flex items-center gap-2 px-7 py-3.5 rounded-[12px] text-sm font-semibold text-white transition-all hover:scale-[1.02]"
			style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 16px rgba(200,16,46,0.25);">
			<MessageCircle size={16} /> Konsultasi Sekarang
		</a>
	</div>
</section>
