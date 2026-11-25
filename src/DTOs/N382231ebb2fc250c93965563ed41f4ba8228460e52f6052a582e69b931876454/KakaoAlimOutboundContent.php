<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454;

/**
 * KakaoAlimOutboundContent
 *
 * Message content.
 */
class KakaoAlimOutboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454.KakaoAlimOutboundTemplateContent' => 'InfobipSDK\\DTOs\\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\\KakaoAlimOutboundTemplateContent',
    'TEMPLATE' => 'InfobipSDK\\DTOs\\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\\KakaoAlimOutboundTemplateContent',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\KakaoAlimOutboundContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\KakaoAlimOutboundContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
