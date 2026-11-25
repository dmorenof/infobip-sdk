<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

enum BulkStatus: string
{
    case CANCELED = 'CANCELED';
    case FAILED = 'FAILED';
    case FINISHED = 'FINISHED';
    case PAUSED = 'PAUSED';
    case PENDING = 'PENDING';
    case PROCESSING = 'PROCESSING';
}
