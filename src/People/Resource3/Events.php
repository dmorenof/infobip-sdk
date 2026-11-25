<?php

declare(strict_types=1);

namespace InfobipSDK\People\Resource3;

final class Events extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /people/3/events [operationId: send-custom-events] */
    /**
     * Batch Send Events
     *
     * Use this endpoint to batch import People events, including historical events that occurred up to `30` days ago. Batch items must reference an existing person profile and predefined [event type](https://portal.infobip.com/people/events/definitions). You can send up to `5000` events in a single batch. Each individual item within a batch must not exceed `512,000` bytes. The entire batch, which includes all items combined, must not exceed `15,728,640` bytes.<br>Each event in the batch must reference an existing person profile and a predefined event type. If an event references a person identifier that does not match any existing profile, a new `CUSTOMER` profile will automatically be created for that identifier. <br>**Note**: The entire batch will fail to import if any single event fails due to missing event type, properties, etc.
     */
    public static function post(?\InfobipSDK\Collections\EventsBodyCollection $payload = null): void
    {
        if (func_num_args() <= 0) {
            self::client()->resource(\InfobipSDK\Resources\People\Resource3\Events::class)->post();
            return;
        }
        self::client()->resource(\InfobipSDK\Resources\People\Resource3\Events::class)->post($payload);
    }
}
