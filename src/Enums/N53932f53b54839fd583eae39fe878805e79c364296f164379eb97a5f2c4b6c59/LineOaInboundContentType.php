<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

enum LineOaInboundContentType: string
{
    case ACCOUNTLINK = 'ACCOUNT_LINK';
    case AUDIO = 'AUDIO';
    case BEACON = 'BEACON';
    case FILE = 'FILE';
    case FOLLOW = 'FOLLOW';
    case IMAGE = 'IMAGE';
    case JOIN = 'JOIN';
    case LEAVE = 'LEAVE';
    case LOCATION = 'LOCATION';
    case MEMBERJOIN = 'MEMBER_JOIN';
    case MEMBERLEAVE = 'MEMBER_LEAVE';
    case POSTBACK = 'POSTBACK';
    case STICKER = 'STICKER';
    case TEXT = 'TEXT';
    case THINGS = 'THINGS';
    case UNFOLLOW = 'UNFOLLOW';
    case UNSEND = 'UNSEND';
    case VIDEO = 'VIDEO';
}
