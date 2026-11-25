<?php

declare(strict_types=1);

namespace InfobipSDK\Viber\Resource1\Senders\BySender;

final class Templates extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /viber/1/senders/{sender}/templates [operationId: get-viber-templates] */
    /**
     * Get Viber templates
     *
     * Retrieve Viber templates available for specific sender.
     */
    public static function get(string $sender, ?\InfobipSDK\GetParams\Viber\Resource1\Senders\BySender\Templates $params = null): \InfobipSDK\DTOs\F6fe07754dbab8be58eaa18cf7a5d306bd0a320e1642529931d05084863a1fb3\GetViberTemplatesResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Viber\Resource1\Senders\BySender\Templates::class)->get($sender, $params);
    }

    /** POST /viber/1/senders/{sender}/templates [operationId: create-viber-template] */
    /**
     * Create Viber template
     *
     * Create a new Viber template for a given sender. Templates must be approved by Viber before they can be used for sending messages.
     */
    public static function post(string $sender, \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\TemplateRequest $payload): \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ViberTemplateResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Viber\Resource1\Senders\BySender\Templates::class)->post($sender, $payload);
    }

    /** DELETE /viber/1/senders/{sender}/templates/{templateId} [operationId: delete-viber-template] */
    /**
     * Delete Viber template
     *
     * Delete a specific Viber template. Deleted templates can no longer be used for sending messages.
     */
    public static function deleteByTemplateId(\InfobipSDK\PathParams\Viber\Resource1\Senders\BySender\Templates\ByTemplateId $identifier): void
    {
        self::client()->resource(\InfobipSDK\Resources\Viber\Resource1\Senders\BySender\Templates::class)->deleteByTemplateId($identifier);
    }

    /** GET /viber/1/senders/{sender}/templates/{templateId} [operationId: get-viber-template] */
    /**
     * Get Viber template
     *
     * Retrieve details of a specific Viber template by its ID and associated sender.
     */
    public static function getByTemplateId(\InfobipSDK\PathParams\Viber\Resource1\Senders\BySender\Templates\ByTemplateId $identifier): \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ViberTemplateResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Viber\Resource1\Senders\BySender\Templates::class)->getByTemplateId($identifier);
    }

    /** PATCH /viber/1/senders/{sender}/templates/{templateId} [operationId: update-viber-template-name] */
    /**
     * Update Viber template name
     *
     * Update the human-readable name of a Viber template. The name is stored on the Infobip side only, not pushed to Viber.
     */
    public static function patchByTemplateId(\InfobipSDK\PathParams\Viber\Resource1\Senders\BySender\Templates\ByTemplateId $identifier, \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\TemplateUpdateRequest $payload): \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ViberTemplateResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Viber\Resource1\Senders\BySender\Templates::class)->patchByTemplateId($identifier, $payload);
    }
}
