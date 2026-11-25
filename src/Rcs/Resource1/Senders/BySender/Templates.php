<?php

declare(strict_types=1);

namespace InfobipSDK\Rcs\Resource1\Senders\BySender;

final class Templates extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /rcs/1/senders/{sender}/templates [operationId: rcs-template-list] */
    /**
     * Get RCS templates
     *
     * Retrieve all RCS templates and their statuses for a specified sender. Available only for senders that support templates.
     */
    public static function get(string $sender, ?\InfobipSDK\GetParams\Rcs\Resource1\Senders\BySender\Templates $params = null): \InfobipSDK\Collections\Rcs\Resource1\Senders\BySender\Templates\Get\BySenderTemplatesCollection
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource1\Senders\BySender\Templates::class)->get($sender, $params);
    }

    /** POST /rcs/1/senders/{sender}/templates [operationId: rcs-template-create-v2] */
    /**
     * Create an RCS template
     *
     * Create an RCS template for a specified sender. The template will be submitted for review and approval. Once approved, the template can be used for messaging. Available only for senders that support templates.
     */
    public static function post(string $sender, \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\CreateRcsTemplateRequest $payload): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplate
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource1\Senders\BySender\Templates::class)->post($sender, $payload);
    }

    /** DELETE /rcs/1/senders/{sender}/templates/{templateName} [operationId: rcs-template-delete] */
    /**
     * Delete an RCS template
     *
     * Delete an RCS template. Any messages sent using a deleted template will be rejected. Available only for senders that support templates.
     */
    public static function deleteByTemplateName(\InfobipSDK\PathParams\Rcs\Resource1\Senders\BySender\Templates\ByTemplateName $identifier): void
    {
        self::client()->resource(\InfobipSDK\Resources\Rcs\Resource1\Senders\BySender\Templates::class)->deleteByTemplateName($identifier);
    }

    /** GET /rcs/1/senders/{sender}/templates/{templateName} [operationId: rcs-template-get] */
    /**
     * Get RCS template
     *
     * Retrieve a single RCS template with its status for a given sender and template name. Available only for senders that support templates.
     * Documentation: https://www.infobip.com/docs/rcs
     */
    public static function getByTemplateName(\InfobipSDK\PathParams\Rcs\Resource1\Senders\BySender\Templates\ByTemplateName $identifier): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplate
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource1\Senders\BySender\Templates::class)->getByTemplateName($identifier);
    }

    /** POST /rcs/1/senders/{sender}/templates/{templateName} [operationId: rcs-template-create] */
    /**
     * Create an RCS template
     *
     * Create an RCS template for a specified sender. The template will be submitted for review and approval. Once approved, the template can be used for messaging. Available only for senders that support templates. Please note that this endpoint is deprecated and will be removed in future versions.
     *
     * @deprecated
     */
    public static function postByTemplateName(\InfobipSDK\PathParams\Rcs\Resource1\Senders\BySender\Templates\ByTemplateName $identifier, \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateContent $payload): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplate
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource1\Senders\BySender\Templates::class)->postByTemplateName($identifier, $payload);
    }

    /** PUT /rcs/1/senders/{sender}/templates/{templateName} [operationId: rcs-template-update] */
    /**
     * Edit an RCS template
     *
     * Edit an RCS template. Only PENDING, SUSPENDED or REJECTED templates can be edited. APPROVED templates cannot be modified. Available only for senders that support templates..
     */
    public static function putByTemplateName(\InfobipSDK\PathParams\Rcs\Resource1\Senders\BySender\Templates\ByTemplateName $identifier, \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateContent $payload): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplate
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource1\Senders\BySender\Templates::class)->putByTemplateName($identifier, $payload);
    }

}
