<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource2\ConversationForms;

final class Fields extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/2/conversation-forms/fields [operationId: get-conversation-form-fields] */
    /**
     * Get fields
     *
     * Use this method to get a list of fields with pagination and filtering options. Using a filter is optional. The result can be filtered by one or many optional filters described in the parameters.
     */
    public static function get(?\InfobipSDK\GetParams\Ccaas\Resource2\ConversationForms\Fields $params = null): \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FieldResultPageApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource2\ConversationForms\Fields::class)->get($params);
    }

    /** POST /ccaas/2/conversation-forms/fields [operationId: create-conversation-form-field] */
    /**
     * Create field
     *
     * Use this method to create a field.
     */
    public static function post(\InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\CreateFieldApiRequest $payload): \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FieldApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource2\ConversationForms\Fields::class)->post($payload);
    }

    /** DELETE /ccaas/2/conversation-forms/fields/{id} [operationId: delete-conversation-form-field] */
    /**
     * Delete field
     *
     * Use this method to delete the field.
     * Deleting a field will remove associated agent inputs in all non-closed conversations. This operation cannot be reverted!
     */
    public static function deleteById(string $id): \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\StatusCodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource2\ConversationForms\Fields::class)->deleteById($id);
    }

    /** GET /ccaas/2/conversation-forms/fields/{id} [operationId: get-conversation-form-field] */
    /**
     * Get field
     *
     * Use this method to get a single field.
     */
    public static function getById(string $id): \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FieldApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource2\ConversationForms\Fields::class)->getById($id);
    }

    /** PUT /ccaas/2/conversation-forms/fields/{id} [operationId: update-conversation-form-field] */
    /**
     * Update field
     *
     * Use this method to update a field.
     */
    public static function putById(string $id, \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\UpdateFieldApiRequest $payload): \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FieldApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource2\ConversationForms\Fields::class)->putById($id, $payload);
    }
}
