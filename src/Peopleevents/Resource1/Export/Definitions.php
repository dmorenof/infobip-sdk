<?php

declare(strict_types=1);

namespace InfobipSDK\Peopleevents\Resource1\Export;

final class Definitions extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /peopleevents/1/export/definitions [operationId: get-events-definitions-for-export] */
    /**
     * Get list of event definitions
     *
     * Retrieves a list of all available event definitions, including custom events.
     * The event definitions can be then used as a filter in the
     * [Event Export API](https://www.infobip.com/docs/api#customer-engagement/people/create-events-export-request).
     */
    public static function get(): \InfobipSDK\DTOs\A389f65d9a8b852c007cdb5a24c983f5c2dc5fa67bb655d3284926dc5c3ce095\DefinitionsResponseBody
    {
        return self::client()->resource(\InfobipSDK\Resources\Peopleevents\Resource1\Export\Definitions::class)->get();
    }

}
