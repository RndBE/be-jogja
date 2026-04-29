<script lang="ts">
	import { ArrowRight, Check, MessageCircle, Cloud, Thermometer, CloudRain } from '@lucide/svelte';
	import Ornaments from '$lib/components/Ornaments.svelte';
	import { weatherForecastProducts as fallbackProducts } from '$lib/data/solutions';

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
						icon: editorial?.icon ?? Cloud,
						desc: editorial?.desc ?? '',
						specs: editorial?.specs ?? [],
						thumbnail: editorial?.thumbnail ?? `https://picsum.photos/seed/${s.slug}/800/600`
					};
				})
			: fallbackProducts
	);
</script>

<svelte:head>
	<title>Weather Forecast — Beacon Engineering</title>
	<meta name="description" content="Stasiun cuaca otomatis AWR dan ARR dari Beacon Engineering untuk prediksi cuaca presisi tinggi di Indonesia." />
</svelte:head>

<section class="relative pt-24 pb-16 lg:pt-32 lg:pb-24 bg-[#FAFAFA] border-b border-[#E5E5E5] overflow-hidden">
	<!-- Subtle Grid Pattern -->
	<div class="absolute inset-0 z-0 opacity-[0.03]" style="background-image: radial-gradient(#000 1px, transparent 1px); background-size: 24px 24px;"></div>

	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="max-w-3xl">
			<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-[11px] font-semibold uppercase tracking-widest mb-6" style="background: #EDE9FE; color: #6366F1; border: 1px solid rgba(99,102,241,0.15);">
				<Cloud size={12} />
				Weather Forecast
			</div>
			
			<h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tighter leading-[1.1] mb-6" style="color: #1A1A1A;">
				Cuaca Tidak Bisa Dilawan, <br/>
				<span style="color: #6366F1;">Tapi Bisa Diprediksi.</span>
			</h1>
			
			<p class="text-base md:text-lg text-gray-600 leading-relaxed max-w-[65ch]">
				Stasiun cuaca otomatis untuk pertanian, bendungan, dan aviasi. Data akurat, real-time, dari mana saja.
			</p>
		</div>
	</div>
</section>

<section class="relative py-16 lg:py-24 bg-white overflow-hidden">
	<Ornaments variant="dense" />
	<div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid md:grid-cols-2 gap-8">
			{#each products as product}
				<a href="/solusi/weather-forecast/{product.slug}" 
					class="group relative rounded-[28px] overflow-hidden min-h-[480px] flex flex-col justify-end bg-black transition-transform duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(99,102,241,0.3)]" 
					style="border: 1px solid rgba(0,0,0,0.1);">
					
					<!-- Full Image Background -->
					<img src={product.thumbnail} alt={product.name} class="absolute inset-0 w-full h-full object-cover opacity-70 group-hover:opacity-90 transition-all duration-1000 group-hover:scale-110" />
					
					<!-- Darkening Gradient for Readability -->
					<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent pointer-events-none"></div>

					<!-- Accent Top -->
					<div class="absolute top-0 left-0 right-0 h-[3px] opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-20" style="background: linear-gradient(90deg, #6366F1, transparent);"></div>

					<!-- Liquid Glass Content Panel -->
					<div class="relative z-10 m-4 p-7 rounded-[22px] transition-all duration-500 transform group-hover:-translate-y-1"
						 style="background: rgba(20, 20, 20, 0.45); backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.12); box-shadow: inset 0 1px 0 rgba(255,255,255,0.15), 0 10px 30px rgba(0,0,0,0.2);">
						
						<div class="flex items-center gap-4 mb-5">
							<div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0 transition-transform duration-500 group-hover:scale-110" style="background: rgba(99,102,241,0.2); border: 1px solid rgba(99,102,241,0.3);">
								<svelte:component this={product.icon} size={22} style="color: #818CF8;" />
							</div>
							<div>
								<span class="font-heading text-xl font-bold text-white tracking-tight">{product.name}</span>
								<span class="block text-[10px] uppercase tracking-widest text-white/50 mt-0.5">{product.full}</span>
							</div>
						</div>

						<!-- Mini specs -->
						<div class="flex flex-wrap gap-1.5 mb-5 mt-auto">
							{#each product.specs as spec}
								<span class="text-[10px] px-2.5 py-1 rounded-full font-medium" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1); color: rgba(255,255,255,0.8);">{spec}</span>
							{/each}
						</div>

						<div class="flex items-center gap-2 text-sm font-semibold text-[#818CF8] group-hover:gap-3 transition-all mt-4">
							Lihat Detail {product.name} <ArrowRight size={14} />
						</div>
					</div>
				</a>
			{/each}
		</div>
	</div>
</section>

<section class="relative py-16 lg:py-20 overflow-hidden" style="background: linear-gradient(135deg, #FBE9EC 0%, #F8D7DC 100%);">
	<Ornaments />
	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="max-w-xl">
		<h2 class="font-heading text-2xl sm:text-3xl font-bold mb-4" style="color: #1A1A1A;">Butuh Stasiun Cuaca untuk Proyek Anda?</h2>
		<p class="text-sm mb-8" style="color: #5C5C5C;">Tim kami siap membantu dari perencanaan sampai operasional.</p>
		<a href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20tertarik%20dengan%20solusi%20Weather%20Forecast." target="_blank" rel="noopener"
			class="inline-flex items-center gap-2 px-7 py-3.5 rounded-[12px] text-sm font-semibold text-white transition-all hover:scale-[1.02]"
			style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 16px rgba(200,16,46,0.25);">
			<MessageCircle size={16} /> Konsultasi Weather Forecast
		</a>
		</div>
	</div>
</section>
