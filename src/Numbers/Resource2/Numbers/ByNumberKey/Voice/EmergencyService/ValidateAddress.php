<?php

declare(strict_types=1);

namespace InfobipSDK\Numbers\Resource2\Numbers\ByNumberKey\Voice\EmergencyService;

final class ValidateAddress extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /numbers/2/numbers/{numberKey}/voice/emergency-service/validate-address [operationId: validate-emergency-service] */
    /**
     * Validate Emergency Service Address
     *
     * Validate a Emergency Service Address
     */
    public static function post(string $numberKey, \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Address $payload): \InfobipSDK\DTOs\N7635fa9e013ed171bbe9743a6ca322c3b2b29e7574931e38f0de0bda9687aadf\ValidateAddressResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Voice\EmergencyService\ValidateAddress::class)->post($numberKey, $payload);
    }

}
