<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * SendSmsData
 */
final class SendSmsData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'from',
        'text',
        'to',
    ];

    /**
     * Represents sender ID and it can be alphanumeric or numeric; alphanumeric sender ID length should be between 3 and 11 characters; numeric sender ID length should be between 3 and 14 characters; the parameter can be constructed using variables
     */
    public string $from;
    /**
     * The text of the message that will be sent.
     */
    public string $text;
    /**
     * Must be a valid E164 MSISDN; the parameter can be constructed using variables
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
