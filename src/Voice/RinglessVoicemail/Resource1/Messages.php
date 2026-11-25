<?php

declare(strict_types=1);

namespace InfobipSDK\Voice\RinglessVoicemail\Resource1;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /voice/ringless-voicemail/1/messages [operationId: send-ringless-voicemail] */
    /**
     * Send ringless voicemail
     *
     * Send one or more ringless voicemail messages directly to US/CA mobile numbers.
     * The voicemail is deposited into the recipient's voicemail inbox without ringing their phone.
     *
     * Audio content can be provided as text (converted to speech via TTS), a pre-uploaded audio file ID,
     * or a URL to a client-hosted audio file.
     *
     */
    public static function post(\InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\SendRequest $payload): \InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\SendResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Voice\RinglessVoicemail\Resource1\Messages::class)->post($payload);
    }

}
