<?php

declare(strict_types=1);

namespace InfobipSDK\NumberReputation\Resource1;

final class Businesses extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /number-reputation/1/businesses [operationId: get-businesses] */
    /**
     * Get businesses
     *
     * Returns businesses registered under the customer's account with their current vetting status.
     */
    public static function get(?\InfobipSDK\GetParams\NumberReputation\Resource1\Businesses $params = null): \InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\HiyaBusinessPage
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberReputation\Resource1\Businesses::class)->get($params);
    }

    /** POST /number-reputation/1/businesses [operationId: create-business] */
    /**
     * Register a new business
     *
     * Register a new business for verification. A business must be registered and vetted before phone numbers can be added to it.
     */
    public static function post(\InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicCreateBusinessRequest $payload): \InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicCreateBusinessResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberReputation\Resource1\Businesses::class)->post($payload);
    }

    /** DELETE /number-reputation/1/businesses/{businessId} [operationId: delete-business] */
    /**
     * Remove access to a business
     *
     * Disconnects API access to the registered business. The business will be deleted together with numbers registered to this business.
     * Note: There is a recurring service fee for all registered businesses, deleting a business will terminate that recurring fee for this business.
     */
    public static function deleteByBusinessId(string $businessId): void
    {
        self::client()->resource(\InfobipSDK\Resources\NumberReputation\Resource1\Businesses::class)->deleteByBusinessId($businessId);
    }

    /** GET /number-reputation/1/businesses/{businessId} [operationId: get-business] */
    /**
     * Get business
     *
     * Get a specific business registration by its ID.
     */
    public static function getByBusinessId(string $businessId): \InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicBusiness
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberReputation\Resource1\Businesses::class)->getByBusinessId($businessId);
    }

    /** PUT /number-reputation/1/businesses/{businessId} [operationId: update-business] */
    /**
     * Update business registration info
     *
     * Update business registration information. While a business is not in REGISTERED status yet, any field may be updated, and the update triggers a fresh verification attempt. Once a business reaches REGISTERED status, only the contact object can be updated.
     */
    public static function putByBusinessId(string $businessId, \InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicCreateBusinessRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\NumberReputation\Resource1\Businesses::class)->putByBusinessId($businessId, $payload);
    }

}
