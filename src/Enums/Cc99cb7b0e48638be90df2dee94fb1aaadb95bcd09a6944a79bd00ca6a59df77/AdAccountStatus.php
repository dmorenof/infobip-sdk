<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77;

enum AdAccountStatus: string
{
    case ACTIVE = 'ACTIVE';
    case ANYACTIVE = 'ANY_ACTIVE';
    case ANYCLOSED = 'ANY_CLOSED';
    case CLOSED = 'CLOSED';
    case DISABLED = 'DISABLED';
    case INGRACEPERIOD = 'IN_GRACE_PERIOD';
    case PENDINGCLOSURE = 'PENDING_CLOSURE';
    case PENDINGRISKREVIEW = 'PENDING_RISK_REVIEW';
    case PENDINGSETTLEMENT = 'PENDING_SETTLEMENT';
    case UNKNOWN = 'UNKNOWN';
    case UNSETTLED = 'UNSETTLED';
}
