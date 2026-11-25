<?php

declare(strict_types=1);

namespace InfobipSDK\Forms\Resource1\Forms\ById;

final class Views extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /forms/1/forms/{id}/views [operationId: increment-view-count] */
    /**
     * Increment form view count
     *
     * Use this method to increase the view counter of a specific form. It's used for proper statistics calculation. Statistics are available on the form performance page on the Portal.
     */
    public static function post(string $id): \InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ApiStatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Forms\Resource1\Forms\ById\Views::class)->post($id);
    }

}
