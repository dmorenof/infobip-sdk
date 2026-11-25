<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0;

/**
 * FacebookMtQuickReply
 */
class FacebookMtQuickReply extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0.FacebookMtEmailQuickReply' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookMtEmailQuickReply',
    '747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0.PhoneNumberFacebookMtQuickReply' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\PhoneNumberFacebookMtQuickReply',
    '747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0.TextFacebookMtQuickReply' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\TextFacebookMtQuickReply',
    'EMAIL' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookMtEmailQuickReply',
    'PHONE_NUMBER' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\PhoneNumberFacebookMtQuickReply',
    'TEXT' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\TextFacebookMtQuickReply',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\FacebookMtQuickReplyContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\FacebookMtQuickReplyContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
