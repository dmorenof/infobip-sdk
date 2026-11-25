<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0;

/**
 * FacebookOutboundMarketingMessageAllowedContent
 */
class FacebookOutboundMarketingMessageAllowedContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0.FacebookOutboundMarketingTemplateContent' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundMarketingTemplateContent',
    '747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0.FacebookOutboundMarketingTextContent' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundMarketingTextContent',
    'TEMPLATE' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundMarketingTemplateContent',
    'TEXT' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundMarketingTextContent',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\FacebookOutboundMarketingMessageAllowedContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\FacebookOutboundMarketingMessageAllowedContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
