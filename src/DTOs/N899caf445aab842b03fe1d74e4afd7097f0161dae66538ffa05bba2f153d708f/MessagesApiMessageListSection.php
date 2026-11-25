<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageListSection
 *
 * Section's list.
 */
final class MessagesApiMessageListSection extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'items',
        'sectionTitle',
    ];

    protected const array VALIDATION = [
        'items' => [
            'minItems' => 1,
        ],
        'sectionTitle' => [
            'minLength' => 1,
        ],
    ];

    /**
     * List Items.
     */
    public \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageListSection\ItemsCollection $items {
        set {
            $this->assigning('items', $value);
            $this->items = $value;
        }
    }
    /**
     * Multiple Selection.
     */
    public bool $multipleSelection;
    /**
     * Section's title
     */
    public string $sectionTitle {
        set {
            $this->assigning('sectionTitle', $value);
            $this->sectionTitle = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'items' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->items = new \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageListSection\ItemsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageListItem::class)) : parent::assignMember($name, $value),
            'multipleSelection' => is_bool($value) ? $this->multipleSelection = $value : parent::assignMember($name, $value),
            'sectionTitle' => is_string($value) ? $this->sectionTitle = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
