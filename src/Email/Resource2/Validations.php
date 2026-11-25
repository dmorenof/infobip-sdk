<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource2;

final class Validations extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /email/2/validations [operationId: get-validations] */
    /**
     * Get email validations
     *
     * This method lets you review and analyze the outcomes of your
     * submitted bulk email validations to gain insights into the quality of your email list.
     *
     */
    public static function get(?\InfobipSDK\GetParams\Email\Resource2\Validations $params = null): \InfobipSDK\DTOs\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\GetValidationPageResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource2\Validations::class)->get($params);
    }

    /** POST /email/2/validations [operationId: request-validations] */
    /**
     * Validate email addresses
     *
     * This method lets you request a bulk email address validation,
     * helping you to detect low-quality emails and tidy up your recipient list.
     *
     */
    public static function post(\InfobipSDK\DTOs\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\ApiBulkRequest $payload): \InfobipSDK\DTOs\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\BulkResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource2\Validations::class)->post($payload);
    }

}
