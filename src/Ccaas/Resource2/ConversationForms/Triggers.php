<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource2\ConversationForms;

final class Triggers extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/2/conversation-forms/triggers [operationId: get-conversation-form-triggers] */
    /**
     * Get triggers
     *
     * Use this method to get a list of triggers with pagination and filtering options. Using a filter is optional. The result can be filtered by one or many optional filter described in the parameters.
     */
    public static function get(?\InfobipSDK\GetParams\Ccaas\Resource2\ConversationForms\Triggers $params = null): \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\TriggerApiResultPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource2\ConversationForms\Triggers::class)->get($params);
    }

    /** POST /ccaas/2/conversation-forms/triggers [operationId: create-conversation-form-trigger] */
    /**
     * Create trigger
     *
     * The create trigger method creates a new trigger at the first order position in the existing setup. Triggers are used to assign proper form to a conversation, based on an expression. Every expression can be constructed with at least one or more available operators. The result of the expression will be a success (TRUE) only if all results of operations are TRUE. Order of triggers is essential in the form assignment process, as triggers are match the provided order. First trigger matching the conversation will be used.
     *  <a href="https://www.infobip.com/docs/conversations/supervisor-guide" target="_blank">More info</a>
     */
    public static function post(\InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\CreateTriggerApiRequest $payload): \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\TriggerApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource2\ConversationForms\Triggers::class)->post($payload);
    }

    /** DELETE /ccaas/2/conversation-forms/triggers/{id} [operationId: delete-conversation-form-trigger] */
    /**
     * Delete trigger
     *
     * Use this method to delete a trigger.
     */
    public static function deleteById(string $id): \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\StatusCodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource2\ConversationForms\Triggers::class)->deleteById($id);
    }

    /** GET /ccaas/2/conversation-forms/triggers/{id} [operationId: get-conversation-form-trigger] */
    /**
     * Get trigger
     *
     * Use this method to get a single trigger.
     */
    public static function getById(string $id): \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\TriggerApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource2\ConversationForms\Triggers::class)->getById($id);
    }

    /** PATCH /ccaas/2/conversation-forms/triggers/{id} [operationId: patch-conversation-form-trigger] */
    /**
     * Patch trigger
     *
     * Use this method to patch a trigger. Triggers between 'old' and 'new' position will be set automatically ± one position.
     *  <a href="https://www.infobip.com/docs/conversations/supervisor-guide" target="_blank">More info</a>
     */
    public static function patchById(string $id, \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\PatchTriggerApiRequest $payload): \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\TriggerApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource2\ConversationForms\Triggers::class)->patchById($id, $payload);
    }

    /** PUT /ccaas/2/conversation-forms/triggers/{id} [operationId: update-conversation-form-trigger] */
    /**
     * Update trigger
     *
     * Use this method to update a trigger. Triggers between 'old' and 'new' position will be set automatically ± one position. <a href="https://www.infobip.com/docs/conversations/supervisor-guide" target="_blank">More info</a>
     */
    public static function putById(string $id, \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\UpdateTriggerApiRequest $payload): \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\TriggerApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource2\ConversationForms\Triggers::class)->putById($id, $payload);
    }

}
