<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * Say
 *
 * Say action converts provided text into an audio file which is played during the call based on the provided parameters. Message text can be up to 1400 characters long.
 */
final class Say extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'say',
];

    protected const array VALIDATION = [
    'actionId' => [
        'format' => 'int32',
    ],
];

    /**
     * User-defined ID of an action that can be used with go-to action.
     * Format: int32
     */
    public int $actionId {
        set {
            $this->assigning('actionId', $value);
            $this->actionId = $value;
        }
    }
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\SayOptions $options;
    /**
     * Message text. SSML (_Speech Synthesis Markup Language_) is supported and can be used to fully customize pronunciation of the provided text. The parameter can be constructed using variables.
     * Documentation: https://www.infobip.com/docs/voice-and-video/reference#ssml-support-text-to-speech-languages
     */
    public string $say;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'actionId' => is_int($value) ? $this->actionId = $value : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\SayOptions($value) : parent::assignMember($name, $value),
            'say' => is_string($value) ? $this->say = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
