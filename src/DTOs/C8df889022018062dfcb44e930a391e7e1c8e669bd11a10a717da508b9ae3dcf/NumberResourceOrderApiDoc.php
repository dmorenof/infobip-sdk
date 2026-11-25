<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * NUMBER_PURCHASE
 */
final class NumberResourceOrderApiDoc extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'quantity' => [
            'format' => 'int32',
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Additional email addresses.
     */
    public \InfobipSDK\Collections\StringCollection $additionalContactEmailAddresses;
    /**
     * Capabilities of the numbers.
     */
    public \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\NumberRequirementSpecsRequestApiDoc\CapabilitiesCollection $capabilities;
    /**
     * Country code in two-letter ISO standard.
     */
    public string $countryCode;
    /**
     * The ID of the resource.
     * Format: uuid
     */
    public string $id;
    /**
     * A note containing extra data about the request.
     */
    public string $note;
    public \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\ResourceNumberType $numberType;
    /**
     * List of numbers linked with the resource.
     */
    public \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\NumberResourceOrderApiDoc\NumbersCollection $numbers;
    public \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\Platform $platform;
    /**
     * Amount of numbers.
     * Format: int32
     */
    public int $quantity {
        set {
            $this->assigning('quantity', $value);
            $this->quantity = $value;
        }
    }
    /**
     * Email address of the requester.
     */
    public string $requestedByEmailAddress;
    /**
     * Date and time the resource was requested.
     * Format: date-time
     */
    public string $requestedDate;
    /**
     * List of requirements for the resource.
     */
    public \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaResourceOrderApiDoc\RequirementsCollection $requirements;
    /**
     * List of feedback for requirements.
     */
    public \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaResourceOrderApiDoc\RequirementsFeedbackCollection $requirementsFeedback;
    /**
     * Current status of the resource request.
     */
    public \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\NumberResourceOrderApiDoc\StatusEnum $status;
    /**
     * Type of resource.
     */
    public \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\NumberResourceOrderApiDoc\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'additionalContactEmailAddresses' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->additionalContactEmailAddresses = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'note' => is_string($value) ? $this->note = $value : parent::assignMember($name, $value),
            'numberType' => is_string($value) ? $this->numberType = \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\ResourceNumberType::from($value) : parent::assignMember($name, $value),
            'numbers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->numbers = new \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\NumberResourceOrderApiDoc\NumbersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\ProcuredNumber::class)) : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\Platform($value) : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'requestedByEmailAddress' => is_string($value) ? $this->requestedByEmailAddress = $value : parent::assignMember($name, $value),
            'requestedDate' => is_string($value) ? $this->requestedDate = $value : parent::assignMember($name, $value),
            'requirements' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->requirements = new \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaResourceOrderApiDoc\RequirementsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\FilledRequirement::class)) : parent::assignMember($name, $value),
            'requirementsFeedback' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->requirementsFeedback = new \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaResourceOrderApiDoc\RequirementsFeedbackCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\FilledRequirementFeedback::class)) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\NumberResourceOrderApiDoc\StatusEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\NumberResourceOrderApiDoc\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
