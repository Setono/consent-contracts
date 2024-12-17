<?php

declare(strict_types=1);

namespace Setono\Consent;

interface ConsentCheckerInterface
{
    /**
     * You can define your own consent logic by implementing this interface,
     * but it is recommended to use the values from Setono\Consent\DefaultConsents.
     */
    public function isGranted(string $consent): bool;
}
