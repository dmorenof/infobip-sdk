<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

enum CallEndpointType: string
{
    case PHONE = 'PHONE';
    case SIP = 'SIP';
    case VIBER = 'VIBER';
    case WEBRTC = 'WEBRTC';
    case WEBSOCKET = 'WEBSOCKET';
    case WHATSAPP = 'WHATSAPP';
}
