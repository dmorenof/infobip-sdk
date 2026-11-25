<?php

declare(strict_types=1);

namespace InfobipSDK\Rcs\Resource1\Templates;

final class TemplateProviders extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /rcs/1/templates/template-providers [operationId: rcs-template-providers] */
    /**
     * Get RCS template providers
     *
     * Get list of available template providers. List can be filtered by sender and country code.
     */
    public static function get(?\InfobipSDK\GetParams\Rcs\Resource1\Templates\TemplateProviders $params = null): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateProvidersResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource1\Templates\TemplateProviders::class)->get($params);
    }
}
