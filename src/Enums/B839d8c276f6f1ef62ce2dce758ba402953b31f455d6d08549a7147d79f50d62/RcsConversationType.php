<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

enum RcsConversationType: string
{
    case A2P = 'A2P';
    case INTERACTIVESESSIONA2P = 'INTERACTIVE_SESSION_A2P';
    case INTERACTIVESESSIONP2A = 'INTERACTIVE_SESSION_P2A';
    case P2A = 'P2A';
}
