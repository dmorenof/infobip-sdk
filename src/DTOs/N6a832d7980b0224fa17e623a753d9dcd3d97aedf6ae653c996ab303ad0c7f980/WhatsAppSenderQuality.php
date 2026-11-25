<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980;

/**
 * WhatsAppSenderQuality
 *
 * List of the quality information related to specific senders.
 */
final class WhatsAppSenderQuality extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'currentLimit',
        'qualityRating',
        'sender',
        'status',
    ];

    public \InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\WhatsAppSenderLimit $currentLimit;
    /**
     * Last modification date.
     * Example: "2023-02-18T08:12:26.422Z"
     * Format: date-time
     */
    public string $lastUpdated;
    public \InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\WhatsAppSenderQualityRating $qualityRating;
    /**
     * Sender to whom the information refers.
     * Example: "447796344125"
     */
    public string $sender;
    public \InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\WhatsAppSenderStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currentLimit' => is_string($value) ? $this->currentLimit = \InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\WhatsAppSenderLimit::from($value) : parent::assignMember($name, $value),
            'lastUpdated' => is_string($value) ? $this->lastUpdated = $value : parent::assignMember($name, $value),
            'qualityRating' => is_string($value) ? $this->qualityRating = \InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\WhatsAppSenderQualityRating::from($value) : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\WhatsAppSenderStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
