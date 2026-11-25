<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * Claim
 *
 * Claim object containing the optional hint used by Android to suggest the right SIM in dual-SIM devices.
 */
final class Claim extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Name of the hint parameter
     * Example: ["android_carrier_hint"]
     */
    public \InfobipSDK\Collections\StringCollection $path;
    /**
     * Value of the hint parameter
     * Example: [1234]
     */
    public \InfobipSDK\Collections\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotButtonText\PaddingsCollection $values;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'path' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->path = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'values' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->values = new \InfobipSDK\Collections\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotButtonText\PaddingsCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
