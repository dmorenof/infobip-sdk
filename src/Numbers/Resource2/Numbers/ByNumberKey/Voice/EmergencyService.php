<?php

declare(strict_types=1);

namespace InfobipSDK\Numbers\Resource2\Numbers\ByNumberKey\Voice;

final class EmergencyService extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /numbers/2/numbers/{numberKey}/voice/emergency-service [operationId: delete-emergency-service] */
    /**
     * Delete Emergency Service Address
     *
     * Delete a Emergency Service Address
     */
    public static function delete(string $numberKey): \InfobipSDK\DTOs\N7635fa9e013ed171bbe9743a6ca322c3b2b29e7574931e38f0de0bda9687aadf\EmergencyAddress
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Voice\EmergencyService::class)->delete($numberKey);
    }

    /** GET /numbers/2/numbers/{numberKey}/voice/emergency-service [operationId: get-emergency-service] */
    /**
     * Get Emergency Service Address
     *
     * Get a Emergency Service Address
     */
    public static function get(string $numberKey): \InfobipSDK\DTOs\N7635fa9e013ed171bbe9743a6ca322c3b2b29e7574931e38f0de0bda9687aadf\EmergencyAddress
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Voice\EmergencyService::class)->get($numberKey);
    }

    /** POST /numbers/2/numbers/{numberKey}/voice/emergency-service [operationId: create-emergency-service] */
    /**
     * Create Emergency Service Address
     *
     * Create Emergency Service Address
     *
     * Emergency Service Address allows you to set any physical address in the United States as your address to be transmitted on emergency number calls.
     * This means your calls to the emergency number will route to the closest PSAP (Public Safety Answering Point) to your registered address on our system.
     *
     * That address will also appear on the emergency services operator’s screen when you call.
     *
     */
    public static function post(string $numberKey, \InfobipSDK\DTOs\N7635fa9e013ed171bbe9743a6ca322c3b2b29e7574931e38f0de0bda9687aadf\EmergencyAddress $payload): \InfobipSDK\DTOs\N7635fa9e013ed171bbe9743a6ca322c3b2b29e7574931e38f0de0bda9687aadf\EmergencyAddress
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Voice\EmergencyService::class)->post($numberKey, $payload);
    }

    /** PUT /numbers/2/numbers/{numberKey}/voice/emergency-service [operationId: update-emergency-service] */
    /**
     * Update Emergency Service Address
     *
     * Update a Emergency Service Address
     */
    public static function put(string $numberKey, \InfobipSDK\DTOs\N7635fa9e013ed171bbe9743a6ca322c3b2b29e7574931e38f0de0bda9687aadf\EmergencyAddress $payload): \InfobipSDK\DTOs\N7635fa9e013ed171bbe9743a6ca322c3b2b29e7574931e38f0de0bda9687aadf\EmergencyAddress
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Voice\EmergencyService::class)->put($numberKey, $payload);
    }
}
