import type { PageServerLoad } from './$types';
import { api, type ClientSummary } from '$lib/api';

export const load: PageServerLoad = async ({ fetch }) => {
	try {
		const clients = await api<ClientSummary[]>('/clients', fetch);
		return { clients };
	} catch (err) {
		console.error('[Tentang Kami] Failed to load clients:', err);
		return { clients: [] };
	}
};
