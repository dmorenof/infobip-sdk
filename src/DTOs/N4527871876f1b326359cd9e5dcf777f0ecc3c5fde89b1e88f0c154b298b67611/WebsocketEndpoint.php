<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * WebsocketEndpoint
 */
final class WebsocketEndpoint extends \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallEndpoint
{
    public const array REQUIRED_FIELDS = [];

    /**
     * Optional identifier for websocket calls.
     */
    public string $identifier;
    /**
     * Websocket endpoint configuration ID.
     */
    public string $websocketEndpointConfigId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'identifier' => is_string($value) ? $this->identifier = $value : parent::assignMember($name, $value),
            'websocketEndpointConfigId' => is_string($value) ? $this->websocketEndpointConfigId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
