<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

enum MessageChannel: string
{
    case APPLEBUSINESSCHAT = 'APPLE_BUSINESS_CHAT';
    case CALLS = 'CALLS';
    case EMAIL = 'EMAIL';
    case FACEBOOKMESSENGER = 'FACEBOOK_MESSENGER';
    case FACEBOOKPOST = 'FACEBOOK_POST';
    case GOOGLEBUSINESSMESSAGES = 'GOOGLE_BUSINESS_MESSAGES';
    case GOOGLEPLAY = 'GOOGLE_PLAY';
    case INSTAGRAMMESSAGING = 'INSTAGRAM_MESSAGING';
    case INSTAGRAMPOST = 'INSTAGRAM_POST';
    case INTERNAL = 'INTERNAL';
    case KAKAOSANGDAM = 'KAKAO_SANGDAM';
    case LINE = 'LINE';
    case LIVECHAT = 'LIVE_CHAT';
    case OPENCHANNEL = 'OPEN_CHANNEL';
    case RCS = 'RCS';
    case SMS = 'SMS';
    case TELEGRAM = 'TELEGRAM';
    case TIKTOK = 'TIKTOK';
    case TWITTERDM = 'TWITTER_DM';
    case TWITTERPOST = 'TWITTER_POST';
    case UNKNOWN = 'UNKNOWN';
    case UNUSED = 'UNUSED';
    case VIBER = 'VIBER';
    case VIBERBOT = 'VIBER_BOT';
    case VIBERCALLS = 'VIBER_CALLS';
    case VIDEO = 'VIDEO';
    case VOICE = 'VOICE';
    case WHATSAPP = 'WHATSAPP';
    case WHATSAPPCALLS = 'WHATSAPP_CALLS';
    case ZALO = 'ZALO';
}
