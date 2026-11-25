<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\D32f709b8e696d073f5212b1e1d90721a8fd1118bf2c8abce078bf2baf7d1707;

/**
 * ImagePage
 */
final class ImagePage extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\PageInfo $paging;
    /**
     * The list of the results for this page.
     */
    public \InfobipSDK\Collections\D32f709b8e696d073f5212b1e1d90721a8fd1118bf2c8abce078bf2baf7d1707\ImagePage\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'paging' => $value instanceof \stdClass ? $this->paging = new \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\PageInfo($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\D32f709b8e696d073f5212b1e1d90721a8fd1118bf2c8abce078bf2baf7d1707\ImagePage\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Bced1b5de5a3082b5f8ce3c272029f66a05beaf3b2db4fdc852bd1a5393c0582\ImageResponse::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
