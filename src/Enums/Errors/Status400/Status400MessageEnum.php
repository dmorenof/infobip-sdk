<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\Errors\Status400;

enum Status400MessageEnum: string
{
    case ClientSpecifiedAnInvalidArgumentRequestBodyOrQueryParam = 'Client specified an invalid argument, request body or query param';
}
