<?php

declare(strict_types=1);

namespace Setono\Consent;

use PHPUnit\Framework\TestCase;

final class ConsentsTest extends TestCase
{
    /**
     * @test
     */
    public function it_returns_all_consents(): void
    {
        $consents = Consents::all();
        self::assertCount(3, $consents);

        foreach ([Consents::CONSENT_MARKETING, Consents::CONSENT_PREFERENCES, Consents::CONSENT_STATISTICS] as $consent) {
            self::assertContains($consent, $consents);
        }
    }
}
