<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N60d0e6d5cbcf8382b5a6bad1f38781f71991c7ea63dad2e6ec22ddc8893af51c;

/**
 * CaptureDtmfCallbackRequest
 *
 * Markup Language captureDtmf callback request object. Sent to the callback URL configured on the CaptureDtmf instruction after the caller has finished entering DTMF digits (or the timeout expired). Extends the instructions callback payload with the collected DTMF sequence.
 */
final class CaptureDtmfCallbackRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique identifier of the call.
     * Example: "3fa85f64-5717-4562-b3fc-2c963f66afa6"
     */
    public string $callId;
    /**
     * DTMF digits collected from the caller. Empty when the timeout elapsed with no input and callOnEmpty is enabled.
     * Example: "1234"
     */
    public string $capturedDtmf;
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallDirection $direction;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallbackEndpoint $endpoint;
    /**
     * The phone number of the caller in the [E.164](https://en.wikipedia.org/wiki/E.164) format.
     * Example: "41793026834"
     */
    public string $from;
    /**
     * The timestamp when the call started, in ISO-8601 UTC format (yyyy-MM-dd'T'HH:mm:ss.SSSZ).
     * Example: "2025-04-04T11:38:01.724Z"
     * Format: date-time
     */
    public string $startTime;
    /**
     * The phone number of the callee in the [E.164](https://en.wikipedia.org/wiki/E.164) format.
     * Example: "41793026835"
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callId' => is_string($value) ? $this->callId = $value : parent::assignMember($name, $value),
            'capturedDtmf' => is_string($value) ? $this->capturedDtmf = $value : parent::assignMember($name, $value),
            'direction' => is_string($value) ? $this->direction = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallDirection::from($value) : parent::assignMember($name, $value),
            'endpoint' => $value instanceof \stdClass ? $this->endpoint = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallbackEndpoint($value) : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
