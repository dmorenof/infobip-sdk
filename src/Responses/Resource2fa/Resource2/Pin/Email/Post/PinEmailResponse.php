<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\Resource2fa\Resource2\Pin\Email\Post;

final class PinEmailResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates the [status](https://www.infobip.com/docs/essentials/response-status-and-error-codes#api-status-codes) of the message and how to recover from an error should there be any.
     */
    public \InfobipSDK\DTOs\Aa47d40354ee197e21ffad52d2c543bd4f729e250360a844e476aa80deff7b6e\EmailStatus $emailStatus;
    /**
     * Sent PIN code ID.
     */
    public string $pinId;
    /**
     * Email address to which the 2FA message has been sent. Example: john.smith&#64;example.com.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'emailStatus' => $value instanceof \stdClass ? $this->emailStatus = new \InfobipSDK\DTOs\Aa47d40354ee197e21ffad52d2c543bd4f729e250360a844e476aa80deff7b6e\EmailStatus($value) : parent::assignMember($name, $value),
            'pinId' => is_string($value) ? $this->pinId = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
