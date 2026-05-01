<x-filament-panels::page>
    <style>
        .ai-article-shell {
            display: grid;
            grid-template-columns: minmax(320px, 0.9fr) minmax(420px, 1.1fr);
            gap: 24px;
            align-items: start;
        }

        .ai-article-panel {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            box-shadow: 0 1px 2px rgba(15, 23, 42, 0.04);
            padding: 24px;
        }

        .ai-article-heading {
            margin: 0;
            color: #111827;
            font-size: 16px;
            font-weight: 650;
            line-height: 1.4;
        }

        .ai-article-description {
            margin: 6px 0 0;
            color: #6b7280;
            font-size: 14px;
            line-height: 1.55;
        }

        .ai-article-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 20px;
        }

        .ai-article-stack {
            display: grid;
            gap: 16px;
        }

        .ai-article-form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
        }

        .ai-article-field {
            display: grid;
            gap: 8px;
            min-width: 0;
        }

        .ai-article-field--full {
            grid-column: 1 / -1;
        }

        .ai-article-label {
            color: #374151;
            font-size: 13px;
            font-weight: 600;
            line-height: 1.2;
        }

        .ai-article-input,
        .ai-article-textarea,
        .ai-article-select {
            width: 100%;
            min-width: 0;
            border: 1px solid #d1d5db;
            border-radius: 10px;
            background: #ffffff;
            color: #111827;
            font-size: 14px;
            line-height: 1.5;
            padding: 10px 12px;
            box-shadow: 0 1px 1px rgba(15, 23, 42, 0.03);
            outline: none;
        }

        .ai-article-input:focus,
        .ai-article-textarea:focus,
        .ai-article-select:focus {
            border-color: #c8102e;
            box-shadow: 0 0 0 3px rgba(200, 16, 46, 0.12);
        }

        .ai-article-textarea {
            resize: vertical;
        }

        .ai-article-textarea--code {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", monospace;
            font-size: 13px;
        }

        .ai-article-error {
            margin: 0;
            color: #dc2626;
            font-size: 13px;
        }

        .ai-article-title-options {
            display: grid;
            gap: 8px;
            grid-column: 1 / -1;
            margin-top: -6px;
        }

        .ai-article-title-option {
            width: 100%;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            background: #f8fafc;
            color: #334155;
            cursor: pointer;
            font-size: 13px;
            line-height: 1.45;
            padding: 10px 12px;
            text-align: left;
        }

        .ai-article-title-option:hover {
            border-color: #c8102e;
            background: #fff7f8;
            color: #9f1239;
        }

        .ai-article-file {
            display: block;
            width: 100%;
            border: 1px dashed #cbd5e1;
            border-radius: 12px;
            background: #f8fafc;
            color: #334155;
            font-size: 14px;
            line-height: 1.5;
            padding: 14px;
            cursor: pointer;
        }

        .ai-article-help {
            margin: 0;
            color: #64748b;
            font-size: 12px;
            line-height: 1.5;
        }

        .ai-article-thumbnails {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 10px;
        }

        .ai-article-thumb {
            position: relative;
            overflow: hidden;
            min-height: 104px;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            background: #f8fafc;
        }

        .ai-article-thumb img {
            display: block;
            width: 100%;
            height: 104px;
            object-fit: cover;
        }

        .ai-article-thumb button {
            position: absolute;
            top: 6px;
            right: 6px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 26px;
            height: 26px;
            border: 0;
            border-radius: 999px;
            background: rgba(17, 24, 39, 0.78);
            color: #ffffff;
            font-size: 16px;
            line-height: 1;
            cursor: pointer;
        }

        .ai-article-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 18px;
        }

        .ai-article-divider {
            height: 1px;
            background: #e5e7eb;
            margin: 6px 0;
        }

        .ai-article-history {
            display: grid;
            gap: 8px;
        }

        .ai-article-history-item {
            display: grid;
            gap: 4px;
            width: 100%;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            background: #ffffff;
            color: #334155;
            cursor: pointer;
            padding: 10px 12px;
            text-align: left;
        }

        .ai-article-history-item:hover {
            border-color: #c8102e;
            background: #fff7f8;
        }

        .ai-article-history-title {
            color: #111827;
            font-size: 13px;
            font-weight: 650;
            line-height: 1.4;
        }

        .ai-article-history-meta {
            color: #64748b;
            font-size: 12px;
            line-height: 1.45;
        }

        .ai-article-saved {
            display: inline-flex;
            align-items: center;
            white-space: nowrap;
            border-radius: 999px;
            background: #ecfdf5;
            color: #047857;
            font-size: 12px;
            font-weight: 650;
            padding: 6px 10px;
        }

        .ai-article-checkbox {
            display: flex;
            align-items: center;
            gap: 10px;
            grid-column: 1 / -1;
            color: #374151;
            font-size: 14px;
            font-weight: 600;
        }

        .ai-article-checkbox input {
            width: 16px;
            height: 16px;
            accent-color: #c8102e;
        }

        .ai-article-preview {
            grid-column: 1 / -1;
            overflow: hidden;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            background: #ffffff;
        }

        .ai-article-preview-header {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            border-bottom: 1px solid #e5e7eb;
            background: #f8fafc;
            padding: 14px 16px;
        }

        .ai-article-preview-title {
            margin: 0;
            color: #111827;
            font-size: 14px;
            font-weight: 650;
        }

        .ai-article-preview-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            color: #64748b;
            font-size: 12px;
        }

        .ai-article-chip {
            display: inline-flex;
            align-items: center;
            border-radius: 999px;
            background: #f1f5f9;
            color: #334155;
            font-size: 12px;
            font-weight: 600;
            padding: 5px 9px;
        }

        .ai-article-render {
            min-height: 360px;
            max-height: 760px;
            overflow: auto;
            padding: 28px;
            color: #1f2937;
            font-size: 15px;
            line-height: 1.75;
        }

        .ai-article-render :first-child {
            margin-top: 0;
        }

        .ai-article-render :last-child {
            margin-bottom: 0;
        }

        .ai-article-render h2 {
            margin: 28px 0 12px;
            color: #111827;
            font-size: 22px;
            font-weight: 750;
            line-height: 1.25;
        }

        .ai-article-render h3 {
            margin: 22px 0 10px;
            color: #111827;
            font-size: 17px;
            font-weight: 700;
            line-height: 1.35;
        }

        .ai-article-render p {
            margin: 0 0 14px;
        }

        .ai-article-render ul,
        .ai-article-render ol {
            margin: 0 0 16px 22px;
            padding: 0;
        }

        .ai-article-render li {
            margin: 6px 0;
        }

        .ai-article-render .beacon-callout {
            margin: 22px 0;
            border-left: 4px solid #c8102e;
            border-radius: 14px;
            background: #fff1f2;
            padding: 18px 20px;
        }

        .ai-article-render .beacon-callout-soft {
            border-left-color: #64748b;
            background: #f8fafc;
        }

        .ai-article-render .beacon-callout strong {
            display: block;
            margin-bottom: 6px;
            color: #9f1239;
            font-size: 14px;
        }

        .ai-article-render .beacon-callout p {
            margin: 0;
        }

        .ai-article-render .beacon-metric-grid,
        .ai-article-render .beacon-benefit-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px;
            margin: 22px 0;
        }

        .ai-article-render .beacon-metric-card,
        .ai-article-render .beacon-benefit-card {
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            background: #ffffff;
            box-shadow: 0 1px 2px rgba(15, 23, 42, 0.04);
            padding: 18px 20px;
        }

        .ai-article-render .beacon-metric-card span {
            display: block;
            color: #9ca3af;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .ai-article-render .beacon-metric-card strong {
            display: block;
            margin-top: 8px;
            color: #c8102e;
            font-size: 25px;
            font-weight: 800;
            line-height: 1.15;
        }

        .ai-article-render .beacon-benefit-card strong {
            display: block;
            color: #111827;
            font-size: 15px;
            line-height: 1.35;
            margin-bottom: 8px;
        }

        .ai-article-render .beacon-benefit-card p {
            color: #4b5563;
            font-size: 14px;
            line-height: 1.65;
            margin: 0;
        }

        .ai-article-render .beacon-highlight-band {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
            margin: 22px 0;
            border: 1px solid #fecdd3;
            border-radius: 16px;
            background: #fff1f2;
            padding: 20px;
        }

        .ai-article-render .beacon-highlight-band span {
            color: #9ca3af;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .ai-article-render .beacon-highlight-band strong {
            color: #be123c;
            font-size: 16px;
            line-height: 1.45;
        }

        .ai-article-render .beacon-quote-card {
            margin: 24px 0;
            border: 1px solid #fee2e2;
            border-radius: 16px;
            background: #fffafa;
            padding: 24px;
        }

        .ai-article-render .beacon-quote-card p {
            color: #374151;
            font-size: 15px;
            font-style: italic;
            line-height: 1.75;
            margin: 0 0 14px;
        }

        .ai-article-render .beacon-quote-card footer {
            color: #6b7280;
            font-size: 13px;
            font-weight: 650;
        }

        .ai-article-render .beacon-process {
            display: grid;
            gap: 12px;
            margin: 22px 0;
        }

        .ai-article-render .beacon-process > div {
            display: grid;
            grid-template-columns: auto minmax(0, 1fr);
            column-gap: 14px;
            align-items: start;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            background: #ffffff;
            padding: 16px;
        }

        .ai-article-render .beacon-process span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border-radius: 10px;
            background: #c8102e;
            color: #ffffff;
            font-size: 13px;
            font-weight: 800;
            grid-row: span 2;
        }

        .ai-article-render .beacon-process strong {
            color: #111827;
            font-size: 15px;
            line-height: 1.35;
        }

        .ai-article-render .beacon-process p {
            color: #4b5563;
            font-size: 14px;
            margin: 4px 0 0;
        }

        .ai-article-empty {
            display: grid;
            min-height: 320px;
            place-items: center;
            padding: 32px;
            color: #94a3b8;
            text-align: center;
            font-size: 14px;
            line-height: 1.6;
        }

        .ai-article-details {
            grid-column: 1 / -1;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            background: #ffffff;
        }

        .ai-article-details summary {
            cursor: pointer;
            color: #374151;
            font-size: 13px;
            font-weight: 650;
            padding: 13px 14px;
        }

        .ai-article-details-body {
            border-top: 1px solid #e5e7eb;
            padding: 14px;
        }

        @media (max-width: 1100px) {
            .ai-article-shell {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 720px) {
            .ai-article-panel {
                padding: 18px;
            }

            .ai-article-form-grid {
                grid-template-columns: 1fr;
            }

            .ai-article-render .beacon-metric-grid,
            .ai-article-render .beacon-benefit-grid {
                grid-template-columns: 1fr;
            }

            .ai-article-render .beacon-highlight-band {
                align-items: flex-start;
                flex-direction: column;
            }
        }
    </style>

    <div class="ai-article-shell">
        <section class="ai-article-panel">
            <div class="ai-article-header">
                <div>
                    <h2 class="ai-article-heading">Generate Artikel</h2>
                    <p class="ai-article-description">
                        Masukkan instruksi dan bahan mentah. AI akan membuat draft terstruktur, lalu kamu tetap review sebelum simpan.
                    </p>
                </div>
            </div>

            <div class="ai-article-stack">
                <label class="ai-article-field">
                    <span class="ai-article-label">Prompt</span>
                    <textarea
                        wire:model.defer="prompt"
                        rows="7"
                        class="ai-article-textarea"
                        placeholder="Contoh: Buat artikel studi kasus ADR untuk bendungan, target pembaca BBWS, tone profesional."
                    ></textarea>
                    @error('prompt')
                        <p class="ai-article-error">{{ $message }}</p>
                    @enderror
                </label>

                <label class="ai-article-field">
                    <span class="ai-article-label">Bahan / Catatan</span>
                    <textarea
                        wire:model.defer="materials"
                        rows="13"
                        class="ai-article-textarea"
                        placeholder="Tempel data proyek, poin teknis, kutipan, spesifikasi produk, atau outline artikel di sini."
                    ></textarea>
                    @error('materials')
                        <p class="ai-article-error">{{ $message }}</p>
                    @enderror
                </label>

                <label class="ai-article-field">
                    <span class="ai-article-label">Gambar Referensi</span>
                    <input
                        wire:model="images"
                        type="file"
                        accept="image/png,image/jpeg,image/jpg,image/webp"
                        multiple
                        class="ai-article-file"
                    >
                    <p class="ai-article-help">Maksimal 6 gambar, 4MB per gambar. Gambar dikirim ke AI dengan detail rendah agar token lebih hemat.</p>
                    @error('images')
                        <p class="ai-article-error">{{ $message }}</p>
                    @enderror
                    @error('images.*')
                        <p class="ai-article-error">{{ $message }}</p>
                    @enderror
                </label>

                @if (count($images))
                    <div class="ai-article-thumbnails">
                        @foreach ($images as $index => $image)
                            <div class="ai-article-thumb" wire:key="ai-image-{{ $index }}">
                                <img src="{{ $image->temporaryUrl() }}" alt="Gambar referensi {{ $index + 1 }}">
                                <button type="button" wire:click="removeImage({{ $index }})" aria-label="Hapus gambar">&times;</button>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="ai-article-actions">
                <x-filament::button wire:click="generate" wire:loading.attr="disabled" icon="heroicon-m-sparkles">
                    <span wire:loading.remove wire:target="generate">Generate Draft</span>
                    <span wire:loading wire:target="generate">Generating...</span>
                </x-filament::button>

                <x-filament::button color="gray" wire:click="resetDraft" icon="heroicon-m-arrow-path">
                    Reset Draft
                </x-filament::button>
            </div>

            @if ($content)
                <div class="ai-article-divider"></div>

                <div class="ai-article-stack">
                    <label class="ai-article-field">
                        <span class="ai-article-label">Instruksi Revisi</span>
                        <textarea
                            wire:model.defer="revisionPrompt"
                            rows="5"
                            class="ai-article-textarea"
                            placeholder="Contoh: Buat opening lebih kuat, kurangi bahasa sales, tambahkan penjelasan teknis tentang tren muka air tanah."
                        ></textarea>
                        @error('revisionPrompt')
                            <p class="ai-article-error">{{ $message }}</p>
                        @enderror
                    </label>

                    <div class="ai-article-actions">
                        <x-filament::button wire:click="revise" wire:loading.attr="disabled" wire:target="revise" icon="heroicon-m-pencil-square">
                            <span wire:loading.remove wire:target="revise">Revisi Draft</span>
                            <span wire:loading wire:target="revise">Merevisi...</span>
                        </x-filament::button>
                    </div>
                </div>
            @endif

            @if (count($draftHistory))
                <div class="ai-article-divider"></div>

                <div class="ai-article-stack">
                    <div>
                        <h3 class="ai-article-heading">History Draft</h3>
                        <p class="ai-article-description">Klik versi lama untuk mengembalikannya ke preview.</p>
                    </div>

                    <div class="ai-article-history">
                        @foreach ($draftHistory as $index => $version)
                            <button
                                type="button"
                                class="ai-article-history-item"
                                wire:click="restoreDraftVersion({{ $index }})"
                            >
                                <span class="ai-article-history-title">
                                    {{ $version['label'] ?? 'Versi' }} · {{ $version['created_at'] ?? '' }}
                                </span>
                                <span class="ai-article-history-meta">
                                    {{ $version['title'] ?? 'Tanpa judul' }}
                                </span>
                                @if (! empty($version['instruction']))
                                    <span class="ai-article-history-meta">
                                        Instruksi: {{ \Illuminate\Support\Str::limit($version['instruction'], 90) }}
                                    </span>
                                @endif
                            </button>
                        @endforeach
                    </div>
                </div>
            @endif
        </section>

        <section class="ai-article-panel">
            <div class="ai-article-header">
                <div>
                    <h2 class="ai-article-heading">Preview & Edit</h2>
                    <p class="ai-article-description">
                        Semua field di bawah bisa diedit sebelum disimpan ke CMS.
                    </p>
                </div>

                @if ($createdArticleId)
                    <span class="ai-article-saved">Artikel #{{ $createdArticleId }} tersimpan</span>
                @endif
            </div>

            <div class="ai-article-form-grid">
                <label class="ai-article-field ai-article-field--full">
                    <span class="ai-article-label">Judul</span>
                    <input wire:model.live.debounce.500ms="articleTitle" type="text" class="ai-article-input">
                    @error('articleTitle')
                        <p class="ai-article-error">{{ $message }}</p>
                    @enderror
                </label>

                @if (count($titleOptions))
                    <div class="ai-article-title-options">
                        <span class="ai-article-label">Alternatif Judul</span>
                        @foreach ($titleOptions as $index => $option)
                            <button
                                type="button"
                                class="ai-article-title-option"
                                wire:click="useTitleOption({{ $index }})"
                            >
                                {{ $option }}
                            </button>
                        @endforeach
                    </div>
                @endif

                <label class="ai-article-field">
                    <span class="ai-article-label">Slug</span>
                    <input wire:model.defer="articleSlug" type="text" class="ai-article-input">
                    @error('articleSlug')
                        <p class="ai-article-error">{{ $message }}</p>
                    @enderror
                </label>

                <label class="ai-article-field">
                    <span class="ai-article-label">Kategori</span>
                    <select wire:model.defer="category" class="ai-article-select">
                        <option>Studi Kasus</option>
                        <option>Artikel Teknis</option>
                        <option>Berita Produk</option>
                    </select>
                </label>

                <label class="ai-article-field ai-article-field--full">
                    <span class="ai-article-label">Ringkasan</span>
                    <textarea wire:model.defer="excerpt" rows="4" class="ai-article-textarea"></textarea>
                    @error('excerpt')
                        <p class="ai-article-error">{{ $message }}</p>
                    @enderror
                </label>

                <label class="ai-article-field">
                    <span class="ai-article-label">Penulis</span>
                    <input wire:model.defer="author" type="text" class="ai-article-input">
                </label>

                <label class="ai-article-field">
                    <span class="ai-article-label">Waktu Baca</span>
                    <input wire:model.defer="read_time" type="text" class="ai-article-input" placeholder="5 min">
                </label>

                <label class="ai-article-field">
                    <span class="ai-article-label">Warna Kategori</span>
                    <input wire:model.defer="category_color" type="text" class="ai-article-input" placeholder="#C8102E">
                </label>

                <label class="ai-article-field">
                    <span class="ai-article-label">Tags</span>
                    <input wire:model.defer="tags" type="text" class="ai-article-input" placeholder="AWLR, Telemetri, Bendungan">
                </label>

                <label class="ai-article-checkbox">
                    <input wire:model.defer="is_featured" type="checkbox">
                    <span>Featured</span>
                </label>

                <div class="ai-article-preview">
                    <div class="ai-article-preview-header">
                        <div>
                            <p class="ai-article-preview-title">Preview Halaman Artikel</p>
                            <div class="ai-article-preview-meta">
                                @if ($category)
                                    <span>{{ $category }}</span>
                                @endif
                                @if ($author)
                                    <span>{{ $author }}</span>
                                @endif
                                @if ($read_time)
                                    <span>{{ $read_time }}</span>
                                @endif
                            </div>
                        </div>

                        @if ($tags)
                            <span class="ai-article-chip">{{ $tags }}</span>
                        @endif
                    </div>

                    @if ($articleTitle || $excerpt || $content)
                        <article class="ai-article-render">
                            @if ($articleTitle)
                                <h2>{{ $articleTitle }}</h2>
                            @endif

                            @if ($excerpt)
                                <p><strong>{{ $excerpt }}</strong></p>
                            @endif

                            {!! $content !!}
                        </article>
                    @else
                        <div class="ai-article-empty">
                            Draft artikel akan tampil di sini setelah kamu klik Generate Draft.
                        </div>
                    @endif
                </div>

                <details class="ai-article-details">
                    <summary>Edit HTML manual</summary>
                    <div class="ai-article-details-body">
                        <label class="ai-article-field">
                            <span class="ai-article-label">Konten HTML</span>
                            <textarea wire:model.defer="content" rows="18" class="ai-article-textarea ai-article-textarea--code"></textarea>
                        </label>
                    </div>
                    @error('content')
                        <p class="ai-article-error">{{ $message }}</p>
                    @enderror
                </details>
            </div>

            <div class="ai-article-actions">
                <x-filament::button wire:click="saveDraft" color="gray" icon="heroicon-m-document-check">
                    Simpan Draft
                </x-filament::button>

                <x-filament::button wire:click="publish" icon="heroicon-m-paper-airplane">
                    Publish
                </x-filament::button>
            </div>
        </section>
    </div>

    <script>
        (() => {
            if (window.__beaconAiArticleConsoleLoggerReady) {
                return;
            }

            window.__beaconAiArticleConsoleLoggerReady = true;

            window.addEventListener('ai-article-console-log', (event) => {
                const detail = event.detail || {};
                const level = detail.level || 'log';
                const logger = typeof console[level] === 'function' ? console[level].bind(console) : console.log.bind(console);

                logger(`[AI Artikel] ${detail.message}`, detail.context || {});
            });

            console.info('[AI Artikel] Browser console logger ready');
        })();
    </script>
</x-filament-panels::page>
