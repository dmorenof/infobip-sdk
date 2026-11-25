<?php

declare(strict_types=1);

namespace InfobipSDK\Forms\Resource1;

final class Forms extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /forms/1/forms [operationId: get-forms] */
    /**
     * Get forms
     *
     * Use this method to get a list of forms.
     */
    public static function get(?\InfobipSDK\GetParams\Forms\Resource1\Forms $params = null): \InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ApiFormListDto
    {
        return self::client()->resource(\InfobipSDK\Resources\Forms\Resource1\Forms::class)->get($params);
    }

    /** GET /forms/1/forms/{id} [operationId: get-form] */
    /**
     * Get form
     *
     * Use this method to get a form by its ID.
     */
    public static function getById(string $id): \InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ApiFormDto
    {
        return self::client()->resource(\InfobipSDK\Resources\Forms\Resource1\Forms::class)->getById($id);
    }

}
