<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab;

/**
 * PatchTriggerApiRequest
 * Example: "{\n    \"orderIndex\": 2\n"
 */
final class PatchTriggerApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'orderIndex' => [
            'format' => 'int32',
        ],
        'title' => [
            'minLength' => 0,
            'maxLength' => 100,
        ],
    ];

    /**
     * Condition which resolves in destination form.
     */
    public \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\PatchTriggerApiRequest\ExpressionMap $expression;
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
     * Trigger title.
     */
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'formId' => is_string($value) ? $this->formId = $value : parent::assignMember($name, $value),
            'isEnabled' => is_bool($value) ? $this->isEnabled = $value : parent::assignMember($name, $value),
            'orderIndex' => is_int($value) ? $this->orderIndex = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
