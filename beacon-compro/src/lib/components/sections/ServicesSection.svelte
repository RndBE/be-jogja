<script lang="ts">
	import { onMount } from 'svelte';
	import { Brain, Wrench, Monitor, Users, ArrowRight } from '@lucide/svelte';
	import Ornaments from '$lib/components/Ornaments.svelte';

	let visible = $state(false);
	let activeService = $state(0);

	onMount(() => {
		const observer = new IntersectionObserver(
			(entries) => { if (entries[0].isIntersecting) visible = true; },
			{ threshold: 0.15 }
		);
		const el = document.getElementById('layanan-beyond');
		if (el) observer.observe(el);

		// Auto rotate active service
		const interval = setInterval(() => {
			activeService = (activeService + 1) % services.length;
		}, 4000);

		return () => { observer.disconnect(); clearInterval(interval); };
	});

	const services = [
		{
			icon: Brain,
			title: 'Telemetri Berbasis AI',
			desc: 'Pengumpulan, analisa, dan komparasi data otomatis untuk insight yang lebih dalam.',
			detail: 'Machine learning menganalisis pola data historis, memprediksi anomali, dan mengoptimalkan threshold alarm secara otomatis.',
			number: '01'
		},
		{
			icon: Wrench,
			title: 'Garansi & Maintenance',
			desc: 'Pengecekan teknis, kebersihan, penggantian suku cadang, kalibrasi, uji fungsional.',
			detail: 'Tim teknis terlatih hadir langsung ke lokasi. Dukungan sepanjang tahun dengan SLA response time yang ketat.',
			number: '02'
		},
		{
			icon: Monitor,
			title: 'Monitoring Terintegrasi',
			desc: 'Akses lewat satu aplikasi STESY, tidak peduli berapa banyak perangkat.',
			detail: 'Dashboard tunggal menampilkan seluruh stasiun secara real-time. Mendukung multi-tenant untuk berbagai instansi.',
			number: '03'
		},
		{
			icon: Users,
			title: 'Konsultasi Teknis',
			desc: 'Tim engineer kami membantu sejak fase desain sampai operasional.',
			detail: 'Dari site survey, desain teknis, hingga training operator — kami mendampingi setiap tahap implementasi.',
			number: '04'
		}
	];
</script>

<!-- SKILL: Replace generic 4-column card grid with split layout (content left, interactive right) -->
<section id="layanan-beyond" class="relative py-20 lg:py-28 bg-white overflow-hidden">
	<Ornaments />
	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Grid layout: Left copy + Right interactive cards -->
		<div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-start">
			<!-- Left: Header and service selectors — 5 cols -->
			<div
				class="lg:col-span-5 lg:sticky lg:top-32"
				style="
					opacity: {visible ? 1 : 0};
					transform: translateX({visible ? 0 : -30}px);
					transition: opacity 0.7s ease-out, transform 0.7s ease-out;
				"
			>
				<span class="text-xs font-semibold uppercase tracking-widest" style="color: #C8102E;">Layanan</span>
				<h2 class="font-heading text-3xl sm:text-4xl lg:text-[44px] font-bold text-[#1A1A1A] leading-[1.1] mt-3 mb-6" style="letter-spacing: -0.025em;">
					Kami Tidak Berhenti Setelah Perangkat Terpasang.
				</h2>
				<p class="text-sm text-[#5C5C5C] leading-relaxed mb-8 max-w-[40ch]">
					Setiap instalasi didukung oleh layanan menyeluruh — dari konsultasi awal hingga maintenance berkala.
				</p>

				<!-- Service tabs / selectors -->
				<div class="space-y-2">
					{#each services as service, i}
						<button
							class="w-full text-left group flex items-center gap-4 p-4 rounded-[14px] transition-all duration-300 cursor-pointer"
							style="
								background: {activeService === i ? 'white' : 'transparent'};
								border: 1px solid {activeService === i ? '#C8102E' : 'transparent'};
								box-shadow: {activeService === i ? '0 4px 20px rgba(200,16,46,0.08)' : 'none'};
							"
							onclick={() => activeService = i}
						>
							<div
								class="w-10 h-10 rounded-xl flex items-center justify-center shrink-0 transition-all duration-300"
								style="background: {activeService === i ? '#FBE9EC' : '#F5F5F5'};"
							>
								<svelte:component this={service.icon} size={18} style="color: {activeService === i ? '#C8102E' : '#5C5C5C'};" />
							</div>
							<div class="min-w-0">
								<span class="block text-sm font-semibold transition-colors" style="color: {activeService === i ? '#C8102E' : '#1A1A1A'};">{service.title}</span>
								<span class="block text-xs text-[#9A9A9A] mt-0.5 truncate">{service.desc}</span>
							</div>
						</button>
					{/each}
				</div>
			</div>

			<!-- Right: Active service detail card — 7 cols -->
			<div class="lg:col-span-7">
				<div class="relative">
					{#each services as service, i}
						<div
							class="rounded-[24px] p-8 lg:p-10 transition-all duration-500"
							style="
								background: linear-gradient(145deg, #FFF8F9 0%, #FBE9EC 100%);
								border: 1px solid rgba(200,16,46,0.1);
								opacity: {activeService === i ? 1 : 0};
								transform: translateY({activeService === i ? 0 : 20}px) scale({activeService === i ? 1 : 0.96});
								position: {i === 0 ? 'relative' : 'absolute'};
								top: {i === 0 ? 'auto' : '0'};
								left: {i === 0 ? 'auto' : '0'};
								right: {i === 0 ? 'auto' : '0'};
								pointer-events: {activeService === i ? 'auto' : 'none'};
								transition: opacity 0.5s cubic-bezier(0.16,1,0.3,1), transform 0.5s cubic-bezier(0.16,1,0.3,1);
							"
						>
							<!-- Large number watermark -->
							<span class="absolute top-6 right-8 font-heading text-[120px] font-extrabold leading-none pointer-events-none" style="color: rgba(200,16,46,0.04);">
								{service.number}
							</span>

							<div class="relative z-10">
								<div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-6" style="background: white; border: 1px solid rgba(200,16,46,0.1); box-shadow: 0 4px 12px rgba(0,0,0,0.04);">
									<svelte:component this={service.icon} size={28} style="color: #C8102E;" />
								</div>

								<h3 class="font-heading text-2xl lg:text-3xl font-bold text-[#1A1A1A] mb-4">{service.title}</h3>
								<p class="text-base text-[#5C5C5C] leading-relaxed mb-3 max-w-[50ch]">{service.desc}</p>
								<p class="text-sm text-[#7A7A7A] leading-relaxed max-w-[50ch]">{service.detail}</p>

								<a
									href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20tertarik%20dengan%20layanan%20{encodeURIComponent(service.title)}."
									class="inline-flex items-center gap-2 mt-8 px-6 py-3 rounded-[12px] text-sm font-semibold text-white btn-tactile"
									style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 12px rgba(200,16,46,0.2);"
									target="_blank"
									rel="noopener"
								>
									Tanya Soal {service.title}
									<ArrowRight size={14} />
								</a>
							</div>
						</div>
					{/each}
				</div>
			</div>
		</div>
	</div>
</section>
