<?php

declare(strict_types=1);

namespace InfobipSDK\Push\Resource1\Inbox;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /push/1/inbox/messages [operationId: delete-push-inbox-messages] */
    /**
     * Delete Push Inbox messages
     *
     * Deletes Push Inbox messages from devices that have a mobile application integrated with the 'Push Inbox'. Beware, this action cannot be undone.
     */
    public static function delete(?\InfobipSDK\DeleteParams\Push\Resource1\Inbox\Messages $params = null): \InfobipSDK\DTOs\N1fab3d191d736425211a5879d4b2241fa0e80b8ab68239ab74531b9b6408a7a8\DeletionAcceptedResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Push\Resource1\Inbox\Messages::class)->delete($params);
    }
}
