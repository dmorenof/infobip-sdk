<?php

declare(strict_types=1);

namespace InfobipSDK\Voice\RinglessVoicemail\Resource1;

final class Audio extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /voice/ringless-voicemail/1/audio [operationId: get-ringless-audio-files] */
    /**
     * List uploaded audio files
     *
     * List audio files previously uploaded for use in ringless voicemail messages.
     *
     * Results are ordered newest first. Use this endpoint to get more information about your uploaded audio files.
     */
    public static function get(?\InfobipSDK\GetParams\Voice\RinglessVoicemail\Resource1\Audio $params = null): \InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\AudioListResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Voice\RinglessVoicemail\Resource1\Audio::class)->get($params);
    }

    /** POST /voice/ringless-voicemail/1/audio [operationId: upload-ringless-audio] */
    /**
     * Upload audio file
     *
     * Upload an audio file for use in ringless voicemail messages.
     *
     * Supported formats: MP3, WAV, M4A. Maximum file size: 5 MB. Minimum audio duration: 5 seconds — files shorter than 5 seconds will be rejected by the carrier after delivery attempt.
     *
     * The returned audioId can be used when sending a ringless voicemail with content type AUDIO_ID. Audio files are retained indefinitely until explicitly deleted.
     */
    public static function post(\InfobipSDK\Requests\Voice\RinglessVoicemail\Resource1\Audio\Post $payload): \InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\AudioUploadResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Voice\RinglessVoicemail\Resource1\Audio::class)->post($payload);
    }

    /** DELETE /voice/ringless-voicemail/1/audio/{audioId} [operationId: delete-ringless-audio] */
    /**
     * Delete audio file
     *
     * Delete a previously uploaded audio file.
     *
     * After deletion, the audioId can no longer be used for sending messages. Any pending messages that reference this audioId will fail.
     */
    public static function deleteByAudioId(string $audioId): void
    {
        self::client()->resource(\InfobipSDK\Resources\Voice\RinglessVoicemail\Resource1\Audio::class)->deleteByAudioId($audioId);
    }

}
