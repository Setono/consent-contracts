<?php

declare(strict_types=1);

namespace Setono\Consent;

use PHPUnit\Framework\TestCase;

final class DenyAllConsentCheckerTest extends TestCase
{
    /**
     * @test
     *
     * @dataProvider getAllConsents
     */
    public function it_denies_all(string $consent): void
    {
        $checker = new DenyAllConsentChecker();
        self::assertFalse($checker->isGranted($consent));
    }

    /**
     * @return list<array{0: string}>
     */
    public function getAllConsents(): array
    {
        return [
            [DefaultConsents::CONSENT_MARKETING],
            [DefaultConsents::CONSENT_FUNCTIONAL],
            [DefaultConsents::CONSENT_STATISTICAL],
            ['random'],
        ];
    }
}
