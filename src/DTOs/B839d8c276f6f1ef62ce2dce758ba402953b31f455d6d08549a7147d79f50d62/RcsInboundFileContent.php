<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * RcsInboundFileContent
 */
final class RcsInboundFileContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'contentType',
    'name',
    'size',
    'type',
    'url',
];

    protected const array VALIDATION = [
    'contentType' => [
        'minLength' => 1,
    ],
    'name' => [
        'minLength' => 1,
    ],
    'size' => [
        'minimum' => 0,
    ],
    'url' => [
        'minLength' => 1,
    ],
];

    /**
     * Content type of a file which is sent in an incoming message.
     */
    public string $contentType {
        set {
            $this->assigning('contentType', $value);
            $this->contentType = $value;
        }
    }
    /**
     * Name of a file which is sent in an incoming message.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Size of the file which is sent in an incoming message. Minimum value is 0. Size of file is considered to be expressed in bytes.
     * Format: int64
     */
    public int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    public \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsInboundContentType $type;
    /**
     * URL of the file which is sent in an incoming message.
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contentType' => is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'size' => is_int($value) ? $this->size = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsInboundContentType::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
