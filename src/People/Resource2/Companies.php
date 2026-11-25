<?php

declare(strict_types=1);

namespace InfobipSDK\People\Resource2;

final class Companies extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /people/2/companies [operationId: delete-company] */
    /**
     * Delete a company
     *
     * Use this method with a query parameter to delete a company. Exactly one of the query parameters must be included in the query.
     */
    public static function delete(?\InfobipSDK\DeleteParams\People\Resource2\Companies $params = null): void
    {
        self::client()->resource(\InfobipSDK\Resources\People\Resource2\Companies::class)->delete($params);
    }

    /** GET /people/2/companies [operationId: get-a-single-company-by-name-or-a-list-of-companies] */
    /**
     * Get a single company or a list of companies
     *
     * Use this method with a query parameter to get a single company. If the query parameter is not specified, this method will return a list of companies.
     */
    public static function get(?\InfobipSDK\GetParams\People\Resource2\Companies $params = null): \InfobipSDK\Responses\People\Resource2\Companies\Get\Resource2CompaniesResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Companies::class)->get($params);
    }

    /** PATCH /people/2/companies [operationId: update-company] */
    /**
     * Partial company update
     *
     * Partial company update method is used for updating a part of the company information. Exactly one of the query parameters must be included in the query.
     */
    public static function patch(?\InfobipSDK\PatchParams\People\Resource2\Companies $params = null): \InfobipSDK\Responses\People\Resource2\Companies\Patch\Resource2CompaniesResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Companies::class)->patch($params);
    }

    /** POST /people/2/companies [operationId: create-company] */
    /**
     * Create a new company
     *
     * Use this method to create a new company.
     */
    public static function post(?\InfobipSDK\Requests\AllOfCreateCompanyBody\CompanyBodyRequest $payload = null): \InfobipSDK\Responses\People\Resource2\Companies\Post\Resource2CompaniesResponse
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Companies::class)->post();
        }
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Companies::class)->post($payload);
    }

}
