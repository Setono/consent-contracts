<?php

declare(strict_types=1);

namespace Setono\Consent;

final class DefaultConsents
{
    public const CONSENT_FUNCTIONAL = 'functional';

    public const CONSENT_MARKETING = 'marketing';

    public const CONSENT_STATISTICAL = 'statistical';

    /**
     * @return list<string>
     */
    public static function all(): array
    {
        return [
            self::CONSENT_FUNCTIONAL,
            self::CONSENT_MARKETING,
            self::CONSENT_STATISTICAL,
        ];
    }
}
