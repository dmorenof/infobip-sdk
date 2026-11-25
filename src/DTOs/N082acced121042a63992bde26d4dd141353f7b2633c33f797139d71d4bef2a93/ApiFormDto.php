<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93;

/**
 * ApiFormDto
 */
final class ApiFormDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'elements',
    'formStatus',
    'formType',
    'id',
    'name',
    'resubmitEnabled',
];

    public \InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ActionAfterSubmission $actionAfterSubmission;
    /**
     * Time when form was created
     * Format: date-time
     */
    public string $createdAt;
    /**
     * List of form fields
     */
    public \InfobipSDK\Collections\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ApiFormDto\ElementsCollection $elements;
    public \InfobipSDK\Enums\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\FormStatus $formStatus;
    public \InfobipSDK\Enums\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\FormType $formType;
    /**
     * Form identifier
     */
    public string $id;
    /**
     * Form name
     */
    public string $name;
    /**
     * Can resubmit multiple times
     */
    public bool $resubmitEnabled;
    /**
     * Time when form was update last time
     * Format: date-time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'actionAfterSubmission' => $value instanceof \stdClass ? $this->actionAfterSubmission = new \InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ActionAfterSubmission($value) : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'elements' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->elements = new \InfobipSDK\Collections\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ApiFormDto\ElementsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\FormElementDto::class)) : parent::assignMember($name, $value),
            'formStatus' => is_string($value) ? $this->formStatus = \InfobipSDK\Enums\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\FormStatus::from($value) : parent::assignMember($name, $value),
            'formType' => is_string($value) ? $this->formType = \InfobipSDK\Enums\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\FormType::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'resubmitEnabled' => is_bool($value) ? $this->resubmitEnabled = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
