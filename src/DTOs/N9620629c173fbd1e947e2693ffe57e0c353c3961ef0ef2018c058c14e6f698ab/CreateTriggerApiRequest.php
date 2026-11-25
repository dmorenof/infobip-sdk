<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab;

/**
 * CreateTriggerApiRequest
 * Example: {"title":"AJ Queue","expression":{"$neq":{"queue":"AJ Queue"}},"isEnabled":true,"formId":"75f57446-1d65-478a-87ed-22d17dc3d077"}
 */
final class CreateTriggerApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'expression',
    'formId',
    'title',
];

    protected const array VALIDATION = [
    'title' => [
        'minLength' => 0,
        'maxLength' => 100,
    ],
];

    /**
     * Condition which resolves in destination form.
     */
    public \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\CreateTriggerApiRequest\ExpressionMap $expression;
    /**
     * Destination form.
     */
    public string $formId;
    /**
     * Is trigger enabled.
     */
    public bool $isEnabled;
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
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
