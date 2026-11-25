<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9;

/**
 * GenericSession
 *
 * Session object.
 */
final class GenericSession extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'locationInfo',
    'scenarioName',
    'webhook',
];

    /**
     * Application type identifier.
     * Example: "KYC"
     */
    public string $applicationType;
    /**
     * End user will be sent to this URL if they cancel the scenario.
     * Example: "https://example.com/cancel"
     */
    public string $cancelUrl;
    /**
     * Session creation date and time. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Example: "2021-11-02T14:15:45.7058838Z"
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Unique session identifier.
     * Example: "efc373be-ab6d-4c63-b798-1f65b7b4b2b3"
     */
    public string $id;
    public \InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\LocationInfo $locationInfo;
    /**
     * Your (usually unique) identifier of the end user performing the scenario. Will be sent together with the rest of the information via the webhook.
     * Example: "MyRef-jqhof"
     */
    public string $partnerReference;
    /**
     * Indicates whether Infobip should store and retain data. This value overrides value in account configuration.
     * Example: true
     */
    public bool $retainData;
    /**
     * Request a specific scenario within the application.
     * Example: "SOME_SCENARIO_NAME"
     */
    public string $scenarioName;
    /**
     * Current session status.
     * Example: "ACTIVE"
     */
    public \InfobipSDK\Enums\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\GenericSession\StatusEnum $status;
    /**
     * End user will be sent to this URL after the selected scenario has been successfully completed.
     * Example: "https://example.com/success"
     */
    public string $successUrl;
    /**
     * Session validity date and time. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Example: "2021-11-02T14:25:45.7059354Z"
     * Format: date-time
     */
    public string $validUntil;
    public \InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\WebhookInfo $webhook;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationType' => is_string($value) ? $this->applicationType = $value : parent::assignMember($name, $value),
            'cancelUrl' => is_string($value) ? $this->cancelUrl = $value : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'locationInfo' => $value instanceof \stdClass ? $this->locationInfo = new \InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\LocationInfo($value) : parent::assignMember($name, $value),
            'partnerReference' => is_string($value) ? $this->partnerReference = $value : parent::assignMember($name, $value),
            'retainData' => is_bool($value) ? $this->retainData = $value : parent::assignMember($name, $value),
            'scenarioName' => is_string($value) ? $this->scenarioName = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\GenericSession\StatusEnum::from($value) : parent::assignMember($name, $value),
            'successUrl' => is_string($value) ? $this->successUrl = $value : parent::assignMember($name, $value),
            'validUntil' => is_string($value) ? $this->validUntil = $value : parent::assignMember($name, $value),
            'webhook' => $value instanceof \stdClass ? $this->webhook = new \InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\WebhookInfo($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
