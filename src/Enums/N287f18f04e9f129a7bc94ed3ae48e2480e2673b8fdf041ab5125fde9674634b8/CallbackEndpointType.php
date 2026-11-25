<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

enum CallbackEndpointType: string
{
    case PHONE = 'PHONE';
    case SIP = 'SIP';
    case VIBER = 'VIBER';
    case WEBRTC = 'WEBRTC';
    case WEBSOCKET = 'WEBSOCKET';
    case WHATSAPP = 'WHATSAPP';
}
