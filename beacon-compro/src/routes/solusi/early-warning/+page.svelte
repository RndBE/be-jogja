<script lang="ts">
	import { ArrowRight, MessageCircle, AlertTriangle, Siren, Radio } from '@lucide/svelte';
	import Ornaments from '$lib/components/Ornaments.svelte';
</script>

<svelte:head>
	<title>Early Warning System — Beacon Engineering</title>
	<meta name="description" content="Sistem peringatan dini bencana EWS Beacon Engineering: multi-level alert, sirene, SMS, integrasi STESY." />
</svelte:head>

<section class="relative py-20 lg:py-32 overflow-hidden" style="background: linear-gradient(165deg, #FFFFFF 0%, #FEF9C3 30%, #FFF5F6 60%, #FBE9EC 100%);">
	<Ornaments variant="hero" />
	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="max-w-3xl">
		<div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest mb-6" style="background: #FEF9C3; color: #D97706; border: 1px solid rgba(217,119,6,0.15);">
			<AlertTriangle size={12} />
			Early Warning
		</div>
		<h1 class="font-heading text-3xl sm:text-4xl lg:text-[56px] font-extrabold leading-tight mb-6" style="letter-spacing: -0.03em; color: #1A1A1A;">
			Detik Pertama <span style="color: #C8102E;">Menentukan Nyawa.</span>
		</h1>
		<p class="text-lg max-w-2xl mx-auto mb-6" style="color: #5C5C5C;">
			Sistem peringatan dini multi-level untuk wilayah rawan banjir, longsor, dan bencana hidrometeorologi. Real-time dari sensor ke sirene, SMS, dan dashboard.
		</p>
		</div>
	</div>
	<div class="absolute bottom-0 left-0 right-0 pointer-events-none" style="transform: translateY(1px);"><svg viewBox="0 0 1440 50" fill="none" preserveAspectRatio="none" class="w-full h-10"><path d="M0,50 L0,25 Q360,0 720,25 T1440,25 L1440,50 Z" fill="white"/></svg></div>
</section>

<section class="relative py-16 lg:py-24 bg-white overflow-hidden">
	<Ornaments variant="dense" />
	<div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- EWS Product Card -->
		<div class="max-w-2xl p-10 rounded-[24px] bg-[#FAFAFA]" style="border: 1px solid #E5E5E5;">
			<div class="w-16 h-16 mx-auto rounded-2xl flex items-center justify-center mb-5" style="background: #FEF9C3;">
				<Siren size={28} style="color: #D97706;" />
			</div>
			<h2 class="font-heading text-2xl font-bold mb-2" style="color: #1A1A1A;">EWS — Early Warning System</h2>
			<p class="text-sm font-medium mb-4" style="color: #D97706; font-style: italic;">"Detik pertama menentukan nyawa. Pastikan peringatan datang sebelum bencana."</p>
			<p class="text-sm leading-relaxed mb-6" style="color: #5C5C5C;">Sistem end-to-end dari sensor tinggi muka air dan curah hujan, melalui data logger dan transmisi real-time, hingga sirene peringatan dan notifikasi SMS ke stakeholder. Terintegrasi penuh dengan STESY dan AWLR/ARR.</p>
			<div class="flex flex-wrap justify-center gap-2 mb-6">
				{#each ['Multi-level Alert', 'Sirene Outdoor', 'SMS Gateway', 'AWLR + ARR Combo', 'STESY Dashboard', 'Auto-escalation'] as spec}
					<span class="text-[10px] px-2.5 py-1 rounded-full font-medium" style="background: #FEF9C3; color: #D97706;">{spec}</span>
				{/each}
			</div>

			<!-- Alert Levels -->
			<div class="grid grid-cols-4 gap-2 mb-6">
				{#each [
					{ level: '1', label: 'Waspada', color: '#22C55E', bg: '#F0FDF4' },
					{ level: '2', label: 'Siaga', color: '#F59E0B', bg: '#FFFBEB' },
					{ level: '3', label: 'Awas', color: '#EF4444', bg: '#FEF2F2' },
					{ level: '4', label: 'Darurat', color: '#991B1B', bg: '#FEE2E2' }
				] as alert}
					<div class="p-3 rounded-xl" style="background: {alert.bg}; border: 1px solid {alert.color}20;">
						<span class="font-heading text-lg font-bold" style="color: {alert.color};">L{alert.level}</span>
						<span class="block text-[10px] font-medium" style="color: {alert.color};">{alert.label}</span>
					</div>
				{/each}
			</div>

			<a href="https://wa.me/628112850986?text=Halo%20Beacon%2C%20saya%20tertarik%20dengan%20EWS." target="_blank" rel="noopener"
				class="inline-flex items-center gap-2 px-6 py-3 rounded-[12px] text-sm font-semibold text-white transition-all hover:scale-[1.02]"
				style="background: linear-gradient(135deg, #C8102E, #A50D25); box-shadow: 0 4px 12px rgba(200,16,46,0.25);">
				<MessageCircle size={15} /> Konsultasi EWS
			</a>
		</div>
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
