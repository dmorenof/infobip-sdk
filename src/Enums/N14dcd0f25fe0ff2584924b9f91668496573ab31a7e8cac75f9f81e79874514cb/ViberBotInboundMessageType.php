<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

enum ViberBotInboundMessageType: string
{
    case CONTACT = 'CONTACT';
    case FILE = 'FILE';
    case IMAGE = 'IMAGE';
    case LOCATION = 'LOCATION';
    case STICKER = 'STICKER';
    case TEXT = 'TEXT';
    case VIDEO = 'VIDEO';
}
