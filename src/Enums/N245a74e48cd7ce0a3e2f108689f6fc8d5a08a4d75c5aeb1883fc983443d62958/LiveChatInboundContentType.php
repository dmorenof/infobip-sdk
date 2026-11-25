<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958;

enum LiveChatInboundContentType: string
{
    case AUDIO = 'AUDIO';
    case BUNDLE = 'BUNDLE';
    case BUTTONRESPONSE = 'BUTTON_RESPONSE';
    case CALL = 'CALL';
    case CUSTOMDATA = 'CUSTOM_DATA';
    case DOCUMENT = 'DOCUMENT';
    case FORMRESPONSE = 'FORM_RESPONSE';
    case IMAGE = 'IMAGE';
    case PRECHATFORM = 'PRE_CHAT_FORM';
    case SURVEYRESPONSE = 'SURVEY_RESPONSE';
    case TEXT = 'TEXT';
    case VIDEO = 'VIDEO';
}
