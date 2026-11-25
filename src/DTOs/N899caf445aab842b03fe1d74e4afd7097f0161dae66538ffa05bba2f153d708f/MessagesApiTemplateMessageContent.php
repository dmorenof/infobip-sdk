<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiTemplateMessageContent
 *
 * Content of the message.
 */
final class MessagesApiTemplateMessageContent extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiTemplateBody $body;
    /**
     * List of buttons of a template message. Supported `type` values depend on `channel`: `WHATSAPP` supports QUICK_REPLY, OPEN_URL, PHONE_NUMBER, FLOW, COPY_CODE, CATALOG, MULTI_PRODUCT; `KAKAO_ALIM` supports URL_WITH_TEXT, APP_LINK, BOT_KEYWORD, CHATBOT_SWITCH, DELIVERY_TRACKING, MESSAGE_DELIVERY, ADD_CHANNEL.
     */
    public \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiTemplateMessageContent\ButtonsCollection $buttons;
    /**
     * Expiration time of a limited-time offer template message. Has the following format: yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     */
    public string $expirationTime;
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiTemplateHeader $header;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expirationTime' => is_string($value) ? $this->expirationTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
