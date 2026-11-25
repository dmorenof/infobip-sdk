<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c;

/**
 * WebhookCallbackRequest
 *
 * Callback request.
 */
final class WebhookCallbackRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique identifier of the call record, available for both Callback and Status requests.
     */
    public string $correlationId;
    /**
     * Indicates that this callback request is initiated after the `captureDtmf` command is executed. Not present in the first callback request for the call.
     */
    public bool $dtmfCaptured;
    /**
     * Caller phone number.
     */
    public string $from;
    /**
     * Unique identifier for correlation with inbound call, available in Callback and Status requests.
     */
    public string $nmCorrelationId;
    /**
     * Called phone number.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'correlationId' => is_string($value) ? $this->correlationId = $value : parent::assignMember($name, $value),
            'dtmfCaptured' => is_bool($value) ? $this->dtmfCaptured = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'nmCorrelationId' => is_string($value) ? $this->nmCorrelationId = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
