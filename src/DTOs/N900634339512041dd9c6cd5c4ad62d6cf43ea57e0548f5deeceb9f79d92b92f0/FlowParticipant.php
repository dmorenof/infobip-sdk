<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0;

/**
 * FlowParticipant
 *
 * Participant to be added to Flow campaign.
 */
final class FlowParticipant extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'identifyBy',
];

    public \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\WebhookPersonUniqueField $identifyBy;
    public ?\InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\FlowParticipant\PersonDTO $person;
    /**
     * Flow variables to assign to the participant when it is added to the flow.
     */
    public ?\InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\FlowParticipant\VariablesMap $variables;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'identifyBy' => $value instanceof \stdClass ? $this->identifyBy = new \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\WebhookPersonUniqueField($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
