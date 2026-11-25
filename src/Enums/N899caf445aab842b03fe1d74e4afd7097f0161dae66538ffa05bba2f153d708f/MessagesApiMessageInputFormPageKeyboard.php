<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

enum MessagesApiMessageInputFormPageKeyboard: string
{
    case ASCIICAPABLE = 'ASCII_CAPABLE';
    case DECIMALPAD = 'DECIMAL_PAD';
    case DEFAULT_ = 'DEFAULT';
    case EMAILADDRESS = 'EMAIL_ADDRESS';
    case NAMEPHONEPAD = 'NAME_PHONE_PAD';
    case NUMBERSANDPUNCTUATION = 'NUMBERS_AND_PUNCTUATION';
    case NUMBERPAD = 'NUMBER_PAD';
    case PHONEPAD = 'PHONE_PAD';
    case TWITTERKEYBOARD = 'TWITTER_KEYBOARD';
    case URL = 'URL';
    case WEBSEARCH = 'WEB_SEARCH';
}
