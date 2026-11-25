<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958;

/**
 * LiveChatOutboundSurveyRequestContent
 */
final class LiveChatOutboundSurveyRequestContent extends \InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatOutboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'question' => [
        'minLength' => 0,
        'maxLength' => 1000,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Feedback question.
     */
    public string $followUpQuestion;
    /**
     * Indicates whether the feedback question should be displayed.
     */
    public bool $followUpQuestionEnabled;
    /**
     * Text displayed as a negative response.
     */
    public string $negativeAnswer;
    /**
     * Text displayed as a positive response.
     */
    public string $positiveAnswer;
    /**
     * Survey content.
     */
    public string $question {
        set {
            $this->assigning('question', $value);
            $this->question = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'followUpQuestion' => is_string($value) ? $this->followUpQuestion = $value : parent::assignMember($name, $value),
            'followUpQuestionEnabled' => is_bool($value) ? $this->followUpQuestionEnabled = $value : parent::assignMember($name, $value),
            'negativeAnswer' => is_string($value) ? $this->negativeAnswer = $value : parent::assignMember($name, $value),
            'positiveAnswer' => is_string($value) ? $this->positiveAnswer = $value : parent::assignMember($name, $value),
            'question' => is_string($value) ? $this->question = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
