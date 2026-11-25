<?php

declare(strict_types=1);

namespace InfobipSDK\Platform\Resource1;

final class Blocklists extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /platform/1/blocklists [operationId: delete-blocklists] */
    /**
     * Delete blocklists
     *
     * This method allows you to remove someone from blocklist. It accepts delete request and asynchronously deletes all blocklists that match given properties.
     *
     * Note: To delete a blocklist, you must list all properties that were defined in the create request. For example, to delete the blocklist with the following properties:
     *
     * `{"sender": "10950", "destination": "12022921990", "sourceType": "CUSTOM", "channel": "MMS", "createdDate": "2022-08-18T12:36:42.123Z"}`
     *
     * The delete request must contain all present properties, like this:
     *
     * `{"blocklist": [{"destinations": [{"to": "12022921990"}], "sender": "10950", "channel": "MMS", "sourceType": "CUSTOM"}`.
     *
     * Only when all properties are listed will the blocklist be removed.
     */
    public static function delete(\InfobipSDK\DTOs\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\BlocklistDeleteRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\Platform\Resource1\Blocklists::class)->delete($payload);
    }

    /** GET /platform/1/blocklists [operationId: get-all-blocklists] */
    /**
     * Get all blocklists
     *
     * This method allows you to get all blocklist records or filter them based on specific parameters.
     */
    public static function get(?\InfobipSDK\GetParams\Platform\Resource1\Blocklists $params = null): \InfobipSDK\DTOs\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\BlocklistGetResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Platform\Resource1\Blocklists::class)->get($params);
    }

    /** POST /platform/1/blocklists [operationId: create-blocklists] */
    /**
     * Create blocklists
     *
     * This method allows you to add someone to blocklist. It accepts create request with blocklists and asynchronously saves them, leaving out duplicate entries.
     */
    public static function post(\InfobipSDK\DTOs\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\BlocklistCreateRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\Platform\Resource1\Blocklists::class)->post($payload);
    }
}
