<?php

declare(strict_types=1);

namespace InfobipSDK\Zalo\Resource2\Sender\BySender;

final class Templates extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /zalo/2/sender/{sender}/templates [operationId: create-zalo-template] */
    /**
     * Create Zalo template
     *
     * Creates a new template for the given sender. The template will be submitted for review and must be approved before it can be used.
     */
    public static function post(string $sender, \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\CreateTemplateRequest $payload): \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\CreateTemplateResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Zalo\Resource2\Sender\BySender\Templates::class)->post($sender, $payload);
    }

    /** PUT /zalo/2/sender/{sender}/templates/{templateName} [operationId: edit-zalo-template] */
    /**
     * Edit Zalo template
     *
     * Edits an existing template that has REJECTED status. The template will be resubmitted for review.
     */
    public static function putByTemplateName(\InfobipSDK\PathParams\Zalo\Resource2\Sender\BySender\Templates\ByTemplateName $identifier, \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\EditTemplateRequest $payload): \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\EditTemplateResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Zalo\Resource2\Sender\BySender\Templates::class)->putByTemplateName($identifier, $payload);
    }

}
