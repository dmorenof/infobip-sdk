<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * Brand
 */
class Brand extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
    'type',
    'website',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a.GovernmentBrand' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\GovernmentBrand',
    '2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a.NonProfitBrand' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\NonProfitBrand',
    '2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a.PrivateCompanyBrand' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\PrivateCompanyBrand',
    '2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a.PublicCompanyBrand' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\PublicCompanyBrand',
    '2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a.TollFreeBrand' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\TollFreeBrand',
    'TENDLC_GOVERNMENT' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\GovernmentBrand',
    'TENDLC_NON_PROFIT' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\NonProfitBrand',
    'TENDLC_PRIVATE_COMPANY' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\PrivateCompanyBrand',
    'TENDLC_PUBLIC_COMPANY' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\PublicCompanyBrand',
    'TOLL_FREE_NUMBER' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\TollFreeBrand',
];

    protected const array VALIDATION = [
    'name' => [
        'minLength' => 1,
        'maxLength' => 100,
    ],
    'website' => [
        'minLength' => 11,
        'maxLength' => 100,
        'pattern' => '',
    ],
];

    protected const array READ_ONLY_FIELDS = [
    'createdDate',
    'id',
    'lastModifiedDate',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * CPaaS X property identifying an application, a use case or an environment on your system. It should only be set if you are using CPaaS X Applications with your traffic.
     */
    public string $applicationId;
    /**
     * The date and time when the brand was created.
     * Format: date-time
     */
    public string $createdDate;
    /**
     * CPaaS X property identifying an unique actor on your system. Should only be set if you are using CPaaS X Applications with your traffic.
     */
    public string $entityId;
    /**
     * The identifier for the brand.
     * Format: uuid
     */
    public string $id;
    /**
     * The date and time when the brand was last modified.
     * Format: date-time
     */
    public string $lastModifiedDate;
    /**
     * The customer defined name of brand.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandStage $stage;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandType $type;
    /**
     * The website for the brand.
     */
    public string $website {
        set {
            $this->assigning('website', $value);
            $this->website = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'createdDate' => is_string($value) ? $this->createdDate = $value : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'lastModifiedDate' => is_string($value) ? $this->lastModifiedDate = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'stage' => is_string($value) ? $this->stage = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandStage::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandType::from($value) : parent::assignMember($name, $value),
            'website' => is_string($value) ? $this->website = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
