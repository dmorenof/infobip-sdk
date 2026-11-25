<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c;

enum ApiRelativeTimeRange: string
{
    case LASTMONTH = 'LAST_MONTH';
    case LASTWEEK = 'LAST_WEEK';
    case LASTYEAR = 'LAST_YEAR';
    case TODAY = 'TODAY';
    case YESTERDAY = 'YESTERDAY';
}
