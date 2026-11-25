<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

enum ViberBotInboundContentType: string
{
    case CONVERSATIONSTARTED = 'CONVERSATION_STARTED';
    case DELIVERED = 'DELIVERED';
    case MESSAGE = 'MESSAGE';
    case SUBSCRIBED = 'SUBSCRIBED';
    case UNSUBSCRIBED = 'UNSUBSCRIBED';
}
