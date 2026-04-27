<script lang="ts">
	import './layout.css';
	import Header from '$lib/components/Header.svelte';
	import Footer from '$lib/components/Footer.svelte';
	import WhatsAppFloat from '$lib/components/WhatsAppFloat.svelte';

	let { children } = $props();
</script>

<svelte:head>
	<title>Beacon Engineering — Pionir Sistem Telemetri Pintar Buatan Indonesia</title>
</svelte:head>

<div class="min-h-screen flex flex-col">
	<Header />
	<main class="flex-1">
		{@render children()}
	</main>
	<Footer />
	<WhatsAppFloat />
</div>
