<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\Forms\Resource1\Forms\Get\Query;

enum FormTypeEnum: string
{
    case APPLE = 'APPLE';
    case FACEBOOK = 'FACEBOOK';
    case LIVECHAT = 'LIVECHAT';
    case OPTIN = 'OPT_IN';
    case OPTOUT = 'OPT_OUT';
}
