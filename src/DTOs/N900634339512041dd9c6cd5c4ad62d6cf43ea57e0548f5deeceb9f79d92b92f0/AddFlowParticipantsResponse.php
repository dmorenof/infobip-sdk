<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0;

/**
 * AddFlowParticipantsResponse
 */
final class AddFlowParticipantsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'operationId',
    ];

    /**
     * Unique identifier of the operation.
     * Example: "03f2d474-0508-46bf-9f3d-d8e2c28adaea"
     */
    public string $operationId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'operationId' => is_string($value) ? $this->operationId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
