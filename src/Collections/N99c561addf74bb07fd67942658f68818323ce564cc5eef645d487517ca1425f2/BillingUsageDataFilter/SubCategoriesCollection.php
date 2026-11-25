<?php

declare(strict_types=1);

namespace InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\BillingUsageDataFilter;

final class SubCategoriesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \InfobipSDK\Enums\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\BillingUsageDataFilter\SubCategoriesEnum::class;
    protected const array COLLECTION_VALIDATION = [
        'uniqueItems' => true,
        'jsonSchema' => '{"enum":["AUDIO_STREAMING","CONFERENCING","FLASH","KAKAO_A","KAKAO_B","KAKAO_S","MISSED_CALL","NEURAL_TEXT_TO_SPEECH","PHONE","RECORDING_STORAGE","SPEECH_CAPTURE","SPEECH_TRANSCRIPTION","VIBER_BC","VIBER_BM","VIBER_BOTS","VIDEO_COMPOSITION","VOICE_AMD","VOICE_RECORDING","WEBRTC","WHATSAPP_BC"]}',
    ];
}
