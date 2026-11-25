<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * Call API
 *
 * Call API Action performs an HTTP request to a client’s endpoint, and (if told to) processes the response data. If collectResponse is set, the system will attempt to parse the response from the server. Our platform needs to be able to make HTTP requests to the specified endpoint.
 */
final class CallApi extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'options',
        'request',
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
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\CallApiOptions $options;
    /**
     * The URL to target. The parameter can be constructed using variables.
     */
    public string $request;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'actionId' => is_int($value) ? $this->actionId = $value : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\CallApiOptions($value) : parent::assignMember($name, $value),
            'request' => is_string($value) ? $this->request = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
