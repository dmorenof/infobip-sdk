<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * VoiceActionDetails
 *
 * Voice action configuration.
 */
class VoiceActionDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ForwardToAiAgentActionDetails' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ForwardToAiAgentActionDetails',
    '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ForwardToCallRoutingDetails' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ForwardToCallRoutingDetails',
    '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ForwardToIvrActionDetails' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ForwardToIvrActionDetails',
    '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ForwardToMarkupLanguageDetails' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ForwardToMarkupLanguageDetails',
    '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ForwardToOperatorConnectDetails' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ForwardToOperatorConnectDetails',
    '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ForwardToPstnActionDetails' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ForwardToPstnActionDetails',
    '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ForwardToSubscriptionDetails' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ForwardToSubscriptionDetails',
    '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ForwardToWebRTCActionDetails' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ForwardToWebRTCActionDetails',
    '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.VoiceCallDropActionDetails' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\VoiceCallDropActionDetails',
    '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.VoiceCallForwardToApplicationDetails' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\VoiceCallForwardToApplicationDetails',
    '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.VoiceForwardToAnswersDetails' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\VoiceForwardToAnswersDetails',
    '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.VoiceForwardToConversationsDetails' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\VoiceForwardToConversationsDetails',
    '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.VoiceForwardToConversationsWithFlowDetails' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\VoiceForwardToConversationsWithFlowDetails',
    '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.VoiceForwardToFlowDetails' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\VoiceForwardToFlowDetails',
    '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.VoiceForwardToFlowWithConversationsDetails' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\VoiceForwardToFlowWithConversationsDetails',
    '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.VoiceNumberMaskingActionDetails' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\VoiceNumberMaskingActionDetails',
    'FORWARD_TO_CALL_ROUTING' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ForwardToCallRoutingDetails',
    'FORWARD_TO_IVR' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ForwardToIvrActionDetails',
    'FORWARD_TO_MARKUP_LANGUAGE' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ForwardToMarkupLanguageDetails',
    'FORWARD_TO_PSTN' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ForwardToPstnActionDetails',
    'FORWARD_TO_SUBSCRIPTION' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ForwardToSubscriptionDetails',
    'VOICE_FORWARD_TO_ANSWERS' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\VoiceForwardToAnswersDetails',
    'VOICE_FORWARD_TO_CONVERSATIONS' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\VoiceForwardToConversationsDetails',
    'VOICE_NUMBER_MASKING' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\VoiceNumberMaskingActionDetails',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Additional action description.
     */
    public string $description;
    public \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MoActionType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MoActionType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
