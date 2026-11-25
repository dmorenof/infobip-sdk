<?php

declare(strict_types=1);

namespace InfobipSDK\Webrtc\Resource1;

final class Token extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /webrtc/1/token [operationId: generate-webrtc-token] */
    /**
     * Generate WebRTC Token
     *
     * This endpoint allows you to generate token for WebRTC channel.
     */
    public static function post(\InfobipSDK\DTOs\A012797e45a148c14a09b350fd3670874eb3f365931c630a0c2efc32c7293ff3\TokenRequestModel $payload): \InfobipSDK\DTOs\A012797e45a148c14a09b350fd3670874eb3f365931c630a0c2efc32c7293ff3\TokenResponseModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Webrtc\Resource1\Token::class)->post($payload);
    }
}
