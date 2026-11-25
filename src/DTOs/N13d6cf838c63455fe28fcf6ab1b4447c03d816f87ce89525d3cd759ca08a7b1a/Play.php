<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * Play
 *
 * Play action performs playback of audio provided by the client’s URL. Supported formats of the provided file are aac, aiff, m4a, mp2, mp3, mp4 (audio only), ogg, wav and wma. Our platform needs to have permission to make GET and HEAD HTTP requests on the provided URL. Standard http ports (like 80, 8080, etc.) are advised.
 */
final class Play extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'playFromUrl',
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
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\PlayOptions $options;
    /**
     * Audio file URL. The parameter can be constructed using variables.
     */
    public string $playFromUrl;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'actionId' => is_int($value) ? $this->actionId = $value : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\PlayOptions($value) : parent::assignMember($name, $value),
            'playFromUrl' => is_string($value) ? $this->playFromUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
