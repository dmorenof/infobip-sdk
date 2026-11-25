<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1;

final class Templates extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/1/templates [operationId: get-templates] */
    /**
     * Get templates
     *
     * Use this method to get a list of templates with pagination and filtering options. Using the filter is optional.
     * The result can be filtered by one or many optional filters described in the parameters.
     * Results are ordered by creation in descending order by default, meaning the newest template will be returned first.
     * <a href="https://www.infobip.com/docs/conversations-api/templates" target="_blank">More info</a>
     */
    public static function get(?\InfobipSDK\GetParams\Ccaas\Resource1\Templates $params = null): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\TemplateResultPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Templates::class)->get($params);
    }

    /** GET /ccaas/1/templates/{templateId} [operationId: get-template] */
    /**
     * Get template
     *
     * Use this method to get a single template. <a href="https://www.infobip.com/docs/conversations-api/templates" target="_blank">More info</a>
     */
    public static function getByTemplateId(string $templateId): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\TemplateApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Templates::class)->getByTemplateId($templateId);
    }

}
