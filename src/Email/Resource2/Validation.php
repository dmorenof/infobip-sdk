<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource2;

final class Validation extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /email/2/validation [operationId: validate-email-addresses] */
    /**
     * Validate email address
     *
     * This method lets you request validation of a single email address in real-time,
     * helping you to identify and remove poor-quality emails from your list.
     *
     */
    public static function post(?\InfobipSDK\DTOs\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\ValidationRequest $payload = null): \InfobipSDK\DTOs\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\ValidationResponse
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\InfobipSDK\Resources\Email\Resource2\Validation::class)->post();
        }
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource2\Validation::class)->post($payload);
    }
}
