<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

enum OutboundMessageChannel: string
{
    case APPLEMB = 'APPLE_MB';
    case INSTAGRAMDM = 'INSTAGRAM_DM';
    case LINEON = 'LINE_ON';
    case MESSENGER = 'MESSENGER';
    case MMS = 'MMS';
    case RCS = 'RCS';
    case SMS = 'SMS';
    case VIBERBM = 'VIBER_BM';
    case VIBERBOT = 'VIBER_BOT';
    case WHATSAPP = 'WHATSAPP';
}
