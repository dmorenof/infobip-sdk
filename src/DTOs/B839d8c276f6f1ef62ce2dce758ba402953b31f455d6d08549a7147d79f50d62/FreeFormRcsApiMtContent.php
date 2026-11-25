<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * FreeFormRcsApiMtContent
 *
 * Rcs message contents.
 */
class FreeFormRcsApiMtContent extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    'CARD' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\CardRcsApiMtContent',
    'CAROUSEL' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\CarouselRcsApiMtContent',
    'FILE' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\FileRcsApiMtContent',
    'TEXT' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\TextRcsApiMtContent',
    'b839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62.CardRcsApiMtContent' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\CardRcsApiMtContent',
    'b839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62.CarouselRcsApiMtContent' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\CarouselRcsApiMtContent',
    'b839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62.FileRcsApiMtContent' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\FileRcsApiMtContent',
    'b839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62.TextRcsApiMtContent' => 'InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\TextRcsApiMtContent',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\FreeFormRcsApiMtContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\FreeFormRcsApiMtContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
