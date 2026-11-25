<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * CallPermissionReply
 *
 * Structure that contains the details of the user response for the call permissions request message.
 */
final class CallPermissionReply extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'response',
];

    /**
     * Timestamp of when the call permission expires if user accepted the call.
     * Format: date-time
     */
    public string $expirationTimestamp;
    public \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\Response $response;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expirationTimestamp' => is_string($value) ? $this->expirationTimestamp = $value : parent::assignMember($name, $value),
            'response' => is_string($value) ? $this->response = \InfobipSDK\Enums\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\Response::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
