<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\Camara\NumberRecycling\V02\Check;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Result of the number recycling check.
     */
    public bool $phoneNumberRecycled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'phoneNumberRecycled' => is_bool($value) ? $this->phoneNumberRecycled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
