<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0;

/**
 * AddFlowParticipantResult
 *
 * Result of operation for the given participant.
 */
final class AddFlowParticipantResult extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'identifyBy',
        'status',
    ];

    public ?\InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\AddFlowParticipantResult\ErrorReasonDTO $errorReason;
    public \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\WebhookPersonUniqueField $identifyBy;
    public \InfobipSDK\Enums\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\AddFlowParticipantStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'identifyBy' => $value instanceof \stdClass ? $this->identifyBy = new \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\WebhookPersonUniqueField($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\AddFlowParticipantStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
