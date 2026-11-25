<?php

declare(strict_types=1);

namespace InfobipSDK\Rcs\Resource2\CapabilityCheck;

final class Query extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /rcs/2/capability-check/query [operationId: capability-check-rcs-destinations-query] */
    /**
     * Check RCS capability
     *
     * Use this endpoint to verify whether the phone numbers in a given list can receive RCS messages from the specified sender. You can check up to 500 phone numbers in a single request; however, for improved efficiency, performance, and response time, we recommend using smaller batches of 1 to 10 numbers in a single request. This synchronous API is typically used for routing purposes when verifying a number’s RCS capability immediately before sending a message. This API supports up to a 100 requests per second. For bulk database cleanup, we recommend to use the asynchronous Capability Check (CapCheck) API.
     *
     * The response will provide the list of capability statuses for each phone number individually. Ensure the sender is configured and launched on the mobile network/carrier that manages the phone numbers being tested for RCS capability. If the sender is not launched on the network, the capability check request will always return a negative status for the tested phone numbers.
     */
    public static function post(\InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CapabilityCheckSyncRequest $payload): \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CapabilityCheckSyncResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource2\CapabilityCheck\Query::class)->post($payload);
    }

}
