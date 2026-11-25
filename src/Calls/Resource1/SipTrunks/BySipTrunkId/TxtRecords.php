<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\SipTrunks\BySipTrunkId;

final class TxtRecords extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /calls/1/sip-trunks/{sipTrunkId}/txt-records [operationId: delete-txt-record] */
    /**
     * Delete domain verification
     *
     * Delete domain verification from your SIP trunk. Use this when you no longer need to verify a specific domain or want to set it up differently.
     */
    public static function delete(string $sipTrunkId, \InfobipSDK\DeleteParams\Calls\Resource1\SipTrunks\BySipTrunkId\TxtRecords $params): void
    {
        self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\SipTrunks\BySipTrunkId\TxtRecords::class)->delete($sipTrunkId, $params);
    }

    /** GET /calls/1/sip-trunks/{sipTrunkId}/txt-records [operationId: get-txt-records] */
    /**
     * Get verified domains
     *
     * Retrieve all verified domains for your SIP trunk. This shows which domains have been set up for verification and their current verification codes.
     */
    public static function get(string $sipTrunkId): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\TxtRecordResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\SipTrunks\BySipTrunkId\TxtRecords::class)->get($sipTrunkId);
    }

    /** POST /calls/1/sip-trunks/{sipTrunkId}/txt-records [operationId: create-txt-record] */
    /**
     * Create domain verification
     *
     * Create domain verification for your SIP trunk. Use this endpoint to verify domain ownership with your service provider. You'll need the verification code provided by your service provider.
     */
    public static function post(string $sipTrunkId, \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\TxtRecordRequest $payload): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\TxtRecordResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\SipTrunks\BySipTrunkId\TxtRecords::class)->post($sipTrunkId, $payload);
    }

    /** PUT /calls/1/sip-trunks/{sipTrunkId}/txt-records [operationId: update-txt-record] */
    /**
     * Update domain verification
     *
     * Update the verification code for an existing domain. Use this when your service provider issues a new verification code or you need to update the verification settings for a domain.
     */
    public static function put(string $sipTrunkId, \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\TxtRecordRequest $payload): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\TxtRecordResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\SipTrunks\BySipTrunkId\TxtRecords::class)->put($sipTrunkId, $payload);
    }
}
