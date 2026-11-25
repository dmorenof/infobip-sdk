<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\Ccaas\Resource1\Conversations\ByConversationId\Messages\Get\Query;

enum QueryChannelEnum: string
{
    case APPLEBUSINESSCHAT = 'APPLE_BUSINESS_CHAT';
    case EMAIL = 'EMAIL';
    case FACEBOOKMESSENGER = 'FACEBOOK_MESSENGER';
    case INSTAGRAMMESSAGING = 'INSTAGRAM_MESSAGING';
    case KAKAOSANGDAM = 'KAKAO_SANGDAM';
    case LINE = 'LINE';
    case LIVECHAT = 'LIVE_CHAT';
    case RCS = 'RCS';
    case SMS = 'SMS';
    case TELEGRAM = 'TELEGRAM';
    case VIBER = 'VIBER';
    case VIBERBOT = 'VIBER_BOT';
    case WHATSAPP = 'WHATSAPP';
}
