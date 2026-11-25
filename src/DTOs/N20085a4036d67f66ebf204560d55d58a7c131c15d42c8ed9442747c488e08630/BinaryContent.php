<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

/**
 * BinaryContent
 */
final class BinaryContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'hex',
];

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

    protected const array WRITE_ONLY_FIELDS = [
    'dataCoding',
    'esmClass',
    'hex',
];

    /**
     * Binary content data coding. The default value is (`0`) for GSM7. Example: (`8`) for  Unicode data.
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
     * Hexadecimal string. This is the representation of your binary data. Two hex digits represent one byte. They should be separated by the space character (Example: `0f c2 4a bf 34 13 ba`).
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
