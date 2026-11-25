<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

enum RcsDlrTrafficType: string
{
    case BASIC = 'BASIC';
    case P2ACONVERSATION = 'P2A_CONVERSATION';
    case P2AINTERACTIVESESSION = 'P2A_INTERACTIVE_SESSION';
    case RICH = 'RICH';
    case RICHMEDIA = 'RICH_MEDIA';
    case SINGLE = 'SINGLE';
}
