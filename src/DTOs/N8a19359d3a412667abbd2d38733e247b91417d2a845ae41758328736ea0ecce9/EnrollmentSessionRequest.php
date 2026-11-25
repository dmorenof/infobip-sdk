<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9;

/**
 * EnrollmentSessionRequest
 *
 * JSON containing session parameters and client identifiers for Enrollment application.
 */
final class EnrollmentSessionRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'locationInfo',
        'scenarioName',
        'webhook',
    ];

    /**
     * End user will be sent to this URL if they cancel the scenario.
     * Example: "https://example.com/cancel"
     */
    public string $cancelUrl;
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
     * Request a specific scenario within the application. To get possible values call [Get Scenarios](#platform-connectivity/biometrics/get-biometrics-scenarios) with the following query parameter: `?applicationTypes=enrollment`. Check scenario descriptions in the response to find the scenario you need, and copy its `name`.
     * Example: "FACE_ENROLLMENT"
     */
    public string $scenarioName;
    /**
     * End user will be sent to this URL after the selected scenario has been successfully completed.
     * Example: "https://example.com/success"
     */
    public string $successUrl;
    public \InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\WebhookInfo $webhook;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cancelUrl' => is_string($value) ? $this->cancelUrl = $value : parent::assignMember($name, $value),
            'locationInfo' => $value instanceof \stdClass ? $this->locationInfo = new \InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\LocationInfo($value) : parent::assignMember($name, $value),
            'partnerReference' => is_string($value) ? $this->partnerReference = $value : parent::assignMember($name, $value),
            'retainData' => is_bool($value) ? $this->retainData = $value : parent::assignMember($name, $value),
            'scenarioName' => is_string($value) ? $this->scenarioName = $value : parent::assignMember($name, $value),
            'successUrl' => is_string($value) ? $this->successUrl = $value : parent::assignMember($name, $value),
            'webhook' => $value instanceof \stdClass ? $this->webhook = new \InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\WebhookInfo($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
