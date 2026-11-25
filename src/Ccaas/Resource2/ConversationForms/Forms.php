<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource2\ConversationForms;

final class Forms extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/2/conversation-forms/forms [operationId: get-conversation-forms] */
    /**
     * Get conversation forms
     *
     * Use this method to get a list of forms with pagination and filtering options. Using a filter is optional. The result can be filtered by one or many optional filters described in the parameters.
     */
    public static function get(?\InfobipSDK\GetParams\Ccaas\Resource2\ConversationForms\Forms $params = null): \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FormApiResultPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource2\ConversationForms\Forms::class)->get($params);
    }

    /** POST /ccaas/2/conversation-forms/forms [operationId: create-conversation-form] */
    /**
     * Create conversation form
     *
     * Use this method to create a form.
     */
    public static function post(\InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\CreateFormApiRequest $payload): \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FormApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource2\ConversationForms\Forms::class)->post($payload);
    }

    /** DELETE /ccaas/2/conversation-forms/forms/{id} [operationId: delete-conversation-form] */
    /**
     * Delete conversation form
     *
     * Use this method to delete the form.
     */
    public static function deleteById(string $id): \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\StatusCodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource2\ConversationForms\Forms::class)->deleteById($id);
    }

    /** GET /ccaas/2/conversation-forms/forms/{id} [operationId: get-conversation-form] */
    /**
     * Get conversation form
     *
     * Use this method to get a single form.
     */
    public static function getById(string $id): \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FormApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource2\ConversationForms\Forms::class)->getById($id);
    }

    /** PUT /ccaas/2/conversation-forms/forms/{id} [operationId: update-conversation-form] */
    /**
     * Update conversation form
     *
     * Use this method to update a form.
     */
    public static function putById(string $id, \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\UpdateFormApiRequest $payload): \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FormApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource2\ConversationForms\Forms::class)->putById($id, $payload);
    }

}
