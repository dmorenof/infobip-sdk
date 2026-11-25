<?php

declare(strict_types=1);

namespace InfobipSDK\Platform\Resource1\Openapi;

final class AvailableProducts extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /platform/1/openapi/available-products [operationId: get-available-products] */
    /**
     * Get a list of available products
     *
     * Returns a list of all available Infobip products that can be used to fetch the [OpenAPI Specification for a specific product](https://www.infobip.com/docs/api/tools/openapi/get-product-level-openapi). Use this list to find the correct value for the product path parameter.
     */
    public static function get(): \InfobipSDK\DTOs\D2eeca5070e19d116b5e48cb8dbc21132490d09f32a707af8c36324fa50d906d\AvailableProducts
    {
        return self::client()->resource(\InfobipSDK\Resources\Platform\Resource1\Openapi\AvailableProducts::class)->get();
    }
}
