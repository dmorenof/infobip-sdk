<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * RcsSenderBaseData
 *
 * The list of the results for this page.
 */
final class RcsSenderBaseData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'bannerUrl',
        'billingCategory',
        'brand',
        'color',
        'description',
        'displayName',
        'hostingRegion',
        'logoUrl',
        'senderName',
        'senderStatus',
        'updatedAt',
        'useCase',
    ];

    protected const array VALIDATION = [
        'bannerUrl' => [
            'maxLength' => 2048,
        ],
        'logoUrl' => [
            'maxLength' => 2048,
        ],
    ];

    /**
     * URL of the banner image associated with the sender and displayed to the user on mobile device. It must be in JPG / JPEG or PNG format and it must be in 1440 x 448 resolution (width x height). Maximum 204,800 bytes. Maximum URL length is 2048 characters.
     */
    public string $bannerUrl {
        set {
            $this->assigning('bannerUrl', $value);
            $this->bannerUrl = $value;
        }
    }
    public \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsSenderBillingCategory $billingCategory;
    public \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsBrand $brand;
    /**
     * Theme color of the sender that is visible to the user on mobile device. Must be in hex format and contrast ratio must be at least 4.5:1 for white.
     */
    public string $color;
    /**
     * The description of the sender displayed to the user on mobile device.
     */
    public string $description;
    /**
     * The name of the sender displayed to the user on mobile device.
     */
    public string $displayName;
    /**
     * Google Agent ID associated with this sender.
     */
    public string $googleAgentId;
    public \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\HostingRegion $hostingRegion;
    /**
     * URL of the logo image associated with the sender and displayed to the user on mobile device. It must be in JPG / JPEG or PNG format and it must be in 224 x 224 resolution (width x height). Maximum 51,200 bytes. Maximum URL length is 2048 characters.
     */
    public string $logoUrl {
        set {
            $this->assigning('logoUrl', $value);
            $this->logoUrl = $value;
        }
    }
    /**
     * Unique identifier of Sender entity for RCS channel within Infobip platform.
     */
    public string $senderName;
    public \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsSenderStatus $senderStatus;
    /**
     * Timestamp when sender has been updated last time. (ISO 8601-style timestamp)
     * Format: date-time
     */
    public string $updatedAt;
    public \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsUseCase $useCase;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bannerUrl' => is_string($value) ? $this->bannerUrl = $value : parent::assignMember($name, $value),
            'billingCategory' => is_string($value) ? $this->billingCategory = \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsSenderBillingCategory::from($value) : parent::assignMember($name, $value),
            'brand' => $value instanceof \stdClass ? $this->brand = new \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsBrand($value) : parent::assignMember($name, $value),
            'color' => is_string($value) ? $this->color = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'googleAgentId' => is_string($value) ? $this->googleAgentId = $value : parent::assignMember($name, $value),
            'hostingRegion' => is_string($value) ? $this->hostingRegion = \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\HostingRegion::from($value) : parent::assignMember($name, $value),
            'logoUrl' => is_string($value) ? $this->logoUrl = $value : parent::assignMember($name, $value),
            'senderName' => is_string($value) ? $this->senderName = $value : parent::assignMember($name, $value),
            'senderStatus' => is_string($value) ? $this->senderStatus = \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsSenderStatus::from($value) : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            'useCase' => is_string($value) ? $this->useCase = \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsUseCase::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
