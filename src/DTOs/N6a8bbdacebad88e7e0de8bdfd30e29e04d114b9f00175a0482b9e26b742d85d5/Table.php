<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * Table
 *
 * Table component with rows.
 */
final class Table extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'rows',
];

    protected const array VALIDATION = [
    'rows' => [
        'minItems' => 2,
        'maxItems' => 8,
    ],
];

    /**
     * List of rows.
     */
    public \InfobipSDK\Collections\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\Table\RowsCollection $rows {
        set {
            $this->assigning('rows', $value);
            $this->rows = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'rows' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->rows = new \InfobipSDK\Collections\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\Table\RowsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\TableRowItem::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
