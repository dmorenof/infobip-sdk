<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\SipTrunks;

final class ServiceAddresses extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /calls/1/sip-trunks/service-addresses [operationId: get-sip-trunk-service-addresses] */
    /**
     * Get SIP trunk service addresses
     *
     * Get SIP trunk service addresses.
     */
    public static function get(?\InfobipSDK\GetParams\Calls\Resource1\SipTrunks\ServiceAddresses $params = null): \InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\SipTrunkServiceAddressPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\SipTrunks\ServiceAddresses::class)->get($params);
    }

    /** POST /calls/1/sip-trunks/service-addresses [operationId: create-sip-trunk-service-address] */
    /**
     * Create SIP trunk service address
     *
     * Create a SIP trunk service address.
     */
    public static function post(\InfobipSDK\DTOs\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\PublicSipTrunkServiceAddressRequest $payload): \InfobipSDK\DTOs\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\PublicSipTrunkServiceAddress
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\SipTrunks\ServiceAddresses::class)->post($payload);
    }

    /** DELETE /calls/1/sip-trunks/service-addresses/{sipTrunkServiceAddressId} [operationId: delete-sip-trunk-service-address] */
    /**
     * Delete SIP trunk service address
     *
     * Delete SIP trunk service address.
     */
    public static function deleteBySipTrunkServiceAddressId(string $sipTrunkServiceAddressId): \InfobipSDK\DTOs\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\PublicSipTrunkServiceAddress
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\SipTrunks\ServiceAddresses::class)->deleteBySipTrunkServiceAddressId($sipTrunkServiceAddressId);
    }

    /** GET /calls/1/sip-trunks/service-addresses/{sipTrunkServiceAddressId} [operationId: get-sip-trunk-service-address] */
    /**
     * Get SIP trunk service address
     *
     * Get SIP trunk service address.
     */
    public static function getBySipTrunkServiceAddressId(string $sipTrunkServiceAddressId): \InfobipSDK\DTOs\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\PublicSipTrunkServiceAddress
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\SipTrunks\ServiceAddresses::class)->getBySipTrunkServiceAddressId($sipTrunkServiceAddressId);
    }

    /** PUT /calls/1/sip-trunks/service-addresses/{sipTrunkServiceAddressId} [operationId: update-sip-trunk-service-address] */
    /**
     * Update SIP trunk service address
     *
     * Update SIP trunk service address.
     */
    public static function putBySipTrunkServiceAddressId(string $sipTrunkServiceAddressId, \InfobipSDK\DTOs\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\PublicSipTrunkServiceAddressRequest $payload): \InfobipSDK\DTOs\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\PublicSipTrunkServiceAddress
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\SipTrunks\ServiceAddresses::class)->putBySipTrunkServiceAddressId($sipTrunkServiceAddressId, $payload);
    }

}
