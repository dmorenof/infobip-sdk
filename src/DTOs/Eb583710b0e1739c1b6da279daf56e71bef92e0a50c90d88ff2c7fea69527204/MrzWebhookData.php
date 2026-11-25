<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Eb583710b0e1739c1b6da279daf56e71bef92e0a50c90d88ff2c7fea69527204;

/**
 * MrzWebhookData
 *
 * Results of reading Machine Readable Zone (MRZ) data.
 */
final class MrzWebhookData extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * MRZ date of birth. Has the following format: `YYMMDD`.
     * Example: "000101"
     */
    public string $birthDate;
    /**
     * MRZ issuing state or organization.
     * Example: "HRV"
     */
    public string $country;
    /**
     * MRZ document number.
     * Example: "123456789"
     */
    public string $documentNumber;
    /**
     * MRZ date of expiry. Has the following format: `YYMMDD`.
     * Example: "250101"
     */
    public string $expiryDate;
    /**
     * Name; part of the MRZ name of a holder.
     * Example: "NAME"
     */
    public string $name;
    /**
     * MRZ nationality.
     * Example: "HRV"
     */
    public string $nationality;
    /**
     * MRZ optional data.
     * Example: ["mrzOptionalItem1","mrzOptionalItem2"]
     */
    public \InfobipSDK\Collections\StringCollection $optionalData;
    /**
     * Personal identification number, part of MRZ optional data.
     * Example: "01234567890"
     */
    public string $personalNumber;
    /**
     * MRZ gender.
     * Example: "F"
     */
    public string $sex;
    /**
     * Surname; part of the MRZ name of a holder.
     * Example: "SURNAME"
     */
    public string $surname;
    /**
     * MRZ document code.
     * Example: "P"
     */
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'birthDate' => is_string($value) ? $this->birthDate = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'documentNumber' => is_string($value) ? $this->documentNumber = $value : parent::assignMember($name, $value),
            'expiryDate' => is_string($value) ? $this->expiryDate = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'nationality' => is_string($value) ? $this->nationality = $value : parent::assignMember($name, $value),
            'optionalData' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->optionalData = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'personalNumber' => is_string($value) ? $this->personalNumber = $value : parent::assignMember($name, $value),
            'sex' => is_string($value) ? $this->sex = $value : parent::assignMember($name, $value),
            'surname' => is_string($value) ? $this->surname = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
