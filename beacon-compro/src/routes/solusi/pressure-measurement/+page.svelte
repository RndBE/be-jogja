<script lang="ts">
	import {
		ArrowRight,
		MessageCircle,
		Gauge,
		Thermometer,
		Flame,
	} from "@lucide/svelte";
	import Ornaments from "$lib/components/Ornaments.svelte";
	import { pressureMeasurementProducts as fallbackProducts } from "$lib/data/solutions";

	let { data } = $props();

	const products = $derived(
		data.solutionDetail?.sub_solutions &&
			data.solutionDetail.sub_solutions.length > 0
			? data.solutionDetail.sub_solutions.map((s: any) => {
					const editorial = fallbackProducts.find(
						(f) => f.slug === s.slug,
					);
					return {
						slug: s.slug,
						name: s.abbreviation || editorial?.name || s.name,
						full: s.name,
						hook: editorial?.hook ?? "",
						icon: editorial?.icon ?? Gauge,
						desc: editorial?.desc ?? "",
						specs: editorial?.specs ?? [],
						thumbnail:
							editorial?.thumbnail ??
							`https://picsum.photos/seed/${s.slug}/800/600`,
					};
				})
			: fallbackProducts,
	);
</script>

<svelte:head>
	<title>Pressure Measurement — Beacon Engineering</title>
	<meta
		name="description"
		content="APLR Beacon Engineering: pengukuran tekanan presisi tinggi untuk geothermal, well testing, dan infrastruktur kritis."
	/>
</svelte:head>

<!-- Hero — SKILL: Split Screen, DESIGN_VARIANCE: 8, MOTION_INTENSITY: 6 -->
<section
	class="relative pt-24 pb-0 lg:pt-32 bg-[#FAFAFA] border-b border-[#E5E5E5] overflow-hidden"
