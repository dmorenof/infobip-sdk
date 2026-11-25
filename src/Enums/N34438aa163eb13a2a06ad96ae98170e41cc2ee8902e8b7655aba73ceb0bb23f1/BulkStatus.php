<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

enum BulkStatus: string
{
    case CANCELED = 'CANCELED';
    case FAILED = 'FAILED';
    case FINISHED = 'FINISHED';
    case PAUSED = 'PAUSED';
    case PENDING = 'PENDING';
    case PROCESSING = 'PROCESSING';
}
