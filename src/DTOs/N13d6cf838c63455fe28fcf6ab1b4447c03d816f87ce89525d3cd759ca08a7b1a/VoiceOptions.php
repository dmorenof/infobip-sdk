<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * VoiceOptions
 */
final class VoiceOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Gender in which the text would be synthesized. The parameter can be constructed using variables.
     */
    public string $gender;
    /**
     * Name of the voice in which the text would be synthesized. The parameter can be constructed using variables.
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
