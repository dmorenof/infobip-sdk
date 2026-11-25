<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * WhatsAppContactInboundMessageContent
 * Example: {"contacts":[{"addresses":[{"street":"Street name 1","city":"city name","state":"state name","zip":"123123","country":"country name","countryCode":"HR","type":"home address"}],"birthday":"2024-01-10","emails":[{"email":"example&#64;example.com","type":"work email"}],"name":{"firstName":"John","lastName":"Doe","middleName":"Joe","nameSuffix":"PhD","namePrefix":"Dr.","formattedName":"Dr. John Doe"},"organisation":{"company":"company name","department":"department name","title":"company title"},"phones":[{"phone":"38595112233","type":"work phone","waId":"waId"}],"urls":[{"url":"https://example.com","type":"work url"}]}],"type":"CONTACT"}
 */
final class WhatsAppContactInboundMessageContent extends \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\WhatsAppPublicInboundMessageContent
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Collections\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\WhatsAppContactInboundMessageContent\ContactsCollection $contacts;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contacts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->contacts = new \InfobipSDK\Collections\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\WhatsAppContactInboundMessageContent\ContactsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\Contact::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
