<?php

declare(strict_types=1);

namespace InfobipSDK\Platform\Resource1;

final class Openapi extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /platform/1/openapi [operationId: get-openapi] */
    /**
     * Get OpenAPI Specification
     *
     * Returns the complete OpenAPI Specification for the Infobip platform.
     */
    public static function get(): \InfobipSDK\DTOs\D2eeca5070e19d116b5e48cb8dbc21132490d09f32a707af8c36324fa50d906d\OpenAPI
    {
        return self::client()->resource(\InfobipSDK\Resources\Platform\Resource1\Openapi::class)->get();
    }

    /** GET /platform/1/openapi/{product} [operationId: get-product-level-openapi] */
    /**
     * Get OpenAPI Specification for a specific product
     *
     * Returns the OpenAPI specification for a specific Infobip product, such as SMS, Email, or WhatsApp. To get the correct product identifier, [view the list of available products](https://www.infobip.com/docs/api/tools/openapi/get-available-products).
     */
    public static function getByProduct(string $product): \InfobipSDK\DTOs\D2eeca5070e19d116b5e48cb8dbc21132490d09f32a707af8c36324fa50d906d\OpenAPI
    {
        return self::client()->resource(\InfobipSDK\Resources\Platform\Resource1\Openapi::class)->getByProduct($product);
    }
}
