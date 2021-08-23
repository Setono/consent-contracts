<?php

declare(strict_types=1);

namespace Setono\Consent\Context;

use Setono\ClientId\Provider\ClientIdProviderInterface;
use Setono\Consent\Consent;

final class DefaultConsentContext implements ConsentContextInterface
{
    private ClientIdProviderInterface $clientIdProvider;

    private bool $marketingGranted;

    private bool $preferencesGranted;

    private bool $statisticsGranted;

    public function __construct(
        ClientIdProviderInterface $clientIdProvider,
        bool $marketingGranted = false,
        bool $preferencesGranted = false,
        bool $statisticsGranted = false
    ) {
        $this->clientIdProvider = $clientIdProvider;
        $this->marketingGranted = $marketingGranted;
        $this->preferencesGranted = $preferencesGranted;
        $this->statisticsGranted = $statisticsGranted;
    }

    public function getConsent(): Consent
    {
        return new Consent(
            $this->clientIdProvider->getClientId(),
            $this->marketingGranted,
            $this->preferencesGranted,
            $this->statisticsGranted
        );
    }
}
