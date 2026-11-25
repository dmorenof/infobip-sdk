<?php

declare(strict_types=1);

namespace InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\BillingUsageDataFilter;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\InfobipSDK\Enums\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\BillingUsageDataFilter\CategoriesEnum> */
final class CategoriesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \InfobipSDK\Enums\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\BillingUsageDataFilter\CategoriesEnum::class;
    protected const array COLLECTION_VALIDATION = [
        'uniqueItems' => true,
        'jsonSchema' => '{"enum":["AGENTOS","AI","APPLE_MB","CARRIER_LOOKUP","EMAIL","EMAIL_VALIDATION","KAKAO","LIVE_CHAT","MMS","MMS_OPERATOR_FEE","MOBILE_PUSH","NUMBER_LOOKUP","OPEN_CHANNEL","RCS","RCS_OPERATOR_FEE","SMS","SMS_OPERATOR_FEE","VIBER","VOICE_VIDEO","WHATSAPP"]}',
    ];
}
