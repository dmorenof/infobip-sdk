<?php

declare(strict_types=1);

namespace InfobipSDK\Rcs\Resource2\CapabilityCheck;

final class Notify extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /rcs/2/capability-check/notify [operationId: capability-check-rcs-destinations-notify] */
    /**
     * Check RCS capability (async)
     *
     * Use this endpoint to verify whether the phone numbers in a given list can receive RCS messages from the specified sender. You can check up to 10,000 phone numbers in a single request. The [Capability Check result](#channels/rcs/receive-capability-check-result) returns asynchronously and provides the capability status for each phone number individually.
     *
     * Ensure the sender is configured and launched on the mobile network/carrier that manages the phone numbers being tested for RCS capability. If the sender is not launched on the network, the capability check request will always return a negative status for the tested phone numbers.
     */
    public static function post(\InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CapabilityCheckAsyncRequest $payload): \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CapabilityCheckAsyncResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource2\CapabilityCheck\Notify::class)->post($payload);
    }
}
