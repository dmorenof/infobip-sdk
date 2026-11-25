<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

enum CallState: string
{
    case BUSY = 'BUSY';
    case CALLING = 'CALLING';
    case CANCELLED = 'CANCELLED';
    case ESTABLISHED = 'ESTABLISHED';
    case FAILED = 'FAILED';
    case FINISHED = 'FINISHED';
    case NOANSWER = 'NO_ANSWER';
    case PREESTABLISHED = 'PRE_ESTABLISHED';
    case RINGING = 'RINGING';
}
