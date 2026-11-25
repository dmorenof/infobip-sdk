<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

enum WhatsAppMessageContentType: string
{
    case AUDIO = 'AUDIO';
    case BUTTON = 'BUTTON';
    case CAROUSEL = 'CAROUSEL';
    case DOCUMENT = 'DOCUMENT';
    case IMAGE = 'IMAGE';
    case LIST_ = 'LIST';
    case LOCATION = 'LOCATION';
    case LOCATIONREQUEST = 'LOCATION_REQUEST';
    case STICKER = 'STICKER';
    case TEXT = 'TEXT';
    case URLBUTTON = 'URL_BUTTON';
    case VIDEO = 'VIDEO';
}
