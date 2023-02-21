<?php

declare(strict_types=1);

namespace Setono\Consent;

final class Consents
{
    public const CONSENT_MARKETING = 'marketing';

    public const CONSENT_PREFERENCES = 'preferences';

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
