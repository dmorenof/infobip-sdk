<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\D4672690671974f6265c4d7a3cef5f9272fe4290e9edb608eab676ae3febd3a1;

/**
 * IdentityQuery
 */
final class IdentityQuery extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Person ID. ID type must match the `type` parameter. Some channels (e,g., Apple Business Chat) use identifiers that contain unsafe characters. Make sure you URL-encode them in your API request
     */
    public string $identifier;
    /**
     * Sender or application ID. `sender` is required for all identifier types except `ID`, `EXTERNAL_ID`, `PHONE`, `EMAIL`.
     */
    public string $sender;
    /**
     * Type of the person ID. Can be one of the above
     */
    public \InfobipSDK\Enums\N67ea2a2f468d202db25df7b2d86e54c3628a74b47c8fd9cf8429d0e9a038dd27\PersonUniqueFieldType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'identifier' => is_string($value) ? $this->identifier = $value : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N67ea2a2f468d202db25df7b2d86e54c3628a74b47c8fd9cf8429d0e9a038dd27\PersonUniqueFieldType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
