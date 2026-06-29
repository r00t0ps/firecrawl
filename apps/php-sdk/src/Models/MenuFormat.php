<?php

declare(strict_types=1);

namespace Firecrawl\Models;

final class MenuFormat
{
    private function __construct(
        private readonly ?bool $modifiers = null,
    ) {}

    public static function with(?bool $modifiers = true): self
    {
        return new self($modifiers);
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter([
            'type' => 'menu',
            'modifiers' => $this->modifiers,
        ], fn (mixed $v): bool => $v !== null);
    }

    public function getModifiers(): ?bool
    {
        return $this->modifiers;
    }
}
