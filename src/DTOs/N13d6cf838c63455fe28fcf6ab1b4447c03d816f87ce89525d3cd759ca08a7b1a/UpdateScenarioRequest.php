<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * UpdateScenarioRequest
 */
final class UpdateScenarioRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
    'script',
];

    protected const array VALIDATION = [
    'name' => [
        'minLength' => 1,
    ],
];

    /**
     * Description of IVR scenario.
     */
    public string $description;
    /**
     * The name of IVR scenario.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Preferred Delivery report content type. Can be `application/json` or `application/xml`.
     */
    public string $notifyContentType;
    /**
     * The URL on your callback server on which the Delivery report will be sent.
     */
    public string $notifyUrl;
    /**
     * Indicates if all calls using the scenario should be recorded.
     */
    public bool $record;
    /**
     * Array of IVR actions defining scenario. NOTE: Answering Machine Detection, Call Recording and Speech Recognition (used for Capture action) are add-on features. To enable these add-ons, please contact our [sales](https://www.infobip.com/contact) organisation.
     */
    public \InfobipSDK\Collections\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\UpdateScenarioRequest\ScriptCollection $script;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'notifyContentType' => is_string($value) ? $this->notifyContentType = $value : parent::assignMember($name, $value),
            'notifyUrl' => is_string($value) ? $this->notifyUrl = $value : parent::assignMember($name, $value),
            'record' => is_bool($value) ? $this->record = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
