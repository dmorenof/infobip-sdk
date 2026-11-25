<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0e82c38c2cac57841ec8a3a6ca825965cdf7afbcdea80ae147c9d99f5ab3a8c3;

/**
 * WebhookEventPayload
 */
final class WebhookEventPayload extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\CallDetails $callDetails;
    /**
     * Id of the call link configuration used.
     */
    public string $callLinkConfigId;
    /**
     * Id of the used call link.
     */
    public string $callLinkId;
    /**
     * Custom attributes sent in a call once it has started.
     */
    public \InfobipSDK\DTOs\N0e82c38c2cac57841ec8a3a6ca825965cdf7afbcdea80ae147c9d99f5ab3a8c3\WebhookEventPayload\CustomDataMap $customData;
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\ErrorCode $errorCode;
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\WebhookRecording $recording;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callLinkConfigId' => is_string($value) ? $this->callLinkConfigId = $value : parent::assignMember($name, $value),
            'callLinkId' => is_string($value) ? $this->callLinkId = $value : parent::assignMember($name, $value),
            'errorCode' => $value instanceof \stdClass ? $this->errorCode = new \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\ErrorCode($value) : parent::assignMember($name, $value),
            'recording' => $value instanceof \stdClass ? $this->recording = new \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\WebhookRecording($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
