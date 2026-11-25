<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

enum AmdStatus: string
{
    case HUMAN = 'HUMAN';
    case MACHINE = 'MACHINE';
    case MACHINEEOMBEEP = 'MACHINE_EOM_BEEP';
    case MACHINEEOMSILENCE = 'MACHINE_EOM_SILENCE';
    case MACHINEEOMTIMEOUT = 'MACHINE_EOM_TIMEOUT';
}
