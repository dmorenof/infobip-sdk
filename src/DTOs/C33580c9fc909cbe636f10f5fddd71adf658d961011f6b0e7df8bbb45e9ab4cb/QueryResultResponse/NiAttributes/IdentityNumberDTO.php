<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C33580c9fc909cbe636f10f5fddd71adf658d961011f6b0e7df8bbb45e9ab4cb\QueryResultResponse\NiAttributes;

/**
 * Object representing if national identity number and MSISDN matches.
 */
final class IdentityNumberDTO extends \Dmorenof\SdkRuntime\DTO
{
    protected const array PROPERTY_MAP = [
    'match' => 'match_',
];
    protected const array WIRE_PROPERTY_MAP = [
    'match_' => 'match',
];

    public \InfobipSDK\DTOs\N4503c9be2d8553d1e8648e283b9ba9017ae14f51177b500d7b5df7dc4842e4d2\ErrorInfoResponse $error;
    /**
     * Information if user with provided national identity number owns provided MSISDN.
     */
    public \InfobipSDK\Enums\C33580c9fc909cbe636f10f5fddd71adf658d961011f6b0e7df8bbb45e9ab4cb\QueryResultResponse\NiAttributes\NationalIdentityNumber\MatchEnum $match_;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error' => $value instanceof \stdClass ? $this->error = new \InfobipSDK\DTOs\N4503c9be2d8553d1e8648e283b9ba9017ae14f51177b500d7b5df7dc4842e4d2\ErrorInfoResponse($value) : parent::assignMember($name, $value),
            'match' => is_string($value) ? $this->match_ = \InfobipSDK\Enums\C33580c9fc909cbe636f10f5fddd71adf658d961011f6b0e7df8bbb45e9ab4cb\QueryResultResponse\NiAttributes\NationalIdentityNumber\MatchEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
