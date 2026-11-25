<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

enum MmsOutboundSegmentType: string
{
    case LINK = 'LINK';
    case SMIL = 'SMIL';
    case TEXT = 'TEXT';
    case UPLOADEDREFERENCE = 'UPLOADED_REFERENCE';
}
