<?php

declare(strict_types=1);

namespace InfobipSDK\Resource2fa\Resource2;

final class Applications extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /2fa/2/applications [operationId: get-2fa-applications] */
    /**
     * Get all 2FA applications
     *
     * An application is a container for 2FA message templates. Use this method to list your applications.
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public static function get(): \InfobipSDK\Collections\Resource2fa\Resource2\Applications\Get\Resource2ApplicationsCollection
    {
        return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Applications::class)->get();
    }

    /** POST /2fa/2/applications [operationId: create-2fa-application] */
    /**
     * Create 2FA application
     *
     * Create and configure a new 2FA application.
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public static function post(?\InfobipSDK\Requests\ApplicationBodyRequest $payload = null): \InfobipSDK\Responses\Resource2fa\Resource2\Applications\Post\Resource2ApplicationsResponse
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Applications::class)->post();
        }
        return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Applications::class)->post($payload);
    }

    /** GET /2fa/2/applications/{appId} [operationId: get-2fa-application] */
    /**
     * Get 2FA application
     *
     * Get a single 2FA application to see its configuration details.
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public static function getByAppId(string $appId): \InfobipSDK\Responses\Resource2fa\Resource2\Applications\ByAppId\Get\ApplicationsByAppIdResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Applications::class)->getByAppId($appId);
    }

    /** PUT /2fa/2/applications/{appId} [operationId: update-2fa-application] */
    /**
     * Update 2FA application
     *
     * Change configuration options for your existing 2FA application.
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public static function putByAppId(string $appId, ?\InfobipSDK\Requests\AllOfUpdate2faApplicationBody\ApplicationBodyRequest $payload = null): \InfobipSDK\Responses\Resource2fa\Resource2\Applications\ByAppId\Put\ApplicationsByAppIdResponse
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Applications::class)->putByAppId($appId);
        }
        return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Applications::class)->putByAppId($appId, $payload);
    }
}
