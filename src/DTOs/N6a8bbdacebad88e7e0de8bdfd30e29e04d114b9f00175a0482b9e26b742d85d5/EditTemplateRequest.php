<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * EditTemplateRequest
 */
final class EditTemplateRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
    'note',
    'templateContent',
    'trackingId',
];

    protected const array VALIDATION = [
    'name' => [
        'minLength' => 10,
        'maxLength' => 60,
    ],
    'note' => [
        'minLength' => 1,
        'maxLength' => 400,
    ],
    'trackingId' => [
        'minLength' => 1,
        'maxLength' => 200,
    ],
];

    /**
     * Template name (10-60 characters).
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Template note.
     */
    public string $note {
        set {
            $this->assigning('note', $value);
            $this->note = $value;
        }
    }
    /**
     * Template parameters for dynamic content.
     */
    public \InfobipSDK\Collections\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\CreateTemplateRequest\ParamsCollection $params;
    public \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZbsTemplateContent $templateContent;
    /**
     * Tracking identifier.
     */
    public string $trackingId {
        set {
            $this->assigning('trackingId', $value);
            $this->trackingId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'note' => is_string($value) ? $this->note = $value : parent::assignMember($name, $value),
            'params' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->params = new \InfobipSDK\Collections\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\CreateTemplateRequest\ParamsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\TemplateParameter::class)) : parent::assignMember($name, $value),
            'trackingId' => is_string($value) ? $this->trackingId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
