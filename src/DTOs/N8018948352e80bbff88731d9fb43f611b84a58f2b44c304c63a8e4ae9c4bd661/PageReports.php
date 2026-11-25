<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8018948352e80bbff88731d9fb43f611b84a58f2b44c304c63a8e4ae9c4bd661;

/**
 * PageReports
 */
final class PageReports extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N8018948352e80bbff88731d9fb43f611b84a58f2b44c304c63a8e4ae9c4bd661\PageInfo $paging;
    public \InfobipSDK\Collections\N8018948352e80bbff88731d9fb43f611b84a58f2b44c304c63a8e4ae9c4bd661\PageReports\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'paging' => $value instanceof \stdClass ? $this->paging = new \InfobipSDK\DTOs\N8018948352e80bbff88731d9fb43f611b84a58f2b44c304c63a8e4ae9c4bd661\PageInfo($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N8018948352e80bbff88731d9fb43f611b84a58f2b44c304c63a8e4ae9c4bd661\PageReports\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N8018948352e80bbff88731d9fb43f611b84a58f2b44c304c63a8e4ae9c4bd661\ReportLineItem::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
