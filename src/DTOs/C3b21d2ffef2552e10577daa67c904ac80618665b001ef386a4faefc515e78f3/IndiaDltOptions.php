<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C3b21d2ffef2552e10577daa67c904ac80618665b001ef386a4faefc515e78f3;

/**
 * IndiaDltOptions
 */
final class IndiaDltOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'contentTemplateId' => [
            'minLength' => 0,
            'maxLength' => 30,
        ],
        'principalEntityId' => [
            'minLength' => 0,
            'maxLength' => 30,
        ],
        'teleMarketerId' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
    ];

    /**
     * Registered DLT content template ID which matches message you are sending.
     */
    public string $contentTemplateId {
        set {
            $this->assigning('contentTemplateId', $value);
            $this->contentTemplateId = $value;
        }
    }
    /**
     * Your assigned DLT principal entity ID.
     */
    public string $principalEntityId {
        set {
            $this->assigning('principalEntityId', $value);
            $this->principalEntityId = $value;
        }
    }
    /**
     * Your assigned Telemarketer ID (required for Aggregators).
     */
    public string $teleMarketerId {
        set {
            $this->assigning('teleMarketerId', $value);
            $this->teleMarketerId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contentTemplateId' => is_string($value) ? $this->contentTemplateId = $value : parent::assignMember($name, $value),
            'principalEntityId' => is_string($value) ? $this->principalEntityId = $value : parent::assignMember($name, $value),
            'teleMarketerId' => is_string($value) ? $this->teleMarketerId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
