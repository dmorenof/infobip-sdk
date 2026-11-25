<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * NumberResponse
 */
final class NumberResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'applicationId' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
    'entityId' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
];

    /**
     * Indicates whether the number requires additional setup before being used.
     */
    public bool $additionalSetupRequired;
    /**
     * ID of the Application that would be associated with the number.
     * Documentation: https://www.infobip.com/docs/api/platform/application-entity
     */
    public string $applicationId {
        set {
            $this->assigning('applicationId', $value);
            $this->applicationId = $value;
        }
    }
    /**
     * An array of communication channels the number can support.
     */
    public \InfobipSDK\Collections\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumberResponse\CapabilitiesCollection $capabilities;
    /**
     * Number's country code.
     */
    public string $country;
    /**
     * Number's country.
     */
    public string $countryName;
    public \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\EditPermissions $editPermissions;
    /**
     * ID of the Entity that would be associated with the number.
     * Documentation: https://www.infobip.com/docs/api/platform/application-entity
     */
    public string $entityId {
        set {
            $this->assigning('entityId', $value);
            $this->entityId = $value;
        }
    }
    /**
     * Keywords defined for the number.
     */
    public \InfobipSDK\Collections\StringCollection $keywords;
    /**
     * Indicates the network that owns the number.
     */
    public string $network;
    /**
     * Additional information attached to the number. Available only for SHORT_CODE and VIRTUAL_LONG_NUMBER number types.
     */
    public string $note;
    /**
     * The number.
     */
    public string $number;
    /**
     * Unique ID of a number.
     */
    public string $numberKey;
    public \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumberPrice $price;
    public \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\ReservationStatus $reservationStatus;
    /**
     * Indicates whether a number is shared.
     */
    public bool $shared;
    public \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumberType $type;
    public \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\VoiceSetup $voiceSetup;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'additionalSetupRequired' => is_bool($value) ? $this->additionalSetupRequired = $value : parent::assignMember($name, $value),
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'countryName' => is_string($value) ? $this->countryName = $value : parent::assignMember($name, $value),
            'editPermissions' => $value instanceof \stdClass ? $this->editPermissions = new \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\EditPermissions($value) : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'keywords' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->keywords = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'network' => is_string($value) ? $this->network = $value : parent::assignMember($name, $value),
            'note' => is_string($value) ? $this->note = $value : parent::assignMember($name, $value),
            'number' => is_string($value) ? $this->number = $value : parent::assignMember($name, $value),
            'numberKey' => is_string($value) ? $this->numberKey = $value : parent::assignMember($name, $value),
            'price' => $value instanceof \stdClass ? $this->price = new \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumberPrice($value) : parent::assignMember($name, $value),
            'reservationStatus' => is_string($value) ? $this->reservationStatus = \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\ReservationStatus::from($value) : parent::assignMember($name, $value),
            'shared' => is_bool($value) ? $this->shared = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumberType::from($value) : parent::assignMember($name, $value),
            'voiceSetup' => $value instanceof \stdClass ? $this->voiceSetup = new \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\VoiceSetup($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
