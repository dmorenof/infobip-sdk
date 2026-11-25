<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99;

/**
 * InboundMessageData
 */
final class InboundMessageData extends \InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\InboundMessageBase
{
    public const array REQUIRED_FIELDS = [];

    protected const array WRITE_ONLY_FIELDS = [
    'contact',
    'from',
    'messageId',
    'price',
    'receivedAt',
    'to',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Information about recipient.
     */
    public \InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\ContactName $contact;
    public \InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\InboundMessage $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contact' => $value instanceof \stdClass ? $this->contact = new \InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\ContactName($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
