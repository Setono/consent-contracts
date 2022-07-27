# Abstraction for consent related implementations

[![Latest Version][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-github-actions]][link-github-actions]
[![Code Coverage][ico-code-coverage]][link-code-coverage]
[![Mutation testing][ico-infection]][link-infection]

## Install

```shell
composer require setono/consent-contracts
```

## Usage

```php
<?php
use Setono\ClientId\ClientId;
use Setono\Consent\Consent;

$consent = new Consent(new ClientId('your client id'), true, true, true);

$consent->isMarketingConsentGranted(); // true
$consent->isPreferencesConsentGranted(); // true
$consent->isStatisticsConsentGranted(); // true
```

[ico-version]: https://poser.pugx.org/setono/consent-contracts/v/stable
[ico-license]: https://poser.pugx.org/setono/consent-contracts/license
[ico-github-actions]: https://github.com/Setono/consent-contracts/workflows/build/badge.svg
[ico-code-coverage]: https://codecov.io/gh/Setono/consent-contracts/branch/master/graph/badge.svg
[ico-infection]: https://img.shields.io/endpoint?style=flat&url=https%3A%2F%2Fbadge-api.stryker-mutator.io%2Fgithub.com%2FSetono%2Fconsent-contracts%2Fmaster

[link-packagist]: https://packagist.org/packages/setono/consent-contracts
[link-github-actions]: https://github.com/Setono/consent-contracts/actions
[link-code-coverage]: https://codecov.io/gh/Setono/consent-contracts
[link-infection]: https://dashboard.stryker-mutator.io/reports/github.com/Setono/consent-contracts/master
