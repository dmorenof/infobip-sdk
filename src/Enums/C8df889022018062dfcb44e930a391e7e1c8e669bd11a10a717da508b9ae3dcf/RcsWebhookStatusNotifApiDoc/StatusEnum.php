<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\RcsWebhookStatusNotifApiDoc;

enum StatusEnum: string
{
    case COMPLETED = 'COMPLETED';
    case EXPIRED = 'EXPIRED';
    case REJECTED = 'REJECTED';
    case UPDATEREQUESTED = 'UPDATE_REQUESTED';
    case UPDATEREQUESTEDBYINTERNALREVIEWER = 'UPDATE_REQUESTED_BY_INTERNAL_REVIEWER';
}
