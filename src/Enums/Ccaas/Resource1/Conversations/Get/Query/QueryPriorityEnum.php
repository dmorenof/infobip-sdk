<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\Ccaas\Resource1\Conversations\Get\Query;

enum QueryPriorityEnum: string
{
    case HIGH = 'HIGH';
    case LOW = 'LOW';
    case NORMAL = 'NORMAL';
    case URGENT = 'URGENT';
}
