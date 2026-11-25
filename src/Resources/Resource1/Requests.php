<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Resource1;

final class Requests extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /resources/1/requests [operationId: get-resource-requests] */
    /**
     * Get resource requests
     *
     * Gets a page of resource requests, using query parameters to filter results.
     */
    public static function get(?\InfobipSDK\GetParams\Resources\Resource1\Requests $params = null): \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\PageResourceOrderApiDoc
    {
        return self::client()->resource(\InfobipSDK\Resources\Resources\Resource1\Requests::class)->get($params);
    }

    /** POST /resources/1/requests [operationId: submit-resource-request] */
    /**
     * Submit resource request
     *
     * Submits a resource request with Infobip. Please note that costs may apply.
     */
    public static function post(\InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\OneOfResourceOrderRequestApiDoc $payload): \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\ResourceOrderIdentifier
    {
        return self::client()->resource(\InfobipSDK\Resources\Resources\Resource1\Requests::class)->post($payload);
    }

    /** GET /resources/1/requests/{id} [operationId: get-resource-request] */
    /**
     * Get resource request
     *
     * Retrieves a previously submitted resource request by its ID.
     */
    public static function getById(string $id): \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\OneOfResourceOrderApiDoc
    {
        return self::client()->resource(\InfobipSDK\Resources\Resources\Resource1\Requests::class)->getById($id);
    }

    /** PATCH /resources/1/requests/{id} [operationId: update-resource-request] */
    /**
     * Update resource request
     *
     * Updates an existing resource request with Infobip. Resource request may only be updated when in UPDATE_REQUESTED and UPDATE_REQUESTED_BY_INTERNAL_REVIEWER status.
     * Limited to ALPHANUMERIC_REGISTRATION, NUMBER_PURCHASE and RCS_SENDER_LAUNCH requests only.
     * **All requirements data must be provided within the request, not just the incorrect or changed ones.**
     * If the resource request has `additionalRequirements`, provide them in `requirements` as well.
     *
     */
    public static function patchById(string $id, \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\UpdateResourceOrderRequest $payload): \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\OneOfResourceOrderApiDoc
    {
        return self::client()->resource(\InfobipSDK\Resources\Resources\Resource1\Requests::class)->patchById($id, $payload);
    }

}
