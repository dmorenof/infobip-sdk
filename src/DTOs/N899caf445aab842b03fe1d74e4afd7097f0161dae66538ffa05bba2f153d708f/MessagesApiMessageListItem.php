<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageListItem
 *
 * List Items.
 */
final class MessagesApiMessageListItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'text',
];

    protected const array VALIDATION = [
    'imageUrl' => [
        'pattern' => '',
    ],
    'text' => [
        'minLength' => 1,
    ],
];

    /**
     * Item Description.
     */
    public string $description;
    /**
     * Item ID (supported only by WhatsApp), has to be unique for each item.
     */
    public string $id;
    /**
     * Item's Image URL.
     */
    public string $imageUrl {
        set {
            $this->assigning('imageUrl', $value);
            $this->imageUrl = $value;
        }
    }
    /**
     * Item Text.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'imageUrl' => is_string($value) ? $this->imageUrl = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
