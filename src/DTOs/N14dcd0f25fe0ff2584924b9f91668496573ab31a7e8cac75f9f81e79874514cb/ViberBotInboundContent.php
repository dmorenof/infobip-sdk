<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * ViberBotInboundContent
 *
 * Message content.
 */
class ViberBotInboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb.ViberBotInboundConversationStartedContent' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotInboundConversationStartedContent',
    '14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb.ViberBotInboundDeliveredContent' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotInboundDeliveredContent',
    '14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb.ViberBotInboundMessageContent' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotInboundMessageContent',
    '14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb.ViberBotInboundSubscribedContent' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotInboundSubscribedContent',
    '14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb.ViberBotInboundUnsubscribedContent' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotInboundUnsubscribedContent',
    'CONVERSATION_STARTED' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotInboundConversationStartedContent',
    'DELIVERED' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotInboundDeliveredContent',
    'MESSAGE' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotInboundMessageContent',
    'SUBSCRIBED' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotInboundSubscribedContent',
    'UNSUBSCRIBED' => 'InfobipSDK\\DTOs\\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\\ViberBotInboundUnsubscribedContent',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotInboundContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotInboundContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
