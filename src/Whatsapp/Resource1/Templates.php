<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1;

final class Templates extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /whatsapp/1/templates [operationId: get-account-whatsapp-templates] */
    /**
     * Get account WhatsApp templates
     *
     * Retrieve all templates associated with your account based on the provided filter criteria.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function get(?\InfobipSDK\GetParams\Whatsapp\Resource1\Templates $params = null): \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\TemplatesApiResponsePaginated
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Templates::class)->get($params);
    }
}
