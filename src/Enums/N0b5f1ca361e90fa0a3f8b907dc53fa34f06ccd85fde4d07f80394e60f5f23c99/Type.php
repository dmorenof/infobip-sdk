<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99;

enum Type: string
{
    case AUDIO = 'AUDIO';
    case BUTTON = 'BUTTON';
    case CONTACT = 'CONTACT';
    case DOCUMENT = 'DOCUMENT';
    case IMAGE = 'IMAGE';
    case INTERACTIVEBUTTONREPLY = 'INTERACTIVE_BUTTON_REPLY';
    case INTERACTIVELISTREPLY = 'INTERACTIVE_LIST_REPLY';
    case INTERACTIVEPAYMENTCONFIRMATION = 'INTERACTIVE_PAYMENT_CONFIRMATION';
    case LOCATION = 'LOCATION';
    case ORDER = 'ORDER';
    case STICKER = 'STICKER';
    case TEXT = 'TEXT';
    case UNSUPPORTED = 'UNSUPPORTED';
    case VIDEO = 'VIDEO';
    case VOICE = 'VOICE';
}
