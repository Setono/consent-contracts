<?php

declare(strict_types=1);

namespace Setono\Consent\Event;

use Setono\Consent\Consent;

/**
 * Fire this event when the consent is updated
 */
final class ConsentUpdated
{
    /** @psalm-readonly */
    public Consent $newConsent;

    /** @psalm-readonly */
    public ?Consent $oldConsent;

    public function __construct(Consent $newConsent, Consent $oldConsent = null)
    {
        $this->newConsent = $newConsent;
        $this->oldConsent = $oldConsent;
    }
}
