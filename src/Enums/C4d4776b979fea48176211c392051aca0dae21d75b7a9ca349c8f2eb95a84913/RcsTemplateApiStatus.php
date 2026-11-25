<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

enum RcsTemplateApiStatus: string
{
    case APPROVED = 'APPROVED';
    case APPROVEDINPROGRESS = 'APPROVED_IN_PROGRESS';
    case APPROVEDPARTIALLY = 'APPROVED_PARTIALLY';
    case PENDING = 'PENDING';
    case REJECTED = 'REJECTED';
    case SUSPENDED = 'SUSPENDED';
}
