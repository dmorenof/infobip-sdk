<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * Voice
 *
 * Used to define voice in which text would be synthesized. It has two parameters: _name_ and _gender_. When only _name_ is provided, then that exact voice with that name will be used to synthesize text. If only _gender_ is provided, then text is synthesized with first voice in given gender. If voice is not set, then default voice for that specific language is used.
 */
final class Voice extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Gender of the voice. Can be `male` or `female`.
     */
    public string $gender;
    /**
     * Name of the voice. Example: `Joanna`
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'gender' => is_string($value) ? $this->gender = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
