<?php

declare(strict_types=1);

namespace Setono\Consent;

use PHPUnit\Framework\TestCase;
use Setono\ClientId\ClientId;

/**
 * @covers \Setono\Consent\Consent
 */
final class ConsentTest extends TestCase
{
    /**
     * @test
     */
    public function it_sets_and_gets(): void
    {
        $clientId = new ClientId('client_id');
        $consent = self::getConsent($clientId);

        self::assertSame($clientId, $consent->getClientId());
        self::assertTrue($consent->isMarketingConsentGranted());
        self::assertTrue($consent->isPreferencesConsentGranted());
        self::assertTrue($consent->isStatisticsConsentGranted());
        self::assertSame([Consent::CONSENT_MARKETING, Consent::CONSENT_PREFERENCES, Consent::CONSENT_STATISTICS], Consent::getAvailableConsents());
    }

    /**
     * @test
     */
    public function it_returns_correct_consent_based_on_string(): void
    {
        $consent = self::getConsent();

        self::assertTrue($consent->isConsentGranted(Consent::CONSENT_PREFERENCES));
    }

    /**
     * @test
     */
    public function it_serializes(): void
    {
        $consent = self::getConsent();

        $str = json_encode($consent);

        self::assertSame('{"clientId":"client_id","marketingGranted":true,"preferencesGranted":true,"statisticsGranted":true}', $str);
    }

    /**
     * @test
     */
    public function it_throws_exception_if_wrong_permission_is_asked(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        self::getConsent()->isConsentGranted('non_existing_permission');
    }

    private static function getConsent(ClientId $clientId = null): Consent
    {
        $clientId = $clientId ?? new ClientId('client_id');

        return new Consent($clientId, true, true, true);
    }
}
