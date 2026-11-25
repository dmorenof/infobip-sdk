<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb;

/**
 * BusinessFormGeneralButton
 */
final class BusinessFormGeneralButton extends \InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\GeneralButton
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'businessFormId' => [
        'maximum' => 99999999,
        'format' => 'int32',
    ],
    'name' => [
        'minLength' => 1,
        'maxLength' => 14,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * ID of a template business form.
     * Format: int32
     */
    public int $businessFormId {
        set {
            $this->assigning('businessFormId', $value);
            $this->businessFormId = $value;
        }
    }
    /**
     * Template button name. Must match the name of the registered `BUSINESS_FORM` button.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'businessFormId' => is_int($value) ? $this->businessFormId = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
