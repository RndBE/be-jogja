<script lang="ts">
	import { Phone, Mail, MessageCircle, MapPin, Clock, Send, Building2 } from '@lucide/svelte';

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
		// WhatsApp redirect with form data
		const msg = `Halo Beacon,%0A%0ANama: ${formData.name}%0AEmail: ${formData.email}%0ATelepon: ${formData.phone}%0APerusahaan: ${formData.company}%0ASubjek: ${formData.subject}%0APesan: ${formData.message}`;
		window.open(`https://wa.me/628112850986?text=${msg}`, '_blank');
	}
</script>

<svelte:head>
	<title>Kontak — Beacon Engineering</title>
	<meta name="description" content="Hubungi tim engineer Beacon Engineering untuk konsultasi gratis tentang solusi telemetri dan monitoring infrastruktur." />
</svelte:head>

<!-- Hero -->
<section class="relative py-20 lg:py-28 overflow-hidden" style="background: linear-gradient(165deg, #FFFFFF 0%, #FFF5F6 40%, #FBE9EC 100%);">
	<div class="absolute -top-16 -left-16 w-56 h-56 rounded-full pointer-events-none opacity-[0.05]" style="border: 2px solid #C8102E;"></div>
	<svg class="absolute bottom-10 right-[6%] w-8 h-8 opacity-[0.05] pointer-events-none" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="1.5">
		<line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
	</svg>

	<div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
		<span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest mb-6" style="background: #FBE9EC; color: #C8102E;">Kontak</span>
		<h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight mb-6" style="letter-spacing: -0.03em; color: #1A1A1A;">
			Bicara Langsung dengan <span style="color: #C8102E;">Engineer</span> Kami
		</h1>
		<p class="text-lg max-w-2xl mx-auto" style="color: #5C5C5C;">
			Konsultasi pertama selalu gratis. Kami akan bantu memetakan kebutuhan, menyarankan konfigurasi, dan memberikan estimasi.
		</p>
	</div>

	<div class="absolute bottom-0 left-0 right-0 pointer-events-none" style="transform: translateY(1px);">
		<svg viewBox="0 0 1440 50" fill="none" preserveAspectRatio="none" class="w-full h-10"><path d="M0,50 L0,25 Q360,0 720,25 T1440,25 L1440,50 Z" fill="white"/></svg>
	</div>
</section>

