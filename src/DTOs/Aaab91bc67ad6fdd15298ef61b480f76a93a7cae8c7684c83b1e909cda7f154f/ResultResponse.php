<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Aaab91bc67ad6fdd15298ef61b480f76a93a7cae8c7684c83b1e909cda7f154f;

/**
 * AdvancedSilentMobileVerificationResultResponse
 *
 * Advanced silent mobile verification request result
 */
final class ResultResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N4503c9be2d8553d1e8648e283b9ba9017ae14f51177b500d7b5df7dc4842e4d2\ErrorInfoResponse $error;
    /**
     * Advanced silent mobile verification request result.
     */
    public \InfobipSDK\Enums\Aaab91bc67ad6fdd15298ef61b480f76a93a7cae8c7684c83b1e909cda7f154f\ResultResponse\ResultEnum $result;
    /**
     * Advanced silent mobile verification request status.
     */
    public \InfobipSDK\Enums\Aaab91bc67ad6fdd15298ef61b480f76a93a7cae8c7684c83b1e909cda7f154f\ResultResponse\StatusEnum $status;
    /**
     * Unique request identifier. This value was returned on advanced silent mobile verification request.
     */
    public string $token;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error' => $value instanceof \stdClass ? $this->error = new \InfobipSDK\DTOs\N4503c9be2d8553d1e8648e283b9ba9017ae14f51177b500d7b5df7dc4842e4d2\ErrorInfoResponse($value) : parent::assignMember($name, $value),
            'result' => is_string($value) ? $this->result = \InfobipSDK\Enums\Aaab91bc67ad6fdd15298ef61b480f76a93a7cae8c7684c83b1e909cda7f154f\ResultResponse\ResultEnum::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\Aaab91bc67ad6fdd15298ef61b480f76a93a7cae8c7684c83b1e909cda7f154f\ResultResponse\StatusEnum::from($value) : parent::assignMember($name, $value),
            'token' => is_string($value) ? $this->token = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
