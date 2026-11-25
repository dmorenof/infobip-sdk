<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Platform\Resource1\Openapi;

final class AvailableProducts extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/platform/1/openapi/available-products',
        'errors' => [
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\D2eeca5070e19d116b5e48cb8dbc21132490d09f32a707af8c36324fa50d906d\\AvailableProducts',
    ];

    /**
     * Get a list of available products
     *
     * Returns a list of all available Infobip products that can be used to fetch the [OpenAPI Specification for a specific product](https://www.infobip.com/docs/api/tools/openapi/get-product-level-openapi). Use this list to find the correct value for the product path parameter.
     */
    public function get(): \InfobipSDK\DTOs\D2eeca5070e19d116b5e48cb8dbc21132490d09f32a707af8c36324fa50d906d\AvailableProducts
    {
        /** @var \InfobipSDK\DTOs\D2eeca5070e19d116b5e48cb8dbc21132490d09f32a707af8c36324fa50d906d\AvailableProducts $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

}
