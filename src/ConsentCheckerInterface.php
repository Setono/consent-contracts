<?php

declare(strict_types=1);

namespace Setono\Consent;

interface ConsentCheckerInterface
{
    public function isGranted(string $consent): bool;
}
