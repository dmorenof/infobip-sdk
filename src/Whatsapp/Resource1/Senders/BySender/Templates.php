<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\Senders\BySender;

final class Templates extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /whatsapp/1/senders/{sender}/templates [operationId: deprecated-get-whatsapp-templates] */
    /**
     * Get WhatsApp Templates
     *
     * Get all the templates and their statuses for a given sender. This version is deprecated as of June 29th 2022, meaning no fixes/updates will be provided and no new parameters will be added. This API will be deleted at the end of the year. Please use the [latest version](#channels/whatsapp/get-whatsapp-templates).
     * Documentation: https://www.infobip.com/docs/whatsapp
     *
     * @deprecated
     */
    public static function get(string $sender): \InfobipSDK\DTOs\N18564d7c4791a7efa60d2b6c8cb85f3f93b60abdd39e67aaeb1d653e4aff3ecd\V1TemplatesApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Templates::class)->get($sender);
    }

    /** POST /whatsapp/1/senders/{sender}/templates [operationId: deprecated-create-whatsapp-template] */
    /**
     * Create WhatsApp Template
     *
     * Create a WhatsApp template. Created template will be submitted for WhatsApp's review and approval. Once approved, template can be sent to end-users. Refer to [template guidelines](https://www.infobip.com/docs/whatsapp/message-types#guidelines-amp-best-practices) for additional info. This version is deprecated as of June 29th 2022, meaning no fixes/updates will be provided and no new parameters will be added. This API will be deleted at the end of the year. Please use the [latest version](#channels/whatsapp/create-whatsapp-template).
     * Documentation: https://www.infobip.com/docs/whatsapp
     *
     * @deprecated
     */
    public static function post(string $sender, \InfobipSDK\DTOs\N8cb345d2b2e2a0cd5a7383bf2012768938eaa465c6e4f6554958ac7f4a58aa3f\V1TemplatePublicApiRequest $payload): \InfobipSDK\DTOs\N18564d7c4791a7efa60d2b6c8cb85f3f93b60abdd39e67aaeb1d653e4aff3ecd\V1TemplateApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Templates::class)->post($sender, $payload);
    }
}
