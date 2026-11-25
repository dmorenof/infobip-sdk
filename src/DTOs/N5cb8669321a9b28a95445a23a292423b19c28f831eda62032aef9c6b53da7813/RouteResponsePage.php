<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N5cb8669321a9b28a95445a23a292423b19c28f831eda62032aef9c6b53da7813;

/**
 * RouteResponsePage
 *
 * Routes response object.
 */
final class RouteResponsePage extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\PageInfo $paging;
    /**
     * The list of the results for this page.
     */
    public \InfobipSDK\Collections\N5cb8669321a9b28a95445a23a292423b19c28f831eda62032aef9c6b53da7813\RouteResponsePage\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'paging' => $value instanceof \stdClass ? $this->paging = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\PageInfo($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N5cb8669321a9b28a95445a23a292423b19c28f831eda62032aef9c6b53da7813\RouteResponsePage\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N1e938b22275568ebc747d21724b50c9be18ff5770eb33c37b76fda4633c14bde\RouteResponse::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
