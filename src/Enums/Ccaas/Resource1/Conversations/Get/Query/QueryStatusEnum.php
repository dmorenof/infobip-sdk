<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\Ccaas\Resource1\Conversations\Get\Query;

enum QueryStatusEnum: string
{
    case CLOSED = 'CLOSED';
    case OPEN = 'OPEN';
    case SOLVED = 'SOLVED';
    case WAITING = 'WAITING';
}
