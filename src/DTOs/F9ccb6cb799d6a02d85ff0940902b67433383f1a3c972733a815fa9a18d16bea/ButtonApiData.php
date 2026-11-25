<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * ButtonApiData
 *
 * Template buttons. Can contain 1 to 10 buttons which include up to 2 URL buttons, one phone number button, one `copy code` button and one `flow` button. `quick reply` and non `quick reply` buttons have to be grouped together.
 */
class ButtonApiData extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    'CATALOG' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\CatalogButtonApiData',
    'COPY_CODE' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\CopyCodeDefaultButtonApiData',
    'FLOW' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\FlowButtonApiData',
    'MULTI_PRODUCT' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\MultiProductButtonApiData',
    'ORDER_DETAILS' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\OrderDetailsButtonApiData',
    'PHONE_NUMBER' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\PhoneNumberButtonApiData',
    'QUICK_REPLY' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\QuickReplyButtonApiData',
    'REQUEST_CONTACT_INFO' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\RequestContactInfoButtonApiData',
    'URL' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\UrlButtonApiData',
    'VOICE_CALL' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\VoiceCallButtonApiData',
    'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.CatalogButtonApiData' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\CatalogButtonApiData',
    'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.CopyCodeDefaultButtonApiData' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\CopyCodeDefaultButtonApiData',
    'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.FlowButtonApiData' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\FlowButtonApiData',
    'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.MultiProductButtonApiData' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\MultiProductButtonApiData',
    'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.OrderDetailsButtonApiData' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\OrderDetailsButtonApiData',
    'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.PhoneNumberButtonApiData' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\PhoneNumberButtonApiData',
    'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.QuickReplyButtonApiData' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\QuickReplyButtonApiData',
    'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.RequestContactInfoButtonApiData' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\RequestContactInfoButtonApiData',
    'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.UrlButtonApiData' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\UrlButtonApiData',
    'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.VoiceCallButtonApiData' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\VoiceCallButtonApiData',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\ButtonApiData\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\ButtonApiData\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
