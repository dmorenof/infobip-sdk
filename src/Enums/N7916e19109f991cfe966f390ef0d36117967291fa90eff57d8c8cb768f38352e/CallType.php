<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e;

enum CallType: string
{
    case PHONECALL = 'PHONE_CALL';
    case ROOMCALL = 'ROOM_CALL';
    case VIBERCALL = 'VIBER_CALL';
    case WEBRTCCALL = 'WEBRTC_CALL';
}
