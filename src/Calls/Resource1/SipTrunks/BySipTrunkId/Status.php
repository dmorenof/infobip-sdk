<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\SipTrunks\BySipTrunkId;

final class Status extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /calls/1/sip-trunks/{sipTrunkId}/status [operationId: get-sip-trunk-status] */
    /**
     * Get SIP trunk status
     *
     * Get a SIP trunk status. Successfully deleted SIP trunk does not have status.
     */
    public static function get(string $sipTrunkId): \InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\ExtendedSipTrunkStatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\SipTrunks\BySipTrunkId\Status::class)->get($sipTrunkId);
    }

    /** POST /calls/1/sip-trunks/{sipTrunkId}/status [operationId: set-sip-trunk-status] */
    /**
     * Set SIP trunk status
     *
     * Set a SIP trunk's status.
     */
    public static function post(string $sipTrunkId, \InfobipSDK\DTOs\N6423f137d264daaaab4ca521d6dfeb19cab29b6b25c3d2da0c1c3fb475a5e829\SipTrunkStatusRequest $payload): \InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\SipTrunkStatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\SipTrunks\BySipTrunkId\Status::class)->post($sipTrunkId, $payload);
    }

}
