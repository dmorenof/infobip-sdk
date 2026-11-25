<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * MmsOutboundSegment
 *
 * Content of the message being sent.
 */
class MmsOutboundSegment extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        'LINK' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\MmsOutboundLinkSegment',
        'SMIL' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\MmsOutboundSmilSegment',
        'TEXT' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\MmsOutboundTextSegment',
        'UPLOADED_REFERENCE' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\MmsOutboundUploadedReferenceSegment',
        'b839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62.MmsOutboundLinkSegment' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\MmsOutboundLinkSegment',
        'b839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62.MmsOutboundSmilSegment' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\MmsOutboundSmilSegment',
        'b839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62.MmsOutboundTextSegment' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\MmsOutboundTextSegment',
        'b839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62.MmsOutboundUploadedReferenceSegment' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\MmsOutboundUploadedReferenceSegment',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\MmsOutboundSegmentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\MmsOutboundSegmentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
