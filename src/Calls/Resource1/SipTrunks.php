<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1;

final class SipTrunks extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /calls/1/sip-trunks [operationId: get-sip-trunks] */
    /**
     * Get SIP trunks
     *
     * Get SIP trunks with pagination.
     */
    public static function get(?\InfobipSDK\GetParams\Calls\Resource1\SipTrunks $params = null): \InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\SipTrunkPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\SipTrunks::class)->get($params);
    }

    /** POST /calls/1/sip-trunks [operationId: create-sip-trunk] */
    /**
     * Create SIP trunk
     *
     * Create a SIP trunk. Fields not sent in request body will take default values. This operation is asynchronous. The SIP trunk will be created in the background.
     */
    public static function post(\InfobipSDK\DTOs\N6423f137d264daaaab4ca521d6dfeb19cab29b6b25c3d2da0c1c3fb475a5e829\SipTrunkRequest $payload): \InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\CreateSipTrunkResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\SipTrunks::class)->post($payload);
    }

    /** DELETE /calls/1/sip-trunks/{sipTrunkId} [operationId: delete-sip-trunk] */
    /**
     * Delete SIP trunk
     *
     * Delete a SIP trunk. This operation is asynchronous. The SIP trunk will be deleted in the background.
     */
    public static function deleteBySipTrunkId(string $sipTrunkId): \InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\SipTrunkResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\SipTrunks::class)->deleteBySipTrunkId($sipTrunkId);
    }

    /** GET /calls/1/sip-trunks/{sipTrunkId} [operationId: get-sip-trunk] */
    /**
     * Get SIP trunk
     *
     * Get a single SIP trunk.
     */
    public static function getBySipTrunkId(string $sipTrunkId): \InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\SipTrunkResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\SipTrunks::class)->getBySipTrunkId($sipTrunkId);
    }

    /** PUT /calls/1/sip-trunks/{sipTrunkId} [operationId: update-sip-trunk] */
    /**
     * Update SIP trunk
     *
     * Update a SIP trunk. Fields not sent in request body will take default values and overwrite the existing ones. This operation is asynchronous. The SIP trunk will be updated in the background.
     */
    public static function putBySipTrunkId(string $sipTrunkId, \InfobipSDK\DTOs\N6423f137d264daaaab4ca521d6dfeb19cab29b6b25c3d2da0c1c3fb475a5e829\SipTrunkUpdateRequest $payload): \InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\SipTrunkResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\SipTrunks::class)->putBySipTrunkId($sipTrunkId, $payload);
    }

}
