<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\Errors;

final class Status404Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Error code.
     */
    public \InfobipSDK\Enums\Errors\Status404\Status404CodeEnum $code;
    /**
     * Detailed error message.
     */
    public \InfobipSDK\Enums\Errors\Status404\Status404MessageEnum $message;
    /**
     * HTTP status code.
     */
    public \InfobipSDK\Enums\Errors\Status404\Status404StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = \InfobipSDK\Enums\Errors\Status404\Status404CodeEnum::from($value) : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = \InfobipSDK\Enums\Errors\Status404\Status404MessageEnum::from($value) : parent::assignMember($name, $value),
            'status' => is_int($value) ? $this->status = \InfobipSDK\Enums\Errors\Status404\Status404StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
