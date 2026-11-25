<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessagePaymentBeneficiary
 *
 * Beneficiary of the payment.
 */
final class MessagesApiMessagePaymentBeneficiary extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'firstAddressLine' => [
            'minLength' => 0,
            'maxLength' => 100,
        ],
        'name' => [
            'minLength' => 0,
            'maxLength' => 200,
        ],
        'postalCode' => [
            'pattern' => '^[0-9]{6}$',
        ],
        'secondAddressLine' => [
            'minLength' => 0,
            'maxLength' => 100,
        ],
    ];

    /**
     * City name.
     */
    public string $city;
    public \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessagePaymentBeneficiaryCountry $country;
    /**
     * First address line.
     */
    public string $firstAddressLine {
        set {
            $this->assigning('firstAddressLine', $value);
            $this->firstAddressLine = $value;
        }
    }
    /**
     * Beneficiary's name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Zip code value.
     */
    public string $postalCode {
        set {
            $this->assigning('postalCode', $value);
            $this->postalCode = $value;
        }
    }
    /**
     * Second address line.
     */
    public string $secondAddressLine {
        set {
            $this->assigning('secondAddressLine', $value);
            $this->secondAddressLine = $value;
        }
    }
    /**
     * State name.
     */
    public string $state;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessagePaymentBeneficiaryCountry::from($value) : parent::assignMember($name, $value),
            'firstAddressLine' => is_string($value) ? $this->firstAddressLine = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'postalCode' => is_string($value) ? $this->postalCode = $value : parent::assignMember($name, $value),
            'secondAddressLine' => is_string($value) ? $this->secondAddressLine = $value : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
