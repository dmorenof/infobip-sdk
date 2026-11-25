<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * MmsConfiguration
 */
final class MmsConfiguration extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'action',
    ];

    protected const array VALIDATION = [
        'applicationId' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
        'entityId' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
        'keyword' => [
            'minLength' => 0,
            'maxLength' => 50,
        ],
    ];

    protected const array READ_ONLY_FIELDS = [
        'key',
        'otherActions',
    ];

    public \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MmsAction $action;
    /**
     * ID of the Application that would be associated with the configuration.
     * Documentation: https://www.infobip.com/docs/api/platform/application-entity
     */
    public string $applicationId {
        set {
            $this->assigning('applicationId', $value);
            $this->applicationId = $value;
        }
    }
    /**
     * ID of the Entity that would be associated with the configuration.
     * Documentation: https://www.infobip.com/docs/api/platform/application-entity
     */
    public string $entityId {
        set {
            $this->assigning('entityId', $value);
            $this->entityId = $value;
        }
    }
    /**
     * Unique ID of configuration.
     */
    public string $key;
    /**
     * Configuration keyword.
     */
    public string $keyword {
        set {
            $this->assigning('keyword', $value);
            $this->keyword = $value;
        }
    }
    /**
     * List of other configured action types/names on this keyword. Ignored in POST/PUT calls.
     */
    public \InfobipSDK\Collections\StringCollection $otherActions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            'keyword' => is_string($value) ? $this->keyword = $value : parent::assignMember($name, $value),
            'otherActions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->otherActions = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
