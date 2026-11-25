<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\People\Resource3\Persons\Merge;

/**
 * Batch response for upsert operations
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\ErrorResponseV3 $errors;
    public \InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\MergeSuccessResult $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errors' => $value instanceof \stdClass ? $this->errors = new \InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\ErrorResponseV3($value) : parent::assignMember($name, $value),
            'results' => $value instanceof \stdClass ? $this->results = new \InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\MergeSuccessResult($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
