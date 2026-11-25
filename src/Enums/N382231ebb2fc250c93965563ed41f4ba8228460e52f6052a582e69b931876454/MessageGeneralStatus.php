<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454;

enum MessageGeneralStatus: string
{
    case ACCEPTED = 'ACCEPTED';
    case DELIVERED = 'DELIVERED';
    case EXPIRED = 'EXPIRED';
    case PENDING = 'PENDING';
    case REJECTED = 'REJECTED';
    case UNDELIVERABLE = 'UNDELIVERABLE';
}
