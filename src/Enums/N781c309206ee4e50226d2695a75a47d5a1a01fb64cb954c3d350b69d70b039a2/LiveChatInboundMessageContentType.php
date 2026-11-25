<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

enum LiveChatInboundMessageContentType: string
{
    case AUDIO = 'AUDIO';
    case BUNDLE = 'BUNDLE';
    case BUTTONREPLY = 'BUTTON_REPLY';
    case DOCUMENT = 'DOCUMENT';
    case IMAGE = 'IMAGE';
    case TEXT = 'TEXT';
    case VIDEO = 'VIDEO';
}
