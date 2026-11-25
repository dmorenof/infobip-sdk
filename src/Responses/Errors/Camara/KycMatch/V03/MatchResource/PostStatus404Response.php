<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\Errors\Camara\KycMatch\V03\MatchResource;

final class PostStatus404Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Error code.
     */
    public \InfobipSDK\Enums\Errors\Camara\KycMatch\V03\MatchResource\PostStatus404\PostStatus404CodeEnum $code;
    /**
     * Detailed error message.
     */
    public \InfobipSDK\Enums\Errors\Camara\KycMatch\V03\MatchResource\PostStatus404\PostStatus404MessageEnum $message;
    /**
     * HTTP status code.
     */
    public \InfobipSDK\Enums\Errors\Camara\KycMatch\V03\MatchResource\PostStatus404\PostStatus404StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = \InfobipSDK\Enums\Errors\Camara\KycMatch\V03\MatchResource\PostStatus404\PostStatus404CodeEnum::from($value) : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = \InfobipSDK\Enums\Errors\Camara\KycMatch\V03\MatchResource\PostStatus404\PostStatus404MessageEnum::from($value) : parent::assignMember($name, $value),
            'status' => is_int($value) ? $this->status = \InfobipSDK\Enums\Errors\Camara\KycMatch\V03\MatchResource\PostStatus404\PostStatus404StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
