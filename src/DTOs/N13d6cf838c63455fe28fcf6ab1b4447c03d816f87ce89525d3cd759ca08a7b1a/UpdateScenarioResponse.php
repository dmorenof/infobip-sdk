<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * UpdateScenarioResponse
 */
final class UpdateScenarioResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Creation timestamp.
     * Format: date-time
     */
    public string $createTime;
    /**
     * Scenario description.
     */
    public string $description;
    /**
     * Scenario key. It is used for launching IVR scenario.
     */
    public string $id;
    /**
     * Last usage date. `null` for scenarios that are used last time before `2024-01-01`.
     * Format: date
     */
    public string $lastUsageDate;
    /**
     * Scenario name.
     */
    public string $name;
    /**
     * Preferred Delivery report content type. Can be `application/json` or `application/xml`.
     */
    public string $notifyContentType;
    /**
     * The URL on the client's callback server on which the Delivery report will be sent.
     */
    public string $notifyUrl;
    /**
     * Indicates if all calls using the scenario should be recorded.
     */
    public bool $record;
    /**
     * Array of IVR actions defining scenario. NOTE: Answering Machine Detection, Call Recording and Speech Recognition (used for Capture action) are add-on features. To enable these add-ons, please contact our [sales](https://www.infobip.com/contact) organisation.
     */
    public \InfobipSDK\Collections\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\UpdateScenarioResponse\ScriptCollection $script;
    /**
     * Update timestamp.
     * Format: date-time
     */
    public string $updateTime;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createTime' => is_string($value) ? $this->createTime = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'lastUsageDate' => is_string($value) ? $this->lastUsageDate = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'notifyContentType' => is_string($value) ? $this->notifyContentType = $value : parent::assignMember($name, $value),
            'notifyUrl' => is_string($value) ? $this->notifyUrl = $value : parent::assignMember($name, $value),
            'record' => is_bool($value) ? $this->record = $value : parent::assignMember($name, $value),
            'updateTime' => is_string($value) ? $this->updateTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
