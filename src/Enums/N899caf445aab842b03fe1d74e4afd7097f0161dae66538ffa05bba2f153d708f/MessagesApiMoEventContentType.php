<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

enum MessagesApiMoEventContentType: string
{
    case AUDIO = 'AUDIO';
    case AUTHENTICATIONRESPONSE = 'AUTHENTICATION_RESPONSE';
    case BUTTONREPLY = 'BUTTON_REPLY';
    case DOCUMENT = 'DOCUMENT';
    case FILE = 'FILE';
    case FLOWRESPONSE = 'FLOW_RESPONSE';
    case FORMRESPONSE = 'FORM_RESPONSE';
    case IMAGE = 'IMAGE';
    case LISTREPLY = 'LIST_REPLY';
    case LOCATION = 'LOCATION';
    case PAYMENTRESPONSE = 'PAYMENT_RESPONSE';
    case REACTION = 'REACTION';
    case SUBJECT = 'SUBJECT';
    case TEXT = 'TEXT';
    case URL = 'URL';
    case VIDEO = 'VIDEO';
}
