<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab;

/**
 * FormApiResultPage
 * Example: {"items":[{"id":"75f57446-1d65-478a-87ed-22d17dc3d077","title":"Granulation","isEnabled":true,"isDefault":false,"fields":null,"createdAt":"2021-03-29T14:04:48.468346Z","updatedAt":"2021-03-29T14:04:48.468349Z"},{"id":"269757a0-38a6-4226-a8db-cc27930f6a2f","title":"Demo form","isEnabled":false,"isDefault":false,"fields":null,"createdAt":"2021-04-17T07:54:44.401772Z","updatedAt":"2021-04-17T07:54:44.401773Z"}],"pagination":{"totalItems":2,"page":0,"limit":10,"orderBy":{"property":"id","direction":"ASC"}}}
 */
final class FormApiResultPage extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Collections\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FormApiResultPage\ItemsCollection $items;
    public \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\Pagination $pagination;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'items' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->items = new \InfobipSDK\Collections\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FormApiResultPage\ItemsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FormApiResponse::class)) : parent::assignMember($name, $value),
            'pagination' => $value instanceof \stdClass ? $this->pagination = new \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\Pagination($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
