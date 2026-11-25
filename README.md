# Infobip SDK for PHP

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)
[![PHP 8.4+](https://img.shields.io/badge/PHP-8.4%2B-777bb4.svg)](composer.json)
[![PHPStan level max](https://img.shields.io/badge/PHPStan-level%20max-brightgreen.svg)](phpstan.neon)
[![Packagist](https://img.shields.io/packagist/v/dmorenof/infobip-sdk.svg)](https://packagist.org/packages/dmorenof/infobip-sdk)

**The whole Infobip platform API as typed PHP: SMS, MMS, WhatsApp, voice, email, RCS, Viber and more.**

More than a thousand operations generated from the platform OpenAPI document Infobip publishes: messaging channels, 2FA, number management, conversations, people and events, and the rest.

> Unofficial. Not affiliated with, endorsed by or supported by Infobip. See [NOTICE.md](NOTICE.md).

## Why this SDK

- 1,004 operations behind one configuration object.
- Typed requests and answers for every channel, including message content unions.
- PHPStan-clean at the maximum level across more than 8,000 generated classes.
- **Generated from the contract, never edited by hand.** `src/` is produced from `contract/infobip.json` by [sdk-generator](https://github.com/dmorenof/sdk-generator) on top of the shared [sdk-runtime](https://github.com/dmorenof/sdk-runtime): when the contract changes you regenerate, you do not patch.
- **Typed end to end.** 1004 operations and 4,642 typed request, answer and model classes. A request is a model whose fields are checked where you assign them (PHP 8.4 property hooks); an answer is a model; a list is a typed collection. PHPStan at the maximum level reports no error on the whole SDK.
- **One way to fail.** An HTTP answer the contract does not declare as success is an `ApiException` that keeps the raw response and, when the API documents it, the decoded error as a model. Network failures keep their own type.
- **Production controls included.** PSR-18 HTTP client (Guzzle by default), timeouts (30 s / 10 s by default), retries with `Retry-After`, redirect policy, middleware and per-environment servers, all in one `Configuration` object.

## Install

PHP 8.4 or later.

```bash
composer require dmorenof/infobip-sdk
```

## Quick start

```php
<?php
use InfobipSDK\Configuration;
use InfobipSDK\InfobipOpenAPISpecificationSDK;
use InfobipSDK\Resource2fa\Resource2\Applications;
use Dmorenof\SdkRuntime\Security\SecurityCredentials;

$configuration = new Configuration();
$configuration->baseUrl = 'https://YOUR-BASE-URL.api.infobip.com'; // your personal base URL
$configuration->securityCredentials = new SecurityCredentials(['APIKeyHeader' => 'App ' . (getenv('INFOBIP_API_KEY') ?: '')]);
InfobipOpenAPISpecificationSDK::configure($configuration);

$applications = Applications::get();

echo json_encode($applications), "\n";
```

The same example is in [examples/quickstart.php](examples/quickstart.php). Every operation is listed in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## What it covers

1004 operations. The biggest areas:

| Area | Operations |
| --- | --- |
| `ccaas` | 126 |
| `calls` | 113 |
| `whatsapp` | 67 |
| `people` | 64 |
| `email` | 52 |
| `number-registration` | 43 |
| `numbers` | 31 |
| `knowledge-base` | 28 |
| `rcs` | 27 |
| `voice` | 27 |
| `subscriptions` | 22 |
| `call-link` | 20 |

…and 56 more areas; the full list is in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## Handling errors

```php
use Dmorenof\SdkRuntime\ApiException;

try {
    // ... any call from the quick start
} catch (ApiException $e) {
    echo $e->response->status, "\n";   // the HTTP status
    echo $e->response->body, "\n";     // the raw body, always kept
    var_dump($e->error);                // the decoded error model, when the API documents one
}
```

## Configuration

`Configuration` is the only place to set anything: `baseUrl`, `securityCredentials`, `headers`, `timeout`, `connectTimeout`, `retryPolicy`, `redirectPolicy`, `middleware`, `httpClient` (any PSR-18 client), `serverVariables`. Use `Client::connect($configuration)` instead of the static facades when you need several independent connections.

## Good to know

- Infobip's document has several defects that the generator repaired so the SDK could be built; the generation report lists each (see NOTICE.md).
- Infobip also publishes official libraries; this one is generated and unofficial.
- Version `0.1.0` is a first release: the API of the SDK follows the contract, and a regenerated contract can rename classes. Pin a version.
- The SDK has been checked against its contract (generation, static analysis, serialization of requests); it has not been run against the live service unless the section above says so. Use test credentials first.

## Documentation

- [Operations catalog](docs/OPERATIONS.md)
- [Vendor documentation](https://www.infobip.com/docs/api)
- [sdk-runtime](https://github.com/dmorenof/sdk-runtime) (what every SDK shares) and [sdk-generator](https://github.com/dmorenof/sdk-generator)
- [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [SECURITY.md](SECURITY.md)

## License

MIT, see [LICENSE.md](LICENSE.md). The license covers this SDK's code, not the API, its trademarks or its terms: see [NOTICE.md](NOTICE.md).
