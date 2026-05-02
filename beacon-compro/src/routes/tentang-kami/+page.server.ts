import type { PageServerLoad } from './$types';
import { api, type ClientSummary } from '$lib/api';

interface AboutPageData {
	visi: string | null;
	misi: string[];
	hero_title: string | null;
	hero_subtitle: string | null;
	hero_tagline: string | null;
	milestones: { year: string; title: string; desc: string }[];
	certifications: {
		title: string;
		subtitle: string | null;
		desc: string;
		style: 'light' | 'dark';
		icon_name: string | null;
		status_label: string;
	}[];
	contributions: {
		title: string;
		desc: string;
		metric: string;
		metric_label: string;
		icon_name: string | null;
	}[];
}

export const load: PageServerLoad = async ({ fetch }) => {
	const [clients, aboutPage] = await Promise.all([
		api<ClientSummary[]>('/clients', fetch).catch(() => []),
		api<AboutPageData>('/about-page', fetch).catch(() => null)
	]);

	return {
		clients: clients ?? [],
		aboutPage
	};
};
