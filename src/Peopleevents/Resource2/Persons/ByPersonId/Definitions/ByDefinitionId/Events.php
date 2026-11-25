<?php

declare(strict_types=1);

namespace InfobipSDK\Peopleevents\Resource2\Persons\ByPersonId\Definitions\ByDefinitionId;

final class Events extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /peopleevents/2/persons/{personId}/definitions/{definitionId}/events [operationId: send-custom-event] */
    /**
     * Send Event
     *
     * Use this endpoint to track events that persons perform. Your request must refer to existing person profile and [event definition](https://portal.infobip.com/people/events/definitions).
     */
    public static function post(\InfobipSDK\PathParams\Peopleevents\Resource2\Persons\ByPersonId\Definitions\ByDefinitionId\Events $identifier, \InfobipSDK\PostParams\Peopleevents\Resource2\Persons\ByPersonId\Definitions\ByDefinitionId\Events $params): \InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\EventResourceResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Peopleevents\Resource2\Persons\ByPersonId\Definitions\ByDefinitionId\Events::class)->post($identifier, $params);
    }

}
