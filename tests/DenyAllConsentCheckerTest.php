<?php

declare(strict_types=1);

namespace Setono\Consent;

use PHPUnit\Framework\TestCase;

final class DenyAllConsentCheckerTest extends TestCase
{
    /**
     * @test
     * @dataProvider getAllConsents
     */
    public function it_denies_all(string $consent): void
    {
        $checker = new DenyAllConsentChecker();
        self::assertFalse($checker->isGranted($consent));
    }

    /**
     * @return list<list<string>>
     */
    public function getAllConsents(): array
    {
        return [
            [Consents::CONSENT_MARKETING],
            [Consents::CONSENT_PREFERENCES],
            [Consents::CONSENT_STATISTICS],
            ['random'],
        ];
    }
}
