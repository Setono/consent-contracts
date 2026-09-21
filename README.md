# Abstraction for consent related implementations

[![Latest Version][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-github-actions]][link-github-actions]
[![Code Coverage][ico-code-coverage]][link-code-coverage]

This library serves as a building block for handling consent related implementations in your library or application.
It gives you a single interface to check against, so your code doesn't need to know which consent management platform
(CMP) is in use.

## Installation

```shell
composer require setono/consent-contracts
```

## Usage

Depend on the `ConsentCheckerInterface` and ask it whether a given consent has been granted:

```php
<?php
use Setono\Consent\ConsentCheckerInterface;
use Setono\Consent\DefaultConsents;

final class YourService
{
    public function __construct(private readonly ConsentCheckerInterface $consentChecker)
    {
    }

    public function __invoke(): void
    {
        if ($this->consentChecker->isGranted(DefaultConsents::CONSENT_MARKETING)) {
            // marketing consent is granted, and you can set your marketing related cookie ;)
        }
    }
}
```

## Default consents

The `DefaultConsents` class holds the consent types most consent management platforms use:

| Constant                                | Value           |
|-----------------------------------------|-----------------|
| `DefaultConsents::CONSENT_FUNCTIONAL`   | `'functional'`  |
| `DefaultConsents::CONSENT_MARKETING`    | `'marketing'`   |
| `DefaultConsents::CONSENT_STATISTICAL`  | `'statistical'` |

`DefaultConsents::all()` returns all of them. You are free to check for your own consent types too, since
`ConsentCheckerInterface::isGranted()` accepts any string.

> [!NOTE]
> The `Consents` class is deprecated since 1.1 and will be removed in 2.0. Use `DefaultConsents` instead.

## Default consent checkers

This library also provides two implementations of the `ConsentCheckerInterface`, namely the `DenyAllConsentChecker` and
`GrantAllConsentChecker`. You can use these two to provide default consents if a consent management system isn't implemented.

[ico-version]: https://poser.pugx.org/setono/consent-contracts/v/stable
[ico-license]: https://poser.pugx.org/setono/consent-contracts/license
[ico-github-actions]: https://github.com/Setono/consent-contracts/actions/workflows/build.yaml/badge.svg?branch=1.x
[ico-code-coverage]: https://codecov.io/gh/Setono/consent-contracts/branch/1.x/graph/badge.svg

[link-packagist]: https://packagist.org/packages/setono/consent-contracts
[link-github-actions]: https://github.com/Setono/consent-contracts/actions/workflows/build.yaml
[link-code-coverage]: https://codecov.io/gh/Setono/consent-contracts
