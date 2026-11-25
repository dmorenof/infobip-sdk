<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * InvokerInfo
 *
 * Information about the user that triggered the event.
 */
final class InvokerInfo extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Email address of the invoker.
     * Example: "jane.doe&#64;example.com"
     */
    public string $email;
    /**
     * Unique identifier of the invoker.
     * Example: "invokerId"
     */
    public string $id;
    /**
     * Name of the invoker.
     * Example: "Jane Doe"
     */
    public string $name;
    /**
     * Type of the invoker who triggered the event.
     * Example: "client"
     */
    public \InfobipSDK\Enums\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\InvokerInfo\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\InvokerInfo\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
