<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

enum TerminationReason: string
{
    case HANGUP = 'HANGUP';
    case KEYPHRASE = 'KEY_PHRASE';
    case SILENCE = 'SILENCE';
    case TIMEOUT = 'TIMEOUT';
}
