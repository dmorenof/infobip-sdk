<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\Mi\Verification\Resource1\Verify;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * An URL to perform mobile device redirect to if specified so by 'status'.
     * Example: "https://api.infobip.com/mno-domain/smv-check-endpoint"
     * Format: uri
     */
    public string $deviceRedirectUrl;
    /**
     * Silent Mobile Verification request status.
     */
    public \InfobipSDK\Enums\Mi\Verification\Resource1\Verify\Post\VerifyStatusEnum $status;
    /**
     * Unique request ID. The whole flow from the request to response has same token so it can be used for debugging in case of error or matching API request with the callback webhook response.
     * Example: "123e4567-e89b-12d3-a456-426655440000"
     * Format: uuid
     */
    public string $token;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'deviceRedirectUrl' => is_string($value) ? $this->deviceRedirectUrl = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\Mi\Verification\Resource1\Verify\Post\VerifyStatusEnum::from($value) : parent::assignMember($name, $value),
            'token' => is_string($value) ? $this->token = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
