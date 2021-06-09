<?php

declare(strict_types=1);

namespace Setono\Consent\Context;

use PHPUnit\Framework\TestCase;
use Setono\ClientId\ClientId;
use Setono\ClientId\Provider\ClientIdProviderInterface;

/**
 * @covers \Setono\Consent\Context\DefaultConsentContext
 */
final class DefaultConsentContextTest extends TestCase
{
    /**
     * @test
     */
    public function it_returns_default_consent(): void
    {
        $context = new DefaultConsentContext(new class() implements ClientIdProviderInterface {
            public function getClientId(): ClientId
            {
                return new ClientId('client_id');
            }
        });

        $consent = $context->getConsent();

        self::assertSame('client_id', $consent->getClientId()->toString());
        self::assertFalse($consent->isMarketingConsentGranted());
        self::assertFalse($consent->isPreferencesConsentGranted());
        self::assertFalse($consent->isStatisticsConsentGranted());
    }
}
