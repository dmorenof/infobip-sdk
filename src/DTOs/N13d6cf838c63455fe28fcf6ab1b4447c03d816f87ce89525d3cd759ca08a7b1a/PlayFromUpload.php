<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * Play From Upload
 *
 * Play From Upload action performs playback of uploaded audio file. Not available in inbound IVR at the moment.
 */
final class PlayFromUpload extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'playFromUpload',
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
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\PlayFromUploadOptions $options;
    /**
     * ID of uploaded file. The parameter can be constructed using variables.
     */
    public string $playFromUpload;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'actionId' => is_int($value) ? $this->actionId = $value : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\PlayFromUploadOptions($value) : parent::assignMember($name, $value),
            'playFromUpload' => is_string($value) ? $this->playFromUpload = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
