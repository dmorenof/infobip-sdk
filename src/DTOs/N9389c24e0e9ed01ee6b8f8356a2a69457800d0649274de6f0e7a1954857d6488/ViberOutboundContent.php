<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488;

/**
 * ViberOutboundContent
 *
 * Message content.
 */
class ViberOutboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488.ViberOutboundCarouselContent' => 'InfobipSDK\\DTOs\\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\\ViberOutboundCarouselContent',
    '9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488.ViberOutboundFileContent' => 'InfobipSDK\\DTOs\\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\\ViberOutboundFileContent',
    '9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488.ViberOutboundImageContent' => 'InfobipSDK\\DTOs\\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\\ViberOutboundImageContent',
    '9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488.ViberOutboundQuickReplyContent' => 'InfobipSDK\\DTOs\\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\\ViberOutboundQuickReplyContent',
    '9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488.ViberOutboundTextContent' => 'InfobipSDK\\DTOs\\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\\ViberOutboundTextContent',
    '9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488.ViberOutboundTransactionalTemplateContent' => 'InfobipSDK\\DTOs\\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\\ViberOutboundTransactionalTemplateContent',
    '9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488.ViberOutboundVideoContent' => 'InfobipSDK\\DTOs\\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\\ViberOutboundVideoContent',
    'CAROUSEL' => 'InfobipSDK\\DTOs\\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\\ViberOutboundCarouselContent',
    'FILE' => 'InfobipSDK\\DTOs\\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\\ViberOutboundFileContent',
    'IMAGE' => 'InfobipSDK\\DTOs\\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\\ViberOutboundImageContent',
    'QUICK_REPLY' => 'InfobipSDK\\DTOs\\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\\ViberOutboundQuickReplyContent',
    'TEMPLATE' => 'InfobipSDK\\DTOs\\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\\ViberOutboundTransactionalTemplateContent',
    'TEXT' => 'InfobipSDK\\DTOs\\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\\ViberOutboundTextContent',
    'VIDEO' => 'InfobipSDK\\DTOs\\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\\ViberOutboundVideoContent',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ViberOutboundContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ViberOutboundContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
