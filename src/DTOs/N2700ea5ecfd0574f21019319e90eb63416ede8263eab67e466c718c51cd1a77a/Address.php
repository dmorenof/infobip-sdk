<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * Address
 *
 * The address of the brand.
 */
final class Address extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'city' => [
            'minLength' => 1,
            'maxLength' => 50,
        ],
        'state' => [
            'minLength' => 1,
            'maxLength' => 20,
        ],
        'street' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
        'zipCode' => [
            'minLength' => 1,
            'maxLength' => 10,
        ],
    ];

    /**
     * The city in which the brand is located.
     */
    public string $city {
        set {
            $this->assigning('city', $value);
            $this->city = $value;
        }
    }
    /**
     * State or province. For the United States, please use 2 character codes. E.g. 'CA' for California.
     */
    public string $state {
        set {
            $this->assigning('state', $value);
            $this->state = $value;
        }
    }
    /**
     * The street address for the brand.
     */
    public string $street {
        set {
            $this->assigning('street', $value);
            $this->street = $value;
        }
    }
    /**
     * The zipcode in which the brand is located.
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
            'state' => is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            'street' => is_string($value) ? $this->street = $value : parent::assignMember($name, $value),
            'zipCode' => is_string($value) ? $this->zipCode = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
