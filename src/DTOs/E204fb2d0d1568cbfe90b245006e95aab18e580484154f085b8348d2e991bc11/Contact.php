<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * Contact
 */
final class Contact extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
    ];

    protected const array VALIDATION = [
        'birthday' => [
            'pattern' => '([12]\\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\\d|3[01]))',
        ],
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'addresses',
        'birthday',
        'emails',
        'phones',
        'urls',
    ];

    /**
     * Address information.
     */
    public \InfobipSDK\Collections\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Contact\AddressesCollection $addresses;
    /**
     * Birthday information, YYYY-MM-DD formatted string.
     */
    public string $birthday {
        set {
            $this->assigning('birthday', $value);
            $this->birthday = $value;
        }
    }
    /**
     * Email information.
     */
    public \InfobipSDK\Collections\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Contact\EmailsCollection $emails;
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Name $name;
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Organization $org;
    /**
     * Phone information.
     */
    public \InfobipSDK\Collections\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Contact\PhonesCollection $phones;
    /**
     * Url information.
     */
    public \InfobipSDK\Collections\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Contact\UrlsCollection $urls;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'addresses' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->addresses = new \InfobipSDK\Collections\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Contact\AddressesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Address::class)) : parent::assignMember($name, $value),
            'birthday' => is_string($value) ? $this->birthday = $value : parent::assignMember($name, $value),
            'emails' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->emails = new \InfobipSDK\Collections\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Contact\EmailsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Email::class)) : parent::assignMember($name, $value),
            'name' => $value instanceof \stdClass ? $this->name = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Name($value) : parent::assignMember($name, $value),
            'org' => $value instanceof \stdClass ? $this->org = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Organization($value) : parent::assignMember($name, $value),
            'phones' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->phones = new \InfobipSDK\Collections\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Contact\PhonesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Phone::class)) : parent::assignMember($name, $value),
            'urls' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->urls = new \InfobipSDK\Collections\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Contact\UrlsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Url::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
