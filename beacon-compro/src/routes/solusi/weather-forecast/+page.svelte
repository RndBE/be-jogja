<script lang="ts">
	import { ArrowRight, Check, MessageCircle, Cloud, Thermometer, CloudRain } from '@lucide/svelte';
	import Ornaments from '$lib/components/Ornaments.svelte';

	const products = [
		{ slug: 'awr', name: 'AWR', full: 'Automatic Weather Recorder', hook: 'Cuaca tidak bisa dilawan, tapi bisa diprediksi — dengan data akurat setiap menit.', desc: 'Stasiun cuaca otomatis yang merekam suhu, kelembaban, tekanan udara, kecepatan dan arah angin, radiasi matahari secara real-time.', specs: ['Multi-parameter', '1-min Interval', 'Solar Powered', 'STESY Ready'] },
		{ slug: 'arr', name: 'ARR', full: 'Automatic Rainfall Recorder', hook: 'Setiap tetes hujan terhitung — dari gerimis sampai curah hujan ekstrem.', desc: 'Pencatatan curah hujan otomatis menggunakan tipping bucket rain gauge. Presisi tinggi, tahan cuaca ekstrem, terintegrasi STESY.', specs: ['Akurasi 0.2mm', 'Tipping Bucket', 'IP65', 'Auto-logging'] }
	];
</script>

<svelte:head>
	<title>Weather Forecast — Beacon Engineering</title>
	<meta name="description" content="Stasiun cuaca otomatis AWR dan ARR dari Beacon Engineering untuk prediksi cuaca presisi tinggi di Indonesia." />
</svelte:head>

<section class="relative py-20 lg:py-32 overflow-hidden" style="background: linear-gradient(165deg, #FFFFFF 0%, #EDE9FE 30%, #FFF5F6 60%, #FBE9EC 100%);">
	<Ornaments variant="hero" />
	<div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
		<div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest mb-6" style="background: #EDE9FE; color: #6366F1; border: 1px solid rgba(99,102,241,0.15);">
			<Cloud size={12} />
			Weather Forecast
		</div>
		<h1 class="font-heading text-3xl sm:text-4xl lg:text-[56px] font-extrabold leading-tight mb-6" style="letter-spacing: -0.03em; color: #1A1A1A;">
			Cuaca Tidak Bisa Dilawan, <span style="color: #C8102E;">Tapi Bisa Diprediksi.</span>
		</h1>
		<p class="text-lg max-w-2xl mx-auto" style="color: #5C5C5C;">
			Stasiun cuaca otomatis untuk pertanian, bendungan, dan aviasi. Data akurat, real-time, dari mana saja.
		</p>
	</div>
	<div class="absolute bottom-0 left-0 right-0 pointer-events-none" style="transform: translateY(1px);"><svg viewBox="0 0 1440 50" fill="none" preserveAspectRatio="none" class="w-full h-10"><path d="M0,50 L0,25 Q360,0 720,25 T1440,25 L1440,50 Z" fill="white"/></svg></div>
</section>

<section class="relative py-16 lg:py-24 bg-white overflow-hidden">
	<Ornaments variant="dense" />
	<div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid md:grid-cols-2 gap-8">
			{#each products as product}
				<a href="/solusi/weather-forecast/{product.slug}" class="group relative p-8 rounded-2xl bg-[#FAFAFA] transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:bg-white" style="border: 1px solid #E5E5E5;">
					<div class="absolute top-0 left-6 right-6 h-[3px] rounded-full opacity-0 group-hover:opacity-100 transition-opacity" style="background: linear-gradient(90deg, #6366F1, rgba(99,102,241,0.2));"></div>
					<div class="w-14 h-14 rounded-xl flex items-center justify-center mb-4" style="background: #EDE9FE;">
						<CloudRain size={24} style="color: #6366F1;" />
					</div>
					<span class="font-heading text-xl font-bold group-hover:text-[#C8102E] transition-colors" style="color: #1A1A1A;">{product.name}</span>
					<span class="block text-[11px] uppercase tracking-wider mt-0.5 mb-3" style="color: #9A9A9A;">{product.full}</span>
					<p class="text-sm font-medium mb-3" style="color: #6366F1; font-style: italic;">"{product.hook}"</p>
					<p class="text-sm leading-relaxed mb-5" style="color: #5C5C5C;">{product.desc}</p>
					<div class="flex flex-wrap gap-1.5 mb-4">
						{#each product.specs as spec}
							<span class="text-[10px] px-2 py-0.5 rounded-full font-medium" style="background: #EDE9FE; color: #6366F1;">{spec}</span>
						{/each}
					</div>
					<span class="flex items-center gap-2 text-sm font-semibold group-hover:gap-3 transition-all" style="color: #C8102E;">
						Lihat Detail {product.name} <ArrowRight size={14} />
					</span>
				</a>
			{/each}
		</div>
	</div>
</section>

<section class="relative py-16 lg:py-20 overflow-hidden" style="background: linear-gradient(135deg, #FBE9EC 0%, #F8D7DC 100%);">
	<Ornaments />
	<div class="relative z-10 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
		<h2 class="font-heading text-2xl sm:text-3xl font-bold mb-4" style="color: #1A1A1A;">Butuh Stasiun Cuaca untuk Proyek Anda?</h2>
		<p class="text-sm mb-8" style="color: #5C5C5C;">Tim kami siap membantu dari perencanaan sampai operasional.</p>
		<a href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20tertarik%20dengan%20solusi%20Weather%20Forecast." target="_blank" rel="noopener"
			class="inline-flex items-center gap-2 px-7 py-3.5 rounded-[12px] text-sm font-semibold text-white transition-all hover:scale-[1.02]"
			style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 16px rgba(200,16,46,0.25);">
			<MessageCircle size={16} /> Konsultasi Weather Forecast
		</a>
	</div>
</section>
