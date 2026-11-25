<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742;

enum PushDestinationType: string
{
    case EMAIL = 'EMAIL';
    case EXTERNALUSERID = 'EXTERNAL_USER_ID';
    case MULTIPLE = 'MULTIPLE';
    case PHONENUMBER = 'PHONE_NUMBER';
    case REGISTRATION = 'REGISTRATION';
}
