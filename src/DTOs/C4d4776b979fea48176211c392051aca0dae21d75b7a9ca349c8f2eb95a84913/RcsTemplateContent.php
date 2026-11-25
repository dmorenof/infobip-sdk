<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * RcsTemplateContent
 *
 * Template content.
 */
class RcsTemplateContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        'CARD' => 'InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsTemplateCardContent',
        'CAROUSEL' => 'InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsTemplateCarouselContent',
        'TEXT' => 'InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsTemplateTextContent',
        'TEXT_WITH_PDF' => 'InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsTemplateTextWithPdfContent',
        'c4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913.RcsTemplateCardContent' => 'InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsTemplateCardContent',
        'c4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913.RcsTemplateCarouselContent' => 'InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsTemplateCarouselContent',
        'c4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913.RcsTemplateTextContent' => 'InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsTemplateTextContent',
        'c4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913.RcsTemplateTextWithPdfContent' => 'InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsTemplateTextWithPdfContent',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
