<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Dialogs\ParentCall\ByParentCallId;

final class ChildCall extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/dialogs/parent-call/{parentCallId}/child-call/{childCallId} [operationId: create-dialog-with-existing-calls] */
    /**
     * Create dialog with existing calls
     *
     * Create a dialog with existing calls.
     */
    public static function postByChildCallId(\InfobipSDK\PathParams\Calls\Resource1\Dialogs\ParentCall\ByParentCallId\ChildCall\ByChildCallId $identifier, \InfobipSDK\DTOs\N5fc49137a7b003ca1d8c4957601417b8ed884356b7fbc49afe416dd5c098a0bd\DialogWithExistingCallsRequest $payload): \InfobipSDK\DTOs\N5fc49137a7b003ca1d8c4957601417b8ed884356b7fbc49afe416dd5c098a0bd\DialogResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Dialogs\ParentCall\ByParentCallId\ChildCall::class)->postByChildCallId($identifier, $payload);
    }
}
