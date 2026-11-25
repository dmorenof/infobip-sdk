<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab;

/**
 * TriggerApiResultPage
 * Example: {"items":[{"id":"b3695d3c-6415-4bdd-82fc-07f9309933ec","title":"AJ Queue","expression":{"$neq":{"queue":"AJ Queue"}},"orderIndex":5,"isEnabled":true,"formId":"75f57446-1d65-478a-87ed-22d17dc3d077","timesTriggered":149},{"id":"bef60d38-98fa-4c14-b40e-34918b399964","title":"Feedback form triggers","expression":{"$or":[{"$eq":{"queue":"Default queue"}},{"$and":[{"$eq":{"customer.country":"Croatia"}},{"$eq":{"company.name":"AAA Infotek"}}]}]},"orderIndex":1,"isEnabled":true,"formId":"90a91386-6e6d-44da-889f-783705cec020","timesTriggered":245}],"pagination":{"totalItems":2,"page":0,"limit":10,"orderBy":{"property":"id","direction":"ASC"}}}
 */
final class TriggerApiResultPage extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Collections\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\TriggerApiResultPage\ItemsCollection $items;
    public \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\Pagination $pagination;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'items' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->items = new \InfobipSDK\Collections\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\TriggerApiResultPage\ItemsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\TriggerApiResponse::class)) : parent::assignMember($name, $value),
            'pagination' => $value instanceof \stdClass ? $this->pagination = new \InfobipSDK\DTOs\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab\Pagination($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
