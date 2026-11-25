<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

enum IpCoreGeneralStatus: string
{
    case ACCEPTED = 'ACCEPTED';
    case DELIVERED = 'DELIVERED';
    case EXPIRED = 'EXPIRED';
    case PENDING = 'PENDING';
    case REJECTED = 'REJECTED';
    case UNDELIVERABLE = 'UNDELIVERABLE';
}
