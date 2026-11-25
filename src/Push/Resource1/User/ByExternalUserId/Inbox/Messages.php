<?php

declare(strict_types=1);

namespace InfobipSDK\Push\Resource1\User\ByExternalUserId\Inbox;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /push/1/user/{externalUserId}/inbox/messages [operationId: delete-push-inbox-user-message] */
    /**
     * Delete Push Inbox message for a specific user
     *
     * Deletes a single Push Inbox message from a specific user's inbox. Requires specifying either campaignId or bulkId.
     */
    public static function delete(string $externalUserId, ?\InfobipSDK\DeleteParams\Push\Resource1\User\ByExternalUserId\Inbox\Messages $params = null): \InfobipSDK\DTOs\N1fab3d191d736425211a5879d4b2241fa0e80b8ab68239ab74531b9b6408a7a8\DeletionAcceptedResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Push\Resource1\User\ByExternalUserId\Inbox\Messages::class)->delete($externalUserId, $params);
    }

}
