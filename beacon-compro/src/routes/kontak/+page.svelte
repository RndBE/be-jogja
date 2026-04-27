<script lang="ts">
	import { Phone, Mail, MessageCircle, MapPin, Clock, Send, Building2, ArrowRight } from '@lucide/svelte';

	let formData = $state({
		name: '',
		email: '',
		phone: '',
		company: '',
		subject: '',
		message: ''
	});

	function handleSubmit(e: Event) {
		e.preventDefault();
		const msg = `Halo Beacon,%0A%0ANama: ${formData.name}%0AEmail: ${formData.email}%0ATelepon: ${formData.phone}%0APerusahaan: ${formData.company}%0ASubjek: ${formData.subject}%0APesan: ${formData.message}`;
		window.open(`https://wa.me/628112850986?text=${msg}`, '_blank');
	}
</script>

<svelte:head>
	<title>Kontak — Beacon Engineering</title>
	<meta name="description" content="Hubungi tim engineer Beacon Engineering untuk konsultasi gratis tentang solusi telemetri dan monitoring infrastruktur." />
</svelte:head>

<!-- Hero — SKILL: Left-aligned -->
<section class="relative py-24 lg:py-32 overflow-hidden" style="background: linear-gradient(168deg, #FFFFFF 0%, #FFF8F9 30%, #FBE9EC 65%, #F5D2D8 100%);">
	<div class="absolute -top-16 -left-16 w-56 h-56 rounded-full pointer-events-none opacity-[0.05]" style="border: 2px solid #C8102E;"></div>
	<div class="absolute top-[40%] right-[8%] w-8 h-8 rotate-45 pointer-events-none opacity-[0.04] animate-float" style="background: #C8102E;"></div>

	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="max-w-3xl">
			<span class="inline-flex items-center px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-widest mb-6" style="background: rgba(255,255,255,0.65); backdrop-filter: blur(12px); color: #C8102E; border: 1px solid rgba(200,16,46,0.12);">Kontak</span>
			<h1 class="font-heading text-3xl sm:text-4xl lg:text-[56px] font-extrabold leading-[1.08] mb-6" style="letter-spacing: -0.03em; color: #1A1A1A;">
				Bicara Langsung dengan <span style="color: #C8102E;">Engineer</span> Kami
			</h1>
			<p class="text-lg max-w-[50ch]" style="color: #5C5C5C;">
				Konsultasi pertama selalu gratis. Kami akan bantu memetakan kebutuhan, menyarankan konfigurasi, dan memberikan estimasi.
			</p>
		</div>
	</div>

	<div class="absolute bottom-0 left-0 right-0 pointer-events-none" style="transform: translateY(1px);">
		<svg viewBox="0 0 1440 50" fill="none" preserveAspectRatio="none" class="w-full h-10"><path d="M0,50 L0,25 Q360,0 720,25 T1440,25 L1440,50 Z" fill="white"/></svg>
	</div>
</section>

