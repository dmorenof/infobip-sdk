<?php

declare(strict_types=1);

namespace InfobipSDK\Zalo\Resource1\Sender\BySender;

final class Templates extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /zalo/1/sender/{sender}/templates [operationId: get-zalo-templates] */
    /**
     * Get Zalo templates
     *
     * Returns all templates for a given sender filtered by status.
     */
    public static function get(string $sender, ?\InfobipSDK\GetParams\Zalo\Resource1\Sender\BySender\Templates $params = null): \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\PageTemplate
    {
        return self::client()->resource(\InfobipSDK\Resources\Zalo\Resource1\Sender\BySender\Templates::class)->get($sender, $params);
    }

    /** GET /zalo/1/sender/{sender}/templates/{templateName} [operationId: get-zalo-template] */
    /**
     * Get Zalo template
     *
     * Returns template's info for given template name.
     */
    public static function getByTemplateName(\InfobipSDK\PathParams\Zalo\Resource1\Sender\BySender\Templates\ByTemplateName $identifier): \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\TemplateInfo
    {
        return self::client()->resource(\InfobipSDK\Resources\Zalo\Resource1\Sender\BySender\Templates::class)->getByTemplateName($identifier);
    }

}
