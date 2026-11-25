<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B5f674fb4d8d190ed269baf3b9aaf29827a4d03ec2de31bb6b608809be9a182b;

/**
 * IvrData
 */
final class IvrData extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * JSON object showing the result of every CollectAction in IVR scenario in the form of key/value pairs, where the key is CollectAction variable and pair is collected DTMF.
     */
    public string $collectedDtmfs;
    /**
     * JSON object showing the result of every CollectAction in IVR scenario with the mapped, meaningful, values you defined in CollectAction `mappedValues` option.
     */
    public string $collectedMappedDtmfs;
    /**
     * JSON object showing the result of every CaptureSpeech action with only the key phrases that matched user spoken input.
     */
    public string $matchedSpokenInput;
    /**
     * The ID that uniquely identifies the IVR scenario.
     */
    public string $scenarioId;
    /**
     * Name of IVR scenario.
     */
    public string $scenarioName;
    /**
     * JSON object showing the result of every CaptureSpeech action with full text spoken by the user.
     */
    public string $spokenInput;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'collectedDtmfs' => is_string($value) ? $this->collectedDtmfs = $value : parent::assignMember($name, $value),
            'collectedMappedDtmfs' => is_string($value) ? $this->collectedMappedDtmfs = $value : parent::assignMember($name, $value),
            'matchedSpokenInput' => is_string($value) ? $this->matchedSpokenInput = $value : parent::assignMember($name, $value),
            'scenarioId' => is_string($value) ? $this->scenarioId = $value : parent::assignMember($name, $value),
            'scenarioName' => is_string($value) ? $this->scenarioName = $value : parent::assignMember($name, $value),
            'spokenInput' => is_string($value) ? $this->spokenInput = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
