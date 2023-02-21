# Abstraction for consent related implementations

[![Latest Version][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-github-actions]][link-github-actions]
[![Code Coverage][ico-code-coverage]][link-code-coverage]

This library serves as a building block for handling consent related implementations in your library or application.

## Install

```shell
composer require setono/consent-contracts
```

## Usage

```php
<?php
use Setono\Consent\Consents;
use Setono\Consent\ConsentCheckerInterface;

final class YourService
{
    private ConsentCheckerInterface $consentChecker;
    
    public function __construct(ConsentCheckerInterface $consentChecker)
    {
        $this->consentChecker = $consentChecker;    
    }
    
    public function __invoke()
    {
        if ($this->consentChecker->isGranted(Consents::CONSENT_MARKETING)) {
            // marketing consent is granted, and you can set your marketing related cookie ;)
        }
    }
}
```

## Default consent checkers

This library also provides two implementations of the `ConsentCheckerInterface`, namely the `DenyAllConsentChecker` and
`GrantAllConsentChecker`. You can use these two to provide default consents if a consent management system isn't implemented.

[ico-version]: https://poser.pugx.org/setono/consent-contracts/v/stable
[ico-license]: https://poser.pugx.org/setono/consent-contracts/license
[ico-github-actions]: https://github.com/Setono/consent-contracts/workflows/build/badge.svg
[ico-code-coverage]: https://codecov.io/gh/Setono/consent-contracts/branch/1.x/graph/badge.svg

[link-packagist]: https://packagist.org/packages/setono/consent-contracts
[link-github-actions]: https://github.com/Setono/consent-contracts/actions
[link-code-coverage]: https://codecov.io/gh/Setono/consent-contracts
