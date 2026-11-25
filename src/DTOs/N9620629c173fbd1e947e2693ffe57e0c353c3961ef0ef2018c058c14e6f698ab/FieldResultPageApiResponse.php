<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab;

/**
 * FieldResultPageApiResponse
 * Example: {"items":[{"id":"d85b8e46-f579-482f-b383-22648aae17b5","title":"Type","type":"DROPDOWN","isEnabled":true,"isDefault":null,"options":["inquiry","complaint"],"createdAt":"2021-03-30T06:28:10.676028Z","updatedAt":"2021-03-30T06:28:10.676029Z","operators":[]},{"id":"e130e3f2-c8de-4ba9-a26e-8ac705642832","title":"Complaints","type":"TEXT","isEnabled":true,"isDefault":null,"options":[],"createdAt":"2021-06-29T10:00:55.755685Z","updatedAt":"2021-06-29T10:00:55.755686Z","operators":[]},{"id":"ba18fdf8-eacf-4b15-8d4e-71515f5b9bcc","title":"Inquiry","type":"TEXT","isEnabled":true,"isDefault":null,"options":[],"createdAt":"2021-06-29T10:00:33.777564Z","updatedAt":"2021-06-29T10:00:33.777565Z","operators":[]}],"pagination":{"totalItems":3,"page":0,"limit":10,"orderBy":{"property":"id","direction":"ASC"}}}
 */
final class FieldResultPageApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Collections\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FieldResultPageApiResponse\ItemsCollection $items;
    public \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\Pagination $pagination;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'items' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->items = new \InfobipSDK\Collections\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FieldResultPageApiResponse\ItemsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\FieldApiResponse::class)) : parent::assignMember($name, $value),
            'pagination' => $value instanceof \stdClass ? $this->pagination = new \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\Pagination($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