>
	<!-- Subtle Dot Grid -->
	<div
		class="absolute inset-0 z-0 opacity-[0.03] pointer-events-none"
		style="background-image: radial-gradient(#000 1px, transparent 1px); background-size: 24px 24px;"
	></div>
	<!-- Decorative circle top-left -->
	<div
		class="absolute -top-24 -left-24 w-80 h-80 rounded-full pointer-events-none opacity-[0.06]"
		style="border: 2px solid #059669;"
	></div>
	<!-- Emerald glow behind illustration -->
	<div
		class="absolute top-1/2 right-0 -translate-y-1/2 w-[55%] h-full pointer-events-none opacity-[0.035] rounded-full"
		style="background: radial-gradient(ellipse at center, #059669 0%, transparent 70%);"
	></div>

	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- SKILL Rule 3: Split-screen — text left, illustration right -->
		<div
			class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-0 items-center"
		>
			<!-- Left: Text -->
			<div
				class="flex flex-col justify-center pb-16 lg:pb-24 lg:pr-12 xl:pr-16"
			>
				<div
					class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-[11px] font-semibold uppercase tracking-widest mb-6 w-fit"
					style="background: #D1FAE5; color: #059669; border: 1px solid rgba(5,150,105,0.15);"
				>
					<Gauge size={12} />
					Pressure Measurement
				</div>

				<h1
					class="font-heading text-4xl md:text-5xl lg:text-[52px] xl:text-[60px] font-extrabold tracking-tighter leading-[1.06] mb-6"
					style="color: #1A1A1A;"
				>
					Akurasi Tinggi untuk <br />
					<span style="color: #059669;">Medan Ekstrem.</span>
				</h1>

				<p
					class="text-base md:text-lg text-gray-600 leading-relaxed max-w-[52ch] mb-4"
				>
					Pengukuran tekanan untuk sumur geothermal, well testing, dan
					infrastruktur kritis.
				</p>
				<p
					class="text-base md:text-lg font-semibold"
					style="color: #059669;"
				>
					Spesifikasi setara impor, lead time 1/3-nya, dari Indonesia.
				</p>

				<!-- Stat strip -->
				<div
					class="flex items-center gap-8 mt-10 pt-8 border-t border-[#E5E5E5]"
				>
					<div>
						<p
							class="font-heading text-2xl font-extrabold tabular-nums"
							style="color: #1A1A1A; letter-spacing: -0.03em;"
						>
							High
						</p>
						<p
							class="text-xs font-medium mt-0.5"
							style="color: #7A7A7A;"
						>
							Precision Sensor
						</p>
					</div>
					<div class="w-px h-8 bg-[#E5E5E5]"></div>
					<div>
						<p
							class="font-heading text-2xl font-extrabold tabular-nums"
							style="color: #1A1A1A; letter-spacing: -0.03em;"
						>
							1/3
						</p>
						<p
							class="text-xs font-medium mt-0.5"
							style="color: #7A7A7A;"
						>
							Lead Time Impor
						</p>
					</div>
					<div class="w-px h-8 bg-[#E5E5E5]"></div>
					<div>
						<p
							class="font-heading text-2xl font-extrabold tabular-nums"
							style="color: #1A1A1A; letter-spacing: -0.03em;"
						>
							100%
						</p>
						<p
							class="text-xs font-medium mt-0.5"
							style="color: #7A7A7A;"
						>
							Lokal Support
						</p>
					</div>
				</div>
			</div>

			<!-- Right: Illustration — float animation -->
			<div
				class="relative flex items-center justify-center lg:justify-end -mt-8 lg:-mt-16"
			>
				<!-- Faint dashed ring -->
				<div
					class="absolute inset-0 flex items-center justify-center pointer-events-none"
				>
					<div
						class="w-[85%] h-[85%] rounded-full opacity-[0.07]"
						style="border: 1.5px dashed #059669;"
					></div>
				</div>
				<!-- Illustration -->
				<div
					class="ws-hero-float w-full max-w-[700px] lg:max-w-none lg:w-[145%] xl:w-[160%] lg:translate-x-12"
				>
					<img
						src="/ilustrasi_pressure_measurement.webp"
						alt="Ilustrasi sistem pengukuran tekanan Pressure Measurement Beacon Engineering"
						class="w-full h-auto object-contain select-none"
						draggable="false"
					/>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="relative py-16 lg:py-24 bg-white overflow-hidden">
	<Ornaments variant="dense" />
	<div class="relative z-10 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
		{#each products as product}
			<div
				class="max-w-4xl mx-auto rounded-[28px] overflow-hidden relative flex flex-col justify-end bg-black min-h-[500px] transition-transform duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(5,150,105,0.3)]"
				style="border: 1px solid rgba(0,0,0,0.1);"
			>
				<!-- Full Image Background -->
				<img
					src={product.thumbnail}
					alt={product.name}
					class="absolute inset-0 w-full h-full object-cover opacity-70 group-hover:opacity-90 transition-all duration-1000 group-hover:scale-110"
				/>

				<!-- Darkening Gradient for Readability -->
				<div
					class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/50 to-transparent pointer-events-none"
				></div>

				<!-- Accent Top -->
				<div
					class="absolute top-0 left-0 right-0 h-[3px] opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-20"
					style="background: linear-gradient(90deg, #059669, transparent);"
				></div>

				<!-- Liquid Glass Content Panel -->
				<div
					class="relative z-10 m-5 p-8 rounded-[24px] transition-all duration-500 transform group-hover:-translate-y-1"
					style="background: rgba(20, 20, 20, 0.5); backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.12); box-shadow: inset 0 1px 0 rgba(255,255,255,0.15), 0 10px 30px rgba(0,0,0,0.3);"
				>
					<div class="flex items-center gap-5 mb-6">
						<div
							class="w-16 h-16 rounded-2xl flex items-center justify-center shrink-0 transition-transform duration-500 group-hover:scale-110"
							style="background: rgba(5,150,105,0.2); border: 1px solid rgba(5,150,105,0.3);"
						>
							<svelte:component
								this={product.icon}
								size={30}
								style="color: #34D399;"
							/>
						</div>
						<div>
							<h2
								class="font-heading text-2xl md:text-3xl font-bold text-white tracking-tight"
							>
								{product.name}
								<span
									class="text-white/40 font-normal ml-2 hidden sm:inline-block"
									>— {product.full}</span
								>
							</h2>
							<p
								class="text-sm font-medium italic text-white/80 mt-1"
							>
								"{product.hook}"
							</p>
						</div>
					</div>

					<p class="text-sm leading-relaxed text-white/70 mb-6">
						{product.desc}
					</p>

					<div class="flex flex-wrap gap-2 mb-8">
						{#each product.specs as spec}
							<span
								class="text-[10px] px-3 py-1.5 rounded-full font-medium"
								style="background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.15); color: rgba(255,255,255,0.9);"
								>{spec}</span
							>
						{/each}
					</div>

					<!-- Track record -->
					<div
						class="p-5 rounded-[16px] mb-8 transition-colors hover:bg-white/5"
						style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1);"
					>
						<span
							class="text-xs font-semibold uppercase tracking-wider"
							style="color: #34D399;">Proyek Unggulan</span
						>
						<p
							class="font-heading text-base font-bold mt-1 text-white"
						>
							Telemetri {product.name} Kawah Ijen (2023)
						</p>
						<p class="text-xs text-white/60 mt-1">
							PT Medco Energi — Geothermal monitoring
						</p>
					</div>

					<a
						href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20tertarik%20dengan%20{product.name}."
						target="_blank"
						rel="noopener"
						class="inline-flex items-center gap-2 px-6 py-3.5 rounded-[14px] text-sm font-semibold text-white transition-all hover:scale-[1.02]"
						style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 16px rgba(200,16,46,0.3);"
					>
						<MessageCircle size={16} /> Konsultasi {product.name}
					</a>
				</div>
			</div>
		{/each}
	</div>
</section>

<section
	class="relative py-16 lg:py-20 overflow-hidden"
	style="background: linear-gradient(135deg, #FBE9EC 0%, #F8D7DC 100%);"
>
	<Ornaments />
	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="max-w-xl">
			<h2
				class="font-heading text-2xl sm:text-3xl font-bold mb-4"
				style="color: #1A1A1A;"
			>
				Punya Kebutuhan Pressure Monitoring?
			</h2>
			<p class="text-sm mb-8" style="color: #5C5C5C;">
				Spesifikasi setara impor, dengan lead time dan harga yang jauh
				lebih kompetitif.
			</p>
			<a
				href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20ingin%20konsultasi%20tentang%20pressure%20measurement."
				target="_blank"
				rel="noopener"
				class="inline-flex items-center gap-2 px-7 py-3.5 rounded-[12px] text-sm font-semibold text-white transition-all hover:scale-[1.02]"
				style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 16px rgba(200,16,46,0.25);"
			>
				<MessageCircle size={16} /> Konsultasi Sekarang
			</a>
		</div>
	</div>
</section>

<style>
	/* SKILL MOTION_INTENSITY: 6 — Hero illustration gentle float */
	.ws-hero-float {
		animation: wsFloat 6s ease-in-out infinite;
		will-change: transform;
	}

	@keyframes wsFloat {
		0%,
		100% {
			transform: translateY(0px);
		}
		50% {
			transform: translateY(-12px);
		}
	}

	@media (max-width: 1023px) {
		.ws-hero-float {
			transform: none !important;
		}
		@keyframes wsFloat {
			0%,
			100% {
				transform: translateY(0px);
			}
			50% {
				transform: translateY(-10px);
			}
		}
	}

	/* Live dot pulse for Emerald */
	.animate-pulse-emerald {
		animation: pulseEmerald 2s ease-in-out infinite;
	}

	@keyframes pulseEmerald {
		0%,
		100% {
			opacity: 1;
			transform: scale(1);
		}
		50% {
			opacity: 0.4;
			transform: scale(0.7);
		}
	}

	@media (prefers-reduced-motion: reduce) {
		.ws-hero-float,
		.animate-pulse-emerald {
			animation: none !important;
		}
	}
</style>
