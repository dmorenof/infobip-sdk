<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

/**
 * binary content
 */
final class SmsBinaryMessageContent extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'dataCoding' => [
            'format' => 'int32',
        ],
        'esmClass' => [
            'format' => 'int32',
        ],
        'hex' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Binary content data coding. The default value is (`0`) for GSM7. Example: (`8`) for  Unicode data.
     * Example: 8
     * Format: int32
     */
    public int $dataCoding {
        set {
            $this->assigning('dataCoding', $value);
            $this->dataCoding = $value;
        }
    }
    /**
     * “Esm_class” parameter. Indicate special message attributes associated with the SMS. Default value is (`0`).
     * Format: int32
     */
    public int $esmClass {
        set {
            $this->assigning('esmClass', $value);
            $this->esmClass = $value;
        }
    }
    /**
     * Hexadecimal string. This is the representation of your binary data. Two hex digits represent one byte. They should be separated by the space character.
     * Example: "48 65 6c 6c 6f"
     */
    public string $hex {
        set {
            $this->assigning('hex', $value);
            $this->hex = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dataCoding' => is_int($value) ? $this->dataCoding = $value : parent::assignMember($name, $value),
            'esmClass' => is_int($value) ? $this->esmClass = $value : parent::assignMember($name, $value),
            'hex' => is_string($value) ? $this->hex = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
