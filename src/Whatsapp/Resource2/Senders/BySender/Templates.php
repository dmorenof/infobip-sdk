<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource2\Senders\BySender;

final class Templates extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /whatsapp/2/senders/{sender}/templates [operationId: get-whatsapp-templates] */
    /**
     * Get WhatsApp Templates
     *
     * Get all the templates and their statuses for a given sender.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function get(string $sender): \InfobipSDK\DTOs\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\TemplatesApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource2\Senders\BySender\Templates::class)->get($sender);
    }

    /** POST /whatsapp/2/senders/{sender}/templates [operationId: create-whatsapp-template] */
    /**
     * Create WhatsApp Template
     *
     * Create a WhatsApp template. Once created, Infobip submits the template for WhatsApp's review and approval. When approved, a template can be sent to end users. Refer to [template guidelines](https://www.infobip.com/docs/whatsapp/remaining-compliant#message-templates) for additional info.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function post(string $sender, \InfobipSDK\DTOs\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\TemplatePublicApiRequest $payload): \InfobipSDK\DTOs\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\TemplateApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource2\Senders\BySender\Templates::class)->post($sender, $payload);
    }

    /** DELETE /whatsapp/2/senders/{sender}/templates/{id} [operationId: delete-whatsapp-template] */
    /**
     * Delete WhatsApp Template
     *
     * Delete WhatsApp template.
     * * If registered in multiple languages, deleting the message template will also delete all its languages.
     * * The template will be deleted for all senders registered under the same WhatsApp Business Account (WABA).
     * * The system will attempt to deliver sent messages for 30 days, regardless of the template deletion.
     * * Once deleted, the name of the approved template cannot be reused for 30 days.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function deleteById(\InfobipSDK\PathParams\Whatsapp\Resource2\Senders\BySender\Templates\ById $identifier): void
    {
        self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource2\Senders\BySender\Templates::class)->deleteById($identifier);
    }

    /** GET /whatsapp/2/senders/{sender}/templates/{id} [operationId: get-whatsapp-template] */
    /**
     * Get WhatsApp Template
     *
     * Get a single template with its status for a given template ID.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function getById(\InfobipSDK\PathParams\Whatsapp\Resource2\Senders\BySender\Templates\ById $identifier): \InfobipSDK\DTOs\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\TemplateApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource2\Senders\BySender\Templates::class)->getById($identifier);
    }

    /** PATCH /whatsapp/2/senders/{sender}/templates/{id} [operationId: edit-whatsapp-template] */
    /**
     * Edit WhatsApp Template
     *
     * Edit a WhatsApp template. Once edited, Infobip submits the template for WhatsApp's review and approval. When approved, a template can be sent to end users. Refer to [template guidelines](https://www.infobip.com/docs/whatsapp/remaining-compliant#message-templates) for additional info.
     * * Only templates with an approved, rejected, or paused status can be edited.
     * * Use the structure provided in the [Create WhatsApp Template](#channels/whatsapp/whatsapp-service-management/create-whatsapp-template) endpoint.
     * * Category of an approved template cannot be edited.
     * * Approved templates can be edited up to 10 times in a 30-day window, or 1 time in a 24-hour window. Rejected or paused templates can be edited an unlimited number of times.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function patchById(\InfobipSDK\PathParams\Whatsapp\Resource2\Senders\BySender\Templates\ById $identifier, \InfobipSDK\DTOs\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\TemplateEditPublicApiRequest $payload): \InfobipSDK\DTOs\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\TemplateApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource2\Senders\BySender\Templates::class)->patchById($identifier, $payload);
    }

}
