<?php

declare(strict_types=1);

namespace InfobipSDK\KakaoAlim\Resource1;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /kakao-alim/1/messages [operationId: send-kakao-alim-message] */
    /**
     * Send a Kakao Alim message
     *
     * Send one or more messages to multiple recipients.
     * Documentation: https://www.infobip.com/docs/kakaotalk/message-types#alim-talk
     */
    public static function post(\InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\KakaoAlimRequest $payload): \InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        return self::client()->resource(\InfobipSDK\Resources\KakaoAlim\Resource1\Messages::class)->post($payload);
    }
}
