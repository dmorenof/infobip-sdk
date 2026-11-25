<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * GovernmentBrand
 */
final class GovernmentBrand extends \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\Brand
{
    public const array REQUIRED_FIELDS = [
        'name',
        'type',
        'website',
    ];

    protected const array VALIDATION = [
        'businessContactFirstName' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
        'businessContactLastName' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
        'businessDBA' => [
            'minLength' => 0,
            'maxLength' => 500,
        ],
        'countryCode' => [
            'minLength' => 1,
            'maxLength' => 2,
        ],
        'legalName' => [
            'minLength' => 1,
            'maxLength' => 255,
        ],
        'name' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
        'referenceId' => [
            'minLength' => 0,
            'maxLength' => 50,
        ],
        'supportPhone' => [
            'minLength' => 3,
            'maxLength' => 16,
            'pattern' => '\\+?[1-9]\\d{1,14}',
        ],
        'taxId' => [
            'minLength' => 0,
            'maxLength' => 50,
        ],
        'taxIdIssuingCountry' => [
            'minLength' => 1,
            'maxLength' => 2,
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

    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\Address $address;
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BusinessIdentifier $alternateBusinessId;
    /**
     * First name of the primary contact person for the brand or business entity. Used for verification or compliance outreach.
     */
    public string $businessContactFirstName {
        set {
            $this->assigning('businessContactFirstName', $value);
            $this->businessContactFirstName = $value;
        }
    }
    /**
     * Last name of the primary contact person for the brand or business entity.
     */
    public string $businessContactLastName {
        set {
            $this->assigning('businessContactLastName', $value);
            $this->businessContactLastName = $value;
        }
    }
    /**
     * 'Doing Business As' name if different from the legal business name.
     */
    public string $businessDBA {
        set {
            $this->assigning('businessDBA', $value);
            $this->businessDBA = $value;
        }
    }
    /**
     * The country where the brand is located.
     */
    public string $countryCode {
        set {
            $this->assigning('countryCode', $value);
            $this->countryCode = $value;
        }
    }
    /**
     * The legal name of the brand.
     */
    public string $legalName {
        set {
            $this->assigning('legalName', $value);
            $this->legalName = $value;
        }
    }
    /**
     * Unique user defined ID for the brand. While not required, it is recommended to supply a referenceId as the uniqueness constraint will help ensure a brand is not accidentally created multiple times. Subsequent create requests with the same referenceId will be rejected with an error.
     */
    public string $referenceId {
        set {
            $this->assigning('referenceId', $value);
            $this->referenceId = $value;
        }
    }
    /**
     * The business email address to contact about brand compliance issues. Must be a well formed email address that does not include a '=' character.
     */
    public string $supportEmail;
    /**
     * The business phone number to contact about brand compliance issues.
     */
    public string $supportPhone {
        set {
            $this->assigning('supportPhone', $value);
            $this->supportPhone = $value;
        }
    }
    /**
     * The tax identifier for the brand. Not required for sole proprietor brands.
     */
    public string $taxId {
        set {
            $this->assigning('taxId', $value);
            $this->taxId = $value;
        }
    }
    /**
     * The country where tax identifier is issued. If not specified, the value from countryCode will be used.
     */
    public string $taxIdIssuingCountry {
        set {
            $this->assigning('taxIdIssuingCountry', $value);
            $this->taxIdIssuingCountry = $value;
        }
    }
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\Vertical $vertical;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => $value instanceof \stdClass ? $this->address = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\Address($value) : parent::assignMember($name, $value),
            'businessContactFirstName' => is_string($value) ? $this->businessContactFirstName = $value : parent::assignMember($name, $value),
            'businessContactLastName' => is_string($value) ? $this->businessContactLastName = $value : parent::assignMember($name, $value),
            'businessDBA' => is_string($value) ? $this->businessDBA = $value : parent::assignMember($name, $value),
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'legalName' => is_string($value) ? $this->legalName = $value : parent::assignMember($name, $value),
            'referenceId' => is_string($value) ? $this->referenceId = $value : parent::assignMember($name, $value),
            'supportEmail' => is_string($value) ? $this->supportEmail = $value : parent::assignMember($name, $value),
            'supportPhone' => is_string($value) ? $this->supportPhone = $value : parent::assignMember($name, $value),
            'taxId' => is_string($value) ? $this->taxId = $value : parent::assignMember($name, $value),
            'taxIdIssuingCountry' => is_string($value) ? $this->taxIdIssuingCountry = $value : parent::assignMember($name, $value),
            'vertical' => is_string($value) ? $this->vertical = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\Vertical::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
