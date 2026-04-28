<script lang="ts">
	import { Phone, Mail, MessageCircle, MapPin, Clock } from '@lucide/svelte';
	import logoBeacon from '$lib/assets/logo_be.png';
</script>

<footer class="relative overflow-hidden" style="background: linear-gradient(180deg, #F5F5F5 0%, #FAFAFA 100%);">
	<!-- Top wave ornament -->
	<div class="absolute top-0 left-0 right-0 pointer-events-none" style="transform: translateY(-1px);">
		<svg viewBox="0 0 1440 40" fill="none" preserveAspectRatio="none" class="w-full h-8">
			<path d="M0,0 L0,20 Q360,40 720,20 T1440,20 L1440,0 Z" fill="white"/>
		</svg>
	</div>

	<!-- Decorative ornaments -->
	<div class="absolute top-20 right-[5%] w-32 h-32 rounded-full pointer-events-none opacity-[0.04]" style="border: 2px solid #C8102E;"></div>
	<svg class="absolute bottom-20 left-[3%] w-8 h-8 opacity-[0.04] pointer-events-none" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="2">
		<line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
	</svg>

	<!-- Red/white stripe -->
	<div class="h-1 w-full mt-8" style="background: linear-gradient(90deg, transparent, #C8102E 30%, #C8102E 70%, transparent);"></div>

	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-8">
		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-8">
			<!-- Column 1: Brand -->
			<div class="space-y-4">
				<div class="flex items-center gap-3">
					<img src={logoBeacon} alt="Beacon Engineering" style="height: 36px; width: auto;" />
				</div>
				<p class="text-sm leading-relaxed" style="color: #5C5C5C; font-style: italic;">
					"Pionir Sistem Telemetri Pintar di Indonesia"
				</p>
				<div class="flex items-start gap-2 text-xs" style="color: #7A7A7A;">
					<MapPin size={14} class="shrink-0 mt-0.5" style="color: #C8102E;" />
					<span>Kadirojo I, Purwomartani, Kalasan, Sleman, DIY 55571</span>
				</div>
				<div class="flex items-center gap-3 pt-2">
					<a href="https://instagram.com/beacon_engineering" target="_blank" rel="noopener" class="w-8 h-8 rounded-full flex items-center justify-center transition-colors" style="background: #FBE9EC; color: #C8102E;" aria-label="Instagram">
						<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
					</a>
					<a href="https://linkedin.com/company/beacon-engineering" target="_blank" rel="noopener" class="w-8 h-8 rounded-full flex items-center justify-center transition-colors" style="background: #FBE9EC; color: #C8102E;" aria-label="LinkedIn">
						<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
					</a>
					<a href="https://youtube.com/@beacon_engineering" target="_blank" rel="noopener" class="w-8 h-8 rounded-full flex items-center justify-center transition-colors" style="background: #FBE9EC; color: #C8102E;" aria-label="YouTube">
						<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
					</a>
				</div>
			</div>

			<!-- Column 2: Solusi -->
			<div>
				<h3 class="text-sm font-semibold mb-4 uppercase tracking-wider" style="color: #1A1A1A;">Solusi</h3>
				<ul class="space-y-2.5">
					{#each ['Water Security', 'Weather Forecast', 'Early Warning', 'Pressure Measurement', 'STESY Application'] as item}
						<li><a href="/solusi/{item.toLowerCase().replace(/ /g,'-')}" class="text-sm transition-colors hover:text-[#C8102E]" style="color: #5C5C5C;">{item}</a></li>
					{/each}
				</ul>
			</div>

			<!-- Column 3: Perusahaan -->
			<div>
				<h3 class="text-sm font-semibold mb-4 uppercase tracking-wider" style="color: #1A1A1A;">Perusahaan</h3>
				<ul class="space-y-2.5">
					{#each [
						{name: 'Tentang Kami', href: '/tentang-kami'},
						{name: 'Proyek', href: '/proyek'},
						{name: 'Sertifikasi', href: '/tentang-kami#sertifikasi'},
						{name: 'Wawasan', href: '/wawasan'}
					] as item}
						<li><a href={item.href} class="text-sm transition-colors hover:text-[#C8102E]" style="color: #5C5C5C;">{item.name}</a></li>
					{/each}
				</ul>
			</div>

			<!-- Column 4: Kontak -->
			<div>
				<h3 class="text-sm font-semibold mb-4 uppercase tracking-wider" style="color: #1A1A1A;">Kontak</h3>
				<ul class="space-y-3">
					<li class="flex items-center gap-2 text-sm" style="color: #5C5C5C;">
						<Phone size={14} style="color: #C8102E;" class="shrink-0" />
						<a href="tel:02744986899" class="hover:text-[#C8102E] transition-colors">(0274) 4986899</a>
					</li>
					<li class="flex items-center gap-2 text-sm" style="color: #5C5C5C;">
						<MessageCircle size={14} style="color: #C8102E;" class="shrink-0" />
						<a href="https://wa.me/628112850986" class="hover:text-[#C8102E] transition-colors">0811-2850-9986</a>
					</li>
					<li class="flex items-center gap-2 text-sm" style="color: #5C5C5C;">
						<Mail size={14} style="color: #C8102E;" class="shrink-0" />
						<a href="mailto:info@bejogja.com" class="hover:text-[#C8102E] transition-colors">info@bejogja.com</a>
					</li>
					<li class="flex items-center gap-2 text-sm" style="color: #5C5C5C;">
						<Clock size={14} style="color: #C8102E;" class="shrink-0" />
						<span>Senin–Jumat, 08:00–17:00 WIB</span>
					</li>
				</ul>
				<a
					href="https://wa.me/628112850986"
					class="mt-4 inline-flex items-center gap-2 px-4 py-2.5 rounded-lg text-xs font-semibold text-white transition-all hover:scale-[1.02]"
					style="background: #C8102E; box-shadow: 0 2px 8px rgba(200,16,46,0.2);"
					target="_blank" rel="noopener"
				>
					<MessageCircle size={14} />
					Konsultasi Sekarang
				</a>
			</div>
		</div>

		<!-- Bottom Bar -->
		<div class="mt-12 pt-6" style="border-top: 2px solid #E5E5E5;">
			<div class="flex flex-col sm:flex-row justify-between items-center gap-3">
				<p class="text-xs" style="color: #9A9A9A;">
					© 2026 PT Arta Teknologi Comunindo (Beacon Engineering). All rights reserved.
				</p>
				<div class="flex items-center gap-4">
					<a href="/privacy" class="text-xs transition-colors hover:text-[#C8102E]" style="color: #9A9A9A;">Privacy Policy</a>
					<span style="color: #E5E5E5;">·</span>
					<a href="/terms" class="text-xs transition-colors hover:text-[#C8102E]" style="color: #9A9A9A;">Terms of Service</a>
				</div>
			</div>
			<p class="text-center text-[11px] mt-3" style="color: #B0B0B0; font-style: italic;">
				Made with pride in Yogyakarta, Indonesia
			</p>
		</div>
	</div>
</footer>
