<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\Camara\Location\V0\Verify;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Result of the location verification.
     */
    public bool $verificationResult;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'verificationResult' => is_bool($value) ? $this->verificationResult = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
