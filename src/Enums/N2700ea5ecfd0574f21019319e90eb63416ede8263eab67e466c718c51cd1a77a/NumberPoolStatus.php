<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

enum NumberPoolStatus: string
{
    case INVALID = 'INVALID';
    case PENDINGVERIFICATION = 'PENDING_VERIFICATION';
    case SUBMITTEDFORVERIFICATION = 'SUBMITTED_FOR_VERIFICATION';
    case VALID = 'VALID';
}
