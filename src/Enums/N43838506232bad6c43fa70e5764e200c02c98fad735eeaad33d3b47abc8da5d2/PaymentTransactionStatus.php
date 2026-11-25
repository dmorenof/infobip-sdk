<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N43838506232bad6c43fa70e5764e200c02c98fad735eeaad33d3b47abc8da5d2;

enum PaymentTransactionStatus: string
{
    case CANCELED = 'CANCELED';
    case FAILED = 'FAILED';
    case PENDING = 'PENDING';
    case SUCCESS = 'SUCCESS';
    case UNKNOWN = 'UNKNOWN';
}
