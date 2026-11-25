<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

enum DialogFinalState: string
{
    case BUSY = 'BUSY';
    case CANCELLED = 'CANCELLED';
    case FAILED = 'FAILED';
    case FINISHED = 'FINISHED';
    case NOANSWER = 'NO_ANSWER';
}
