<?php

declare(strict_types=1);

namespace InfobipSDK\KakaoChingu\Resource1;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /kakao-chingu/1/messages [operationId: send-kakao-chingu-message] */
    /**
     * Send a brand message
     *
     * Send one or more messages to multiple recipients.
     * Kakao Chingu will be deprecated on January 1, 2026, and Brand Messaging will replace it. Make sure to adjust your API connection to use only new content types that include _FREE_FORM or _VARIABLE in the content type name.
     * Documentation: https://www.infobip.com/docs/kakaotalk/message-types#chingu-talk
     */
    public static function post(\InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\KakaoChinguRequest $payload): \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        return self::client()->resource(\InfobipSDK\Resources\KakaoChingu\Resource1\Messages::class)->post($payload);
    }
}
