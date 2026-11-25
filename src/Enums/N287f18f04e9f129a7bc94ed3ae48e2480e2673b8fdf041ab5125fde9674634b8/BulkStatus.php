<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

enum BulkStatus: string
{
    case CANCELED = 'CANCELED';
    case FAILED = 'FAILED';
    case FINISHED = 'FINISHED';
    case PAUSED = 'PAUSED';
    case PENDING = 'PENDING';
    case PROCESSING = 'PROCESSING';
}
