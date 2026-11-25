<?php

declare(strict_types=1);

namespace InfobipSDK\Requests\AllOfResend2faPinCodeOverEmailBody;

final class EmailBodyRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
        'landingPagePlaceholders',
        'placeholders',
    ];

    /**
     * Key value pairs that will be replaced when using personalized opt out landing page. Placeholder keys should NOT contain curly brackets and should NOT contain a `pin` placeholder. Valid example: `"landingPagePlaceholders":{"name":"John", "surname": "Smith"}`
     */
    public \InfobipSDK\Requests\AllOfResend2faPinCodeOverEmailBody\PlaceholdersMapRequest $landingPagePlaceholders;
    /**
     * Key value pairs that will be replaced during message sending. Placeholder keys should NOT contain curly brackets and should NOT contain a `pin` placeholder. Valid example: `"placeholders":{"firstName":"John"}`
     */
    public \InfobipSDK\Requests\AllOfResend2faPinCodeOverEmailBody\PlaceholdersMap\PlaceholdersMapRequest $placeholders;
}
