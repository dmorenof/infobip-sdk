<?php

declare(strict_types=1);

namespace InfobipSDK\Context\Resource1;

final class Facts extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /context/1/facts [operationId: delete-facts] */
    /**
     * Delete fact definitions
     *
     * Deletes the fact definitions matching the given ids, scoped to the calling account. Unknown ids are ignored silently.
     */
    public static function delete(\InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\DeleteFactsApiRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\Context\Resource1\Facts::class)->delete($payload);
    }

    /** GET /context/1/facts [operationId: get-facts] */
    /**
     * Get fact definitions
     *
     * Returns a paginated list of fact definitions for the calling account. Supports sorting via the `orderBy` and `direction` query parameters.
     */
    public static function get(?\InfobipSDK\GetParams\Context\Resource1\Facts $params = null): \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\FactPageApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Context\Resource1\Facts::class)->get($params);
    }

    /** POST /context/1/facts [operationId: create-fact] */
    /**
     * Create fact definition
     *
     * Creates a fact definition for the calling account. The fact name must be unique within the account; the request is rejected if a fact with the same name already exists. Each account can have at most 100 fact definitions.
     */
    public static function post(\InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\CreateFactApiRequest $payload): \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\FactApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Context\Resource1\Facts::class)->post($payload);
    }

    /** GET /context/1/facts/{id} [operationId: get-fact] */
    /**
     * Get fact definition
     *
     * Returns the fact definition with the given id, scoped to the calling account.
     */
    public static function getById(string $id): \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\FactApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Context\Resource1\Facts::class)->getById($id);
    }

    /** PUT /context/1/facts/{id} [operationId: update-fact] */
    /**
     * Update fact definition
     *
     * Replaces the name and description of the fact with the given id. The new name must still be unique within the account. The value type cannot be changed after creation.
     */
    public static function putById(string $id, \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\UpdateFactApiRequest $payload): \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\FactApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Context\Resource1\Facts::class)->putById($id, $payload);
    }

}
