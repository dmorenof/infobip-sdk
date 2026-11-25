<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Resources\Resource1;

final class RequirementsLookup extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/resources/1/requirements-lookup',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\\RequirementSpecs',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\\OneOfRequirementSpecsRequestApiDoc',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Get resource requirements
     *
     * Get a list of requirements needed for requesting a specific resource.
     */
    public function post(\InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\OneOfRequirementSpecsRequestApiDoc $payload): \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\RequirementSpecs
    {
        /** @var \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\RequirementSpecs $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
