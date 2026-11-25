<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

enum DialogHangupSource: string
{
    case API = 'API';
    case CHILDENDPOINT = 'CHILD_ENDPOINT';
    case PARENTENDPOINT = 'PARENT_ENDPOINT';
    case PLATFORM = 'PLATFORM';
}
