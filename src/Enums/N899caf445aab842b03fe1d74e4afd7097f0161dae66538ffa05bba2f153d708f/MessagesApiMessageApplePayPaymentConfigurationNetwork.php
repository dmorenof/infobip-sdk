<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

enum MessagesApiMessageApplePayPaymentConfigurationNetwork: string
{
    case AMEX = 'AMEX';
    case CHINAUNIONPAY = 'CHINA_UNION_PAY';
    case DISCOVER = 'DISCOVER';
    case ELECTRON = 'ELECTRON';
    case INTERAC = 'INTERAC';
    case MAESTRO = 'MAESTRO';
    case MASTERCARD = 'MASTERCARD';
    case PRIVATELABEL = 'PRIVATE_LABEL';
    case VISA = 'VISA';
}
