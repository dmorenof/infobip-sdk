<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\Errors\Status409;

enum Status409MessageEnum: string
{
    case AnotherRequestIsCreatedForTheSameMSISDN = 'Another request is created for the same MSISDN';
}
