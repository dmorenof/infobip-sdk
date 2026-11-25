<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * CreateNoteApiRequest
 */
final class CreateNoteApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'content',
];

    protected const array VALIDATION = [
    'agentId' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
];

    /**
     * Agent Id, creator of note.
     */
    public string $agentId {
        set {
            $this->assigning('agentId', $value);
            $this->agentId = $value;
        }
    }
    public \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\NoteContent $content;
    public \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\CreateNoteApiRequest\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'agentId' => is_string($value) ? $this->agentId = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\CreateNoteApiRequest\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
