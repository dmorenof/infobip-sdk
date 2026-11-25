<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * MessengerMoConfigurationRequest
 */
final class MessengerMoConfigurationRequest extends \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MoConfigurationRequest
{
    public const array REQUIRED_FIELDS = [
        'channel',
    ];

    protected const array PROPERTY_MAP = [
        'unset' => 'unset_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'unset_' => 'unset',
    ];

    protected const array VALIDATION = [
        'keyword' => [
            'minLength' => 0,
            'maxLength' => 50,
        ],
        'unset_' => [
            'uniqueItems' => true,
        ],
        'username' => [
            'minLength' => 0,
            'maxLength' => 255,
            'pattern' => '^(?!\\s*$).+',
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\UseConversations $conversations;
    public \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MessengerMoActionDocs $forwarding;
    public \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\PlatformDocs $platform;
    /**
     * Required if <code>resourceKey</code> not present.
     * Example: "41793026727"
     */
    public string $resource;
    /**
     * Required if <code>resource</code> not present.
     * Example: "58BC6DB7966CB9F69A91EB956DF73239"
     */
    public string $resourceKey;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'conversations' => $value instanceof \stdClass ? $this->conversations = new \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\UseConversations($value) : parent::assignMember($name, $value),
            'forwarding' => $value instanceof \stdClass ? $this->forwarding = new \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MessengerMoActionDocs($value) : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\PlatformDocs($value) : parent::assignMember($name, $value),
            'resource' => is_string($value) ? $this->resource = $value : parent::assignMember($name, $value),
            'resourceKey' => is_string($value) ? $this->resourceKey = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
