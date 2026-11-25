<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99;

/**
 * Contact
 */
final class Contact extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
    'birthday',
];

    /**
     * Address information.
     */
    public \InfobipSDK\Collections\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\Contact\AddressesCollection $addresses;
    /**
     * Birthday information, YYYY-MM-DD formatted string.
     * Format: date-time
     */
    public string $birthday;
    /**
     * Email information.
     */
    public \InfobipSDK\Collections\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\Contact\EmailsCollection $emails;
    public \InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\Name $name;
    public \InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\Organization $org;
    /**
     * Phone information.
     */
    public \InfobipSDK\Collections\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\Contact\PhonesCollection $phones;
    /**
     * URL information.
     */
    public \InfobipSDK\Collections\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\Contact\UrlsCollection $urls;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'addresses' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->addresses = new \InfobipSDK\Collections\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\Contact\AddressesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\Address::class)) : parent::assignMember($name, $value),
            'birthday' => is_string($value) ? $this->birthday = $value : parent::assignMember($name, $value),
            'emails' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->emails = new \InfobipSDK\Collections\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\Contact\EmailsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\Email::class)) : parent::assignMember($name, $value),
            'name' => $value instanceof \stdClass ? $this->name = new \InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\Name($value) : parent::assignMember($name, $value),
            'org' => $value instanceof \stdClass ? $this->org = new \InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\Organization($value) : parent::assignMember($name, $value),
            'phones' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->phones = new \InfobipSDK\Collections\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\Contact\PhonesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\Phone::class)) : parent::assignMember($name, $value),
            'urls' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->urls = new \InfobipSDK\Collections\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\Contact\UrlsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\Url::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
