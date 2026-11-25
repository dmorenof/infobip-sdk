<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19;

/**
 * AddFlowJsonValidationError
 *
 * Errors found during validation of the uploaded file.
 */
final class AddFlowJsonValidationError extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'columnEnd' => [
            'format' => 'int32',
        ],
        'columnStart' => [
            'format' => 'int32',
        ],
        'lineEnd' => [
            'format' => 'int32',
        ],
        'lineStart' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Column that mark end of error.
     * Example: 30
     * Format: int32
     */
    public int $columnEnd {
        set {
            $this->assigning('columnEnd', $value);
            $this->columnEnd = $value;
        }
    }
    /**
     * Column that mark beginning of error.
     * Example: 17
     * Format: int32
     */
    public int $columnStart {
        set {
            $this->assigning('columnStart', $value);
            $this->columnStart = $value;
        }
    }
    /**
     * Error.
     * Example: "INVALID_PROPERTY"
     */
    public string $error;
    /**
     * Error type.
     * Example: "JSON_SCHEMA_ERROR"
     */
    public string $errorType;
    /**
     * Line that mark end of error.
     * Example: 46
     * Format: int32
     */
    public int $lineEnd {
        set {
            $this->assigning('lineEnd', $value);
            $this->lineEnd = $value;
        }
    }
    /**
     * Line that mark beginning of error.
     * Example: 46
     * Format: int32
     */
    public int $lineStart {
        set {
            $this->assigning('lineStart', $value);
            $this->lineStart = $value;
        }
    }
    /**
     * Message.
     * Example: "The property \"initial-text\" cannot be specified at \"$root/screens/0/layout/children/2/children/0\"."
     */
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'columnEnd' => is_int($value) ? $this->columnEnd = $value : parent::assignMember($name, $value),
            'columnStart' => is_int($value) ? $this->columnStart = $value : parent::assignMember($name, $value),
            'error' => is_string($value) ? $this->error = $value : parent::assignMember($name, $value),
            'errorType' => is_string($value) ? $this->errorType = $value : parent::assignMember($name, $value),
            'lineEnd' => is_int($value) ? $this->lineEnd = $value : parent::assignMember($name, $value),
            'lineStart' => is_int($value) ? $this->lineStart = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
