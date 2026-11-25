<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Eb583710b0e1739c1b6da279daf56e71bef92e0a50c90d88ff2c7fea69527204;

/**
 * ExtractionWebhookRequest
 */
final class ExtractionWebhookRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'data',
        'partnerReference',
        'sessionId',
    ];

    public \InfobipSDK\DTOs\Eb583710b0e1739c1b6da279daf56e71bef92e0a50c90d88ff2c7fea69527204\ExtractionWebhookData $data;
    /**
     * Your identifier of the end user performing a scenario sent in the initial request.
     * Example: "MyRef-jqhof"
     */
    public string $partnerReference;
    /**
     * Unique session identifier.
     * Example: "efc373be-ab6d-4c63-b798-1f65b7b4b2b3"
     */
    public string $sessionId;
    /**
     * Current session status.
     * Example: "SUCCESS"
     */
    public \InfobipSDK\Enums\Eb583710b0e1739c1b6da279daf56e71bef92e0a50c90d88ff2c7fea69527204\ExtractionWebhookRequest\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'data' => $value instanceof \stdClass ? $this->data = new \InfobipSDK\DTOs\Eb583710b0e1739c1b6da279daf56e71bef92e0a50c90d88ff2c7fea69527204\ExtractionWebhookData($value) : parent::assignMember($name, $value),
            'partnerReference' => is_string($value) ? $this->partnerReference = $value : parent::assignMember($name, $value),
            'sessionId' => is_string($value) ? $this->sessionId = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\Eb583710b0e1739c1b6da279daf56e71bef92e0a50c90d88ff2c7fea69527204\ExtractionWebhookRequest\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
