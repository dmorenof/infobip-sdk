<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

enum WhatsAppInboundMessageContentType: string
{
    case AUDIO = 'AUDIO';
    case BUTTONREPLY = 'BUTTON_REPLY';
    case CALLREPLY = 'CALL_REPLY';
    case CONTACT = 'CONTACT';
    case DOCUMENT = 'DOCUMENT';
    case FLOWREPLY = 'FLOW_REPLY';
    case IMAGE = 'IMAGE';
    case LISTREPLY = 'LIST_REPLY';
    case LOCATION = 'LOCATION';
    case ORDER = 'ORDER';
    case QUICKREPLY = 'QUICK_REPLY';
    case TEXT = 'TEXT';
    case VIDEO = 'VIDEO';
    case VOICE = 'VOICE';
}
