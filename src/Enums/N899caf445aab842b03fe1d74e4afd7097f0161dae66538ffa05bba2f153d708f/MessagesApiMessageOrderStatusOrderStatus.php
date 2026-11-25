<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

enum MessagesApiMessageOrderStatusOrderStatus: string
{
    case CANCELED = 'CANCELED';
    case COMPLETED = 'COMPLETED';
    case PARTIALLYSHIPPED = 'PARTIALLY_SHIPPED';
    case PENDING = 'PENDING';
    case PROCESSING = 'PROCESSING';
    case SHIPPED = 'SHIPPED';
}
