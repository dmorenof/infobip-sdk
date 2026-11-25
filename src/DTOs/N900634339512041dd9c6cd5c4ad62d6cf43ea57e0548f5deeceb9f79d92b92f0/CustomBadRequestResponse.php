<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0;

/**
 * Bad Request Response
 *
 * Bad request
 * Example: {"type":"about:blank","title":"Bad Request","status":400,"detail":"Failed to read request","instance":"/moments/1/flows/200000000000001/participants"}
 */
final class CustomBadRequestResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'detail',
    'instance',
    'status',
    'title',
    'type',
];

    protected const array VALIDATION = [
    'status' => [
        'format' => 'int32',
    ],
];

    public string $detail;
    public string $instance;
    /**
     * Format: int32
     */
    public int $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }
    public string $title;
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'detail' => is_string($value) ? $this->detail = $value : parent::assignMember($name, $value),
            'instance' => is_string($value) ? $this->instance = $value : parent::assignMember($name, $value),
            'status' => is_int($value) ? $this->status = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
