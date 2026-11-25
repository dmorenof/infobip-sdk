<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9;

/**
 * GetSessionResponse
 *
 * JSON containing execution results and details about the retrieved session.
 */
final class GetSessionResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\GenericSession $session;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'session' => $value instanceof \stdClass ? $this->session = new \InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\GenericSession($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
