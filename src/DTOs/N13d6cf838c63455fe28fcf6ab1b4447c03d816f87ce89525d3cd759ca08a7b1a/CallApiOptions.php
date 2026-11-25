<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * CallApiOptions
 */
final class CallApiOptions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'body',
        'method',
    ];

    /**
     * HTTP body. The parameter can be constructed using variables.
     */
    public string $body;
    /**
     * If this field is set, the system will parse the response and save all its fields as variables inside scenario. For example, if the response is `{"letters": "abcd", "numbers": 12345}`, the system will store variables letters and numbers, with values `abcd` and `12345` respectively. Nested JSON and XML objects are also supported; nested fields are resolved with underscore notation. For example, if the response is `{"a": {"b": {"c": "xyz"}}}`, the system will store `a_b_c` with value `xyz`. The response cannot contain duplicate keys or predefined words. Check the example Call Api with response. Response that is parsed can only be in JSON or XML. Predefined words: from, to, startTime, answerTime and machineAnswered.
     */
    public bool $collectResponse;
    /**
     * HTTP headers
     */
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\CallApiOptions\HeadersMap $headers;
    public \InfobipSDK\Enums\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\HttpMethod $method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'body' => is_string($value) ? $this->body = $value : parent::assignMember($name, $value),
            'collectResponse' => is_bool($value) ? $this->collectResponse = $value : parent::assignMember($name, $value),
            'method' => is_string($value) ? $this->method = \InfobipSDK\Enums\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\HttpMethod::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
