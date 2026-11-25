<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

enum Status: string
{
    case APPROVED = 'APPROVED';
    case ARCHIVED = 'ARCHIVED';
    case DELETED = 'DELETED';
    case DISABLED = 'DISABLED';
    case FIRSTPAUSED = 'FIRST_PAUSED';
    case FLAGGED = 'FLAGGED';
    case INAPPEAL = 'IN_APPEAL';
    case PENDING = 'PENDING';
    case PENDINGDELETION = 'PENDING_DELETION';
    case REINSTATED = 'REINSTATED';
    case REJECTED = 'REJECTED';
    case SECONDPAUSED = 'SECOND_PAUSED';
    case UNKNOWN = 'UNKNOWN';
}
