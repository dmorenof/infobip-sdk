<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488;

/**
 * TemplateRequest
 *
 * Request to create or register a new Viber message template.
 */
final class TemplateRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'body',
    'category',
];

    protected const array VALIDATION = [
    'body' => [
        'minItems' => 0,
        'maxItems' => 1,
    ],
    'name' => [
        'minLength' => 1,
        'maxLength' => 64,
        'pattern' => '^[\\p{L}0-9 ]*$',
    ],
    'params' => [
        'minItems' => 0,
        'maxItems' => 8,
    ],
];

    /**
     * List of template bodies per language. Currently limited to one body per template.
     */
    public \InfobipSDK\Collections\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\TemplateRequest\BodyCollection $body {
        set {
            $this->assigning('body', $value);
            $this->body = $value;
        }
    }
    public \InfobipSDK\Enums\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\TemplateCategory $category;
    /**
     * Optional human-readable name for the template to help with identification. Maximum 64 characters, allowed: letters, digits, and spaces.
     * Example: "Account Balance Notification"
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * List of variable parameters used in the template. Maximum 8 parameters allowed. For OTP category, at least one parameter with name '{{pin}}' is required.
     */
    public \InfobipSDK\Collections\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\TemplateRequest\ParamsCollection $params {
        set {
            $this->assigning('params', $value);
            $this->params = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'body' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->body = new \InfobipSDK\Collections\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\TemplateRequest\BodyCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\TemplateBody::class)) : parent::assignMember($name, $value),
            'category' => is_string($value) ? $this->category = \InfobipSDK\Enums\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\TemplateCategory::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'params' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->params = new \InfobipSDK\Collections\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\TemplateRequest\ParamsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\TemplateParam::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
