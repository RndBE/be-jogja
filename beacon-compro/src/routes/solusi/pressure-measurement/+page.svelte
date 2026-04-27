<script lang="ts">
	import { ArrowRight, MessageCircle, Gauge, Thermometer, Flame } from '@lucide/svelte';
	import Ornaments from '$lib/components/Ornaments.svelte';
</script>

<svelte:head>
	<title>Pressure Measurement — Beacon Engineering</title>
	<meta name="description" content="APLR Beacon Engineering: pengukuran tekanan presisi tinggi untuk geothermal, well testing, dan infrastruktur kritis." />
</svelte:head>

<section class="relative py-20 lg:py-32 overflow-hidden" style="background: linear-gradient(165deg, #FFFFFF 0%, #D1FAE5 30%, #FFF5F6 60%, #FBE9EC 100%);">
	<Ornaments variant="hero" />
	<div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
		<div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest mb-6" style="background: #D1FAE5; color: #059669; border: 1px solid rgba(5,150,105,0.15);">
			<Gauge size={12} />
			Pressure Measurement
		</div>
		<h1 class="font-heading text-3xl sm:text-4xl lg:text-[56px] font-extrabold leading-tight mb-6" style="letter-spacing: -0.03em; color: #1A1A1A;">
			Akurasi Tinggi untuk <span style="color: #C8102E;">Medan Ekstrem</span>
		</h1>
		<p class="text-lg max-w-2xl mx-auto" style="color: #5C5C5C;">
			Pengukuran tekanan untuk sumur geothermal, well testing, dan infrastruktur kritis. Spesifikasi setara impor, lead time 1/3 nya, support langsung dari Indonesia.
		</p>
	</div>
	<div class="absolute bottom-0 left-0 right-0 pointer-events-none" style="transform: translateY(1px);"><svg viewBox="0 0 1440 50" fill="none" preserveAspectRatio="none" class="w-full h-10"><path d="M0,50 L0,25 Q360,0 720,25 T1440,25 L1440,50 Z" fill="white"/></svg></div>
</section>

<section class="relative py-16 lg:py-24 bg-white overflow-hidden">
	<Ornaments variant="dense" />
	<div class="relative z-10 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="p-10 rounded-2xl bg-[#FAFAFA] text-center" style="border: 1px solid #E5E5E5;">
			<div class="w-16 h-16 mx-auto rounded-2xl flex items-center justify-center mb-5" style="background: #D1FAE5;">
				<Flame size={28} style="color: #059669;" />
			</div>
			<h2 class="font-heading text-2xl font-bold mb-2" style="color: #1A1A1A;">APLR — Automatic Pressure Level Recorder</h2>
			<p class="text-sm font-medium mb-4" style="color: #059669; font-style: italic;">"Akurasi tinggi untuk medan ekstrem — geothermal, well testing, infrastruktur kritis."</p>
			<p class="text-sm leading-relaxed mb-6" style="color: #5C5C5C;">Pencatatan tekanan otomatis menggunakan pressure transducer presisi tinggi. Tahan suhu dan tekanan ekstrem untuk aplikasi geothermal dan monitoring sumur. Terbukti di Kawah Ijen bersama PT Medco Energi.</p>
			<div class="flex flex-wrap justify-center gap-2 mb-6">
				{#each ['High Pressure Range', 'Extreme Temperature', 'Corrosion Resistant', 'Auto-logging', 'STESY Integration', 'Data Redundancy'] as spec}
					<span class="text-[10px] px-2.5 py-1 rounded-full font-medium" style="background: #D1FAE5; color: #059669;">{spec}</span>
				{/each}
			</div>
			<!-- Track record -->
			<div class="p-4 rounded-xl mb-6" style="background: white; border: 1px solid #E5E5E5;">
				<span class="text-xs font-semibold uppercase tracking-wider" style="color: #C8102E;">Proyek Unggulan</span>
				<p class="font-heading text-sm font-bold mt-1" style="color: #1A1A1A;">Telemetri APLR Kawah Ijen (2023)</p>
				<p class="text-xs" style="color: #5C5C5C;">PT Medco Energi — Geothermal monitoring</p>
			</div>
			<a href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20tertarik%20dengan%20APLR." target="_blank" rel="noopener"
				class="inline-flex items-center gap-2 px-6 py-3 rounded-[12px] text-sm font-semibold text-white transition-all hover:scale-[1.02]"
				style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 12px rgba(200,16,46,0.25);">
				<MessageCircle size={15} /> Konsultasi APLR
			</a>
		</div>
	</div>
</section>

<section class="relative py-16 lg:py-20 overflow-hidden" style="background: linear-gradient(135deg, #FBE9EC 0%, #F8D7DC 100%);">
	<Ornaments />
	<div class="relative z-10 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
		<h2 class="font-heading text-2xl sm:text-3xl font-bold mb-4" style="color: #1A1A1A;">Punya Kebutuhan Pressure Monitoring?</h2>
		<p class="text-sm mb-8" style="color: #5C5C5C;">Spesifikasi setara impor, dengan lead time dan harga yang jauh lebih kompetitif.</p>
		<a href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20ingin%20konsultasi%20tentang%20pressure%20measurement." target="_blank" rel="noopener"
			class="inline-flex items-center gap-2 px-7 py-3.5 rounded-[12px] text-sm font-semibold text-white transition-all hover:scale-[1.02]"
			style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 16px rgba(200,16,46,0.25);">
			<MessageCircle size={16} /> Konsultasi Sekarang
		</a>
	</div>
</section>
