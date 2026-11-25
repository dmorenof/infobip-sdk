<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * ErrorDto
 *
 * Error object describing occurred error, present only if an error has occurred.
 */
final class ErrorDto extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
];

    /**
     * Description of occurred error for easier error comprehension.<br/>
     * Response Status and Error Codes documentation page, section [Mobile Identity Error Codes](https://www.infobip.com/docs/essentials/response-status-and-error-codes#mobile-identity-error-codes),
     * contains descriptions of all errors that can occur on Mobile Identity platform.
     */
    public string $description;
    /**
     * Unique identifier of occurred error on Infobip platform.<br/>
     * Response Status and Error Codes documentation page, section [Mobile Identity Error Codes](https://www.infobip.com/docs/essentials/response-status-and-error-codes#mobile-identity-error-codes),
     * contains all available Mobile Identity error IDs.
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Unique value of occurred error under Mobile Identity product.<br/>
     * Response Status and Error Codes documentation page, section [Mobile Identity Error Codes](https://www.infobip.com/docs/essentials/response-status-and-error-codes#mobile-identity-error-codes),
     * contains all available Mobile Identity error codes.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
