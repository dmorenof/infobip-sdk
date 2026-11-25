<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3;

/**
 * PublicCreateBusinessRequest
 */
final class PublicCreateBusinessRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'authorized',
        'city',
        'contact',
        'country',
        'industry',
        'legalName',
        'numberOfEmployees',
        'primaryName',
        'website',
    ];

    protected const array VALIDATION = [
        'legalName' => [
            'minLength' => 0,
            'maxLength' => 150,
        ],
        'primaryName' => [
            'minLength' => 0,
            'maxLength' => 100,
        ],
    ];

    /**
     * Confirmation that the caller is authorized to register this business.
     * Example: true
     */
    public bool $authorized;
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
    public string $legalName {
        set {
            $this->assigning('legalName', $value);
            $this->legalName = $value;
        }
    }
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
    public string $primaryName {
        set {
            $this->assigning('primaryName', $value);
            $this->primaryName = $value;
        }
    }
    /**
     * State/province or territory. Required for US and CA businesses, using the two-character state code (e.g. NY, WA) or territory code (e.g. ON, BC). Ignored for all other countries.
     * Example: "NY"
     */
    public string $region;
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
     * Business website URL.
     * Example: "https://example.com"
     */
    public string $website;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authorized' => is_bool($value) ? $this->authorized = $value : parent::assignMember($name, $value),
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
            'streetAddressLine1' => is_string($value) ? $this->streetAddressLine1 = $value : parent::assignMember($name, $value),
            'streetAddressLine2' => is_string($value) ? $this->streetAddressLine2 = $value : parent::assignMember($name, $value),
            'website' => is_string($value) ? $this->website = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
