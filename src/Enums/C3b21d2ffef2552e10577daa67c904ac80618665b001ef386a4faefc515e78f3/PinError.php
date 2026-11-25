<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\C3b21d2ffef2552e10577daa67c904ac80618665b001ef386a4faefc515e78f3;

enum PinError: string
{
    case NOMOREPINATTEMPTS = 'NO_MORE_PIN_ATTEMPTS';
    case TTLEXPIRED = 'TTL_EXPIRED';
    case WRONGPIN = 'WRONG_PIN';
}
