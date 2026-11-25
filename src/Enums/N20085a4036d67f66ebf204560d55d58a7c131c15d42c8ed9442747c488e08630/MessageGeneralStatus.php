<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

enum MessageGeneralStatus: string
{
    case ACCEPTED = 'ACCEPTED';
    case DELIVERED = 'DELIVERED';
    case EXPIRED = 'EXPIRED';
    case PENDING = 'PENDING';
    case REJECTED = 'REJECTED';
    case UNDELIVERABLE = 'UNDELIVERABLE';
}
