<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Resource1\Requests\ById;

final class Requirements extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /resources/1/requests/{id}/requirements [operationId: get-resource-request-requirements] */
    /**
     * Get resource request requirements
     *
     * Get a list of requirements for a specific resource request. These requirements can differ from the ones returned by the requirements lookup.
     * Any `additionalRequirements` of the resource request are included in the list.
     */
    public static function get(string $id): \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\RequirementSpecs
    {
        return self::client()->resource(\InfobipSDK\Resources\Resources\Resource1\Requests\ById\Requirements::class)->get($id);
    }
}
