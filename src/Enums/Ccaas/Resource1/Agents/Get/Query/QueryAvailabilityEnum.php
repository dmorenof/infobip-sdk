<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\Ccaas\Resource1\Agents\Get\Query;

enum QueryAvailabilityEnum: string
{
    case ACTIVE = 'ACTIVE';
    case AWAY = 'AWAY';
    case BUSY = 'BUSY';
    case INVISIBLE = 'INVISIBLE';
}
