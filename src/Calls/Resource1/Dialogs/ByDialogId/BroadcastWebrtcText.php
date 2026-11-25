<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Dialogs\ByDialogId;

final class BroadcastWebrtcText extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/dialogs/{dialogId}/broadcast-webrtc-text [operationId: dialog-broadcast-webrtc-text] */
    /**
     * Broadcast text
     *
     * Broadcasts a text message to dialog WebRTC call legs with open data channel.
     *
     * @deprecated
     */
    public static function post(string $dialogId, \InfobipSDK\DTOs\N14b5f31f4f292db4a32c4e61928f9a47f8ff4c0a1c06a38af2c29ef9ca05095d\DialogBroadcastWebrtcTextRequest $payload): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ActionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Dialogs\ByDialogId\BroadcastWebrtcText::class)->post($dialogId, $payload);
    }
}
