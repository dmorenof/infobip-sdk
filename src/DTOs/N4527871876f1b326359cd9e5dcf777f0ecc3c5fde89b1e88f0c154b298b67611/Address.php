<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * Address
 *
 * Address of an Emergency Service.
 */
final class Address extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'city',
        'countryCode',
        'name',
        'stateCode',
        'streetName',
        'streetNumber',
        'zipCode',
    ];

    protected const array VALIDATION = [
        'city' => [
            'minLength' => 0,
            'maxLength' => 50,
        ],
        'countryCode' => [
            'minLength' => 2,
            'maxLength' => 2,
        ],
        'name' => [
            'minLength' => 0,
            'maxLength' => 100,
        ],
        'stateCode' => [
            'minLength' => 2,
            'maxLength' => 2,
        ],
        'streetName' => [
            'minLength' => 0,
            'maxLength' => 100,
        ],
        'streetNumber' => [
            'minLength' => 0,
            'maxLength' => 20,
        ],
        'zipCode' => [
            'minLength' => 5,
            'maxLength' => 10,
        ],
    ];

    /**
     * Emergency Service address city.
     */
    public string $city {
        set {
            $this->assigning('city', $value);
            $this->city = $value;
        }
    }
    /**
     * Emergency Service address country code.
     */
    public string $countryCode {
        set {
            $this->assigning('countryCode', $value);
            $this->countryCode = $value;
        }
    }
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Direction $direction;
    /**
     * Emergency Service address name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Emergency Service address state code.
     */
    public string $stateCode {
        set {
            $this->assigning('stateCode', $value);
            $this->stateCode = $value;
        }
    }
    /**
     * Emergency Service address street.
     */
    public string $streetName {
        set {
            $this->assigning('streetName', $value);
            $this->streetName = $value;
        }
    }
    /**
     * Emergency Service address street number.
     */
    public string $streetNumber {
        set {
            $this->assigning('streetNumber', $value);
            $this->streetNumber = $value;
        }
    }
    /**
     * Emergency Service address suite.
     */
    public string $suite;
    /**
     * Emergency Service address zip code.
     */
    public string $zipCode {
        set {
            $this->assigning('zipCode', $value);
            $this->zipCode = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'direction' => is_string($value) ? $this->direction = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Direction::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'stateCode' => is_string($value) ? $this->stateCode = $value : parent::assignMember($name, $value),
            'streetName' => is_string($value) ? $this->streetName = $value : parent::assignMember($name, $value),
            'streetNumber' => is_string($value) ? $this->streetNumber = $value : parent::assignMember($name, $value),
            'suite' => is_string($value) ? $this->suite = $value : parent::assignMember($name, $value),
            'zipCode' => is_string($value) ? $this->zipCode = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
