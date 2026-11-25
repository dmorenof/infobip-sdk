<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * SynthesisVoiceResponse
 *
 * Array of voices belonging to the specified language.
 */
final class SynthesisVoiceResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array PROPERTY_MAP = [
    'default' => 'default_',
];
    protected const array WIRE_PROPERTY_MAP = [
    'default_' => 'default',
];

    public bool $default_;
    /**
     * Gender of the voice. Can be `male` or `female`.
     */
    public string $gender;
    /**
     * Indicates whether voice is default voice for a given language. If voice is not chosen for the language, then default voice will be used.
     */
    public bool $isDefault;
    /**
     * Indicates whether voice is neural. Using neural voice will generate additional cost.
     */
    public bool $isNeural;
    /**
     * Name of the voice. Example: `Joanna`
     */
    public string $name;
    public bool $neural;
    /**
     * Indicates if SSML is supported.
     */
    public bool $ssmlSupported;
    /**
     * Name of the supplier for text to speech synthesis.
     */
    public string $supplier;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'default' => is_bool($value) ? $this->default_ = $value : parent::assignMember($name, $value),
            'gender' => is_string($value) ? $this->gender = $value : parent::assignMember($name, $value),
            'isDefault' => is_bool($value) ? $this->isDefault = $value : parent::assignMember($name, $value),
            'isNeural' => is_bool($value) ? $this->isNeural = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'neural' => is_bool($value) ? $this->neural = $value : parent::assignMember($name, $value),
            'ssmlSupported' => is_bool($value) ? $this->ssmlSupported = $value : parent::assignMember($name, $value),
            'supplier' => is_string($value) ? $this->supplier = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
