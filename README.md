# Infobip SDK

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)

Unofficial PHP SDK for the Infobip platform API (SMS, MMS, WhatsApp, voice, email, RCS, Viber, Line, people and more).
The code in `src/` is **generated** from `contract/` by [sdk-generator](https://github.com/dmorenof/sdk-generator) and runs on
[sdk-runtime](https://github.com/dmorenof/sdk-runtime): typed models and collections, one exception type per kind of failure. Nothing in `src/` is edited by hand.

## Installation

PHP 8.4 or later.

```bash
composer require dmorenof/infobip-sdk
```

## Setup

```php
use InfobipSDK\Configuration;
use InfobipSDK\InfobipOpenAPISpecificationSDK;

$configuration = new Configuration();
$configuration->baseUrl = 'https://YOUR-BASE-URL.api.infobip.com'; // your personal base URL
// See the security schemes of the contract for ApiKey, Basic and OAuth2.
InfobipOpenAPISpecificationSDK::configure($configuration);
```

`Configuration` also takes `httpClient` (any PSR-18 client), `middleware`, `retryPolicy` and `redirectPolicy`. The operations are the classes and resources under `src/`; the contract they follow is in `contract/`.

## License

MIT (see [LICENSE.md](LICENSE.md)). See [NOTICE.md](NOTICE.md) for the status of the API itself.
