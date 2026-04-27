<script lang="ts">
	import { onMount } from 'svelte';
	import {
		Phone,
		Mail,
		Menu,
		X,
		Search,
		ChevronDown,
		MessageCircle,
		Droplets,
		Cloud,
		AlertTriangle,
		Gauge,
		Monitor,
		ExternalLink
	} from '@lucide/svelte';

	let scrollY = $state(0);
	let mobileMenuOpen = $state(false);
	let activeMegaMenu = $state<string | null>(null);
	let scrollProgress = $state(0);

	function updateScroll() {
		scrollY = window.scrollY;
		const docHeight = document.documentElement.scrollHeight - window.innerHeight;
		scrollProgress = docHeight > 0 ? (scrollY / docHeight) * 100 : 0;
	}

	onMount(() => {
		window.addEventListener('scroll', updateScroll, { passive: true });
		return () => window.removeEventListener('scroll', updateScroll);
	});

	function toggleMegaMenu(menu: string) {
		activeMegaMenu = activeMegaMenu === menu ? null : menu;
	}

	function closeMegaMenu() {
		activeMegaMenu = null;
	}

	function toggleMobileMenu() {
		mobileMenuOpen = !mobileMenuOpen;
		if (mobileMenuOpen) {
			document.body.style.overflow = 'hidden';
		} else {
			document.body.style.overflow = '';
		}
	}

	function closeMobileMenu() {
		mobileMenuOpen = false;
		document.body.style.overflow = '';
	}

	const solutionCategories = [
		{
			name: 'Water Security',
			desc: 'Amankan air & bendungan',
			icon: Droplets,
			items: ['AWLR', 'AWGC', 'AFMR', 'ADR', 'AWQR', 'AVWR'],
			href: '/solusi/water-security'
		},
		{
			name: 'Weather Forecast',
			desc: 'Pantau cuaca akurat',
			icon: Cloud,
			items: ['AWR', 'ARR'],
			href: '/solusi/weather-forecast'
		},
		{
			name: 'Early Warning',
			desc: 'Cegah bencana',
			icon: AlertTriangle,
			items: ['EWS'],
			href: '/solusi/early-warning'
		},
		{
			name: 'Pressure Measurement',
			desc: 'Tekanan presisi tinggi',
			icon: Gauge,
			items: ['APLR'],
			href: '/solusi/pressure-measurement'
		},
		{
			name: 'STESY Application',
			desc: 'Platform monitoring 1-pintu',
			icon: Monitor,
			items: ['Smart Telemetry System'],
			href: '/solusi/stesy'
		}
	];

	const popularSolutions = [
		'AWLR untuk bendungan',
		'EWS untuk wilayah rawan banjir',
		'STESY untuk integrasi monitoring'
	];

	const aboutLinks = [
		{ name: 'Profil Perusahaan', href: '/tentang-kami' },
		{ name: 'Visi & Misi', href: '/tentang-kami#visi-misi' },
		{ name: 'Sertifikasi', href: '/tentang-kami#sertifikasi' },
		{ name: 'Klien & Mitra', href: '/tentang-kami#klien' }
	];

	const insightLinks = [
		{ name: 'Semua Wawasan', href: '/wawasan' },
		{ name: 'ADR Bendungan Ciawi', href: '/wawasan/adr-bendungan-ciawi' },
		{ name: 'Standar SNI AWLR', href: '/wawasan/standar-sni-awlr' },
		{ name: 'STESY 3.0 Update', href: '/wawasan/stesy-3-update' },
		{ name: 'EWS DAS Citarum', href: '/wawasan/ews-citarum' },
		{ name: 'Panduan Maintenance', href: '/wawasan/panduan-maintenance-telemetri' }
	];

	let mobileAccordion = $state<string | null>(null);

	function toggleMobileAccordion(name: string) {
		mobileAccordion = mobileAccordion === name ? null : name;
	}
