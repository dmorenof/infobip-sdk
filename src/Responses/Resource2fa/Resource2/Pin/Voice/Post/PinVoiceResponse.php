<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\Resource2fa\Resource2\Pin\Voice\Post;

final class PinVoiceResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Call status, e.g. `PENDING_ACCEPTED`.
     */
    public string $callStatus;
    /**
     * Message ID used for delivery tracking.
     */
    public string $externalMessageId;
    /**
     * Status of sent [Number Lookup](https://www.infobip.com/docs/number-lookup). Number Lookup status can have one of the following values: `NC_DESTINATION_UNKNOWN`, `NC_DESTINATION_REACHABLE`, `NC_DESTINATION_NOT_REACHABLE`, `NC_NOT_CONFIGURED`. Contact your Account Manager, if you get the `NC_NOT_CONFIGURED` status. SMS will not be sent only if Number Lookup status is `NC_NOT_REACHABLE`.
     */
    public string $ncStatus;
    /**
     * Sent PIN code ID.
     */
    public string $pinId;
    /**
     * Sent SMS status. Can have one of the following values: `MESSAGE_SENT`, `MESSAGE_NOT_SENT`.
     */
    public string $smsStatus;
    /**
     * Phone number to which the 2FA message will be sent. Example: `41793026727`.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callStatus' => is_string($value) ? $this->callStatus = $value : parent::assignMember($name, $value),
            'externalMessageId' => is_string($value) ? $this->externalMessageId = $value : parent::assignMember($name, $value),
            'ncStatus' => is_string($value) ? $this->ncStatus = $value : parent::assignMember($name, $value),
            'pinId' => is_string($value) ? $this->pinId = $value : parent::assignMember($name, $value),
            'smsStatus' => is_string($value) ? $this->smsStatus = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
