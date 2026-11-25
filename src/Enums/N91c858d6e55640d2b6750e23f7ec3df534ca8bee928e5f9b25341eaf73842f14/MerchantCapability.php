<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

enum MerchantCapability: string
{
    case Value3DS = '3DS';
    case CREDIT = 'CREDIT';
    case DEBIT = 'DEBIT';
    case EMV = 'EMV';
}
