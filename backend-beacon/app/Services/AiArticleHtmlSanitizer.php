<?php

namespace App\Services;

use Symfony\Component\HtmlSanitizer\HtmlSanitizer;
use Symfony\Component\HtmlSanitizer\HtmlSanitizerAction;
use Symfony\Component\HtmlSanitizer\HtmlSanitizerConfig;
use Symfony\Component\HtmlSanitizer\Visitor\AttributeSanitizer\AttributeSanitizerInterface;

class AiArticleHtmlSanitizer
{
    private ?HtmlSanitizer $sanitizer = null;

    public function sanitize(?string $html): ?string
    {
        if ($html === null) {
            return null;
        }

        return trim($this->sanitizer()->sanitize($html));
    }

    private function sanitizer(): HtmlSanitizer
    {
        return $this->sanitizer ??= new HtmlSanitizer($this->config());
    }

    private function config(): HtmlSanitizerConfig
    {
        $config = (new HtmlSanitizerConfig)
            ->defaultAction(HtmlSanitizerAction::Block)
            ->withMaxInputLength(100_000);

        foreach (['p', 'h2', 'h3', 'ul', 'ol', 'li', 'strong', 'em', 'footer'] as $element) {
            $config = $config->allowElement($element);
        }

        foreach (['div', 'blockquote'] as $element) {
            $config = $config->allowElement($element, ['class']);
        }

        $config = $config->allowElement('span');

        foreach (['script', 'style', 'iframe', 'svg', 'object', 'embed', 'form', 'input', 'button'] as $element) {
            $config = $config->dropElement($element);
        }

        return $config->withAttributeSanitizer($this->classAttributeSanitizer());
    }

    private function classAttributeSanitizer(): AttributeSanitizerInterface
    {
        $allowedClasses = [
            'beacon-callout',
            'beacon-callout-soft',
            'beacon-metric-grid',
            'beacon-metric-card',
            'beacon-highlight-band',
            'beacon-benefit-grid',
            'beacon-benefit-card',
            'beacon-quote-card',
            'beacon-process',
        ];

        return new class($allowedClasses) implements AttributeSanitizerInterface
        {
            /**
             * @param  array<int, string>  $allowedClasses
             */
            public function __construct(private readonly array $allowedClasses) {}

            public function getSupportedElements(): ?array
            {
                return null;
            }

            public function getSupportedAttributes(): ?array
            {
                return ['class'];
            }

            public function sanitizeAttribute(string $element, string $attribute, string $value, HtmlSanitizerConfig $config): ?string
            {
                $classes = preg_split('/\s+/', trim($value)) ?: [];
                $classes = array_values(array_intersect($classes, $this->allowedClasses));

                return $classes === [] ? null : implode(' ', $classes);
            }
        };
    }
}
