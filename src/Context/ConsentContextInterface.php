<?php

declare(strict_types=1);

namespace Setono\Consent\Context;

use Setono\Consent\Consent;

interface ConsentContextInterface
{
    public function getConsent(): Consent;
}
