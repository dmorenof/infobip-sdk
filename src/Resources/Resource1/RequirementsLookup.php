<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Resource1;

final class RequirementsLookup extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /resources/1/requirements-lookup [operationId: resources-requirements-lookup] */
    /**
     * Get resource requirements
     *
     * Get a list of requirements needed for requesting a specific resource.
     */
    public static function post(\InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\OneOfRequirementSpecsRequestApiDoc $payload): \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\RequirementSpecs
    {
        return self::client()->resource(\InfobipSDK\Resources\Resources\Resource1\RequirementsLookup::class)->post($payload);
    }

}
