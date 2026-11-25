<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * Email
 *
 * Array of emails information.
 */
final class Email extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Contact's email.
     */
    public string $email;
    /**
     * Type of the email. Can be `HOME` or `WORK`.
     */
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
