<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc;

enum LineType: string
{
    case FIXEDLINE = 'FIXED_LINE';
    case FIXEDLINEORMOBILE = 'FIXED_LINE_OR_MOBILE';
    case MOBILE = 'MOBILE';
    case PAGER = 'PAGER';
    case PERSONALNUMBER = 'PERSONAL_NUMBER';
    case PREMIUMRATE = 'PREMIUM_RATE';
    case SHAREDCOST = 'SHARED_COST';
    case TOLLFREE = 'TOLL_FREE';
    case UAN = 'UAN';
    case UNKNOWN = 'UNKNOWN';
    case VOICEMAIL = 'VOICEMAIL';
    case VOIP = 'VOIP';
}
