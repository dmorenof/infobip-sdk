<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5;

enum MessageGeneralStatus: string
{
    case ACCEPTED = 'ACCEPTED';
    case DELIVERED = 'DELIVERED';
    case EXPIRED = 'EXPIRED';
    case PENDING = 'PENDING';
    case REJECTED = 'REJECTED';
    case UNDELIVERABLE = 'UNDELIVERABLE';
}
