<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\D32f709b8e696d073f5212b1e1d90721a8fd1118bf2c8abce078bf2baf7d1707;

/**
 * CallLinkPage
 */
final class CallLinkPage extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\PageInfo $paging;
    /**
     * The list of the results for this page.
     */
    public \InfobipSDK\Collections\D32f709b8e696d073f5212b1e1d90721a8fd1118bf2c8abce078bf2baf7d1707\CallLinkPage\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'paging' => $value instanceof \stdClass ? $this->paging = new \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\PageInfo($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\D32f709b8e696d073f5212b1e1d90721a8fd1118bf2c8abce078bf2baf7d1707\CallLinkPage\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Ae8a6eecccfb565f1840ac10e7bfb960a35d1e256ae31abf1bdea45a1d2f5557\CallLink::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
