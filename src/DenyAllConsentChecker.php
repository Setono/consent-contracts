<?php

declare(strict_types=1);

namespace Setono\Consent;

final class DenyAllConsentChecker implements ConsentCheckerInterface
{
    public function isGranted(string $consent): bool
    {
        return false;
    }
}
