<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\Errors\Camara\SimSwap\V0\Check\PostStatus404;

enum PostStatus404MessageEnum: string
{
    case SIMSwapCantBeCheckedBecauseThePhoneNumberIsUnknown = 'SIM Swap can\'t be checked because the phone number is unknown';
}
