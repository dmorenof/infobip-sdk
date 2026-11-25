<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

enum RcsOutboundMessageContentType: string
{
    case CARD = 'CARD';
    case CAROUSEL = 'CAROUSEL';
    case FILE = 'FILE';
    case PROVIDERTEMPLATE = 'PROVIDER_TEMPLATE';
    case TEXT = 'TEXT';
}
