<?php

declare(strict_types=1);

namespace InfobipSDK\Forms\Resource1\Forms\ById;

final class Data extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /forms/1/forms/{id}/data [operationId: submit-form-data] */
    /**
     * Submit form data
     *
     * Use this method to submit form data.
     */
    public static function post(string $id, \InfobipSDK\PostParams\Forms\Resource1\Forms\ById\Data $params): \InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ApiStatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Forms\Resource1\Forms\ById\Data::class)->post($id, $params);
    }
}
