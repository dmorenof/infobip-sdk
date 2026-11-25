<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Dialogs;

final class History extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /calls/1/dialogs/history [operationId: get-dialogs-history] */
    /**
     * Get dialogs history
     *
     * Get dialogs history with pagination. Dialogs history retention period is 5 days.
     */
    public static function get(?\InfobipSDK\GetParams\Calls\Resource1\Dialogs\History $params = null): \InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\DialogLogPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Dialogs\History::class)->get($params);
    }

}
