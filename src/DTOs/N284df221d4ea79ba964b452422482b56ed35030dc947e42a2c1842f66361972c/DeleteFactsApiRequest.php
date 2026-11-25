<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c;

/**
 * DeleteFactsApiRequest
 *
 * Request to delete fact definitions by their ids.
 */
final class DeleteFactsApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'ids',
];

    /**
     * Ids of fact definitions to delete. Unknown ids are ignored silently.
     */
    public \InfobipSDK\Collections\StringCollection $ids;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->ids = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
