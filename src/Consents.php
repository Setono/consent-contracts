<?php

declare(strict_types=1);

namespace Setono\Consent;

/**
 * @deprecated since 1.1 and will be removed in 2.0. Use \Setono\Consent\DefaultConsents instead
 */
class Consents
{
    public const CONSENT_MARKETING = 'marketing';

    /**
     * @deprecated since 1.1 and will be removed in 2.0. Use \Setono\Consent\DefaultConsents::CONSENT_PREFERENCES instead
     */
    public const CONSENT_PREFERENCES = 'preferences';

    /**
     * @deprecated since 1.1 and will be removed in 2.0. Use \Setono\Consent\DefaultConsents::CONSENT_STATISTICAL instead
     */
    public const CONSENT_STATISTICS = 'statistics';

    /**
     * @return list<string>
     */
    public static function all(): array
    {
        return [
            self::CONSENT_MARKETING,
            self::CONSENT_PREFERENCES,
            self::CONSENT_STATISTICS,
        ];
    }
}
