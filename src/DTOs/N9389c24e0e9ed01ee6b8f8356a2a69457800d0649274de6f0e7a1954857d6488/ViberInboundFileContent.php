<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488;

/**
 * ViberInboundFileContent
 */
final class ViberInboundFileContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    /**
     * Name of received file.
     */
    public string $fileName;
    /**
     * Description of received file.
     */
    public string $text;
    /**
     * Viber's tracking data from outgoing message that end user replies to. Might be random string of characters if not set explicitly in outgoing message.
     */
    public string $trackingData;
    public \InfobipSDK\Enums\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ViberInboundMessageContentType $type;
    /**
     * URL of received file.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fileName' => is_string($value) ? $this->fileName = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'trackingData' => is_string($value) ? $this->trackingData = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ViberInboundMessageContentType::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
