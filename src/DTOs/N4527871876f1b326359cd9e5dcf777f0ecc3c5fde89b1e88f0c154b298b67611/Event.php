<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * Event
 */
class Event extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ApplicationTransferFailedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ApplicationTransferFailedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ApplicationTransferFinishedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ApplicationTransferFinishedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ApplicationTransferRequestedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ApplicationTransferRequestedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.BulkCallStatusEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\BulkCallStatusEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.CallDisconnectedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallDisconnectedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.CallEstablishedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallEstablishedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.CallFailedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallFailedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.CallFinishedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallFinishedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.CallMediaChangedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallMediaChangedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.CallPreEstablishedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallPreEstablishedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.CallReceivedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallReceivedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.CallReconnectedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallReconnectedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.CallRecordingDeletedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallRecordingDeletedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.CallRecordingFailedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallRecordingFailedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.CallRecordingReadyEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallRecordingReadyEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.CallRecordingStartedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallRecordingStartedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.CallRecordingStoppedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallRecordingStoppedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.CallRingingEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallRingingEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.CallStartedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallStartedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ConferenceCompositionFailedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ConferenceCompositionFailedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ConferenceCompositionFinishedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ConferenceCompositionFinishedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ConferenceCreatedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ConferenceCreatedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ConferenceFinishedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ConferenceFinishedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ConferenceRecordingDeletedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ConferenceRecordingDeletedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ConferenceRecordingFailedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ConferenceRecordingFailedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ConferenceRecordingReadyEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ConferenceRecordingReadyEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ConferenceRecordingStartedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ConferenceRecordingStartedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ConferenceRecordingStoppedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ConferenceRecordingStoppedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.DialogCompositionFailedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogCompositionFailedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.DialogCompositionFinishedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogCompositionFinishedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.DialogCreatedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogCreatedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.DialogEstablishedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogEstablishedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.DialogFailedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogFailedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.DialogFinishedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogFinishedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.DialogRecordingDeletedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogRecordingDeletedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.DialogRecordingFailedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogRecordingFailedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.DialogRecordingReadyEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogRecordingReadyEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.DialogRecordingStartedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogRecordingStartedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.DialogRecordingStoppedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogRecordingStoppedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.DialogTransferFailedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogTransferFailedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.DialogTransferFinishedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogTransferFinishedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.DialogTransferRequestedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogTransferRequestedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.DtmfCapturedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DtmfCapturedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ErrorEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ErrorEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.MachineDetectionFailedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\MachineDetectionFailedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.MachineDetectionFinishedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\MachineDetectionFinishedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.MachineMessageDetectionFailedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\MachineMessageDetectionFailedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.MachineMessageDetectionFinishedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\MachineMessageDetectionFinishedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.MediaStreamFailedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\MediaStreamFailedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.MediaStreamFinishedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\MediaStreamFinishedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.MediaStreamStartedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\MediaStreamStartedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ParticipantJoinFailedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ParticipantJoinFailedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ParticipantJoinedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ParticipantJoinedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ParticipantJoiningEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ParticipantJoiningEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ParticipantMediaChangedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ParticipantMediaChangedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ParticipantRecordingFailedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ParticipantRecordingFailedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ParticipantRemovedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ParticipantRemovedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ParticipantRoleChangeFailedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ParticipantRoleChangeFailedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ParticipantRoleChangedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ParticipantRoleChangedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ParticipantStartedTalkingEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ParticipantStartedTalkingEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.ParticipantStoppedTalkingEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ParticipantStoppedTalkingEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.PlayFinishedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\PlayFinishedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.SayFinishedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\SayFinishedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.SpeechCapturedEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\SpeechCapturedEvent',
    '4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611.TranscriptionEvent' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\TranscriptionEvent',
    'APPLICATION_TRANSFER_FAILED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ApplicationTransferFailedEvent',
    'APPLICATION_TRANSFER_FINISHED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ApplicationTransferFinishedEvent',
    'APPLICATION_TRANSFER_REQUESTED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ApplicationTransferRequestedEvent',
    'BULK_CALL_STATUS' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\BulkCallStatusEvent',
    'CALL_DISCONNECTED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallDisconnectedEvent',
    'CALL_ESTABLISHED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallEstablishedEvent',
    'CALL_FAILED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallFailedEvent',
    'CALL_FINISHED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallFinishedEvent',
    'CALL_MEDIA_CHANGED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallMediaChangedEvent',
    'CALL_PRE_ESTABLISHED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallPreEstablishedEvent',
    'CALL_RECEIVED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallReceivedEvent',
    'CALL_RECONNECTED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallReconnectedEvent',
    'CALL_RECORDING_DELETED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallRecordingDeletedEvent',
    'CALL_RECORDING_FAILED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallRecordingFailedEvent',
    'CALL_RECORDING_READY' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallRecordingReadyEvent',
    'CALL_RECORDING_STARTED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallRecordingStartedEvent',
    'CALL_RECORDING_STOPPED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallRecordingStoppedEvent',
    'CALL_RINGING' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallRingingEvent',
    'CALL_STARTED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\CallStartedEvent',
    'CONFERENCE_COMPOSITION_FAILED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ConferenceCompositionFailedEvent',
    'CONFERENCE_COMPOSITION_FINISHED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ConferenceCompositionFinishedEvent',
    'CONFERENCE_CREATED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ConferenceCreatedEvent',
    'CONFERENCE_FINISHED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ConferenceFinishedEvent',
    'CONFERENCE_RECORDING_DELETED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ConferenceRecordingDeletedEvent',
    'CONFERENCE_RECORDING_FAILED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ConferenceRecordingFailedEvent',
    'CONFERENCE_RECORDING_READY' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ConferenceRecordingReadyEvent',
    'CONFERENCE_RECORDING_STARTED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ConferenceRecordingStartedEvent',
    'CONFERENCE_RECORDING_STOPPED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ConferenceRecordingStoppedEvent',
    'DIALOG_COMPOSITION_FAILED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogCompositionFailedEvent',
    'DIALOG_COMPOSITION_FINISHED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogCompositionFinishedEvent',
    'DIALOG_CREATED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogCreatedEvent',
    'DIALOG_ESTABLISHED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogEstablishedEvent',
    'DIALOG_FAILED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogFailedEvent',
    'DIALOG_FINISHED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogFinishedEvent',
    'DIALOG_RECORDING_DELETED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogRecordingDeletedEvent',
    'DIALOG_RECORDING_FAILED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogRecordingFailedEvent',
    'DIALOG_RECORDING_READY' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogRecordingReadyEvent',
    'DIALOG_RECORDING_STARTED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogRecordingStartedEvent',
    'DIALOG_RECORDING_STOPPED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogRecordingStoppedEvent',
    'DIALOG_TRANSFER_FAILED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogTransferFailedEvent',
    'DIALOG_TRANSFER_FINISHED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogTransferFinishedEvent',
    'DIALOG_TRANSFER_REQUESTED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DialogTransferRequestedEvent',
    'DTMF_CAPTURED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\DtmfCapturedEvent',
    'ERROR' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ErrorEvent',
    'MACHINE_DETECTION_FAILED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\MachineDetectionFailedEvent',
    'MACHINE_DETECTION_FINISHED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\MachineDetectionFinishedEvent',
    'MACHINE_MESSAGE_DETECTION_FAILED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\MachineMessageDetectionFailedEvent',
    'MACHINE_MESSAGE_DETECTION_FINISHED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\MachineMessageDetectionFinishedEvent',
    'MEDIA_STREAM_FAILED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\MediaStreamFailedEvent',
    'MEDIA_STREAM_FINISHED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\MediaStreamFinishedEvent',
    'MEDIA_STREAM_STARTED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\MediaStreamStartedEvent',
    'PARTICIPANT_JOINED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ParticipantJoinedEvent',
    'PARTICIPANT_JOINING' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ParticipantJoiningEvent',
    'PARTICIPANT_JOIN_FAILED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ParticipantJoinFailedEvent',
    'PARTICIPANT_MEDIA_CHANGED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ParticipantMediaChangedEvent',
    'PARTICIPANT_RECORDING_FAILED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ParticipantRecordingFailedEvent',
    'PARTICIPANT_REMOVED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ParticipantRemovedEvent',
    'PARTICIPANT_ROLE_CHANGED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ParticipantRoleChangedEvent',
    'PARTICIPANT_ROLE_CHANGE_FAILED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ParticipantRoleChangeFailedEvent',
    'PARTICIPANT_STARTED_TALKING' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ParticipantStartedTalkingEvent',
    'PARTICIPANT_STOPPED_TALKING' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\ParticipantStoppedTalkingEvent',
    'PLAY_FINISHED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\PlayFinishedEvent',
    'SAY_FINISHED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\SayFinishedEvent',
    'SPEECH_CAPTURED' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\SpeechCapturedEvent',
    'TRANSCRIPTION' => 'InfobipSDK\\DTOs\\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\\TranscriptionEvent',
];

    protected const array VALIDATION = [
    'callId' => [
        'maxLength' => 128,
    ],
    'conferenceId' => [
        'maxLength' => 128,
    ],
    'dialogId' => [
        'maxLength' => 128,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Unique ID of the bulk action, if the event is related to a bulk action.
     */
    public string $bulkId;
    /**
     * Unique ID of the call, if the event is related to a call.
     */
    public string $callId {
        set {
            $this->assigning('callId', $value);
            $this->callId = $value;
        }
    }
    /**
     * Unique ID of the calls configuration, if the event is related to a calls configuration.
     */
    public string $callsConfigurationId;
    /**
     * Unique ID of the conference, if the event is related to a conference.
     */
    public string $conferenceId {
        set {
            $this->assigning('conferenceId', $value);
            $this->conferenceId = $value;
        }
    }
    /**
     * Unique ID of the dialog that event is related to.
     */
    public string $dialogId {
        set {
            $this->assigning('dialogId', $value);
            $this->dialogId = $value;
        }
    }
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Platform $platform;
    /**
     * Date and time for when the event has occurred.
     * Format: date-time
     */
    public string $timestamp;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\EventType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'callId' => is_string($value) ? $this->callId = $value : parent::assignMember($name, $value),
            'callsConfigurationId' => is_string($value) ? $this->callsConfigurationId = $value : parent::assignMember($name, $value),
            'conferenceId' => is_string($value) ? $this->conferenceId = $value : parent::assignMember($name, $value),
            'dialogId' => is_string($value) ? $this->dialogId = $value : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Platform($value) : parent::assignMember($name, $value),
            'timestamp' => is_string($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\EventType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
