<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff;

enum ValidationReason: string
{
    case INBOXFULL = 'INBOX_FULL';
    case TEMPREJECTION = 'TEMP_REJECTION';
    case THROTTLED = 'THROTTLED';
    case TIMEDOUT = 'TIMED_OUT';
    case UNABLETOCONNECT = 'UNABLE_TO_CONNECT';
    case UNEXPECTEDFAILURE = 'UNEXPECTED_FAILURE';
}
