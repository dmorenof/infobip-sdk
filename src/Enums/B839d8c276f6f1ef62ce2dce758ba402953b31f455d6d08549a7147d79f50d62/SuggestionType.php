<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

enum SuggestionType: string
{
    case CREATECALENDAREVENT = 'CREATE_CALENDAR_EVENT';
    case DIALPHONE = 'DIAL_PHONE';
    case OPENURL = 'OPEN_URL';
    case REPLY = 'REPLY';
    case REQUESTLOCATION = 'REQUEST_LOCATION';
    case SHOWLOCATION = 'SHOW_LOCATION';
}
