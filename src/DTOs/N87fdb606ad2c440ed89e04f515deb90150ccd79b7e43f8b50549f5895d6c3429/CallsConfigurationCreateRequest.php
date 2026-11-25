<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N87fdb606ad2c440ed89e04f515deb90150ccd79b7e43f8b50549f5895d6c3429;

/**
 * CallsConfigurationCreateRequest
 */
final class CallsConfigurationCreateRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'id' => [
        'minLength' => 1,
        'maxLength' => 128,
        'pattern' => '^[a-zA-Z0-9_-]*$',
    ],
    'name' => [
        'minLength' => 1,
        'maxLength' => 128,
    ],
];

    /**
     * Calls configuration ID. If not provided, system will generate random ID, which will be returned in response.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Calls configuration name.
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
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
