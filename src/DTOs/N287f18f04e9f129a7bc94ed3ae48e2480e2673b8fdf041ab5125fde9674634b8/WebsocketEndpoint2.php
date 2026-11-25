<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * WebsocketEndpoint
 */
final class WebsocketEndpoint2 extends \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallEndpoint
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'websocketEndpointConfigId' => [
        'minLength' => 1,
    ],
];

    /**
     * Optional identifier for websocket calls.
     */
    public string $identifier;
    /**
     * Websocket endpoint configuration ID.
     */
    public string $websocketEndpointConfigId {
        set {
            $this->assigning('websocketEndpointConfigId', $value);
            $this->websocketEndpointConfigId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'identifier' => is_string($value) ? $this->identifier = $value : parent::assignMember($name, $value),
            'websocketEndpointConfigId' => is_string($value) ? $this->websocketEndpointConfigId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
