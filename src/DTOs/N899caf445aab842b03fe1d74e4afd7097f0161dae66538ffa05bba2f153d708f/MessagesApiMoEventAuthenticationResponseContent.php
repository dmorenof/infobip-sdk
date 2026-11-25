<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMoEventAuthenticationResponseContent
 */
final class MessagesApiMoEventAuthenticationResponseContent extends \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMoEventContent
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Authentication code.
     */
    public string $authCode;
    /**
     * Error in case of unsuccessful authentication.
     */
    public string $error;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authCode' => is_string($value) ? $this->authCode = $value : parent::assignMember($name, $value),
            'error' => is_string($value) ? $this->error = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
