<?php

declare(strict_types=1);

namespace InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TollFreeCampaign;

final class ImageURLsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = 'string';
    protected const array COLLECTION_VALIDATION = [
    'uniqueItems' => true,
];
    protected const array ITEM_VALIDATION = [
    'minLength' => 1,
    'pattern' => '(?i)https?:\\/\\/\\S+',
];
}
