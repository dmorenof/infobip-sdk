<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed;

/**
 * CatalogRecordListItemResponse
 *
 * The list of the results for this page.
 */
final class CatalogRecordListItemResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'name',
        'scope',
        'tags',
        'type',
    ];

    protected const array VALIDATION = [
        'tags' => [
            'uniqueItems' => true,
        ],
    ];

    public \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentSource $contentSource;
    /**
     * MIME type of attachment. Present only for attachments.
     * Example: "application/pdf"
     */
    public ?string $contentType;
    /**
     * Description or content excerpt of the article or attachment.
     * Example: "This guide covers the basics of sending SMS messages via the Infobip API."
     */
    public ?string $description;
    /**
     * Unique identifier of the article or attachment.
     * Example: "3fa85f64-5717-4562-b3fc-2c963f66afa6"
     * Format: uuid
     */
    public string $id;
    /**
     * Name of the article or attachment.
     * Example: "Getting Started with SMS API"
     */
    public string $name;
    public \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentScope $scope;
    /**
     * Size of attachment in bytes. Present only for attachments.
     * Example: 1048576
     * Format: int64
     */
    public ?int $sizeInBytes;
    /**
     * Tags assigned to the record.
     * Example: ["sms","api"]
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $tags {
        set {
            $this->assigning('tags', $value);
            $this->tags = $value;
        }
    }
    public \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\InternalType $type;
    /**
     * URL for external content to open or download.
     * Example: "https://example.com/document.pdf"
     */
    public ?string $url;
    public \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentVisibility $visibility;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contentSource' => is_string($value) ? $this->contentSource = \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentSource::from($value) : parent::assignMember($name, $value),
            'contentType' => $value === null || is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'scope' => is_string($value) ? $this->scope = \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentScope::from($value) : parent::assignMember($name, $value),
            'sizeInBytes' => $value === null || is_int($value) ? $this->sizeInBytes = $value : parent::assignMember($name, $value),
            'tags' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->tags = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\InternalType::from($value) : parent::assignMember($name, $value),
            'url' => $value === null || is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            'visibility' => is_string($value) ? $this->visibility = \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentVisibility::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
