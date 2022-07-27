<?php

declare(strict_types=1);

namespace Setono\Consent;

use JsonSerializable;
use Setono\ClientId\ClientId;
use Webmozart\Assert\Assert;

final class Consent implements JsonSerializable
{
    public const CONSENT_MARKETING = 'marketing';

    public const CONSENT_PREFERENCES = 'preferences';

    public const CONSENT_STATISTICS = 'statistics';

    private ClientId $clientId;

    private bool $marketingGranted;

    private bool $preferencesGranted;

    private bool $statisticsGranted;

    public function __construct(
        ClientId $clientId,
        bool $marketingGranted,
        bool $preferencesGranted,
        bool $statisticsGranted
    ) {
        $this->clientId = $clientId;
        $this->marketingGranted = $marketingGranted;
        $this->preferencesGranted = $preferencesGranted;
        $this->statisticsGranted = $statisticsGranted;
    }

    /**
     * Returns a list of available consents
     *
     * @return array<array-key, string>
     */
    public static function getAvailableConsents(): array
    {
        return [
            self::CONSENT_MARKETING,
            self::CONSENT_PREFERENCES,
            self::CONSENT_STATISTICS,
        ];
    }

    public function getClientId(): ClientId
    {
        return $this->clientId;
    }

    public function isMarketingConsentGranted(): bool
    {
        return $this->marketingGranted;
    }

    public function isPreferencesConsentGranted(): bool
    {
        return $this->preferencesGranted;
    }

    public function isStatisticsConsentGranted(): bool
    {
        return $this->statisticsGranted;
    }

    public function isConsentGranted(string $consent): bool
    {
        Assert::oneOf($consent, self::getAvailableConsents());

        /** @var bool $res */
        $res = $this->{$consent . 'Granted'};

        return $res;
    }

    public function jsonSerialize(): array
    {
        return [
            'clientId' => $this->clientId->toString(),
            'marketingGranted' => $this->marketingGranted,
            'preferencesGranted' => $this->preferencesGranted,
            'statisticsGranted' => $this->statisticsGranted,
        ];
    }
}
