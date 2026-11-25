<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * AuthenticationBodyApiData
 *
 * Template body.
 */
final class AuthenticationBodyApiData extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Set to true if you want the template to include the string, "For your security, do not share this code." Set to false to exclude the string.
     */
    public bool $addSecurityRecommendation;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'addSecurityRecommendation' => is_bool($value) ? $this->addSecurityRecommendation = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
