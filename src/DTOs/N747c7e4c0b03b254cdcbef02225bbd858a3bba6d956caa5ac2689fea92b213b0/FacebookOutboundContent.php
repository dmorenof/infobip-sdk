<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0;

/**
 * FacebookOutboundContent
 *
 * Message content.
 */
class FacebookOutboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0.FacebookOutboundAudioContent' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundAudioContent',
    '747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0.FacebookOutboundCommentContent' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundCommentContent',
    '747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0.FacebookOutboundDocumentContent' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundDocumentContent',
    '747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0.FacebookOutboundImageContent' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundImageContent',
    '747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0.FacebookOutboundLocationContent' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundLocationContent',
    '747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0.FacebookOutboundMarketingMessageContent' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundMarketingMessageContent',
    '747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0.FacebookOutboundOptInFollowupContent' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundOptInFollowupContent',
    '747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0.FacebookOutboundPostContent' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundPostContent',
    '747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0.FacebookOutboundSenderActionContent' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundSenderActionContent',
    '747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0.FacebookOutboundTemplateContent' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundTemplateContent',
    '747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0.FacebookOutboundTextContent' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundTextContent',
    '747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0.FacebookOutboundUtilityMessageContent' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundUtilityMessageContent',
    '747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0.FacebookOutboundVideoContent' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundVideoContent',
    'AUDIO' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundAudioContent',
    'COMMENT' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundCommentContent',
    'DOCUMENT' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundDocumentContent',
    'IMAGE' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundImageContent',
    'LOCATION' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundLocationContent',
    'MARKETING_MESSAGE' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundMarketingMessageContent',
    'OPT_IN_FOLLOWUP' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundOptInFollowupContent',
    'POST' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundPostContent',
    'SENDER_ACTION' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundSenderActionContent',
    'TEMPLATE' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundTemplateContent',
    'TEXT' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundTextContent',
    'UTILITY' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundUtilityMessageContent',
    'VIDEO' => 'InfobipSDK\\DTOs\\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\\FacebookOutboundVideoContent',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\FacebookOutboundContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\FacebookOutboundContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
