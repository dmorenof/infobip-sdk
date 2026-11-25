<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c;

/**
 * EventClauseDto
 *
 * List of events that persons should match.
 */
final class EventClauseDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'definitionId',
        'timelineCondition',
    ];

    protected const array VALIDATION = [
        'definitionId' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Event definition ID.
     * Example: "addedToCart"
     */
    public string $definitionId {
        set {
            $this->assigning('definitionId', $value);
            $this->definitionId = $value;
        }
    }
    public \InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\OccurrenceConditionDto $occurrenceCondition;
    /**
     * Specify the conditions of the event payload.
     */
    public \InfobipSDK\Collections\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\EventClauseDto\PayloadConditionsCollection $payloadConditions;
    public \InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\TimelineConditionDto $timelineCondition;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'definitionId' => is_string($value) ? $this->definitionId = $value : parent::assignMember($name, $value),
            'occurrenceCondition' => $value instanceof \stdClass ? $this->occurrenceCondition = new \InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\OccurrenceConditionDto($value) : parent::assignMember($name, $value),
            'payloadConditions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->payloadConditions = new \InfobipSDK\Collections\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\EventClauseDto\PayloadConditionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\PayloadConditionDto::class)) : parent::assignMember($name, $value),
            'timelineCondition' => $value instanceof \stdClass ? $this->timelineCondition = new \InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\TimelineConditionDto($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
