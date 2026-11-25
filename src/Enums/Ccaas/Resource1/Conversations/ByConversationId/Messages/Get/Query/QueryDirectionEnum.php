<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\Ccaas\Resource1\Conversations\ByConversationId\Messages\Get\Query;

enum QueryDirectionEnum: string
{
    case INBOUND = 'INBOUND';
    case OUTBOUND = 'OUTBOUND';
}
