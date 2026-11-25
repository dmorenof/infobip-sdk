<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c;

/**
 * SearchPersonMemoriesApiRequest
 *
 * Request to search a person's interaction memories by meaning and keywords.
 */
final class SearchPersonMemoriesApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'identifier',
    'query',
];

    protected const array VALIDATION = [
    'maxResults' => [
        'minimum' => 1,
        'maximum' => 50,
        'format' => 'int32',
    ],
    'query' => [
        'minLength' => 0,
        'maxLength' => 1000,
    ],
];

    /**
     * Start of an absolute time window (UTC, ISO-8601). Must be provided together with `to` and cannot be combined with `relativeTimeRange`.
     * Example: "2026-09-01T20:00:00.999Z"
     * Format: date-time
     */
    public string $from;
    public \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\ApiPersonIdentifier $identifier;
    /**
     * Maximum number of memories to return, best match first. Must be between 1 and 50. Defaults to 10.
     * Example: 10
     * Format: int32
     */
    public int $maxResults {
        set {
            $this->assigning('maxResults', $value);
            $this->maxResults = $value;
        }
    }
    /**
     * Natural-language description of what to find in the person's interaction memories.
     * Example: "complaints about roaming charges"
     */
    public string $query {
        set {
            $this->assigning('query', $value);
            $this->query = $value;
        }
    }
    public \InfobipSDK\Enums\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\ApiRelativeTimeRange $relativeTimeRange;
    /**
     * End of an absolute time window (UTC, ISO-8601). Must be provided together with `from` and be later than it.
     * Example: "2026-09-30T23:59:59.999Z"
     * Format: date-time
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'maxResults' => is_int($value) ? $this->maxResults = $value : parent::assignMember($name, $value),
            'query' => is_string($value) ? $this->query = $value : parent::assignMember($name, $value),
            'relativeTimeRange' => is_string($value) ? $this->relativeTimeRange = \InfobipSDK\Enums\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\ApiRelativeTimeRange::from($value) : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
