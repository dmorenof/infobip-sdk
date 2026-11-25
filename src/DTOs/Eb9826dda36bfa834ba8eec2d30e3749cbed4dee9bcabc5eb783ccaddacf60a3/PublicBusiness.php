<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3;

/**
 * PublicBusiness
 */
final class PublicBusiness extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'businessId',
        'city',
        'country',
        'industry',
        'legalName',
        'numberOfEmployees',
        'primaryName',
        'registered',
        'registeredTns',
        'status',
        'updated',
        'website',
    ];

    protected const array VALIDATION = [
        'registeredTns' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Unique business identifier (UUID).
     * Example: "a1b2c3d4-e5f6-7890-abcd-ef1234567890"
     * Format: uuid
     */
    public string $businessId;
    /**
     * City name.
     * Example: "San Francisco"
     */
    public string $city;
    public \InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicContact $contact;
    /**
     * Country code in [ISO-3166-1 alpha-2](https://en.wikipedia.org/wiki/List_of_ISO_3166_country_codes) format.
     * Example: "US"
     */
    public string $country;
    /**
     * DUNS number.
     * Example: "123456789"
     */
    public string $dunsNumber;
    /**
     * EIN (US) or VAT number.
     * Example: "12-3456789"
     */
    public string $einVatNumber;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicHiyaIndustry $industry;
    /**
     * Legal name of the business.
     * Example: "Example Corp"
     */
    public string $legalName;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicHiyaNumberOfEmployees $numberOfEmployees;
    /**
     * Postal/ZIP code.
     * Example: "94105"
     */
    public string $postcode;
    /**
     * Primary/display name of the business.
     * Example: "Example"
     */
    public string $primaryName;
    /**
     * State/province.
     * Example: "CA"
     */
    public string $region;
    /**
     * Date and time when the business was registered.
     * Example: "2026-07-15T10:30:00Z"
     * Format: date-time
     */
    public string $registered;
    /**
     * Number of phone numbers registered under this business.
     * Example: 15
     * Format: int32
     */
    public int $registeredTns {
        set {
            $this->assigning('registeredTns', $value);
            $this->registeredTns = $value;
        }
    }
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicHiyaBusinessStatus $status;
    /**
     * Street address line 1.
     * Example: "123 Main St"
     */
    public string $streetAddressLine1;
    /**
     * Street address line 2.
     * Example: "Suite 100"
     */
    public string $streetAddressLine2;
    /**
     * Date and time when the business was last updated.
     * Example: "2026-07-15T10:35:00Z"
     * Format: date-time
     */
    public string $updated;
    /**
     * Business website URL.
     * Example: "https://example.com"
     */
    public string $website;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'businessId' => is_string($value) ? $this->businessId = $value : parent::assignMember($name, $value),
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'contact' => $value instanceof \stdClass ? $this->contact = new \InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicContact($value) : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'dunsNumber' => is_string($value) ? $this->dunsNumber = $value : parent::assignMember($name, $value),
            'einVatNumber' => is_string($value) ? $this->einVatNumber = $value : parent::assignMember($name, $value),
            'industry' => is_string($value) ? $this->industry = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicHiyaIndustry::from($value) : parent::assignMember($name, $value),
            'legalName' => is_string($value) ? $this->legalName = $value : parent::assignMember($name, $value),
            'numberOfEmployees' => is_string($value) ? $this->numberOfEmployees = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicHiyaNumberOfEmployees::from($value) : parent::assignMember($name, $value),
            'postcode' => is_string($value) ? $this->postcode = $value : parent::assignMember($name, $value),
            'primaryName' => is_string($value) ? $this->primaryName = $value : parent::assignMember($name, $value),
            'region' => is_string($value) ? $this->region = $value : parent::assignMember($name, $value),
            'registered' => is_string($value) ? $this->registered = $value : parent::assignMember($name, $value),
            'registeredTns' => is_int($value) ? $this->registeredTns = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicHiyaBusinessStatus::from($value) : parent::assignMember($name, $value),
            'streetAddressLine1' => is_string($value) ? $this->streetAddressLine1 = $value : parent::assignMember($name, $value),
            'streetAddressLine2' => is_string($value) ? $this->streetAddressLine2 = $value : parent::assignMember($name, $value),
            'updated' => is_string($value) ? $this->updated = $value : parent::assignMember($name, $value),
            'website' => is_string($value) ? $this->website = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
