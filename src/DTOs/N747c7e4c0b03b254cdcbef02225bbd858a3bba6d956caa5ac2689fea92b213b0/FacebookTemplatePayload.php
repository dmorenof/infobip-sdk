<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0;

/**
 * FacebookTemplatePayload
 */
class FacebookTemplatePayload extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0.ButtonFacebookTemplatePayload' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\ButtonFacebookTemplatePayload',
    '747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0.GenericFacebookTemplatePayload' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\GenericFacebookTemplatePayload',
    '747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0.MarketingMessageFacebookTemplatePayload' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\MarketingMessageFacebookTemplatePayload',
    '747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0.OptInCarouselFacebookTemplatePayload' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\OptInCarouselFacebookTemplatePayload',
    '747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0.OptInFacebookTemplatePayload' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\OptInFacebookTemplatePayload',
    'BUTTON' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\ButtonFacebookTemplatePayload',
    'GENERIC' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\GenericFacebookTemplatePayload',
    'MARKETING_MESSAGE' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\MarketingMessageFacebookTemplatePayload',
    'OPT_IN' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\OptInFacebookTemplatePayload',
    'OPT_IN_CAROUSEL' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\OptInCarouselFacebookTemplatePayload',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\FacebookTemplatePayloadType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\FacebookTemplatePayloadType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
