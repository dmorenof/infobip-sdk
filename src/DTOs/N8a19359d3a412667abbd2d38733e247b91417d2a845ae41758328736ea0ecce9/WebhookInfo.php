<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9;

/**
 * WebhookInfo
 *
 * Webhook that will be called with the information about the request status. The webhook will be called with a POST method that contains all the info in JSON format. Check webhook endpoint for more details.
 */
final class WebhookInfo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'url',
    ];

    /**
     * Defines what kind of requests you want to receive on a webhook. `ON_END` - only final status at the end, `ON_STATUS_CHANGE` - any change in the scenario.
     * Example: "ON_END"
     */
    public \InfobipSDK\Enums\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\WebhookInfo\TypeEnum $type;
    /**
     * Your webhook URL onto which the request is received.
     * Example: "https://example.com/webhook"
     * Format: uri
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\WebhookInfo\TypeEnum::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
