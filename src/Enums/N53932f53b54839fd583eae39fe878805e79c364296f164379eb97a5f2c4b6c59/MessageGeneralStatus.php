<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

enum MessageGeneralStatus: string
{
    case ACCEPTED = 'ACCEPTED';
    case DELIVERED = 'DELIVERED';
    case EXPIRED = 'EXPIRED';
    case PENDING = 'PENDING';
    case REJECTED = 'REJECTED';
    case UNDELIVERABLE = 'UNDELIVERABLE';
}
