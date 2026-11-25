<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * OneTapButtonApiData
 */
final class OneTapButtonApiData extends \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\AuthenticationButtonApiData
{
    public const array REQUIRED_FIELDS = [
        'otpType',
    ];

    protected const array VALIDATION = [
        'autofillText' => [
            'minLength' => 0,
            'maxLength' => 25,
        ],
        'packageName' => [
            'minLength' => 1,
        ],
        'signatureHash' => [
            'minLength' => 11,
            'maxLength' => 11,
        ],
        'text' => [
            'minLength' => 0,
            'maxLength' => 25,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * One-tap button text. WhatsApp will use default value if not provided.
     */
    public string $autofillText {
        set {
            $this->assigning('autofillText', $value);
            $this->autofillText = $value;
        }
    }
    /**
     * Android app's package name.
     */
    public string $packageName {
        set {
            $this->assigning('packageName', $value);
            $this->packageName = $value;
        }
    }
    /**
     * App signing key hash.
     */
    public string $signatureHash {
        set {
            $this->assigning('signatureHash', $value);
            $this->signatureHash = $value;
        }
    }
    /**
     * When unable to validate a handshake the authentication template message will display a copy code button with this text instead. WhatsApp will use default value if not provided.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'autofillText' => is_string($value) ? $this->autofillText = $value : parent::assignMember($name, $value),
            'packageName' => is_string($value) ? $this->packageName = $value : parent::assignMember($name, $value),
            'signatureHash' => is_string($value) ? $this->signatureHash = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
