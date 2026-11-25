<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

enum MessagesApiMessageOrderStatusOrderType: string
{
    case BRAZIL = 'BRAZIL';
    case BRAZILBOLETO = 'BRAZIL_BOLETO';
    case BRAZILLINK = 'BRAZIL_LINK';
    case BRAZILPIXDC = 'BRAZIL_PIX_DC';
    case PGPAYU = 'PG_PAYU';
    case PGRAZORPAY = 'PG_RAZORPAY';
    case UPIINTENT = 'UPI_INTENT';
    case UPIPAYU = 'UPI_PAYU';
}
