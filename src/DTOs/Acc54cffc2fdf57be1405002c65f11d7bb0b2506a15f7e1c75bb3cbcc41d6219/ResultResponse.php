<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Acc54cffc2fdf57be1405002c65f11d7bb0b2506a15f7e1c75bb3cbcc41d6219;

/**
 * SilentMobileVerificationResultResponse
 *
 * Silent mobile verification request result
 */
final class ResultResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N4503c9be2d8553d1e8648e283b9ba9017ae14f51177b500d7b5df7dc4842e4d2\ErrorInfoResponse $error;
    /**
     * Silent mobile verification request result.
     */
    public \InfobipSDK\Enums\Acc54cffc2fdf57be1405002c65f11d7bb0b2506a15f7e1c75bb3cbcc41d6219\ResultResponse\ResultEnum $result;
    /**
     * Unique request identifier. This value was returned on silent mobile verification request.
     */
    public string $token;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error' => $value instanceof \stdClass ? $this->error = new \InfobipSDK\DTOs\N4503c9be2d8553d1e8648e283b9ba9017ae14f51177b500d7b5df7dc4842e4d2\ErrorInfoResponse($value) : parent::assignMember($name, $value),
            'result' => is_string($value) ? $this->result = \InfobipSDK\Enums\Acc54cffc2fdf57be1405002c65f11d7bb0b2506a15f7e1c75bb3cbcc41d6219\ResultResponse\ResultEnum::from($value) : parent::assignMember($name, $value),
            'token' => is_string($value) ? $this->token = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
