<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\Ccaas\Resource1\Templates\Get\Query;

enum QueryChannelEnum: string
{
    case APPLEBUSINESSCHAT = 'APPLE_BUSINESS_CHAT';
    case EMAIL = 'EMAIL';
    case FACEBOOKMESSENGER = 'FACEBOOK_MESSENGER';
    case FACEBOOKPOST = 'FACEBOOK_POST';
    case GOOGLEPLAY = 'GOOGLE_PLAY';
    case INSTAGRAMMESSAGING = 'INSTAGRAM_MESSAGING';
    case INSTAGRAMPOST = 'INSTAGRAM_POST';
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
