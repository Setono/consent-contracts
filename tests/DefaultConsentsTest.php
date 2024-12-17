<?php

declare(strict_types=1);

namespace Setono\Consent;

use PHPUnit\Framework\TestCase;

final class DefaultConsentsTest extends TestCase
{
    /**
     * @test
     */
    public function it_returns_all_consents(): void
    {
        $consents = DefaultConsents::all();
        self::assertCount(3, $consents);

        foreach ([DefaultConsents::CONSENT_MARKETING, DefaultConsents::CONSENT_FUNCTIONAL, DefaultConsents::CONSENT_STATISTICAL] as $consent) {
            self::assertContains($consent, $consents);
        }
    }
}
