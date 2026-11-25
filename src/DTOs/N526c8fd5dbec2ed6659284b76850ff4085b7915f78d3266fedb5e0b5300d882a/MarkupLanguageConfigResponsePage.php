<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N526c8fd5dbec2ed6659284b76850ff4085b7915f78d3266fedb5e0b5300d882a;

/**
 * MarkupLanguageConfigResponsePage
 *
 * Markup language configurations response object.
 */
final class MarkupLanguageConfigResponsePage extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\PageInfo $paging;
    /**
     * The list of the results for this page.
     */
    public \InfobipSDK\Collections\N526c8fd5dbec2ed6659284b76850ff4085b7915f78d3266fedb5e0b5300d882a\MarkupLanguageConfigResponsePage\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'paging' => $value instanceof \stdClass ? $this->paging = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\PageInfo($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N526c8fd5dbec2ed6659284b76850ff4085b7915f78d3266fedb5e0b5300d882a\MarkupLanguageConfigResponsePage\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Eaaf11bb9830fc826a8597df01bea6f2a14ef6d1ed129a4f6623981d52827778\MarkupLanguageConfigResponse::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
