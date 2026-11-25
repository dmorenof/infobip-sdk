<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Aa47d40354ee197e21ffad52d2c543bd4f729e250360a844e476aa80deff7b6e;

/**
 * ResendPinRequestViaEmail
 */
final class ResendPinRequestViaEmail extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
        'landingPagePlaceholders',
        'placeholders',
    ];

    /**
     * Key value pairs that will be replaced when using personalized opt out landing page. Placeholder keys should NOT contain curly brackets and should NOT contain a `pin` placeholder. Valid example: `"landingPagePlaceholders":{"name":"John", "surname": "Smith"}`
     */
    public \InfobipSDK\DTOs\Aa47d40354ee197e21ffad52d2c543bd4f729e250360a844e476aa80deff7b6e\ResendPinRequestViaEmail\PagePlaceholdersMap $landingPagePlaceholders;
    /**
     * Key value pairs that will be replaced during message sending. Placeholder keys should NOT contain curly brackets and should NOT contain a `pin` placeholder. Valid example: `"placeholders":{"firstName":"John"}`
     */
    public \InfobipSDK\DTOs\Aa47d40354ee197e21ffad52d2c543bd4f729e250360a844e476aa80deff7b6e\ResendPinRequestViaEmail\PlaceholdersMap $placeholders;
}
