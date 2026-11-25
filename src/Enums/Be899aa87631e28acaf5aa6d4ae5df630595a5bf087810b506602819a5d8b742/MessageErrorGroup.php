<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742;

enum MessageErrorGroup: string
{
    case HANDSETERRORS = 'HANDSET_ERRORS';
    case OK = 'OK';
    case OPERATORERRORS = 'OPERATOR_ERRORS';
    case USERERRORS = 'USER_ERRORS';
}
