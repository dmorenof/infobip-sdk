<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1;

final class WebForms extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /ccaas/1/web-forms [operationId: create-webform] */
    /**
     * Create web form
     *
     * Use this method to create a new web form.
     */
    public static function post(\InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\WebFormApiRequest $payload): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\WebFormApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\WebForms::class)->post($payload);
    }

    /** DELETE /ccaas/1/web-forms/{id} [operationId: delete-webform] */
    /**
     * Delete web form
     *
     * Use this method to delete an existing web form.
     */
    public static function deleteById(string $id): void
    {
        self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\WebForms::class)->deleteById($id);
    }

    /** GET /ccaas/1/web-forms/{id} [operationId: get-webform] */
    /**
     * Get web form
     *
     * Use this method to get an existing web form.
     */
    public static function getById(string $id): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\WebFormApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\WebForms::class)->getById($id);
    }

    /** PATCH /ccaas/1/web-forms/{id} [operationId: patch-webform] */
    /**
     * Patch web form
     *
     * Use this method to patch an existing web form.
     */
    public static function patchById(string $id, \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\WebFormApiRequest $payload): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\WebFormApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\WebForms::class)->patchById($id, $payload);
    }

    /** PUT /ccaas/1/web-forms/{id} [operationId: update-webform] */
    /**
     * Update web form
     *
     * Use this method to update an existing web form.
     */
    public static function putById(string $id, \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\WebFormApiRequest $payload): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\WebFormApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\WebForms::class)->putById($id, $payload);
    }
}
