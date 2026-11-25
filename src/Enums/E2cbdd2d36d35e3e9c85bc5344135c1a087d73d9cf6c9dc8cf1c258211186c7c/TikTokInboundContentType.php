<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c;

enum TikTokInboundContentType: string
{
    case IMAGE = 'IMAGE';
    case REACTION = 'REACTION';
    case REFERRALAD = 'REFERRAL_AD';
    case REFERRALSHORTLINK = 'REFERRAL_SHORT_LINK';
    case SHAREPOST = 'SHARE_POST';
    case TEXT = 'TEXT';
}
