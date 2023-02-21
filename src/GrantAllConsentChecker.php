<?php

declare(strict_types=1);

namespace Setono\Consent;

final class GrantAllConsentChecker implements ConsentCheckerInterface
{
    public function isGranted(string $consent): bool
    {
        return true;
    }
}
