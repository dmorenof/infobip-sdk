<?php

declare(strict_types=1);

namespace InfobipSDK\KakaoSangdam\Resource1;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /kakao-sangdam/1/messages [operationId: send-kakao-sangdam-message] */
    /**
     * Send a Kakao Sangdam message
     *
     * Send one or more messages to multiple recipients.
     * Documentation: https://www.infobip.com/docs/kakaotalk/message-types#sangdam-talk
     */
    public static function post(\InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\KakaoSangdamRequest $payload): \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        return self::client()->resource(\InfobipSDK\Resources\KakaoSangdam\Resource1\Messages::class)->post($payload);
    }
}
