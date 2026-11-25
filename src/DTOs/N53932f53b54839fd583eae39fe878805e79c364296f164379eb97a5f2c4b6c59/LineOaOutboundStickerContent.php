<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * LineOaOutboundStickerContent
 */
final class LineOaOutboundStickerContent extends \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaOutboundContent
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'packageId' => [
            'minLength' => 1,
        ],
        'stickerId' => [
            'minLength' => 1,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Package ID of a sticker set provided by LINE. See LINE sticker list for available package and sticker IDs.
     * Example: "446"
     */
    public string $packageId {
        set {
            $this->assigning('packageId', $value);
            $this->packageId = $value;
        }
    }
    /**
     * Sticker ID within the package. See LINE sticker list for available package and sticker IDs.
     * Example: "1988"
     */
    public string $stickerId {
        set {
            $this->assigning('stickerId', $value);
            $this->stickerId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'packageId' => is_string($value) ? $this->packageId = $value : parent::assignMember($name, $value),
            'stickerId' => is_string($value) ? $this->stickerId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
