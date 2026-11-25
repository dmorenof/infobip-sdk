<?php

declare(strict_types=1);

namespace InfobipSDK\CallLink\Resource1;

final class Links extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /call-link/1/links [operationId: get-call-links] */
    /**
     * Get call links
     *
     * Use this method to retrieve all call links.
     */
    public static function get(?\InfobipSDK\GetParams\CallLink\Resource1\Links $params = null): \InfobipSDK\DTOs\D32f709b8e696d073f5212b1e1d90721a8fd1118bf2c8abce078bf2baf7d1707\CallLinkPage
    {
        return self::client()->resource(\InfobipSDK\Resources\CallLink\Resource1\Links::class)->get($params);
    }

    /** POST /call-link/1/links [operationId: create-call-link] */
    /**
     * Create call link
     *
     * Create a link to send to someone who will then initiate a call.
     */
    public static function post(\InfobipSDK\DTOs\Ae8a6eecccfb565f1840ac10e7bfb960a35d1e256ae31abf1bdea45a1d2f5557\CallLinkRequest $payload): \InfobipSDK\DTOs\Ae8a6eecccfb565f1840ac10e7bfb960a35d1e256ae31abf1bdea45a1d2f5557\CallLinkResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\CallLink\Resource1\Links::class)->post($payload);
    }

    /** DELETE /call-link/1/links/{id} [operationId: delete-call-link] */
    /**
     * Delete call link
     *
     * Use this method to delete a call link by its ID.
     */
    public static function deleteById(string $id): \InfobipSDK\DTOs\Ae8a6eecccfb565f1840ac10e7bfb960a35d1e256ae31abf1bdea45a1d2f5557\CallLink
    {
        return self::client()->resource(\InfobipSDK\Resources\CallLink\Resource1\Links::class)->deleteById($id);
    }

    /** GET /call-link/1/links/{id} [operationId: get-call-link] */
    /**
     * Get call link
     *
     * Use this method to get a call link by its ID.
     */
    public static function getById(string $id): \InfobipSDK\DTOs\Ae8a6eecccfb565f1840ac10e7bfb960a35d1e256ae31abf1bdea45a1d2f5557\CallLink
    {
        return self::client()->resource(\InfobipSDK\Resources\CallLink\Resource1\Links::class)->getById($id);
    }

}
