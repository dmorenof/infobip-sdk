<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * RichContentFreeFormBusinessFormButton
 */
final class RichContentFreeFormBusinessFormButton extends \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\RichContentFreeFormButton
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'businessFormKey' => [
        'minLength' => 1,
    ],
    'name' => [
        'minLength' => 1,
        'maxLength' => 8,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * ID of a template business form.
     */
    public string $businessFormKey {
        set {
            $this->assigning('businessFormKey', $value);
            $this->businessFormKey = $value;
        }
    }
    /**
     * Button name. Must match the name of the registered `BUSINESS_FORM` button.
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
            'businessFormKey' => is_string($value) ? $this->businessFormKey = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
