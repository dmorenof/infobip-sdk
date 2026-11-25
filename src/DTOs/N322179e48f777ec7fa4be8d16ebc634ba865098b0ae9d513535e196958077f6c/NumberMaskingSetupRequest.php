<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c;

/**
 * NumberMaskingSetupRequest
 */
final class NumberMaskingSetupRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'callbackUrl',
    'name',
];

    protected const array VALIDATION = [
    'backupCallbackUrl' => [
        'pattern' => '',
    ],
    'backupStatusUrl' => [
        'pattern' => '',
    ],
    'callbackUrl' => [
        'minLength' => 1,
        'pattern' => '',
    ],
    'description' => [
        'pattern' => '[a-zA-Z0-9 ]*',
    ],
    'name' => [
        'minLength' => 1,
        'pattern' => '[a-zA-Z0-9 ]+',
    ],
    'statusUrl' => [
        'pattern' => '',
    ],
];

    /**
     * If callbackUrl is unavailable this one will be called instead.
     */
    public string $backupCallbackUrl {
        set {
            $this->assigning('backupCallbackUrl', $value);
            $this->backupCallbackUrl = $value;
        }
    }
    /**
     * If statusUrl is unavailable this one will be called instead.
     */
    public string $backupStatusUrl {
        set {
            $this->assigning('backupStatusUrl', $value);
            $this->backupStatusUrl = $value;
        }
    }
    /**
     * Client's URL that will be called on each inbound call to related Number masking Voice number in order to get instructions of how to handle incoming calls. Instructions are a result of mapping logic implemented on your side according to your business case.
     */
    public string $callbackUrl {
        set {
            $this->assigning('callbackUrl', $value);
            $this->callbackUrl = $value;
        }
    }
    /**
     * Masking configuration description.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Unique configuration name. Alphanumeric, max length 100.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Client's URL for status report delivery after the call is finished.
     */
    public string $statusUrl {
        set {
            $this->assigning('statusUrl', $value);
            $this->statusUrl = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'backupCallbackUrl' => is_string($value) ? $this->backupCallbackUrl = $value : parent::assignMember($name, $value),
            'backupStatusUrl' => is_string($value) ? $this->backupStatusUrl = $value : parent::assignMember($name, $value),
            'callbackUrl' => is_string($value) ? $this->callbackUrl = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'statusUrl' => is_string($value) ? $this->statusUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
