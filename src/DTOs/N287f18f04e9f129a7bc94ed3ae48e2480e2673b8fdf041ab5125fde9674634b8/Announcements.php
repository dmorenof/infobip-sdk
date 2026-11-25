<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * Announcements
 *
 * Announcements to be played when a call is answered.
 */
final class Announcements extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\AnnouncementCallee $callee;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\AnnouncementCaller $caller;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callee' => $value instanceof \stdClass ? $this->callee = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\AnnouncementCallee($value) : parent::assignMember($name, $value),
            'caller' => $value instanceof \stdClass ? $this->caller = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\AnnouncementCaller($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
