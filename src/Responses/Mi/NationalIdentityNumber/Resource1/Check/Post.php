<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\Mi\NationalIdentityNumber\Resource1\Check;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array PROPERTY_MAP = [
        'match' => 'match_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'match_' => 'match',
    ];

    /**
     * Match result.
     */
    public \InfobipSDK\Enums\Mi\NationalIdentityNumber\Resource1\Check\Post\CheckMatchEnum $match_;
    /**
     * Unique request identifier.
     * Format: uuid
     */
    public string $token;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'match' => is_string($value) ? $this->match_ = \InfobipSDK\Enums\Mi\NationalIdentityNumber\Resource1\Check\Post\CheckMatchEnum::from($value) : parent::assignMember($name, $value),
            'token' => is_string($value) ? $this->token = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
