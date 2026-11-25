<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c;

/**
 * PageSegmentResponseDto
 */
final class PageSegmentResponseDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'paging',
    'results',
];

    public \InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\PageInfo $paging;
    /**
     * The list of the results for this page.
     */
    public \InfobipSDK\Collections\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\PageSegmentResponseDto\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'paging' => $value instanceof \stdClass ? $this->paging = new \InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\PageInfo($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\PageSegmentResponseDto\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\SegmentResponseDto::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
