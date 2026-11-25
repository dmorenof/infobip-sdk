<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

enum AutoAssignmentAlgorithm: string
{
    case LOADBALANCING = 'LOAD_BALANCING';
    case PERFORMANCEBASED = 'PERFORMANCE_BASED';
    case ROUNDROBIN = 'ROUND_ROBIN';
}
