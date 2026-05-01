<?php

namespace Tests\Unit;

use App\Services\AiArticleHtmlSanitizer;
use PHPUnit\Framework\TestCase;

class AiArticleHtmlSanitizerTest extends TestCase
{
    public function test_it_keeps_allowed_visual_component_classes(): void
    {
        $html = <<<'HTML'
<div class="beacon-callout beacon-callout-soft p-6" style="color:red">
    <strong onclick="alert(1)">Inti gagasan:</strong>
    <p>Monitoring realtime membantu tim membaca perubahan lebih cepat.</p>
</div>
HTML;

        $clean = (new AiArticleHtmlSanitizer)->sanitize($html);

        $this->assertStringContainsString('class="beacon-callout beacon-callout-soft"', $clean);
        $this->assertStringContainsString('<strong>Inti gagasan:</strong>', $clean);
        $this->assertStringNotContainsString('p-6', $clean);
        $this->assertStringNotContainsString('style=', $clean);
        $this->assertStringNotContainsString('onclick', $clean);
    }

    public function test_it_drops_dangerous_markup_and_keeps_plain_content(): void
    {
        $html = <<<'HTML'
<script>alert(1)</script>
<section>
    <h2>Data Lapangan yang Lebih Terbaca</h2>
    <p>Konten tetap dipertahankan walau wrapper tidak dikenal.</p>
</section>
<blockquote class="beacon-quote-card unknown-class">
    <p>"Kutipan asli dari bahan."</p>
    <footer>Tim Beacon</footer>
</blockquote>
HTML;

        $clean = (new AiArticleHtmlSanitizer)->sanitize($html);

        $this->assertStringNotContainsString('<script', $clean);
        $this->assertStringNotContainsString('alert(1)', $clean);
        $this->assertStringContainsString('<h2>Data Lapangan yang Lebih Terbaca</h2>', $clean);
        $this->assertStringContainsString('class="beacon-quote-card"', $clean);
        $this->assertStringNotContainsString('unknown-class', $clean);
    }
}