<!-- Contact Section -->
<section class="py-16 lg:py-24 bg-white">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid lg:grid-cols-5 gap-12">
			<!-- Left: Contact Info (2 cols) -->
			<div class="lg:col-span-2 space-y-8">
				<div>
					<h2 class="font-heading text-2xl font-bold mb-6" style="color: #1A1A1A;">Informasi Kontak</h2>

					<div class="space-y-5">
						<div class="flex items-start gap-4">
							<div class="w-10 h-10 rounded-xl flex items-center justify-center shrink-0" style="background: #FBE9EC;">
								<MapPin size={18} style="color: #C8102E;" />
							</div>
							<div>
								<span class="text-sm font-semibold block" style="color: #1A1A1A;">Alamat</span>
								<span class="text-sm" style="color: #5C5C5C;">Kadirojo I, Purwomartani, Kalasan, Sleman, DIY 55571</span>
							</div>
						</div>

						<div class="flex items-start gap-4">
							<div class="w-10 h-10 rounded-xl flex items-center justify-center shrink-0" style="background: #FBE9EC;">
								<Phone size={18} style="color: #C8102E;" />
							</div>
							<div>
								<span class="text-sm font-semibold block" style="color: #1A1A1A;">Telepon</span>
								<a href="tel:02744986899" class="text-sm hover:text-[#C8102E] transition-colors" style="color: #5C5C5C;">(0274) 4986899</a>
							</div>
						</div>

						<div class="flex items-start gap-4">
							<div class="w-10 h-10 rounded-xl flex items-center justify-center shrink-0" style="background: #FBE9EC;">
								<MessageCircle size={18} style="color: #C8102E;" />
							</div>
							<div>
								<span class="text-sm font-semibold block" style="color: #1A1A1A;">WhatsApp</span>
								<a href="https://wa.me/628112850986" class="text-sm hover:text-[#C8102E] transition-colors" style="color: #5C5C5C;">0811-2850-9986</a>
								<br />
								<a href="https://wa.me/628112632151" class="text-sm hover:text-[#C8102E] transition-colors" style="color: #5C5C5C;">+62 811 2632 151</a>
							</div>
						</div>

						<div class="flex items-start gap-4">
							<div class="w-10 h-10 rounded-xl flex items-center justify-center shrink-0" style="background: #FBE9EC;">
								<Mail size={18} style="color: #C8102E;" />
							</div>
							<div>
								<span class="text-sm font-semibold block" style="color: #1A1A1A;">Email</span>
								<a href="mailto:info@bejogja.com" class="text-sm hover:text-[#C8102E] transition-colors" style="color: #5C5C5C;">info@bejogja.com</a>
							</div>
						</div>

						<div class="flex items-start gap-4">
							<div class="w-10 h-10 rounded-xl flex items-center justify-center shrink-0" style="background: #FBE9EC;">
								<Clock size={18} style="color: #C8102E;" />
							</div>
							<div>
								<span class="text-sm font-semibold block" style="color: #1A1A1A;">Jam Operasional</span>
								<span class="text-sm" style="color: #5C5C5C;">Senin – Jumat, 08:00 – 17:00 WIB</span>
							</div>
						</div>
					</div>
				</div>

				<!-- Quick CTA -->
				<a
					href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20ingin%20konsultasi%20tentang%20solusi%20telemetri."
					target="_blank" rel="noopener"
					class="flex items-center gap-3 p-4 rounded-2xl transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
					style="background: #FBE9EC; border: 1px solid rgba(200,16,46,0.1);"
				>
					<div class="w-12 h-12 rounded-xl flex items-center justify-center" style="background: #C8102E;">
						<MessageCircle size={20} class="text-white" />
					</div>
					<div>
						<span class="text-sm font-semibold block" style="color: #1A1A1A;">Langsung Chat WhatsApp</span>
						<span class="text-xs" style="color: #5C5C5C;">Respons cepat di jam kerja</span>
					</div>
				</a>
			</div>

			<!-- Right: Form (3 cols) -->
			<div class="lg:col-span-3">
				<div class="p-8 rounded-2xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
					<h3 class="font-heading text-xl font-bold mb-6" style="color: #1A1A1A;">Kirim Permintaan Konsultasi</h3>

					<form onsubmit={handleSubmit} class="space-y-5">
						<div class="grid sm:grid-cols-2 gap-4">
							<div>
								<label for="name" class="block text-sm font-medium mb-1.5" style="color: #1A1A1A;">Nama Lengkap *</label>
								<input id="name" type="text" required bind:value={formData.name}
									class="w-full px-4 py-3 rounded-xl text-sm outline-none focus:ring-2 focus:ring-[#C8102E]/20 transition-all"
									style="background: white; border: 1px solid #E5E5E5; color: #1A1A1A;"
									placeholder="Nama Anda"
								/>
							</div>
							<div>
								<label for="email" class="block text-sm font-medium mb-1.5" style="color: #1A1A1A;">Email *</label>
								<input id="email" type="email" required bind:value={formData.email}
									class="w-full px-4 py-3 rounded-xl text-sm outline-none focus:ring-2 focus:ring-[#C8102E]/20 transition-all"
									style="background: white; border: 1px solid #E5E5E5; color: #1A1A1A;"
									placeholder="email@perusahaan.com"
								/>
							</div>
						</div>

						<div class="grid sm:grid-cols-2 gap-4">
							<div>
								<label for="phone" class="block text-sm font-medium mb-1.5" style="color: #1A1A1A;">Telepon / WhatsApp</label>
								<input id="phone" type="tel" bind:value={formData.phone}
									class="w-full px-4 py-3 rounded-xl text-sm outline-none focus:ring-2 focus:ring-[#C8102E]/20 transition-all"
									style="background: white; border: 1px solid #E5E5E5; color: #1A1A1A;"
									placeholder="081xxxxxxxxx"
								/>
							</div>
							<div>
								<label for="company" class="block text-sm font-medium mb-1.5" style="color: #1A1A1A;">Perusahaan / Instansi</label>
								<input id="company" type="text" bind:value={formData.company}
									class="w-full px-4 py-3 rounded-xl text-sm outline-none focus:ring-2 focus:ring-[#C8102E]/20 transition-all"
									style="background: white; border: 1px solid #E5E5E5; color: #1A1A1A;"
									placeholder="BBWS / BUMN / Swasta"
								/>
							</div>
						</div>

						<div>
							<label for="subject" class="block text-sm font-medium mb-1.5" style="color: #1A1A1A;">Subjek *</label>
							<select id="subject" required bind:value={formData.subject}
								class="w-full px-4 py-3 rounded-xl text-sm outline-none focus:ring-2 focus:ring-[#C8102E]/20 transition-all"
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
								class="w-full px-4 py-3 rounded-xl text-sm outline-none focus:ring-2 focus:ring-[#C8102E]/20 transition-all resize-none"
								style="background: white; border: 1px solid #E5E5E5; color: #1A1A1A;"
								placeholder="Ceritakan kebutuhan monitoring Anda..."
							></textarea>
						</div>

						<button
							type="submit"
							class="inline-flex items-center gap-2 px-6 py-3.5 rounded-[12px] text-sm font-semibold text-white transition-all duration-200 hover:scale-[1.02] active:scale-[0.98]"
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

<!-- Map Embed Placeholder -->
<section class="bg-[#FAFAFA] pb-8">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="rounded-2xl overflow-hidden" style="border: 1px solid #E5E5E5; box-shadow: 0 4px 12px rgba(0,0,0,0.04);">
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
