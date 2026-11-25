<?php

declare(strict_types=1);

namespace InfobipSDK\Collections\AppendListItemsBodyArray;

final class ItemsBodyCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \InfobipSDK\Requests\AppendListItemsBodyItem\ItemsBodyRequest::class;
}
