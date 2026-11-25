<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * NumbersResponse
 */
final class NumbersResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Format: int64
     */
    public int $numberCount;
    public \InfobipSDK\Collections\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumbersResponse\NumbersCollection $numbers;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'numberCount' => is_int($value) ? $this->numberCount = $value : parent::assignMember($name, $value),
            'numbers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->numbers = new \InfobipSDK\Collections\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumbersResponse\NumbersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumberResponse::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
