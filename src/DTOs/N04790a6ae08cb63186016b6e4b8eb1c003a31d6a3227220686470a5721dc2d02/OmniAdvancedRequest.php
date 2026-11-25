<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N04790a6ae08cb63186016b6e4b8eb1c003a31d6a3227220686470a5721dc2d02;

/**
 * OmniAdvancedRequest
 */
final class OmniAdvancedRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'callbackData' => [
            'minLength' => 0,
            'maxLength' => 4000,
        ],
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'bulkId',
        'destinations',
        'scenarioKey',
    ];

    /**
     * The ID which uniquely identifies the request. Bulk ID will be received only when you send a message to more than one destination address.
     */
    public string $bulkId;
    /**
     * Additional data that can be used for identifying, managing, or monitoring a message. Data included here will also be automatically included in the message Delivery Report. The maximum value is 4000 characters.
     */
    public string $callbackData {
        set {
            $this->assigning('callbackData', $value);
            $this->callbackData = $value;
        }
    }
    /**
     * Destinations to which you are sending a message, such as phone number, email address, or unique ID.
     */
    public \InfobipSDK\Collections\N04790a6ae08cb63186016b6e4b8eb1c003a31d6a3227220686470a5721dc2d02\OmniAdvancedRequest\DestinationsCollection $destinations;
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\EmailData $email;
    /**
     * The real-time intermediate delivery report containing GSM error codes, messages status, pricing, network and country codes, etc., which will be sent on your callback server. Defaults to `false`.
     */
    public bool $intermediateReport;
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\KakaoAlimData $kakaoAlim;
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\KakaoChinguData $kakaoChingu;
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\LineData $line;
    /**
     * Notify enables you to specify your preferences for receiving DLRs. If set to false, no DLR will be sent. Note: When no webhook is specified in the request and notify is set to 'true' or not defined, your Subscription settings will apply.
     */
    public bool $notify;
    /**
     * Preferred delivery report content type, `application/json` or `application/xml`.
     */
    public string $notifyContentType;
    /**
     * The URL on your call back server where a delivery report will be sent. If your URL becomes unavailable then the [retry cycle](https://www.infobip.com/docs/sms/api#notify-url) uses the following formula: `1min + (1min * retryNumber * retryNumber)`.
     */
    public string $notifyUrl;
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\PushData $push;
    /**
     * Scenario key that uniquely identifies the scenario which will be used when sending message. If this field is not set, the default scenario will be used.
     */
    public string $scenarioKey;
    /**
     * Date and time when the message is to be sent. Used for scheduled OMNI messaging (first message in the OMNI flow not sent immediately, but at scheduled time). Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`. Must be sooner than 180 days from now.
     * Format: date-time
     */
    public string $sendAt;
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\SmsData $sms;
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\VKontakteData $vKontakte;
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\ViberData $viber;
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\VoiceData $voice;
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\WhatsAppData $whatsApp;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'destinations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->destinations = new \InfobipSDK\Collections\N04790a6ae08cb63186016b6e4b8eb1c003a31d6a3227220686470a5721dc2d02\OmniAdvancedRequest\DestinationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Destination::class)) : parent::assignMember($name, $value),
            'email' => $value instanceof \stdClass ? $this->email = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\EmailData($value) : parent::assignMember($name, $value),
            'intermediateReport' => is_bool($value) ? $this->intermediateReport = $value : parent::assignMember($name, $value),
            'kakaoAlim' => $value instanceof \stdClass ? $this->kakaoAlim = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\KakaoAlimData($value) : parent::assignMember($name, $value),
            'kakaoChingu' => $value instanceof \stdClass ? $this->kakaoChingu = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\KakaoChinguData($value) : parent::assignMember($name, $value),
            'line' => $value instanceof \stdClass ? $this->line = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\LineData($value) : parent::assignMember($name, $value),
            'notify' => is_bool($value) ? $this->notify = $value : parent::assignMember($name, $value),
            'notifyContentType' => is_string($value) ? $this->notifyContentType = $value : parent::assignMember($name, $value),
            'notifyUrl' => is_string($value) ? $this->notifyUrl = $value : parent::assignMember($name, $value),
            'push' => $value instanceof \stdClass ? $this->push = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\PushData($value) : parent::assignMember($name, $value),
            'scenarioKey' => is_string($value) ? $this->scenarioKey = $value : parent::assignMember($name, $value),
            'sendAt' => is_string($value) ? $this->sendAt = $value : parent::assignMember($name, $value),
            'sms' => $value instanceof \stdClass ? $this->sms = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\SmsData($value) : parent::assignMember($name, $value),
            'vKontakte' => $value instanceof \stdClass ? $this->vKontakte = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\VKontakteData($value) : parent::assignMember($name, $value),
            'viber' => $value instanceof \stdClass ? $this->viber = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\ViberData($value) : parent::assignMember($name, $value),
            'voice' => $value instanceof \stdClass ? $this->voice = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\VoiceData($value) : parent::assignMember($name, $value),
            'whatsApp' => $value instanceof \stdClass ? $this->whatsApp = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\WhatsAppData($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
