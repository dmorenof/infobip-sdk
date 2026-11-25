<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

enum WebhookBrandRegistrationStatus: string
{
    case FAILURE = 'FAILURE';
    case PENDING = 'PENDING';
    case PENDING2FA = 'PENDING_2FA';
    case PENDINGAPPEAL = 'PENDING_APPEAL';
    case SUCCESS = 'SUCCESS';
    case SUCCESSPENDINGAPPEAL = 'SUCCESS_PENDING_APPEAL';
}
