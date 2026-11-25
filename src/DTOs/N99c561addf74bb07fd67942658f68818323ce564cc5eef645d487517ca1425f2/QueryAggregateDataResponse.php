<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2;

/**
 * QueryAggregateDataResponse
 */
final class QueryAggregateDataResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'requestId',
];

    /**
     * The identifier of the submitted request.
     */
    public string $requestId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'requestId' => is_string($value) ? $this->requestId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