</script>

<!-- Scroll Progress Bar -->
<div class="scroll-progress" style="width: {scrollProgress}%"></div>

<!-- Top Utility Bar -->
<div
	class="relative z-50 transition-all duration-300"
	class:glass-top-bar={scrollY > 50}
>
	<div
		class="w-full text-white text-xs"
		style="background: {scrollY > 50 ? 'rgba(200,16,46,0.85)' : '#C8102E'}; backdrop-filter: {scrollY > 50 ? 'blur(12px)' : 'none'};"
	>
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-8">
			<span class="hidden sm:inline font-medium tracking-wide" style="font-size: 11px;">
				Sistem Telemetri Buatan Indonesia · Sejak 2013
			</span>
			<div class="flex items-center gap-4 text-[11px] ml-auto sm:ml-0">
				<a href="tel:02744986899" class="flex items-center gap-1 hover:opacity-80 transition-opacity">
					<Phone size={11} />
					<span class="hidden md:inline">(0274) 4986899</span>
				</a>
				<a href="https://wa.me/628112850986" class="flex items-center gap-1 hover:opacity-80 transition-opacity">
					<MessageCircle size={11} />
					<span>WA 0811-2850-9986</span>
				</a>
				<a href="mailto:info@bejogja.com" class="hidden lg:flex items-center gap-1 hover:opacity-80 transition-opacity">
					<Mail size={11} />
					<span>info@bejogja.com</span>
				</a>
			</div>
		</div>
	</div>
</div>

<!-- Main Header -->
<header
	class="sticky top-0 z-40 w-full transition-all duration-300"
	style="
		background: {scrollY > 50 ? 'rgba(255,255,255,0.75)' : '#FFFFFF'};
		backdrop-filter: {scrollY > 50 ? 'blur(20px) saturate(180%)' : 'none'};
		box-shadow: {scrollY > 50 ? '0 1px 3px rgba(0,0,0,0.06)' : 'none'};
	"
