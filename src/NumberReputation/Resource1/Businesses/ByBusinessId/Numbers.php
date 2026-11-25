<?php

declare(strict_types=1);

namespace InfobipSDK\NumberReputation\Resource1\Businesses\ByBusinessId;

final class Numbers extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /number-reputation/1/businesses/{businessId}/numbers [operationId: delete-phone-numbers] */
    /**
     * Remove phone numbers
     *
     * Remove phone numbers from a business. Provide either phoneNumbers or jobName query parameter (at least one required, cannot provide both).
     */
    public static function delete(string $businessId, ?\InfobipSDK\DeleteParams\NumberReputation\Resource1\Businesses\ByBusinessId\Numbers $params = null): void
    {
        self::client()->resource(\InfobipSDK\Resources\NumberReputation\Resource1\Businesses\ByBusinessId\Numbers::class)->delete($businessId, $params);
    }

    /** GET /number-reputation/1/businesses/{businessId}/numbers [operationId: get-business-phone-numbers] */
    /**
     * Get business phone numbers
     *
     * Get phone numbers registered under a specific business.
     */
    public static function get(string $businessId, ?\InfobipSDK\GetParams\NumberReputation\Resource1\Businesses\ByBusinessId\Numbers $params = null): \InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\HiyaPhoneNumberPage
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberReputation\Resource1\Businesses\ByBusinessId\Numbers::class)->get($businessId, $params);
    }

    /** POST /number-reputation/1/businesses/{businessId}/numbers [operationId: register-phone-numbers] */
    /**
     * Register phone numbers
     *
     * Register phone numbers against a business. Numbers are submitted in batches identified by a jobName. Business must be in REGISTERED status.
     */
    public static function post(string $businessId, \InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicRegisterPhoneNumbersRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\NumberReputation\Resource1\Businesses\ByBusinessId\Numbers::class)->post($businessId, $payload);
    }
}
