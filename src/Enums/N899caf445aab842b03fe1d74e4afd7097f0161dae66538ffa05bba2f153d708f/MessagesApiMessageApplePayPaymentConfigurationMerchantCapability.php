<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

enum MessagesApiMessageApplePayPaymentConfigurationMerchantCapability: string
{
    case Value3DS = '3DS';
    case CREDIT = 'CREDIT';
    case DEBIT = 'DEBIT';
    case EMV = 'EMV';
}
