<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab;

/**
 * TriggerApiResponse
 * Example: {"id":"b3695d3c-6415-4bdd-82fc-07f9309933ec","title":"AJ Queue","expression":{"$neq":{"queue":"AJ Queue"}},"orderIndex":0,"isEnabled":true,"formId":"75f57446-1d65-478a-87ed-22d17dc3d077","timesTriggered":0}
 */
final class TriggerApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'orderIndex' => [
            'format' => 'int32',
        ],
        'timesTriggered' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Condition which resolves in destination form.
     */
    public \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\TriggerApiResponse\ExpressionMap $expression;
    /**
     * Destination form.
     */
    public string $formId;
    /**
     * Is trigger enabled.
     */
    public bool $isEnabled;
    /**
     * Trigger order.
     * Format: int32
     */
    public int $orderIndex {
        set {
            $this->assigning('orderIndex', $value);
            $this->orderIndex = $value;
        }
    }
    /**
     * Number of trigger resolution.
     * Format: int32
     */
    public int $timesTriggered {
        set {
            $this->assigning('timesTriggered', $value);
            $this->timesTriggered = $value;
        }
    }
    /**
     * Trigger title.
     */
    public string $title;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'formId' => is_string($value) ? $this->formId = $value : parent::assignMember($name, $value),
            'isEnabled' => is_bool($value) ? $this->isEnabled = $value : parent::assignMember($name, $value),
            'orderIndex' => is_int($value) ? $this->orderIndex = $value : parent::assignMember($name, $value),
            'timesTriggered' => is_int($value) ? $this->timesTriggered = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
