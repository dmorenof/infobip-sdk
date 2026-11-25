<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * ProviderSenderLaunchFeedback
 *
 * Detailed feedback for rejection if the sender launch has been rejected by the provider. Present only if launch request has been created with `structuredFeedback` opt-in feature. Please check [Submit resource request](#platform/resources/resource-request/submit-resource-request) for more details.
 */
final class ProviderSenderLaunchFeedback extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'errors',
];

    protected const array VALIDATION = [
    'errors' => [
        'minItems' => 1,
        'maxItems' => 20,
    ],
];

    /**
     * List of errors related to given `requirementKey` / `externalRequirementKey`. For list of possible errors, please check [Get feedback errors](#platform/resources/resource-request/get-feedback-errors).
     */
    public \InfobipSDK\Collections\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\ProviderSenderLaunchFeedback\ErrorsCollection $errors {
        set {
            $this->assigning('errors', $value);
            $this->errors = $value;
        }
    }
    /**
     * Property of a sender launch request for which the provider reported an issue. Present only if error refers to sender launch request property.
     */
    public string $externalRequirementKey;
    /**
     * Property of a sender for which the provider reported an issue. Present only if error refers to sender property.
     */
    public string $requirementKey;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \InfobipSDK\Collections\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\ProviderSenderLaunchFeedback\ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\ProviderSenderLaunchRejectionError::class)) : parent::assignMember($name, $value),
            'externalRequirementKey' => is_string($value) ? $this->externalRequirementKey = $value : parent::assignMember($name, $value),
            'requirementKey' => is_string($value) ? $this->requirementKey = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
