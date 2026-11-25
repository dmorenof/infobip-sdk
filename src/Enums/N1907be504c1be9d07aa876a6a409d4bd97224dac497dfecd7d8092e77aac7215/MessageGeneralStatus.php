<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215;

enum MessageGeneralStatus: string
{
    case ACCEPTED = 'ACCEPTED';
    case DELIVERED = 'DELIVERED';
    case EXPIRED = 'EXPIRED';
    case PENDING = 'PENDING';
    case REJECTED = 'REJECTED';
    case UNDELIVERABLE = 'UNDELIVERABLE';
}
