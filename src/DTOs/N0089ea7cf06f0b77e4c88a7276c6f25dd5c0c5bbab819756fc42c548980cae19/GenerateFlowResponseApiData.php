<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19;

/**
 * GenerateFlowResponseApiData
 */
final class GenerateFlowResponseApiData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'generatedFlow',
    'originalPrompt',
    'responseId',
];

    /**
     * The generated output corresponding to the provided prompt.
     */
    public \InfobipSDK\DTOs\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\GenerateFlowResponseApiData\GeneratedFlowDTO $generatedFlow;
    /**
     * The prompt text used to generate this flow.
     * Example: "Flow that contains form with name, surname and email of the user."
     */
    public string $originalPrompt;
    /**
     * Unique identifier for this response. Use this value in future requests to reference generated flow.
     * Example: "12345"
     */
    public string $responseId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'originalPrompt' => is_string($value) ? $this->originalPrompt = $value : parent::assignMember($name, $value),
            'responseId' => is_string($value) ? $this->responseId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
