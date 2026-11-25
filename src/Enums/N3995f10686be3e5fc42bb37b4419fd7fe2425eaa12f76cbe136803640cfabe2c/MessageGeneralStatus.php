<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

enum MessageGeneralStatus: string
{
    case ACCEPTED = 'ACCEPTED';
    case DELIVERED = 'DELIVERED';
    case EXPIRED = 'EXPIRED';
    case PENDING = 'PENDING';
    case REJECTED = 'REJECTED';
    case UNDELIVERABLE = 'UNDELIVERABLE';
}
