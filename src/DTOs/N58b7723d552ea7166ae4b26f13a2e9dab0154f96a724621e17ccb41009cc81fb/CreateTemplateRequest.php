<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb;

/**
 * CreateTemplateRequest
 */
final class CreateTemplateRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
        'templateContent',
    ];

    protected const array VALIDATION = [
        'name' => [
            'minLength' => 1,
            'maxLength' => 200,
        ],
        'sender' => [
            'minLength' => 1,
            'maxLength' => 40,
        ],
        'senderGroup' => [
            'minLength' => 1,
            'maxLength' => 40,
        ],
    ];

    /**
     * Indicates whether the recipient is an adult.
     */
    public bool $isAdult;
    /**
     * Template name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Must be provided if senderGroup is not provided.
     */
    public string $sender {
        set {
            $this->assigning('sender', $value);
            $this->sender = $value;
        }
    }
    /**
     * Must be provided if sender is not provided.
     */
    public string $senderGroup {
        set {
            $this->assigning('senderGroup', $value);
            $this->senderGroup = $value;
        }
    }
    public \InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\BrandMessagesTemplateContent $templateContent;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'isAdult' => is_bool($value) ? $this->isAdult = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'senderGroup' => is_string($value) ? $this->senderGroup = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
