<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

enum PublicHiyaPhoneNumberStatus: string
{
    case ERRORFRAUD = 'ERROR_FRAUD';
    case ERRORINVALID = 'ERROR_INVALID';
    case ERRORREGISTERED = 'ERROR_REGISTERED';
    case ERRORUNEXPECTED = 'ERROR_UNEXPECTED';
    case NOTFOUND = 'NOT_FOUND';
    case PENDING = 'PENDING';
    case REGISTERED = 'REGISTERED';
    case UNKNOWN = 'UNKNOWN';
}
