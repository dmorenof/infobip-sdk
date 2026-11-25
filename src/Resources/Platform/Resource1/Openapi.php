<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Platform\Resource1;

final class Openapi extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/platform/1/openapi',
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
        'responseType' => '\\InfobipSDK\\DTOs\\D2eeca5070e19d116b5e48cb8dbc21132490d09f32a707af8c36324fa50d906d\\OpenAPI',
    ];

    /**
     * Get OpenAPI Specification
     *
     * Returns the complete OpenAPI Specification for the Infobip platform.
     */
    public function get(): \InfobipSDK\DTOs\D2eeca5070e19d116b5e48cb8dbc21132490d09f32a707af8c36324fa50d906d\OpenAPI
    {
        /** @var \InfobipSDK\DTOs\D2eeca5070e19d116b5e48cb8dbc21132490d09f32a707af8c36324fa50d906d\OpenAPI $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

    private const array GET_BY_PRODUCT = [
        'method' => 'GET',
        'path' => '/platform/1/openapi/{product}',
        'errors' => [
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
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
        'responseType' => '\\InfobipSDK\\DTOs\\D2eeca5070e19d116b5e48cb8dbc21132490d09f32a707af8c36324fa50d906d\\OpenAPI',
    ];

    /**
     * Get OpenAPI Specification for a specific product
     *
     * Returns the OpenAPI specification for a specific Infobip product, such as SMS, Email, or WhatsApp. To get the correct product identifier, [view the list of available products](https://www.infobip.com/docs/api/tools/openapi/get-available-products).
     */
    public function getByProduct(string $product): \InfobipSDK\DTOs\D2eeca5070e19d116b5e48cb8dbc21132490d09f32a707af8c36324fa50d906d\OpenAPI
    {
        /** @var \InfobipSDK\DTOs\D2eeca5070e19d116b5e48cb8dbc21132490d09f32a707af8c36324fa50d906d\OpenAPI $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_PRODUCT), path: ['product' => $product]);
        return $result;
    }
}
