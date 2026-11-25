<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980;

enum WhatsAppSenderStatus: string
{
    case BANNED = 'BANNED';
    case CONNECTED = 'CONNECTED';
    case DELETED = 'DELETED';
    case DISCONNECTED = 'DISCONNECTED';
    case FLAGGED = 'FLAGGED';
    case MIGRATED = 'MIGRATED';
    case PENDING = 'PENDING';
    case RATELIMITED = 'RATE_LIMITED';
    case RESTRICTED = 'RESTRICTED';
    case UNKNOWN = 'UNKNOWN';
    case UNVERIFIED = 'UNVERIFIED';
}
