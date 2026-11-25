<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

enum WebhookCampaignStage: string
{
    case APPROVEDBYINTERNALREVIEWER = 'APPROVED_BY_INTERNAL_REVIEWER';
    case DEREGISTERED = 'DEREGISTERED';
    case REGISTERED = 'REGISTERED';
    case REJECTED = 'REJECTED';
    case SUBMITTED = 'SUBMITTED';
}
