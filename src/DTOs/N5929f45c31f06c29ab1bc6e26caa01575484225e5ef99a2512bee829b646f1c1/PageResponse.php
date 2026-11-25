<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N5929f45c31f06c29ab1bc6e26caa01575484225e5ef99a2512bee829b646f1c1;

/**
 * PageResponse
 */
final class PageResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'paging',
    'results',
];

    public \InfobipSDK\DTOs\N5929f45c31f06c29ab1bc6e26caa01575484225e5ef99a2512bee829b646f1c1\PageInfo $paging;
    /**
     * The list of the results for this page.
     */
    public \InfobipSDK\Collections\N5929f45c31f06c29ab1bc6e26caa01575484225e5ef99a2512bee829b646f1c1\PageResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'paging' => $value instanceof \stdClass ? $this->paging = new \InfobipSDK\DTOs\N5929f45c31f06c29ab1bc6e26caa01575484225e5ef99a2512bee829b646f1c1\PageInfo($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N5929f45c31f06c29ab1bc6e26caa01575484225e5ef99a2512bee829b646f1c1\PageResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N5929f45c31f06c29ab1bc6e26caa01575484225e5ef99a2512bee829b646f1c1\SssV2::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