<!-- Contact Section — SKILL: Asymmetric 5/7 grid -->
<section class="py-20 lg:py-28 bg-white">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid lg:grid-cols-12 gap-12">
			<!-- Left: Contact Info — 5 cols -->
			<div class="lg:col-span-5 space-y-8">
				<div>
					<h2 class="font-heading text-2xl font-bold mb-6" style="color: #1A1A1A;">Informasi Kontak</h2>

					<div class="space-y-5">
						{#each [
							{ icon: MapPin, label: 'Alamat', value: 'Kadirojo I, Purwomartani, Kalasan, Sleman, DIY 55571' },
							{ icon: Phone, label: 'Telepon', value: '(0274) 4986899', href: 'tel:02744986899' },
							{ icon: Mail, label: 'Email', value: 'info@bejogja.com', href: 'mailto:info@bejogja.com' },
							{ icon: Clock, label: 'Jam Operasional', value: 'Senin – Jumat, 08:00 – 17:00 WIB' }
						] as item}
							<div class="flex items-start gap-4">
								<div class="w-11 h-11 rounded-xl flex items-center justify-center shrink-0" style="background: #FBE9EC;">
									<svelte:component this={item.icon} size={18} style="color: #C8102E;" />
								</div>
								<div>
									<span class="text-sm font-semibold block" style="color: #1A1A1A;">{item.label}</span>
									{#if item.href}
										<a href={item.href} class="text-sm hover:text-[#C8102E] transition-colors" style="color: #5C5C5C;">{item.value}</a>
									{:else}
										<span class="text-sm" style="color: #5C5C5C;">{item.value}</span>
									{/if}
								</div>
							</div>
						{/each}

						<!-- WhatsApp numbers -->
						<div class="flex items-start gap-4">
							<div class="w-11 h-11 rounded-xl flex items-center justify-center shrink-0" style="background: #FBE9EC;">
								<MessageCircle size={18} style="color: #C8102E;" />
							</div>
							<div>
								<span class="text-sm font-semibold block" style="color: #1A1A1A;">WhatsApp</span>
								<a href="https://wa.me/628112850986" class="text-sm hover:text-[#C8102E] transition-colors block" style="color: #5C5C5C;">0811-2850-9986</a>
								<a href="https://wa.me/628112632151" class="text-sm hover:text-[#C8102E] transition-colors block" style="color: #5C5C5C;">+62 811 2632 151</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Quick CTA — SKILL: btn-tactile -->
				<a
					href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20ingin%20konsultasi%20tentang%20solusi%20telemetri."
					target="_blank" rel="noopener"
					class="group flex items-center gap-4 p-5 rounded-[20px] btn-tactile"
					style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 8px 24px rgba(200,16,46,0.2);"
				>
					<div class="w-12 h-12 rounded-xl flex items-center justify-center" style="background: rgba(255,255,255,0.15);">
						<MessageCircle size={20} class="text-white" />
					</div>
					<div>
						<span class="text-sm font-semibold block text-white">Langsung Chat WhatsApp</span>
						<span class="text-xs" style="color: rgba(255,255,255,0.6);">Respons cepat di jam kerja</span>
					</div>
					<ArrowRight size={16} class="text-white/50 group-hover:translate-x-1 transition-transform ml-auto" />
				</a>
			</div>

			<!-- Right: Form — 7 cols -->
			<div class="lg:col-span-7">
				<div class="p-8 lg:p-10 rounded-[24px]" style="background: #FAFAFA; border: 1px solid #E5E5E5; box-shadow: 0 4px 16px rgba(0,0,0,0.03);">
					<h3 class="font-heading text-xl font-bold mb-6" style="color: #1A1A1A;">Kirim Permintaan Konsultasi</h3>

					<form onsubmit={handleSubmit} class="space-y-5">
						<div class="grid sm:grid-cols-2 gap-4">
							<div>
								<label for="name" class="block text-sm font-medium mb-1.5" style="color: #1A1A1A;">Nama Lengkap *</label>
								<input id="name" type="text" required bind:value={formData.name}
									class="w-full px-4 py-3 rounded-[14px] text-sm outline-none focus:ring-2 focus:ring-[#C8102E]/20 transition-all"
									style="background: white; border: 1px solid #E5E5E5; color: #1A1A1A;"
									placeholder="Nama Anda"
								/>
							</div>
							<div>
								<label for="email" class="block text-sm font-medium mb-1.5" style="color: #1A1A1A;">Email *</label>
								<input id="email" type="email" required bind:value={formData.email}
									class="w-full px-4 py-3 rounded-[14px] text-sm outline-none focus:ring-2 focus:ring-[#C8102E]/20 transition-all"
									style="background: white; border: 1px solid #E5E5E5; color: #1A1A1A;"
									placeholder="email@perusahaan.com"
								/>
							</div>
						</div>

						<div class="grid sm:grid-cols-2 gap-4">
							<div>
								<label for="phone" class="block text-sm font-medium mb-1.5" style="color: #1A1A1A;">Telepon / WhatsApp</label>
								<input id="phone" type="tel" bind:value={formData.phone}
									class="w-full px-4 py-3 rounded-[14px] text-sm outline-none focus:ring-2 focus:ring-[#C8102E]/20 transition-all"
									style="background: white; border: 1px solid #E5E5E5; color: #1A1A1A;"
									placeholder="081xxxxxxxxx"
								/>
							</div>
							<div>
								<label for="company" class="block text-sm font-medium mb-1.5" style="color: #1A1A1A;">Perusahaan / Instansi</label>
								<input id="company" type="text" bind:value={formData.company}
									class="w-full px-4 py-3 rounded-[14px] text-sm outline-none focus:ring-2 focus:ring-[#C8102E]/20 transition-all"
									style="background: white; border: 1px solid #E5E5E5; color: #1A1A1A;"
									placeholder="BBWS / BUMN / Swasta"
								/>
							</div>
						</div>

						<div>
							<label for="subject" class="block text-sm font-medium mb-1.5" style="color: #1A1A1A;">Subjek *</label>
							<select id="subject" required bind:value={formData.subject}
								class="w-full px-4 py-3 rounded-[14px] text-sm outline-none focus:ring-2 focus:ring-[#C8102E]/20 transition-all"
								style="background: white; border: 1px solid #E5E5E5; color: #1A1A1A;"
							>
								<option value="">Pilih subjek...</option>
								<option value="AWLR">Konsultasi AWLR</option>
								<option value="EWS">Konsultasi EWS</option>
								<option value="ADR">Konsultasi ADR</option>
								<option value="STESY">Demo STESY</option>
								<option value="Water Security">Water Security</option>
								<option value="Weather Forecast">Weather Forecast</option>
								<option value="Pressure">Pressure Measurement</option>
								<option value="Lainnya">Lainnya</option>
							</select>
						</div>

						<div>
							<label for="message" class="block text-sm font-medium mb-1.5" style="color: #1A1A1A;">Pesan *</label>
							<textarea id="message" required bind:value={formData.message} rows="4"
								class="w-full px-4 py-3 rounded-[14px] text-sm outline-none focus:ring-2 focus:ring-[#C8102E]/20 transition-all resize-none"
								style="background: white; border: 1px solid #E5E5E5; color: #1A1A1A;"
								placeholder="Ceritakan kebutuhan monitoring Anda..."
							></textarea>
						</div>

						<button
							type="submit"
							class="btn-tactile inline-flex items-center gap-2 px-7 py-3.5 rounded-[14px] text-sm font-semibold text-white"
							style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 12px rgba(200,16,46,0.25);"
						>
							<Send size={16} />
							Kirim Permintaan Konsultasi
						</button>

						<p class="text-xs" style="color: #9A9A9A;">
							* Form ini akan mengarahkan Anda ke WhatsApp untuk komunikasi lebih cepat.
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Map -->
<section class="bg-[#FAFAFA] pb-8">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="rounded-[20px] overflow-hidden" style="border: 1px solid #E5E5E5; box-shadow: 0 4px 16px rgba(0,0,0,0.04);">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.2!2d110.44!3d-7.72!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwNDMnMTIuMCJTIDExMMKwMjYnMjQuMCJF!5e0!3m2!1sid!2sid!4v1"
				width="100%"
				height="350"
				style="border: 0;"
				allowfullscreen
				loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"
				title="Lokasi Beacon Engineering"
			></iframe>
		</div>
	</div>
</section>
