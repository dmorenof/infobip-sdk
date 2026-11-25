<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageOrderImporter
 *
 * (WhatsApp specific) Importer data. Required when catalogId is not provided. It's supported only for UPI PayU payments.
 */
final class MessagesApiMessageOrderImporter extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageOrderImporterAddress $address;
    /**
     * Name of the importer. Required when catalogId is not provided.
     */
    public string $name;
    /**
     * Country of origin. Required when catalogId is not provided.
     */
    public string $originCountry;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => $value instanceof \stdClass ? $this->address = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageOrderImporterAddress($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'originCountry' => is_string($value) ? $this->originCountry = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
