<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * CallsDtmfMessageContent
 */
final class CallsDtmfMessageContent extends \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\CallsPublicMessageContent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'dtmfMaxCodeLength' => [
        'format' => 'int32',
    ],
    'timeoutSeconds' => [
        'format' => 'int32',
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Format: int32
     */
    public int $dtmfMaxCodeLength {
        set {
            $this->assigning('dtmfMaxCodeLength', $value);
            $this->dtmfMaxCodeLength = $value;
        }
    }
    public string $dtmfTerminator;
    public string $text;
    /**
     * Format: int32
     */
    public int $timeoutSeconds {
        set {
            $this->assigning('timeoutSeconds', $value);
            $this->timeoutSeconds = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dtmfMaxCodeLength' => is_int($value) ? $this->dtmfMaxCodeLength = $value : parent::assignMember($name, $value),
            'dtmfTerminator' => is_string($value) ? $this->dtmfTerminator = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'timeoutSeconds' => is_int($value) ? $this->timeoutSeconds = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
