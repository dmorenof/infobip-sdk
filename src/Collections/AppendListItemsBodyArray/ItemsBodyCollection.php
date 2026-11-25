<?php

declare(strict_types=1);

namespace InfobipSDK\Collections\AppendListItemsBodyArray;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\InfobipSDK\Requests\AppendListItemsBodyItem\ItemsBodyRequest> */
final class ItemsBodyCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \InfobipSDK\Requests\AppendListItemsBodyItem\ItemsBodyRequest::class;
}