>
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="flex items-center justify-between transition-all duration-300" style="height: {scrollY > 50 ? '64px' : '72px'};">
			<!-- Logo -->
			<a href="/" class="flex items-center gap-3 shrink-0">
				<div class="w-10 h-10 rounded-lg flex items-center justify-center" style="background: #C8102E;">
					<span class="text-white font-heading text-lg font-extrabold">B</span>
				</div>
				<div class="flex flex-col">
					<span class="font-heading text-lg font-bold text-[#1A1A1A] leading-tight">Beacon</span>
					<span class="text-[10px] text-[#5C5C5C] tracking-widest uppercase leading-none">Smart Telemetry</span>
				</div>
			</a>

			<!-- Desktop Navigation -->
			<nav class="hidden lg:flex items-center gap-1">
				<a href="/" class="px-4 py-2 text-sm font-medium text-[#1A1A1A] hover:text-[#C8102E] transition-colors link-hover-underline relative">
					Beranda
				</a>

				<!-- Solusi Mega Menu -->
				<div class="relative" role="navigation">
					<button
						class="px-4 py-2 text-sm font-medium text-[#1A1A1A] hover:text-[#C8102E] transition-colors flex items-center gap-1"
						onclick={() => toggleMegaMenu('solusi')}
						onmouseenter={() => activeMegaMenu = 'solusi'}
					>
						Solusi
						<ChevronDown size={14} class="transition-transform duration-200 {activeMegaMenu === 'solusi' ? 'rotate-180' : ''}" />
					</button>

					{#if activeMegaMenu === 'solusi'}
						<div
							class="absolute top-full left-1/2 -translate-x-1/2 w-[720px] mt-2 p-6 rounded-2xl glass-surface"
							style="box-shadow: 0 20px 60px rgba(0,0,0,0.08);"
							onmouseleave={closeMegaMenu}
							role="menu"
						>
							<p class="text-xs font-semibold text-[#5C5C5C] uppercase tracking-widest mb-4">Cari Solusi Berdasarkan Kebutuhan Anda</p>
							<div class="grid grid-cols-3 gap-4 mb-6">
								{#each solutionCategories as cat}
									<a href={cat.href} onclick={closeMegaMenu} class="group p-3 rounded-xl hover:bg-[#FBE9EC] transition-colors" role="menuitem">
										<div class="flex items-center gap-2 mb-1">
											<svelte:component this={cat.icon} size={16} class="text-[#C8102E]" />
											<span class="text-sm font-semibold text-[#1A1A1A] group-hover:text-[#C8102E] transition-colors">{cat.name}</span>
										</div>
										<p class="text-xs text-[#5C5C5C] mb-2">{cat.desc}</p>
										<div class="flex flex-wrap gap-1">
											{#each cat.items.slice(0, 3) as item}
												<span class="text-[10px] px-2 py-0.5 rounded-full bg-white text-[#5C5C5C] border border-[#E5E5E5]">{item}</span>
											{/each}
										</div>
									</a>
								{/each}
							</div>

							<div class="border-t border-[#E5E5E5] pt-4 flex justify-between items-start">
								<div>
									<p class="text-xs font-semibold text-[#C8102E] uppercase tracking-wider mb-2">Paling Dicari</p>
									{#each popularSolutions as sol}
										<p class="text-xs text-[#5C5C5C] mb-1">• {sol}</p>
									{/each}
								</div>
								<div class="text-right">
									<p class="text-xs text-[#5C5C5C] mb-2">Butuh konsultasi?</p>
									<a
										href="https://wa.me/628112850986"
										class="inline-flex items-center gap-1 text-xs font-semibold text-[#C8102E] hover:underline"
									>
										<MessageCircle size={12} />
										Chat WhatsApp
									</a>
								</div>
							</div>
						</div>
					{/if}
				</div>

				<a href="/proyek" class="px-4 py-2 text-sm font-medium text-[#1A1A1A] hover:text-[#C8102E] transition-colors link-hover-underline relative">
					Proyek
				</a>

				<!-- Tentang Kami -->
				<div class="relative" role="navigation">
					<button
						class="px-4 py-2 text-sm font-medium text-[#1A1A1A] hover:text-[#C8102E] transition-colors flex items-center gap-1"
						onclick={() => toggleMegaMenu('tentang')}
						onmouseenter={() => activeMegaMenu = 'tentang'}
					>
						Tentang Kami
						<ChevronDown size={14} class="transition-transform duration-200 {activeMegaMenu === 'tentang' ? 'rotate-180' : ''}" />
					</button>

					{#if activeMegaMenu === 'tentang'}
						<div
							class="absolute top-full right-0 w-56 mt-2 p-3 rounded-xl glass-surface"
							style="box-shadow: 0 12px 40px rgba(0,0,0,0.06);"
							onmouseleave={closeMegaMenu}
							role="menu"
						>
							{#each aboutLinks as link}
								<a href={link.href} onclick={closeMegaMenu} class="block px-3 py-2 text-sm text-[#1A1A1A] hover:text-[#C8102E] hover:bg-[#FBE9EC] rounded-lg transition-colors" role="menuitem">
									{link.name}
								</a>
							{/each}
						</div>
					{/if}
				</div>

				<!-- Wawasan -->
				<div class="relative" role="navigation">
					<button
						class="px-4 py-2 text-sm font-medium text-[#1A1A1A] hover:text-[#C8102E] transition-colors flex items-center gap-1"
						onclick={() => toggleMegaMenu('wawasan')}
						onmouseenter={() => activeMegaMenu = 'wawasan'}
					>
						Wawasan
						<ChevronDown size={14} class="transition-transform duration-200 {activeMegaMenu === 'wawasan' ? 'rotate-180' : ''}" />
					</button>

					{#if activeMegaMenu === 'wawasan'}
						<div
							class="absolute top-full right-0 w-56 mt-2 p-3 rounded-xl glass-surface"
							style="box-shadow: 0 12px 40px rgba(0,0,0,0.06);"
							onmouseleave={closeMegaMenu}
							role="menu"
						>
							{#each insightLinks as link}
								<a href={link.href} onclick={closeMegaMenu} class="block px-3 py-2 text-sm text-[#1A1A1A] hover:text-[#C8102E] hover:bg-[#FBE9EC] rounded-lg transition-colors" role="menuitem">
									{link.name}
								</a>
							{/each}
						</div>
					{/if}
				</div>

				<a href="/kontak" class="px-4 py-2 text-sm font-medium text-[#1A1A1A] hover:text-[#C8102E] transition-colors link-hover-underline relative">
					Kontak
				</a>
			</nav>

			<!-- Right Actions -->
			<div class="flex items-center gap-3">
				<button class="hidden lg:flex p-2 text-[#5C5C5C] hover:text-[#C8102E] transition-colors rounded-lg hover:bg-[#FBE9EC]" aria-label="Search">
					<Search size={18} />
				</button>

				<a
					href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20tertarik%20dengan%20solusi%20telemetri%20Anda."
					class="hidden lg:inline-flex items-center gap-2 px-5 py-2.5 rounded-[10px] text-sm font-semibold text-white transition-all duration-200 hover:scale-[1.02] active:scale-[0.98]"
					style="
						background: #C8102E;
						box-shadow: 0 1px 2px rgba(200,16,46,0.1), 0 4px 12px rgba(200,16,46,0.15), inset 0 1px 0 rgba(255,255,255,0.15);
						letter-spacing: -0.01em;
					"
					target="_blank"
					rel="noopener"
				>
					Konsultasi Gratis
				</a>

				<!-- Mobile Menu Button -->
				<button
					class="lg:hidden p-2 text-[#1A1A1A] hover:text-[#C8102E] transition-colors"
					onclick={toggleMobileMenu}
					aria-label="Toggle menu"
				>
					{#if mobileMenuOpen}
						<X size={24} />
					{:else}
						<Menu size={24} />
					{/if}
				</button>
			</div>
		</div>
	</div>
</header>

<!-- Mobile Menu Overlay -->
{#if mobileMenuOpen}
	<div class="fixed inset-0 z-30 bg-white overflow-y-auto lg:hidden" style="top: 0;">
		<div class="pt-[120px] pb-8 px-6">
			<nav class="space-y-1">
				<a href="/" onclick={closeMobileMenu} class="block px-4 py-3 text-base font-semibold text-[#1A1A1A] hover:text-[#C8102E] hover:bg-[#FBE9EC] rounded-xl transition-colors">
					Beranda
				</a>

				<!-- Mobile: Solusi Accordion -->
				<div>
					<button
						class="w-full flex justify-between items-center px-4 py-3 text-base font-semibold text-[#1A1A1A] hover:text-[#C8102E] hover:bg-[#FBE9EC] rounded-xl transition-colors"
						onclick={() => toggleMobileAccordion('solusi')}
					>
						Solusi
						<ChevronDown size={16} class="transition-transform duration-200 {mobileAccordion === 'solusi' ? 'rotate-180' : ''}" />
					</button>
					{#if mobileAccordion === 'solusi'}
						<div class="pl-4 space-y-1 mt-1">
							{#each solutionCategories as cat}
								<a href={cat.href} onclick={closeMobileMenu} class="block px-4 py-2 text-sm text-[#5C5C5C] hover:text-[#C8102E] hover:bg-[#FBE9EC] rounded-lg transition-colors">
									{cat.name}
								</a>
							{/each}
						</div>
					{/if}
				</div>

				<a href="/proyek" onclick={closeMobileMenu} class="block px-4 py-3 text-base font-semibold text-[#1A1A1A] hover:text-[#C8102E] hover:bg-[#FBE9EC] rounded-xl transition-colors">
					Proyek
				</a>

				<!-- Mobile: Tentang Kami Accordion -->
				<div>
					<button
						class="w-full flex justify-between items-center px-4 py-3 text-base font-semibold text-[#1A1A1A] hover:text-[#C8102E] hover:bg-[#FBE9EC] rounded-xl transition-colors"
						onclick={() => toggleMobileAccordion('tentang')}
					>
						Tentang Kami
						<ChevronDown size={16} class="transition-transform duration-200 {mobileAccordion === 'tentang' ? 'rotate-180' : ''}" />
					</button>
					{#if mobileAccordion === 'tentang'}
						<div class="pl-4 space-y-1 mt-1">
							{#each aboutLinks as link}
								<a href={link.href} onclick={closeMobileMenu} class="block px-4 py-2 text-sm text-[#5C5C5C] hover:text-[#C8102E] hover:bg-[#FBE9EC] rounded-lg transition-colors">
									{link.name}
								</a>
							{/each}
						</div>
					{/if}
				</div>

				<!-- Mobile: Wawasan Accordion -->
				<div>
					<button
						class="w-full flex justify-between items-center px-4 py-3 text-base font-semibold text-[#1A1A1A] hover:text-[#C8102E] hover:bg-[#FBE9EC] rounded-xl transition-colors"
						onclick={() => toggleMobileAccordion('wawasan')}
					>
						Wawasan
						<ChevronDown size={16} class="transition-transform duration-200 {mobileAccordion === 'wawasan' ? 'rotate-180' : ''}" />
					</button>
					{#if mobileAccordion === 'wawasan'}
						<div class="pl-4 space-y-1 mt-1">
							{#each insightLinks as link}
								<a href={link.href} onclick={closeMobileMenu} class="block px-4 py-2 text-sm text-[#5C5C5C] hover:text-[#C8102E] hover:bg-[#FBE9EC] rounded-lg transition-colors">
									{link.name}
								</a>
							{/each}
						</div>
					{/if}
				</div>

				<a href="/kontak" onclick={closeMobileMenu} class="block px-4 py-3 text-base font-semibold text-[#1A1A1A] hover:text-[#C8102E] hover:bg-[#FBE9EC] rounded-xl transition-colors">
					Kontak
				</a>
			</nav>

			<!-- Mobile Utility Links -->
			<div class="mt-8 pt-6 border-t border-[#E5E5E5] space-y-3">
				<a href="tel:02744986899" class="flex items-center gap-3 text-sm text-[#5C5C5C]">
					<Phone size={16} class="text-[#C8102E]" />
					(0274) 4986899
				</a>
				<a href="https://wa.me/628112850986" class="flex items-center gap-3 text-sm text-[#5C5C5C]">
					<MessageCircle size={16} class="text-[#C8102E]" />
					WA 0811-2850-9986
				</a>
				<a href="mailto:info@bejogja.com" class="flex items-center gap-3 text-sm text-[#5C5C5C]">
					<Mail size={16} class="text-[#C8102E]" />
					info@bejogja.com
				</a>
			</div>

			<!-- Mobile CTA -->
			<div class="mt-6">
				<a
					href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20tertarik%20dengan%20solusi%20telemetri%20Anda."
					class="block w-full text-center py-3.5 rounded-xl text-white font-semibold text-sm transition-all"
					style="background: #C8102E; box-shadow: 0 4px 12px rgba(200,16,46,0.2);"
					target="_blank"
					rel="noopener"
				>
					Konsultasi Gratis dengan Engineer Kami
				</a>
			</div>
		</div>
	</div>
{/if}

<style>
	.glass-top-bar {
		backdrop-filter: blur(12px);
		-webkit-backdrop-filter: blur(12px);
	}
</style>
