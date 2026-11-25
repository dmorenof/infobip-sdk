<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\Errors\Camara\NumberRecycling\V02\Check\PostStatus400;

enum PostStatus400MessageEnum: string
{
    case ClientSpecifiedAnInvalidArgumentRequestBodyOrQueryParam = 'Client specified an invalid argument, request body or query param';
    case ClientSpecifiedAnInvalidRange = 'Client specified an invalid range.';
}
