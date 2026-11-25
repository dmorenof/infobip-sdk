<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * UrlDestination
 */
final class UrlDestination extends \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Destination
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'priority' => [
        'minimum' => 1,
        'maximum' => 100,
        'format' => 'int32',
    ],
    'url' => [
        'minLength' => 1,
        'pattern' => '',
    ],
    'weight' => [
        'minimum' => 1,
        'maximum' => 100,
        'format' => 'int32',
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\UrlSecurityConfig $securityConfig;
    /**
     * URL endpoint which provides next destination to be tried in a route as a response to `POST` HTTP request sent by the Infobip Platform. Returned destination must be of `ENDPOINT_DESTINATION` type.
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
