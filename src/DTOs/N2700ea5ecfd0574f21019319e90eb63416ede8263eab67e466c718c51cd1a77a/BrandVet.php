<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * BrandVet
 *
 * The list of the results for this page.
 */
final class BrandVet extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'score' => [
            'format' => 'int32',
        ],
    ];

    protected const array READ_ONLY_FIELDS = [
        'brandId',
        'enhancedVettedDate',
        'imported',
        'score',
        'vetId',
        'vettedDate',
    ];

    /**
     * The ID of the brand the vet belongs to.
     * Format: uuid
     */
    public string $brandId;
    /**
     * The date the vet was completed if it was an enhanced vet or if it was converted to enhanced from a standard vet.
     * Format: date-time
     */
    public string $enhancedVettedDate;
    /**
     * Showing is brand vet imported.
     */
    public bool $imported;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\VettingProvider $importedVetProvider;
    /**
     * The score the brand received after being vetted.
     * Format: int32
     */
    public int $score {
        set {
            $this->assigning('score', $value);
            $this->score = $value;
        }
    }
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandVetStatus $status;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\VettingType $type;
    /**
     * The ID of the vet record.
     * Format: uuid
     */
    public string $vetId;
    /**
     * The date the vet was completed.
     * Format: date-time
     */
    public string $vettedDate;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'brandId' => is_string($value) ? $this->brandId = $value : parent::assignMember($name, $value),
            'enhancedVettedDate' => is_string($value) ? $this->enhancedVettedDate = $value : parent::assignMember($name, $value),
            'imported' => is_bool($value) ? $this->imported = $value : parent::assignMember($name, $value),
            'importedVetProvider' => is_string($value) ? $this->importedVetProvider = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\VettingProvider::from($value) : parent::assignMember($name, $value),
            'score' => is_int($value) ? $this->score = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandVetStatus::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\VettingType::from($value) : parent::assignMember($name, $value),
            'vetId' => is_string($value) ? $this->vetId = $value : parent::assignMember($name, $value),
            'vettedDate' => is_string($value) ? $this->vettedDate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
