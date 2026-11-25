<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

enum SimpleEmailEvents: string
{
    case ARTIFICIALCLICK = 'ARTIFICIAL_CLICK';
    case CLICK = 'CLICK';
    case COMPLAINT = 'COMPLAINT';
    case DELIVERY = 'DELIVERY';
    case HIGHBOUNCERATEBLOCKED = 'HIGH_BOUNCE_RATE_BLOCKED';
    case HIGHBOUNCERATEWARNING = 'HIGH_BOUNCE_RATE_WARNING';
    case LATEBOUNCE = 'LATE_BOUNCE';
    case OPEN = 'OPEN';
    case UNSUBSCRIBE = 'UNSUBSCRIBE';
}
