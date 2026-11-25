<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

enum ActionType: string
{
    case CALLTRANSCRIPTION = 'CALL_TRANSCRIPTION';
    case CAPTUREDTMF = 'CAPTURE_DTMF';
    case CAPTURESPEECH = 'CAPTURE_SPEECH';
    case CREATEBULK = 'CREATE_BULK';
    case PLAY = 'PLAY';
    case SAY = 'SAY';
    case SENDDTMF = 'SEND_DTMF';
    case SENDRINGING = 'SEND_RINGING';
}
