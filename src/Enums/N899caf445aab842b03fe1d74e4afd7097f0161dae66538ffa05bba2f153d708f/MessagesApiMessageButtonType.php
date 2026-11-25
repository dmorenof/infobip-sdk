<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

enum MessagesApiMessageButtonType: string
{
    case ADDCALENDAREVENT = 'ADD_CALENDAR_EVENT';
    case DIALPHONE = 'DIAL_PHONE';
    case OPENURL = 'OPEN_URL';
    case REPLY = 'REPLY';
    case REQUESTLOCATION = 'REQUEST_LOCATION';
    case SHOWLOCATION = 'SHOW_LOCATION';
}
