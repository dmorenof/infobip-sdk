<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Fe7c4f0f74cadd174aef8cfae4332aff0f6a242321909295ef2872307010670d;

/**
 * IvrFileResponsePage
 *
 * Uploaded files response object.
 */
final class IvrFileResponsePage extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\PageInfo $paging;
    /**
     * The list of the results for this page.
     */
    public \InfobipSDK\Collections\Fe7c4f0f74cadd174aef8cfae4332aff0f6a242321909295ef2872307010670d\IvrFileResponsePage\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'paging' => $value instanceof \stdClass ? $this->paging = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\PageInfo($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\Fe7c4f0f74cadd174aef8cfae4332aff0f6a242321909295ef2872307010670d\IvrFileResponsePage\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\File::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
