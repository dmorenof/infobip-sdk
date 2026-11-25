<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34;

/**
 * RetrieveContextRequest
 *
 * AI Assistant retrieve context request with optional retrieval parameters.
 */
final class RetrieveContextRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'message',
    ];

    protected const array VALIDATION = [
        'k' => [
            'format' => 'int32',
        ],
        'reRankK' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Number of context chunks to return. Overrides the assistant's default K value. Use this to get more or fewer context chunks.
     * Example: 5
     * Format: int32
     */
    public int $k {
        set {
            $this->assigning('k', $value);
            $this->k = $value;
        }
    }
    /**
     * User message to retrieve context for.
     * Example: "How to send SMS?"
     */
    public string $message;
    /**
     * Enables re-ranking for improved precision. When set, retrieves max(k, reRankK) chunks initially, then uses a cross-encoder to return the top K most relevant results.
     * Example: 10
     * Format: int32
     */
    public int $reRankK {
        set {
            $this->assigning('reRankK', $value);
            $this->reRankK = $value;
        }
    }
    /**
     * Session ID to maintain context across multiple queries.
     * Example: "session-12345"
     */
    public string $sessionId;
    /**
     * Flag to indicate whether to use shared conversation history.
     */
    public bool $useSharedHistory;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'k' => is_int($value) ? $this->k = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'reRankK' => is_int($value) ? $this->reRankK = $value : parent::assignMember($name, $value),
            'sessionId' => is_string($value) ? $this->sessionId = $value : parent::assignMember($name, $value),
            'useSharedHistory' => is_bool($value) ? $this->useSharedHistory = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
