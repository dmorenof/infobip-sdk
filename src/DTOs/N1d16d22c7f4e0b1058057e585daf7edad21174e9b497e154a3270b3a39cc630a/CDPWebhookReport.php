<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * CDPWebhookReport
 */
class CDPWebhookReport extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'timestamp',
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.CustomEventReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\CustomEventReport',
    '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.MobileAppAppLaunchReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\MobileAppAppLaunchReport',
    '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.MobileAppDepersonalizeReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\MobileAppDepersonalizeReport',
    '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.MobileAppInstallReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\MobileAppInstallReport',
    '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.MobileAppPersonalizeReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\MobileAppPersonalizeReport',
    '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.MobileAppUninstallReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\MobileAppUninstallReport',
    '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.PersonAttributeChangedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\PersonAttributeChangedReport',
    '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.PersonContactInformationCreatedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\PersonContactInformationCreatedReport',
    '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.PersonContactInformationDeletedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\PersonContactInformationDeletedReport',
    '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.PersonContactInformationUpdatedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\PersonContactInformationUpdatedReport',
    '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.PersonCreatedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\PersonCreatedReport',
    '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.PersonDeletedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\PersonDeletedReport',
    '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.PersonMergedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\PersonMergedReport',
    '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.PersonTagAddedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\PersonTagAddedReport',
    '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.PersonTagRemovedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\PersonTagRemovedReport',
    '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.WebSdkPageViewReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\WebSdkPageViewReport',
    '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.WebSdkSessionEndedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\WebSdkSessionEndedReport',
    '1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a.WebSdkSessionStartedReport' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\WebSdkSessionStartedReport',
    'MOBILE_APP_APP_LAUNCH' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\MobileAppAppLaunchReport',
    'MOBILE_APP_DEPERSONALIZE' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\MobileAppDepersonalizeReport',
    'MOBILE_APP_INSTALL' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\MobileAppInstallReport',
    'MOBILE_APP_PERSONALIZE' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\MobileAppPersonalizeReport',
    'MOBILE_APP_UNINSTALL' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\MobileAppUninstallReport',
    'PEOPLE_CUSTOM_AND_TEMPLATE_EVENTS' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\CustomEventReport',
    'PERSON_ATTRIBUTE_CHANGED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\PersonAttributeChangedReport',
    'PERSON_CONTACT_INFORMATION_CREATED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\PersonContactInformationCreatedReport',
    'PERSON_CONTACT_INFORMATION_DELETED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\PersonContactInformationDeletedReport',
    'PERSON_CONTACT_INFORMATION_UPDATED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\PersonContactInformationUpdatedReport',
    'PERSON_CREATED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\PersonCreatedReport',
    'PERSON_DELETED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\PersonDeletedReport',
    'PERSON_MERGED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\PersonMergedReport',
    'PERSON_TAG_ADDED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\PersonTagAddedReport',
    'PERSON_TAG_DELETED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\PersonTagRemovedReport',
    'WEB_SDK_PAGE_VIEW' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\WebSdkPageViewReport',
    'WEB_SDK_SESSION_ENDED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\WebSdkSessionEndedReport',
    'WEB_SDK_SESSION_STARTED' => 'InfobipSDK\\DTOs\\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\\WebSdkSessionStartedReport',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Date and time of the event.
     * Example: "2025-09-10T13:47:40.032+00:00"
     */
    public string $timestamp;
    /**
     * Defines the type of event being delivered.
     */
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'timestamp' => is_string($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
