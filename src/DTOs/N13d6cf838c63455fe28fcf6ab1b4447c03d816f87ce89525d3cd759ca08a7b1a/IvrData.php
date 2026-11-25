<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * IvrData
 *
 * Fields representing details about IVR, if outbound IVR is being used. If the call was not IVR, the field will be null.
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
