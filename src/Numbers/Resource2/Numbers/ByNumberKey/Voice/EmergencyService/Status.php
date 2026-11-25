<?php

declare(strict_types=1);

namespace InfobipSDK\Numbers\Resource2\Numbers\ByNumberKey\Voice\EmergencyService;

final class Status extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /numbers/2/numbers/{numberKey}/voice/emergency-service/status [operationId: get-emergency-service-status] */
    /**
     * Get Emergency Service Address status
     *
     * Get a Emergency Service Address status.
     */
    public static function get(string $numberKey): \InfobipSDK\DTOs\N7635fa9e013ed171bbe9743a6ca322c3b2b29e7574931e38f0de0bda9687aadf\EmergencyAddressStatus
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Voice\EmergencyService\Status::class)->get($numberKey);
    }

}
