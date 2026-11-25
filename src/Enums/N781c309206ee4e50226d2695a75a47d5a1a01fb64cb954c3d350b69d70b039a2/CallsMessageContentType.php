<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

enum CallsMessageContentType: string
{
    case DTMFCODEREQUEST = 'DTMF_CODE_REQUEST';
    case FILE = 'FILE';
    case HANGUP = 'HANG_UP';
    case TEXT = 'TEXT';
}
