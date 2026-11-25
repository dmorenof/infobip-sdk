<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

enum MessagesApiMessageBrazilPixDcPaymentContentKeyType: string
{
    case CNPJ = 'CNPJ';
    case CPF = 'CPF';
    case EMAIL = 'EMAIL';
    case EVP = 'EVP';
    case PHONE = 'PHONE';
}
