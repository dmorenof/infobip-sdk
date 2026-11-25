<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\Errors\Camara\NumberRecycling\V02\Check;

final class PostStatus400Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Error code.
     */
    public \InfobipSDK\Enums\Errors\Camara\NumberRecycling\V02\Check\PostStatus400\PostStatus400CodeEnum $code;
    /**
     * Detailed error message.
     */
    public \InfobipSDK\Enums\Errors\Camara\NumberRecycling\V02\Check\PostStatus400\PostStatus400MessageEnum $message;
    /**
     * HTTP status code.
     */
    public \InfobipSDK\Enums\Errors\Camara\NumberRecycling\V02\Check\PostStatus400\PostStatus400StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = \InfobipSDK\Enums\Errors\Camara\NumberRecycling\V02\Check\PostStatus400\PostStatus400CodeEnum::from($value) : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = \InfobipSDK\Enums\Errors\Camara\NumberRecycling\V02\Check\PostStatus400\PostStatus400MessageEnum::from($value) : parent::assignMember($name, $value),
            'status' => is_int($value) ? $this->status = \InfobipSDK\Enums\Errors\Camara\NumberRecycling\V02\Check\PostStatus400\PostStatus400StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
