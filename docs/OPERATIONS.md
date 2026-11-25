# Infobip SDK for PHP: operations

1004 operations. Each is a static method of a facade class (`InfobipSDK\...`); configure the SDK once with `InfobipOpenAPISpecificationSDK::configure()`, then call them. The same operations are available on a connection object: `Client::connect($configuration)->resource(ResourceClass::class)`.

| Operation | HTTP | Path | Call |
| --- | --- | --- | --- |
| Get all 2FA applications | GET | `/2fa/2/applications` | `Resource2fa\Resource2\Applications::get()` |
| Create 2FA application | POST | `/2fa/2/applications` | `Resource2fa\Resource2\Applications::post()` |
| Get 2FA application | GET | `/2fa/2/applications/{appId}` | `Resource2fa\Resource2\Applications::getByAppId()` |
| Update 2FA application | PUT | `/2fa/2/applications/{appId}` | `Resource2fa\Resource2\Applications::putByAppId()` |
| Create 2FA Email message template | POST | `/2fa/2/applications/{appId}/email/messages` | `Resource2fa\Resource2\Applications\ByAppId\Email\Messages::post()` |
| Update 2FA Email message template | PUT | `/2fa/2/applications/{appId}/email/messages/{msgId}` | `Resource2fa\Resource2\Applications\ByAppId\Email\Messages::putByMsgId()` |
| Get all 2FA message templates | GET | `/2fa/2/applications/{appId}/messages` | `Resource2fa\Resource2\Applications\ByAppId\Messages::get()` |
| Create 2FA SMS or Voice message template | POST | `/2fa/2/applications/{appId}/messages` | `Resource2fa\Resource2\Applications\ByAppId\Messages::post()` |
| Get 2FA message template | GET | `/2fa/2/applications/{appId}/messages/{msgId}` | `Resource2fa\Resource2\Applications\ByAppId\Messages::getByMsgId()` |
| Update 2FA SMS or Voice message template | PUT | `/2fa/2/applications/{appId}/messages/{msgId}` | `Resource2fa\Resource2\Applications\ByAppId\Messages::putByMsgId()` |
| Get 2FA verification status | GET | `/2fa/2/applications/{appId}/verifications` | `Resource2fa\Resource2\Applications\ByAppId\Verifications::get()` |
| Send 2FA PIN code over SMS | POST | `/2fa/2/pin` | `Resource2fa\Resource2\Pin::post()` |
| Send 2FA PIN code over Email | POST | `/2fa/2/pin/email` | `Resource2fa\Resource2\Pin\Email::post()` |
| Send 2FA PIN code over Voice | POST | `/2fa/2/pin/voice` | `Resource2fa\Resource2\Pin\Voice::post()` |
| Resend 2FA PIN code over SMS | POST | `/2fa/2/pin/{pinId}/resend` | `Resource2fa\Resource2\Pin\ByPinId\Resend::post()` |
| Resend 2FA PIN code over Email | POST | `/2fa/2/pin/{pinId}/resend/email` | `Resource2fa\Resource2\Pin\ByPinId\Resend\Email::post()` |
| Resend 2FA PIN code over Voice | POST | `/2fa/2/pin/{pinId}/resend/voice` | `Resource2fa\Resource2\Pin\ByPinId\Resend\Voice::post()` |
| Verify a PIN | POST | `/2fa/2/pin/{pinId}/verify` | `Resource2fa\Resource2\Pin\ByPinId\Verify::post()` |
| Get current account balance | GET | `/account/1/balance` | `Account\Resource1\Balance::get()` |
| Get remaining free messages | GET | `/account/1/free-messages` | `Account\Resource1\FreeMessages::get()` |
| Get account balance with free messages | GET | `/account/1/total-balance` | `Account\Resource1\TotalBalance::get()` |
| Query AI Assistant by ID | POST | `/ai/1/aiassistants/{assistantId}/query` | `Ai\Resource1\Aiassistants\ByAssistantId\Query::post()` |
| Retrieve Context from AI Assistant | POST | `/ai/1/aiassistants/{assistantId}/retrieve-context` | `Ai\Resource1\Aiassistants\ByAssistantId\RetrieveContext::post()` |
| Send Apple Events | POST | `/apple-mfb/1/events` | `AppleMfb\Resource1\Events::post()` |
| Get message logs | GET | `/apple-mfb/1/logs` | `AppleMfb\Resource1\Logs::get()` |
| Send Apple Messages for Business | POST | `/apple-mfb/1/messages` | `AppleMfb\Resource1\Messages::post()` |
| Get Apple Messages for Business delivery reports | GET | `/apple-mfb/1/reports` | `AppleMfb\Resource1\Reports::get()` |
| Search Audit Logs | GET | `/audit/1/logs` | `Audit\Resource1\Logs::get()` |
| Export Audit Logs | GET | `/audit/1/logs/export` | `Audit\Resource1\Logs\Export::get()` |
| Create OAuth2 token | POST | `/auth/1/oauth2/token` | `Auth\Resource1\Oauth2\Token::post()` |
| Destroy session token | DELETE | `/auth/1/session` | `Auth\Resource1\Session::delete()` |
| Create session token | POST | `/auth/1/session` | `Auth\Resource1\Session::post()` |
| Query billing usage data | POST | `/billing/1/usage/query` | `Billing\Resource1\Usage\Query::post()` |
| Get status of query billing usage request | GET | `/billing/1/usage/requests/{requestId}` | `Billing\Resource1\Usage\Requests::getByRequestId()` |
| Abort Enrollment Session | DELETE | `/biometrics/1/enrollment/sessions` | `Biometrics\Resource1\Enrollment\Sessions::delete()` |
| Get Enrollment Session | GET | `/biometrics/1/enrollment/sessions` | `Biometrics\Resource1\Enrollment\Sessions::get()` |
| Create Enrollment Session | POST | `/biometrics/1/enrollment/sessions` | `Biometrics\Resource1\Enrollment\Sessions::post()` |
| Abort Extraction Session | DELETE | `/biometrics/1/extraction/sessions` | `Biometrics\Resource1\Extraction\Sessions::delete()` |
| Get Extraction Session | GET | `/biometrics/1/extraction/sessions` | `Biometrics\Resource1\Extraction\Sessions::get()` |
| Create Extraction Session | POST | `/biometrics/1/extraction/sessions` | `Biometrics\Resource1\Extraction\Sessions::post()` |
| Abort KYC Session | DELETE | `/biometrics/1/kyc/sessions` | `Biometrics\Resource1\Kyc\Sessions::delete()` |
| Get KYC Session | GET | `/biometrics/1/kyc/sessions` | `Biometrics\Resource1\Kyc\Sessions::get()` |
| Create KYC Session | POST | `/biometrics/1/kyc/sessions` | `Biometrics\Resource1\Kyc\Sessions::post()` |
| Get Scenarios | GET | `/biometrics/1/scenarios` | `Biometrics\Resource1\Scenarios::get()` |
| Abort Verification Session | DELETE | `/biometrics/1/verification/sessions` | `Biometrics\Resource1\Verification\Sessions::delete()` |
| Get Verification Session | GET | `/biometrics/1/verification/sessions` | `Biometrics\Resource1\Verification\Sessions::get()` |
| Create Verification Session | POST | `/biometrics/1/verification/sessions` | `Biometrics\Resource1\Verification\Sessions::post()` |
| Start test | POST | `/bots/1/testing/start` | `Bots\Resource1\Testing\Start::post()` |
| Send message | POST | `/bots/1/testing/{testId}/send-message` | `Bots\Resource1\Testing\ByTestId\SendMessage::post()` |
| Stop test | POST | `/bots/1/testing/{testId}/stop` | `Bots\Resource1\Testing\ByTestId\Stop::post()` |
| Get configurations | GET | `/call-link/1/configs` | `CallLink\Resource1\Configs::get()` |
| Create configuration | POST | `/call-link/1/configs` | `CallLink\Resource1\Configs::post()` |
| Delete configuration | DELETE | `/call-link/1/configs/{id}` | `CallLink\Resource1\Configs::deleteById()` |
| Get configuration | GET | `/call-link/1/configs/{id}` | `CallLink\Resource1\Configs::getById()` |
| Partial configuration update | PATCH | `/call-link/1/configs/{id}` | `CallLink\Resource1\Configs::patchById()` |
| Update a configuration | PUT | `/call-link/1/configs/{id}` | `CallLink\Resource1\Configs::putById()` |
| Get images | GET | `/call-link/1/images` | `CallLink\Resource1\Images::get()` |
| Upload image | POST | `/call-link/1/images/upload/{type}` | `CallLink\Resource1\Images\Upload::postByType()` |
| Delete image | DELETE | `/call-link/1/images/{id}` | `CallLink\Resource1\Images::deleteById()` |
| Get image | GET | `/call-link/1/images/{id}` | `CallLink\Resource1\Images::getById()` |
| Get call links | GET | `/call-link/1/links` | `CallLink\Resource1\Links::get()` |
| Create call link | POST | `/call-link/1/links` | `CallLink\Resource1\Links::post()` |
| Delete call link | DELETE | `/call-link/1/links/{id}` | `CallLink\Resource1\Links::deleteById()` |
| Get call link | GET | `/call-link/1/links/{id}` | `CallLink\Resource1\Links::getById()` |
| Get call link recordings | GET | `/call-link/1/recordings` | `CallLink\Resource1\Recordings::get()` |
| Download a recording file | GET | `/call-link/1/recordings/files/{fileId}` | `CallLink\Resource1\Recordings\Files::getByFileId()` |
| Delete call link recording | DELETE | `/call-link/1/recordings/{id}` | `CallLink\Resource1\Recordings::deleteById()` |
| Get subdomains | GET | `/call-link/1/subdomains` | `CallLink\Resource1\Subdomains::get()` |
| Create subdomain | POST | `/call-link/1/subdomains` | `CallLink\Resource1\Subdomains::post()` |
| Delete subdomain | DELETE | `/call-link/1/subdomains/{id}` | `CallLink\Resource1\Subdomains::deleteById()` |
| Delete by correlation ID | DELETE | `/callrouting/1/recordings` | `Callrouting\Resource1\Recordings::delete()` |
| Get recordings | GET | `/callrouting/1/recordings` | `Callrouting\Resource1\Recordings::get()` |
| Download recording file | GET | `/callrouting/1/recordings/files/{fileId}` | `Callrouting\Resource1\Recordings\Files::getByFileId()` |
| Get call routes | GET | `/callrouting/1/routes` | `Callrouting\Resource1\Routes::get()` |
| Create a call route | POST | `/callrouting/1/routes` | `Callrouting\Resource1\Routes::post()` |
| Simulate route selection | POST | `/callrouting/1/routes/simulate` | `Callrouting\Resource1\Routes\Simulate::post()` |
| Delete a call route | DELETE | `/callrouting/1/routes/{routeId}` | `Callrouting\Resource1\Routes::deleteByRouteId()` |
| Get a call route | GET | `/callrouting/1/routes/{routeId}` | `Callrouting\Resource1\Routes::getByRouteId()` |
| Set order on call route | PATCH | `/callrouting/1/routes/{routeId}` | `Callrouting\Resource1\Routes::patchByRouteId()` |
| Update a call route | PUT | `/callrouting/1/routes/{routeId}` | `Callrouting\Resource1\Routes::putByRouteId()` |
| Update route status | POST | `/callrouting/1/routes/{routeId}/status` | `Callrouting\Resource1\Routes\ByRouteId\Status::post()` |
| Create bulk of calls | POST | `/calls/1/bulks` | `Calls\Resource1\Bulks::post()` |
| Get bulk status | GET | `/calls/1/bulks/{bulkId}` | `Calls\Resource1\Bulks::getByBulkId()` |
| Cancel | POST | `/calls/1/bulks/{bulkId}/cancel` | `Calls\Resource1\Bulks\ByBulkId\Cancel::post()` |
| Pause | POST | `/calls/1/bulks/{bulkId}/pause` | `Calls\Resource1\Bulks\ByBulkId\Pause::post()` |
| Reschedule | POST | `/calls/1/bulks/{bulkId}/reschedule` | `Calls\Resource1\Bulks\ByBulkId\Reschedule::post()` |
| Resume | POST | `/calls/1/bulks/{bulkId}/resume` | `Calls\Resource1\Bulks\ByBulkId\Resume::post()` |
| Get calls | GET | `/calls/1/calls` | `Calls\Resource1\Calls::get()` |
| Create call | POST | `/calls/1/calls` | `Calls\Resource1\Calls::post()` |
| Get calls history | GET | `/calls/1/calls/history` | `Calls\Resource1\Calls\History::get()` |
| Get call | GET | `/calls/1/calls/{callId}` | `Calls\Resource1\Calls::getByCallId()` |
| Answer | POST | `/calls/1/calls/{callId}/answer` | `Calls\Resource1\Calls\ByCallId\Answer::post()` |
| Request application transfer | POST | `/calls/1/calls/{callId}/application-transfer` | `Calls\Resource1\Calls\ByCallId\ApplicationTransfer::post()` |
| Accept application transfer | POST | `/calls/1/calls/{callId}/application-transfer/{transferId}/accept` | `Calls\Resource1\Calls\ByCallId\ApplicationTransfer\ByTransferId\Accept::post()` |
| Reject application transfer | POST | `/calls/1/calls/{callId}/application-transfer/{transferId}/reject` | `Calls\Resource1\Calls\ByCallId\ApplicationTransfer\ByTransferId\Reject::post()` |
| Capture DTMF | POST | `/calls/1/calls/{callId}/capture/dtmf` | `Calls\Resource1\Calls\ByCallId\Capture\Dtmf::post()` |
| Capture Speech | POST | `/calls/1/calls/{callId}/capture/speech` | `Calls\Resource1\Calls\ByCallId\Capture\Speech::post()` |
| Connect with new call | POST | `/calls/1/calls/{callId}/connect` | `Calls\Resource1\Calls\ByCallId\Connect::post()` |
| Hangup | POST | `/calls/1/calls/{callId}/hangup` | `Calls\Resource1\Calls\ByCallId\Hangup::post()` |
| Get call history | GET | `/calls/1/calls/{callId}/history` | `Calls\Resource1\Calls\ByCallId\History::get()` |
| Play file | POST | `/calls/1/calls/{callId}/play` | `Calls\Resource1\Calls\ByCallId\Play::post()` |
| Pre-answer | POST | `/calls/1/calls/{callId}/pre-answer` | `Calls\Resource1\Calls\ByCallId\PreAnswer::post()` |
| Say text | POST | `/calls/1/calls/{callId}/say` | `Calls\Resource1\Calls\ByCallId\Say::post()` |
| Send DTMF | POST | `/calls/1/calls/{callId}/send-dtmf` | `Calls\Resource1\Calls\ByCallId\SendDtmf::post()` |
| Send message | POST | `/calls/1/calls/{callId}/send-message` | `Calls\Resource1\Calls\ByCallId\SendMessage::post()` |
| Send ringing | POST | `/calls/1/calls/{callId}/send-ringing` | `Calls\Resource1\Calls\ByCallId\SendRinging::post()` |
| Start streaming media | POST | `/calls/1/calls/{callId}/start-media-stream` | `Calls\Resource1\Calls\ByCallId\StartMediaStream::post()` |
| Start recording | POST | `/calls/1/calls/{callId}/start-recording` | `Calls\Resource1\Calls\ByCallId\StartRecording::post()` |
| Start transcription | POST | `/calls/1/calls/{callId}/start-transcription` | `Calls\Resource1\Calls\ByCallId\StartTranscription::post()` |
| Stop streaming media | POST | `/calls/1/calls/{callId}/stop-media-stream` | `Calls\Resource1\Calls\ByCallId\StopMediaStream::post()` |
| Stop playing file | POST | `/calls/1/calls/{callId}/stop-play` | `Calls\Resource1\Calls\ByCallId\StopPlay::post()` |
| Stop recording | POST | `/calls/1/calls/{callId}/stop-recording` | `Calls\Resource1\Calls\ByCallId\StopRecording::post()` |
| Stop transcription | POST | `/calls/1/calls/{callId}/stop-transcription` | `Calls\Resource1\Calls\ByCallId\StopTranscription::post()` |
| Get conferences | GET | `/calls/1/conferences` | `Calls\Resource1\Conferences::get()` |
| Create conference | POST | `/calls/1/conferences` | `Calls\Resource1\Conferences::post()` |
| Get conferences history | GET | `/calls/1/conferences/history` | `Calls\Resource1\Conferences\History::get()` |
| Get conference | GET | `/calls/1/conferences/{conferenceId}` | `Calls\Resource1\Conferences::getByConferenceId()` |
| Update all calls | PATCH | `/calls/1/conferences/{conferenceId}` | `Calls\Resource1\Conferences::patchByConferenceId()` |
| Broadcast text | POST | `/calls/1/conferences/{conferenceId}/broadcast-webrtc-text` | `Calls\Resource1\Conferences\ByConferenceId\BroadcastWebrtcText::post()` |
| Add new call | POST | `/calls/1/conferences/{conferenceId}/call` | `Calls\Resource1\Conferences\ByConferenceId\Call::post()` |
| Remove call | DELETE | `/calls/1/conferences/{conferenceId}/call/{callId}` | `Calls\Resource1\Conferences\ByConferenceId\Call::deleteByCallId()` |
| Update call | PATCH | `/calls/1/conferences/{conferenceId}/call/{callId}` | `Calls\Resource1\Conferences\ByConferenceId\Call::patchByCallId()` |
| Add existing call | PUT | `/calls/1/conferences/{conferenceId}/call/{callId}` | `Calls\Resource1\Conferences\ByConferenceId\Call::putByCallId()` |
| Hangup conference | POST | `/calls/1/conferences/{conferenceId}/hangup` | `Calls\Resource1\Conferences\ByConferenceId\Hangup::post()` |
| Get conference history | GET | `/calls/1/conferences/{conferenceId}/history` | `Calls\Resource1\Conferences\ByConferenceId\History::get()` |
| Play file | POST | `/calls/1/conferences/{conferenceId}/play` | `Calls\Resource1\Conferences\ByConferenceId\Play::post()` |
| Say text | POST | `/calls/1/conferences/{conferenceId}/say` | `Calls\Resource1\Conferences\ByConferenceId\Say::post()` |
| Send message | POST | `/calls/1/conferences/{conferenceId}/send-message` | `Calls\Resource1\Conferences\ByConferenceId\SendMessage::post()` |
| Start recording | POST | `/calls/1/conferences/{conferenceId}/start-recording` | `Calls\Resource1\Conferences\ByConferenceId\StartRecording::post()` |
| Stop playing file | POST | `/calls/1/conferences/{conferenceId}/stop-play` | `Calls\Resource1\Conferences\ByConferenceId\StopPlay::post()` |
| Stop recording | POST | `/calls/1/conferences/{conferenceId}/stop-recording` | `Calls\Resource1\Conferences\ByConferenceId\StopRecording::post()` |
| Get calls configurations | GET | `/calls/1/configurations` | `Calls\Resource1\Configurations::get()` |
| Create calls configuration | POST | `/calls/1/configurations` | `Calls\Resource1\Configurations::post()` |
| Delete calls configuration | DELETE | `/calls/1/configurations/{callsConfigurationId}` | `Calls\Resource1\Configurations::deleteByCallsConfigurationId()` |
| Get calls configuration | GET | `/calls/1/configurations/{callsConfigurationId}` | `Calls\Resource1\Configurations::getByCallsConfigurationId()` |
| Update calls configuration | PUT | `/calls/1/configurations/{callsConfigurationId}` | `Calls\Resource1\Configurations::putByCallsConfigurationId()` |
| Connect calls | POST | `/calls/1/connect` | `Calls\Resource1\Connect::post()` |
| Get dialogs | GET | `/calls/1/dialogs` | `Calls\Resource1\Dialogs::get()` |
| Create dialog | POST | `/calls/1/dialogs` | `Calls\Resource1\Dialogs::post()` |
| Get dialogs history | GET | `/calls/1/dialogs/history` | `Calls\Resource1\Dialogs\History::get()` |
| Create dialog with existing calls | POST | `/calls/1/dialogs/parent-call/{parentCallId}/child-call/{childCallId}` | `Calls\Resource1\Dialogs\ParentCall\ByParentCallId\ChildCall::postByChildCallId()` |
| Get dialog | GET | `/calls/1/dialogs/{dialogId}` | `Calls\Resource1\Dialogs::getByDialogId()` |
| Broadcast text | POST | `/calls/1/dialogs/{dialogId}/broadcast-webrtc-text` | `Calls\Resource1\Dialogs\ByDialogId\BroadcastWebrtcText::post()` |
| Hangup dialog | POST | `/calls/1/dialogs/{dialogId}/hangup` | `Calls\Resource1\Dialogs\ByDialogId\Hangup::post()` |
| Get dialog history | GET | `/calls/1/dialogs/{dialogId}/history` | `Calls\Resource1\Dialogs\ByDialogId\History::get()` |
| Play file | POST | `/calls/1/dialogs/{dialogId}/play` | `Calls\Resource1\Dialogs\ByDialogId\Play::post()` |
| Say text | POST | `/calls/1/dialogs/{dialogId}/say` | `Calls\Resource1\Dialogs\ByDialogId\Say::post()` |
| Send message | POST | `/calls/1/dialogs/{dialogId}/send-message` | `Calls\Resource1\Dialogs\ByDialogId\SendMessage::post()` |
| Start recording | POST | `/calls/1/dialogs/{dialogId}/start-recording` | `Calls\Resource1\Dialogs\ByDialogId\StartRecording::post()` |
| Stop playing file | POST | `/calls/1/dialogs/{dialogId}/stop-play` | `Calls\Resource1\Dialogs\ByDialogId\StopPlay::post()` |
| Stop recording | POST | `/calls/1/dialogs/{dialogId}/stop-recording` | `Calls\Resource1\Dialogs\ByDialogId\StopRecording::post()` |
| Dialog transfer accept | POST | `/calls/1/dialogs/{dialogId}/transfer/accept` | `Calls\Resource1\Dialogs\ByDialogId\Transfer\Accept::post()` |
| Dialog transfer reject | POST | `/calls/1/dialogs/{dialogId}/transfer/reject` | `Calls\Resource1\Dialogs\ByDialogId\Transfer\Reject::post()` |
| Get audio files | GET | `/calls/1/files` | `Calls\Resource1\Files::get()` |
| Upload audio file | POST | `/calls/1/files` | `Calls\Resource1\Files::post()` |
| Delete audio file | DELETE | `/calls/1/files/{fileId}` | `Calls\Resource1\Files::deleteByFileId()` |
| Get audio file | GET | `/calls/1/files/{fileId}` | `Calls\Resource1\Files::getByFileId()` |
| Get media-stream configs | GET | `/calls/1/media-stream-configs` | `Calls\Resource1\MediaStreamConfigs::get()` |
| Create a media-stream configuration | POST | `/calls/1/media-stream-configs` | `Calls\Resource1\MediaStreamConfigs::post()` |
| Delete a media-stream configuration | DELETE | `/calls/1/media-stream-configs/{mediaStreamConfigId}` | `Calls\Resource1\MediaStreamConfigs::deleteByMediaStreamConfigId()` |
| Get media-stream configuration | GET | `/calls/1/media-stream-configs/{mediaStreamConfigId}` | `Calls\Resource1\MediaStreamConfigs::getByMediaStreamConfigId()` |
| Update a media-stream configuration | PUT | `/calls/1/media-stream-configs/{mediaStreamConfigId}` | `Calls\Resource1\MediaStreamConfigs::putByMediaStreamConfigId()` |
| Get calls recordings | GET | `/calls/1/recordings/calls` | `Calls\Resource1\Recordings\Calls::get()` |
| Delete call recordings | DELETE | `/calls/1/recordings/calls/{callId}` | `Calls\Resource1\Recordings\Calls::deleteByCallId()` |
| Get call recordings | GET | `/calls/1/recordings/calls/{callId}` | `Calls\Resource1\Recordings\Calls::getByCallId()` |
| Get conferences recordings | GET | `/calls/1/recordings/conferences` | `Calls\Resource1\Recordings\Conferences::get()` |
| Delete conference recordings | DELETE | `/calls/1/recordings/conferences/{conferenceId}` | `Calls\Resource1\Recordings\Conferences::deleteByConferenceId()` |
| Get conference recordings | GET | `/calls/1/recordings/conferences/{conferenceId}` | `Calls\Resource1\Recordings\Conferences::getByConferenceId()` |
| Compose conference recording on calls | POST | `/calls/1/recordings/conferences/{conferenceId}/compose` | `Calls\Resource1\Recordings\Conferences\ByConferenceId\Compose::post()` |
| Get dialogs recordings | GET | `/calls/1/recordings/dialogs` | `Calls\Resource1\Recordings\Dialogs::get()` |
| Delete dialog recordings | DELETE | `/calls/1/recordings/dialogs/{dialogId}` | `Calls\Resource1\Recordings\Dialogs::deleteByDialogId()` |
| Get dialog recordings | GET | `/calls/1/recordings/dialogs/{dialogId}` | `Calls\Resource1\Recordings\Dialogs::getByDialogId()` |
| Compose dialog recording on calls | POST | `/calls/1/recordings/dialogs/{dialogId}/compose` | `Calls\Resource1\Recordings\Dialogs\ByDialogId\Compose::post()` |
| Delete recording file | DELETE | `/calls/1/recordings/files/{fileId}` | `Calls\Resource1\Recordings\Files::deleteByFileId()` |
| Download recording file | GET | `/calls/1/recordings/files/{fileId}` | `Calls\Resource1\Recordings\Files::getByFileId()` |
| Get SIP trunks | GET | `/calls/1/sip-trunks` | `Calls\Resource1\SipTrunks::get()` |
| Create SIP trunk | POST | `/calls/1/sip-trunks` | `Calls\Resource1\SipTrunks::post()` |
| Get SIP trunk service addresses | GET | `/calls/1/sip-trunks/service-addresses` | `Calls\Resource1\SipTrunks\ServiceAddresses::get()` |
| Create SIP trunk service address | POST | `/calls/1/sip-trunks/service-addresses` | `Calls\Resource1\SipTrunks\ServiceAddresses::post()` |
| Get countries | GET | `/calls/1/sip-trunks/service-addresses/countries` | `Calls\Resource1\SipTrunks\ServiceAddresses\Countries::get()` |
| Get regions | GET | `/calls/1/sip-trunks/service-addresses/countries/regions` | `Calls\Resource1\SipTrunks\ServiceAddresses\Countries\Regions::get()` |
| Delete SIP trunk service address | DELETE | `/calls/1/sip-trunks/service-addresses/{sipTrunkServiceAddressId}` | `Calls\Resource1\SipTrunks\ServiceAddresses::deleteBySipTrunkServiceAddressId()` |
| Get SIP trunk service address | GET | `/calls/1/sip-trunks/service-addresses/{sipTrunkServiceAddressId}` | `Calls\Resource1\SipTrunks\ServiceAddresses::getBySipTrunkServiceAddressId()` |
| Update SIP trunk service address | PUT | `/calls/1/sip-trunks/service-addresses/{sipTrunkServiceAddressId}` | `Calls\Resource1\SipTrunks\ServiceAddresses::putBySipTrunkServiceAddressId()` |
| Delete SIP trunk | DELETE | `/calls/1/sip-trunks/{sipTrunkId}` | `Calls\Resource1\SipTrunks::deleteBySipTrunkId()` |
| Get SIP trunk | GET | `/calls/1/sip-trunks/{sipTrunkId}` | `Calls\Resource1\SipTrunks::getBySipTrunkId()` |
| Update SIP trunk | PUT | `/calls/1/sip-trunks/{sipTrunkId}` | `Calls\Resource1\SipTrunks::putBySipTrunkId()` |
| Reset SIP trunk credentials | POST | `/calls/1/sip-trunks/{sipTrunkId}/reset-password` | `Calls\Resource1\SipTrunks\BySipTrunkId\ResetPassword::post()` |
| Get SIP trunk status | GET | `/calls/1/sip-trunks/{sipTrunkId}/status` | `Calls\Resource1\SipTrunks\BySipTrunkId\Status::get()` |
| Set SIP trunk status | POST | `/calls/1/sip-trunks/{sipTrunkId}/status` | `Calls\Resource1\SipTrunks\BySipTrunkId\Status::post()` |
| Delete domain verification | DELETE | `/calls/1/sip-trunks/{sipTrunkId}/txt-records` | `Calls\Resource1\SipTrunks\BySipTrunkId\TxtRecords::delete()` |
| Get verified domains | GET | `/calls/1/sip-trunks/{sipTrunkId}/txt-records` | `Calls\Resource1\SipTrunks\BySipTrunkId\TxtRecords::get()` |
| Create domain verification | POST | `/calls/1/sip-trunks/{sipTrunkId}/txt-records` | `Calls\Resource1\SipTrunks\BySipTrunkId\TxtRecords::post()` |
| Update domain verification | PUT | `/calls/1/sip-trunks/{sipTrunkId}/txt-records` | `Calls\Resource1\SipTrunks\BySipTrunkId\TxtRecords::put()` |
| KYC Match | POST | `/camara/kyc-match/v0.3/match` | `Camara\KycMatch\V03\MatchResource::post()` |
| Device Location Verification | POST | `/camara/location/v0/verify` | `Camara\Location\V0\Verify::post()` |
| Number Recycling Check | POST | `/camara/number-recycling/v0.2/check` | `Camara\NumberRecycling\V02\Check::post()` |
| Number verify device authorization | GET | `/camara/number-verification/v0/authorize` | `Camara\NumberVerification\V0\Authorize::get()` |
| Number Verification | POST | `/camara/number-verification/v0/verify` | `Camara\NumberVerification\V0\Verify::post()` |
| Number Retrieval DCQL Request | POST | `/camara/number-verification/v2/dcql/device-phone-number` | `Camara\NumberVerification\V2\Dcql\DevicePhoneNumber::post()` |
| Number verification DCQL Request | POST | `/camara/number-verification/v2/dcql/verify` | `Camara\NumberVerification\V2\Dcql\Verify::post()` |
| Number Retrieval | GET | `/camara/number-verification/v2/device-phone-number` | `Camara\NumberVerification\V2\DevicePhoneNumber::get()` |
| Number Verification | POST | `/camara/number-verification/v2/verify` | `Camara\NumberVerification\V2\Verify::post()` |
| SIM Swap | POST | `/camara/sim-swap/v0/check` | `Camara\SimSwap\V0\Check::post()` |
| Retrieve SIM Swap date | POST | `/camara/sim-swap/v0/retrieve-date` | `Camara\SimSwap\V0\RetrieveDate::post()` |
| Get catalogs | GET | `/catalogs/1/catalogs` | `Catalogs\Resource1\Catalogs::get()` |
| Create catalog | POST | `/catalogs/1/catalogs` | `Catalogs\Resource1\Catalogs::post()` |
| Get fields | GET | `/catalogs/1/catalogs/{catalogId}/fields` | `Catalogs\Resource1\Catalogs\ByCatalogId\Fields::get()` |
| Create fields | POST | `/catalogs/1/catalogs/{catalogId}/fields` | `Catalogs\Resource1\Catalogs\ByCatalogId\Fields::post()` |
| Delete field | DELETE | `/catalogs/1/catalogs/{catalogId}/fields/{fieldId}` | `Catalogs\Resource1\Catalogs\ByCatalogId\Fields::deleteByFieldId()` |
| Get field | GET | `/catalogs/1/catalogs/{catalogId}/fields/{fieldId}` | `Catalogs\Resource1\Catalogs\ByCatalogId\Fields::getByFieldId()` |
| Update field | PATCH | `/catalogs/1/catalogs/{catalogId}/fields/{fieldId}` | `Catalogs\Resource1\Catalogs\ByCatalogId\Fields::patchByFieldId()` |
| Delete items | DELETE | `/catalogs/1/catalogs/{catalogId}/items` | `Catalogs\Resource1\Catalogs\ByCatalogId\Items::delete()` |
| Get items | GET | `/catalogs/1/catalogs/{catalogId}/items` | `Catalogs\Resource1\Catalogs\ByCatalogId\Items::get()` |
| Update items | PATCH | `/catalogs/1/catalogs/{catalogId}/items` | `Catalogs\Resource1\Catalogs\ByCatalogId\Items::patch()` |
| Add items | POST | `/catalogs/1/catalogs/{catalogId}/items` | `Catalogs\Resource1\Catalogs\ByCatalogId\Items::post()` |
| Get item count | GET | `/catalogs/1/catalogs/{catalogId}/items/count` | `Catalogs\Resource1\Catalogs\ByCatalogId\Items\Count::get()` |
| Delete item | DELETE | `/catalogs/1/catalogs/{catalogId}/items/{itemId}` | `Catalogs\Resource1\Catalogs\ByCatalogId\Items::deleteByItemId()` |
| Get item | GET | `/catalogs/1/catalogs/{catalogId}/items/{itemId}` | `Catalogs\Resource1\Catalogs\ByCatalogId\Items::getByItemId()` |
| Update item | PATCH | `/catalogs/1/catalogs/{catalogId}/items/{itemId}` | `Catalogs\Resource1\Catalogs\ByCatalogId\Items::patchByItemId()` |
| Delete catalog | DELETE | `/catalogs/1/catalogs/{id}` | `Catalogs\Resource1\Catalogs::deleteById()` |
| Get catalog | GET | `/catalogs/1/catalogs/{id}` | `Catalogs\Resource1\Catalogs::getById()` |
| Update catalog | PATCH | `/catalogs/1/catalogs/{id}` | `Catalogs\Resource1\Catalogs::patchById()` |
| Update account configuration | PUT | `/ccaas/1/account/configuration` | `Ccaas\Resource1\Account\Configuration::put()` |
| Get agents | GET | `/ccaas/1/agents` | `Ccaas\Resource1\Agents::get()` |
| Create agent | POST | `/ccaas/1/agents` | `Ccaas\Resource1\Agents::post()` |
| Get agent | GET | `/ccaas/1/agents/{agentId}` | `Ccaas\Resource1\Agents::getByAgentId()` |
| Update agent | PUT | `/ccaas/1/agents/{agentId}` | `Ccaas\Resource1\Agents::putByAgentId()` |
| Get agent conversations | GET | `/ccaas/1/agents/{agentId}/conversations` | `Ccaas\Resource1\Agents\ByAgentId\Conversations::get()` |
| Set agents heartbeat | PUT | `/ccaas/1/agents/{agentId}/heartbeat` | `Ccaas\Resource1\Agents\ByAgentId\Heartbeat::put()` |
| Add agent to queue | POST | `/ccaas/1/agents/{agentId}/queues` | `Ccaas\Resource1\Agents\ByAgentId\Queues::post()` |
| Remove agent from queue | DELETE | `/ccaas/1/agents/{agentId}/queues/{queueId}` | `Ccaas\Resource1\Agents\ByAgentId\Queues::deleteByQueueId()` |
| Change agents status | PUT | `/ccaas/1/agents/{agentId}/status` | `Ccaas\Resource1\Agents\ByAgentId\Status::put()` |
| Get Bots | GET | `/ccaas/1/bots` | `Ccaas\Resource1\Bots::get()` |
| Create bot | POST | `/ccaas/1/bots` | `Ccaas\Resource1\Bots::post()` |
| Delete bot | DELETE | `/ccaas/1/bots/{botId}` | `Ccaas\Resource1\Bots::deleteByBotId()` |
| Get bot | GET | `/ccaas/1/bots/{botId}` | `Ccaas\Resource1\Bots::getByBotId()` |
| Update bot | PUT | `/ccaas/1/bots/{botId}` | `Ccaas\Resource1\Bots::putByBotId()` |
| Get conversations | GET | `/ccaas/1/conversations` | `Ccaas\Resource1\Conversations::get()` |
| Create conversation | POST | `/ccaas/1/conversations` | `Ccaas\Resource1\Conversations::post()` |
| Get conversation | GET | `/ccaas/1/conversations/{conversationId}` | `Ccaas\Resource1\Conversations::getByConversationId()` |
| Patch conversation | PATCH | `/ccaas/1/conversations/{conversationId}` | `Ccaas\Resource1\Conversations::patchByConversationId()` |
| Update conversation | PUT | `/ccaas/1/conversations/{conversationId}` | `Ccaas\Resource1\Conversations::putByConversationId()` |
| Unassign conversation agent | DELETE | `/ccaas/1/conversations/{conversationId}/assignee` | `Ccaas\Resource1\Conversations\ByConversationId\Assignee::delete()` |
| Change conversation assignment | PUT | `/ccaas/1/conversations/{conversationId}/assignee` | `Ccaas\Resource1\Conversations\ByConversationId\Assignee::put()` |
| Send a conversation event | POST | `/ccaas/1/conversations/{conversationId}/events` | `Ccaas\Resource1\Conversations\ByConversationId\Events::post()` |
| Get linked conversations | GET | `/ccaas/1/conversations/{conversationId}/links` | `Ccaas\Resource1\Conversations\ByConversationId\Links::get()` |
| Get messages | GET | `/ccaas/1/conversations/{conversationId}/messages` | `Ccaas\Resource1\Conversations\ByConversationId\Messages::get()` |
| Create message | POST | `/ccaas/1/conversations/{conversationId}/messages` | `Ccaas\Resource1\Conversations\ByConversationId\Messages::post()` |
| Delete metadata | DELETE | `/ccaas/1/conversations/{conversationId}/metadata` | `Ccaas\Resource1\Conversations\ByConversationId\Metadata::delete()` |
| Get metadata | GET | `/ccaas/1/conversations/{conversationId}/metadata` | `Ccaas\Resource1\Conversations\ByConversationId\Metadata::get()` |
| Patch metadata | PATCH | `/ccaas/1/conversations/{conversationId}/metadata` | `Ccaas\Resource1\Conversations\ByConversationId\Metadata::patch()` |
| Put metadata | PUT | `/ccaas/1/conversations/{conversationId}/metadata` | `Ccaas\Resource1\Conversations\ByConversationId\Metadata::put()` |
| Get notes | GET | `/ccaas/1/conversations/{conversationId}/notes` | `Ccaas\Resource1\Conversations\ByConversationId\Notes::get()` |
| Create note | POST | `/ccaas/1/conversations/{conversationId}/notes` | `Ccaas\Resource1\Conversations\ByConversationId\Notes::post()` |
| Get note | GET | `/ccaas/1/conversations/{conversationId}/notes/{noteId}` | `Ccaas\Resource1\Conversations\ByConversationId\Notes::getByNoteId()` |
| Get related comments | GET | `/ccaas/1/conversations/{conversationId}/related-comments` | `Ccaas\Resource1\Conversations\ByConversationId\RelatedComments::get()` |
| Route conversation | POST | `/ccaas/1/conversations/{conversationId}/route` | `Ccaas\Resource1\Conversations\ByConversationId\Route::post()` |
| Simulate routing result for conversation | GET | `/ccaas/1/conversations/{conversationId}/simulate-routing` | `Ccaas\Resource1\Conversations\ByConversationId\SimulateRouting::get()` |
| Add tag to conversation | POST | `/ccaas/1/conversations/{conversationId}/tags` | `Ccaas\Resource1\Conversations\ByConversationId\Tags::post()` |
| Remove tag from conversation | DELETE | `/ccaas/1/conversations/{conversationId}/tags/{tagName}` | `Ccaas\Resource1\Conversations\ByConversationId\Tags::deleteByTagName()` |
| Get queues | GET | `/ccaas/1/queues` | `Ccaas\Resource1\Queues::get()` |
| Create queue | POST | `/ccaas/1/queues` | `Ccaas\Resource1\Queues::post()` |
| Delete queue | DELETE | `/ccaas/1/queues/{queueId}` | `Ccaas\Resource1\Queues::deleteByQueueId()` |
| Update queue | PUT | `/ccaas/1/queues/{queueId}` | `Ccaas\Resource1\Queues::putByQueueId()` |
| Delete routing | DELETE | `/ccaas/1/routing` | `Ccaas\Resource1\Routing::delete()` |
| Get routing | GET | `/ccaas/1/routing` | `Ccaas\Resource1\Routing::get()` |
| Create routing | PUT | `/ccaas/1/routing` | `Ccaas\Resource1\Routing::put()` |
| Get tags | GET | `/ccaas/1/tags` | `Ccaas\Resource1\Tags::get()` |
| Create tag | POST | `/ccaas/1/tags` | `Ccaas\Resource1\Tags::post()` |
| Delete tag | DELETE | `/ccaas/1/tags/{tagName}` | `Ccaas\Resource1\Tags::deleteByTagName()` |
| Get templates | GET | `/ccaas/1/templates` | `Ccaas\Resource1\Templates::get()` |
| Get template | GET | `/ccaas/1/templates/{templateId}` | `Ccaas\Resource1\Templates::getByTemplateId()` |
| Create web form | POST | `/ccaas/1/web-forms` | `Ccaas\Resource1\WebForms::post()` |
| Delete web form | DELETE | `/ccaas/1/web-forms/{id}` | `Ccaas\Resource1\WebForms::deleteById()` |
| Get web form | GET | `/ccaas/1/web-forms/{id}` | `Ccaas\Resource1\WebForms::getById()` |
| Patch web form | PATCH | `/ccaas/1/web-forms/{id}` | `Ccaas\Resource1\WebForms::patchById()` |
| Update web form | PUT | `/ccaas/1/web-forms/{id}` | `Ccaas\Resource1\WebForms::putById()` |
| Submit web form data | POST | `/ccaas/1/web-forms/{id}/submissions` | `Ccaas\Resource1\WebForms\ById\Submissions::post()` |
| Get filtered working hours | GET | `/ccaas/1/working-hours` | `Ccaas\Resource1\WorkingHours::get()` |
| Create working hours | POST | `/ccaas/1/working-hours` | `Ccaas\Resource1\WorkingHours::post()` |
| Delete working hours | DELETE | `/ccaas/1/working-hours/{id}` | `Ccaas\Resource1\WorkingHours::deleteById()` |
| Get working hours | GET | `/ccaas/1/working-hours/{id}` | `Ccaas\Resource1\WorkingHours::getById()` |
| Patch working hours | PATCH | `/ccaas/1/working-hours/{id}` | `Ccaas\Resource1\WorkingHours::patchById()` |
| Update working hours | PUT | `/ccaas/1/working-hours/{id}` | `Ccaas\Resource1\WorkingHours::putById()` |
| Get working hours status | GET | `/ccaas/1/working-hours/{id}/status` | `Ccaas\Resource1\WorkingHours\ById\Status::get()` |
| Create working hours holiday | POST | `/ccaas/1/working-hours/{workingHoursId}/holiday` | `Ccaas\Resource1\WorkingHours\ByWorkingHoursId\Holiday::post()` |
| Remove working hours holiday | DELETE | `/ccaas/1/working-hours/{workingHoursId}/holiday/{id}` | `Ccaas\Resource1\WorkingHours\ByWorkingHoursId\Holiday::deleteById()` |
| Get fields | GET | `/ccaas/2/conversation-forms/fields` | `Ccaas\Resource2\ConversationForms\Fields::get()` |
| Create field | POST | `/ccaas/2/conversation-forms/fields` | `Ccaas\Resource2\ConversationForms\Fields::post()` |
| Delete field | DELETE | `/ccaas/2/conversation-forms/fields/{id}` | `Ccaas\Resource2\ConversationForms\Fields::deleteById()` |
| Get field | GET | `/ccaas/2/conversation-forms/fields/{id}` | `Ccaas\Resource2\ConversationForms\Fields::getById()` |
| Update field | PUT | `/ccaas/2/conversation-forms/fields/{id}` | `Ccaas\Resource2\ConversationForms\Fields::putById()` |
| Get conversation forms | GET | `/ccaas/2/conversation-forms/forms` | `Ccaas\Resource2\ConversationForms\Forms::get()` |
| Create conversation form | POST | `/ccaas/2/conversation-forms/forms` | `Ccaas\Resource2\ConversationForms\Forms::post()` |
| Delete conversation form | DELETE | `/ccaas/2/conversation-forms/forms/{id}` | `Ccaas\Resource2\ConversationForms\Forms::deleteById()` |
| Get conversation form | GET | `/ccaas/2/conversation-forms/forms/{id}` | `Ccaas\Resource2\ConversationForms\Forms::getById()` |
| Update conversation form | PUT | `/ccaas/2/conversation-forms/forms/{id}` | `Ccaas\Resource2\ConversationForms\Forms::putById()` |
| Get triggers | GET | `/ccaas/2/conversation-forms/triggers` | `Ccaas\Resource2\ConversationForms\Triggers::get()` |
| Create trigger | POST | `/ccaas/2/conversation-forms/triggers` | `Ccaas\Resource2\ConversationForms\Triggers::post()` |
| Delete trigger | DELETE | `/ccaas/2/conversation-forms/triggers/{id}` | `Ccaas\Resource2\ConversationForms\Triggers::deleteById()` |
| Get trigger | GET | `/ccaas/2/conversation-forms/triggers/{id}` | `Ccaas\Resource2\ConversationForms\Triggers::getById()` |
| Patch trigger | PATCH | `/ccaas/2/conversation-forms/triggers/{id}` | `Ccaas\Resource2\ConversationForms\Triggers::patchById()` |
| Update trigger | PUT | `/ccaas/2/conversation-forms/triggers/{id}` | `Ccaas\Resource2\ConversationForms\Triggers::putById()` |
| Get dispositions | GET | `/ccaas/2/conversations/{conversationId}/form` | `Ccaas\Resource2\Conversations\ByConversationId\Form::get()` |
| Update or insert dispositions | PUT | `/ccaas/2/conversations/{conversationId}/form` | `Ccaas\Resource2\Conversations\ByConversationId\Form::put()` |
| Assign form to conversation | POST | `/ccaas/2/conversations/{conversationId}/form/assign` | `Ccaas\Resource2\Conversations\ByConversationId\Form\Assign::post()` |
| Un-assign form from conversation | POST | `/ccaas/2/conversations/{conversationId}/form/unassign` | `Ccaas\Resource2\Conversations\ByConversationId\Form\Unassign::post()` |
| Delete disposition | DELETE | `/ccaas/2/conversations/{conversationId}/form/{id}` | `Ccaas\Resource2\Conversations\ByConversationId\Form::deleteById()` |
| Get account recording configuration | GET | `/ccaas/voice/2/account-recording-config` | `Ccaas\Voice\Resource2\AccountRecordingConfig::get()` |
| Create account recording configuration | POST | `/ccaas/voice/2/account-recording-config` | `Ccaas\Voice\Resource2\AccountRecordingConfig::post()` |
| Update account recording configuration | PUT | `/ccaas/voice/2/account-recording-config` | `Ccaas\Voice\Resource2\AccountRecordingConfig::put()` |
| Get account wrap up configuration | GET | `/ccaas/voice/2/account-wrap-up-config` | `Ccaas\Voice\Resource2\AccountWrapUpConfig::get()` |
| Update account wrap up configuration | PUT | `/ccaas/voice/2/account-wrap-up-config` | `Ccaas\Voice\Resource2\AccountWrapUpConfig::put()` |
| Get agent recording configurations | GET | `/ccaas/voice/2/agent-recording-configs` | `Ccaas\Voice\Resource2\AgentRecordingConfigs::get()` |
| Get agent recording configuration | GET | `/ccaas/voice/2/agent-recording-configs/{agentId}` | `Ccaas\Voice\Resource2\AgentRecordingConfigs::getByAgentId()` |
| Create agent recording configuration | POST | `/ccaas/voice/2/agent-recording-configs/{agentId}` | `Ccaas\Voice\Resource2\AgentRecordingConfigs::postByAgentId()` |
| Update agent recording configuration | PUT | `/ccaas/voice/2/agent-recording-configs/{agentId}` | `Ccaas\Voice\Resource2\AgentRecordingConfigs::putByAgentId()` |
| Add agent wrap up time | PATCH | `/ccaas/voice/2/agent/{agentId}/wrap-up-time/add/{seconds}` | `Ccaas\Voice\Resource2\Agent\ByAgentId\WrapUpTime\Add::patchBySeconds()` |
| Clear agent wrap up time | PATCH | `/ccaas/voice/2/agent/{agentId}/wrap-up-time/clear` | `Ccaas\Voice\Resource2\Agent\ByAgentId\WrapUpTime\Clear::patch()` |
| Delete away audio message | DELETE | `/ccaas/voice/2/away-audio-message/{workingHoursConfigId}` | `Ccaas\Voice\Resource2\AwayAudioMessage::deleteByWorkingHoursConfigId()` |
| Get away audio message | GET | `/ccaas/voice/2/away-audio-message/{workingHoursConfigId}` | `Ccaas\Voice\Resource2\AwayAudioMessage::getByWorkingHoursConfigId()` |
| Remove custom call timeout | DELETE | `/ccaas/voice/2/call-timeouts` | `Ccaas\Voice\Resource2\CallTimeouts::delete()` |
| Get call timeout | GET | `/ccaas/voice/2/call-timeouts` | `Ccaas\Voice\Resource2\CallTimeouts::get()` |
| Update call timeout | PUT | `/ccaas/voice/2/call-timeouts` | `Ccaas\Voice\Resource2\CallTimeouts::put()` |
| Transfer call to another agent | PATCH | `/ccaas/voice/2/conversation/{conversationId}/transfer/agent` | `Ccaas\Voice\Resource2\Conversation\ByConversationId\Transfer\Agent::patch()` |
| Transfer call to external number | PATCH | `/ccaas/voice/2/conversation/{conversationId}/transfer/external-number` | `Ccaas\Voice\Resource2\Conversation\ByConversationId\Transfer\ExternalNumber::patch()` |
| Transfer call to another queue | PATCH | `/ccaas/voice/2/conversation/{conversationId}/transfer/queue` | `Ccaas\Voice\Resource2\Conversation\ByConversationId\Transfer\Queue::patch()` |
| Get hold configurations | GET | `/ccaas/voice/2/hold-configs-per-queue` | `Ccaas\Voice\Resource2\HoldConfigsPerQueue::get()` |
| Create hold configuration | POST | `/ccaas/voice/2/hold-configs-per-queue` | `Ccaas\Voice\Resource2\HoldConfigsPerQueue::post()` |
| Delete hold configuration | DELETE | `/ccaas/voice/2/hold-configs-per-queue/{id}` | `Ccaas\Voice\Resource2\HoldConfigsPerQueue::deleteById()` |
| Get hold configuration | GET | `/ccaas/voice/2/hold-configs-per-queue/{id}` | `Ccaas\Voice\Resource2\HoldConfigsPerQueue::getById()` |
| Update hold configuration | PUT | `/ccaas/voice/2/hold-configs-per-queue/{id}` | `Ccaas\Voice\Resource2\HoldConfigsPerQueue::putById()` |
| Create outbound call conversation | POST | `/ccaas/voice/2/outbound-call-conversation` | `Ccaas\Voice\Resource2\OutboundCallConversation::post()` |
| Download call recording | GET | `/ccaas/voice/2/recording/download/{recordingId}` | `Ccaas\Voice\Resource2\Recording\Download::getByRecordingId()` |
| Get recording metadata | GET | `/ccaas/voice/2/recording/metadata` | `Ccaas\Voice\Resource2\Recording\Metadata::get()` |
| Get transfer to external number configuration | GET | `/ccaas/voice/2/transfer-configs/external-number` | `Ccaas\Voice\Resource2\TransferConfigs\ExternalNumber::get()` |
| Update transfer to external number configuration | PUT | `/ccaas/voice/2/transfer-configs/external-number` | `Ccaas\Voice\Resource2\TransferConfigs\ExternalNumber::put()` |
| Get transfer strategy | GET | `/ccaas/voice/2/transfer-configs/transfer-strategy` | `Ccaas\Voice\Resource2\TransferConfigs\TransferStrategy::get()` |
| Update transfer strategy | PUT | `/ccaas/voice/2/transfer-configs/transfer-strategy` | `Ccaas\Voice\Resource2\TransferConfigs\TransferStrategy::put()` |
| Fetch queues eligible as transfer destination | GET | `/ccaas/voice/2/transfer/queues` | `Ccaas\Voice\Resource2\Transfer\Queues::get()` |
| Get supported TTS placeholders for purpose | GET | `/ccaas/voice/2/tts/options/placeholders/{ttsPurpose}` | `Ccaas\Voice\Resource2\Tts\Options\Placeholders::getByTtsPurpose()` |
| Get all waiting strategies | GET | `/ccaas/voice/2/waiting-strategies` | `Ccaas\Voice\Resource2\WaitingStrategies::get()` |
| Create waiting strategy | POST | `/ccaas/voice/2/waiting-strategies` | `Ccaas\Voice\Resource2\WaitingStrategies::post()` |
| Delete waiting strategy | DELETE | `/ccaas/voice/2/waiting-strategies/{id}` | `Ccaas\Voice\Resource2\WaitingStrategies::deleteById()` |
| Get waiting strategy | GET | `/ccaas/voice/2/waiting-strategies/{id}` | `Ccaas\Voice\Resource2\WaitingStrategies::getById()` |
| Update waiting strategy | PUT | `/ccaas/voice/2/waiting-strategies/{id}` | `Ccaas\Voice\Resource2\WaitingStrategies::putById()` |
| Put client on hold | PATCH | `/ccaas/voice/2/{conversationId}/hold` | `Ccaas\Voice\Resource2\ByConversationId\Hold::patch()` |
| Put client off hold | PATCH | `/ccaas/voice/2/{conversationId}/unhold` | `Ccaas\Voice\Resource2\ByConversationId\Unhold::patch()` |
| Get agent configuration | GET | `/ccca/1/agent-configs/{agentId}` | `Ccca\Resource1\AgentConfigs::getByAgentId()` |
| Update agent wrap up configuration | PUT | `/ccca/1/agent-configs/{agentId}/wrap-up` | `Ccca\Resource1\AgentConfigs\ByAgentId\WrapUp::put()` |
| Remove person from flow | DELETE | `/communication/1/flows/{campaignId}/participants` | `Communication\Resource1\Flows\ByCampaignId\Participants::delete()` |
| Add Person to Flow | POST | `/communication/1/flows/{campaignId}/participants` | `Communication\Resource1\Flows\ByCampaignId\Participants::post()` |
| Delete fact definitions | DELETE | `/context/1/facts` | `Context\Resource1\Facts::delete()` |
| Get fact definitions | GET | `/context/1/facts` | `Context\Resource1\Facts::get()` |
| Create fact definition | POST | `/context/1/facts` | `Context\Resource1\Facts::post()` |
| Delete all fact definitions | DELETE | `/context/1/facts/all` | `Context\Resource1\Facts\All::delete()` |
| Get fact definition | GET | `/context/1/facts/{id}` | `Context\Resource1\Facts::getById()` |
| Update fact definition | PUT | `/context/1/facts/{id}` | `Context\Resource1\Facts::putById()` |
| Get interaction memory | GET | `/context/1/memories/interaction/{interactionId}` | `Context\Resource1\Memories\Interaction::getByInteractionId()` |
| Get person interaction memories | GET | `/context/1/memories/person/{personId}` | `Context\Resource1\Memories\Person::getByPersonId()` |
| Search person interaction memories | POST | `/context/1/memories/search` | `Context\Resource1\Memories\Search::post()` |
| Get latest person summary | GET | `/context/1/summary/person/{personId}` | `Context\Resource1\Summary\Person::getByPersonId()` |
| Confirm conversion | POST | `/ct/1/log/end/{messageId}` | `Ct\Resource1\Log\End::postByMessageId()` |
| Get scheduled bulks | GET | `/email/1/bulks` | `Email\Resource1\Bulks::get()` |
| Reschedule messages | PUT | `/email/1/bulks` | `Email\Resource1\Bulks::put()` |
| Get scheduled bulk statuses | GET | `/email/1/bulks/status` | `Email\Resource1\Bulks\Status::get()` |
| Update scheduled message statuses | PUT | `/email/1/bulks/status` | `Email\Resource1\Bulks\Status::put()` |
| Upload binary content | POST | `/email/1/content` | `Email\Resource1\Content::post()` |
| Get domains | GET | `/email/1/domains` | `Email\Resource1\Domains::get()` |
| Add domain | POST | `/email/1/domains` | `Email\Resource1\Domains::post()` |
| Delete domain | DELETE | `/email/1/domains/{domainName}` | `Email\Resource1\Domains::deleteByDomainName()` |
| Get domain details | GET | `/email/1/domains/{domainName}` | `Email\Resource1\Domains::getByDomainName()` |
| Update domain tracking events | PUT | `/email/1/domains/{domainName}/tracking` | `Email\Resource1\Domains\ByDomainName\Tracking::put()` |
| Verify domain | POST | `/email/1/domains/{domainName}/verify` | `Email\Resource1\Domains\ByDomainName\Verify::post()` |
| Get domain | GET | `/email/1/ip-management/domains/{domainId}` | `Email\Resource1\IpManagement\Domains::getByDomainId()` |
| Assign IP pool to domain | POST | `/email/1/ip-management/domains/{domainId}/pools` | `Email\Resource1\IpManagement\Domains\ByDomainId\Pools::post()` |
| Unassign IP pool from domain | DELETE | `/email/1/ip-management/domains/{domainId}/pools/{poolId}` | `Email\Resource1\IpManagement\Domains\ByDomainId\Pools::deleteByPoolId()` |
| Update IP pool sending priority | PUT | `/email/1/ip-management/domains/{domainId}/pools/{poolId}` | `Email\Resource1\IpManagement\Domains\ByDomainId\Pools::putByPoolId()` |
| Get IPs | GET | `/email/1/ip-management/ips` | `Email\Resource1\IpManagement\Ips::get()` |
| Commission IP | POST | `/email/1/ip-management/ips/commission` | `Email\Resource1\IpManagement\Ips\Commission::post()` |
| Decommission IP | DELETE | `/email/1/ip-management/ips/{ipId}` | `Email\Resource1\IpManagement\Ips::deleteByIpId()` |
| Get IP | GET | `/email/1/ip-management/ips/{ipId}` | `Email\Resource1\IpManagement\Ips::getByIpId()` |
| Get IPs (paginated) | GET | `/email/1/ip-management/paginated/ips` | `Email\Resource1\IpManagement\Paginated\Ips::get()` |
| Get IP pools (paginated) | GET | `/email/1/ip-management/paginated/pools` | `Email\Resource1\IpManagement\Paginated\Pools::get()` |
| Get IP pools | GET | `/email/1/ip-management/pools` | `Email\Resource1\IpManagement\Pools::get()` |
| Create IP pool | POST | `/email/1/ip-management/pools` | `Email\Resource1\IpManagement\Pools::post()` |
| Delete IP pool | DELETE | `/email/1/ip-management/pools/{poolId}` | `Email\Resource1\IpManagement\Pools::deleteByPoolId()` |
| Get IP pool | GET | `/email/1/ip-management/pools/{poolId}` | `Email\Resource1\IpManagement\Pools::getByPoolId()` |
| Update IP pool | PUT | `/email/1/ip-management/pools/{poolId}` | `Email\Resource1\IpManagement\Pools::putByPoolId()` |
| Assign IP to pool | POST | `/email/1/ip-management/pools/{poolId}/ips` | `Email\Resource1\IpManagement\Pools\ByPoolId\Ips::post()` |
| Unassign IP from pool | DELETE | `/email/1/ip-management/pools/{poolId}/ips/{ipId}` | `Email\Resource1\IpManagement\Pools\ByPoolId\Ips::deleteByIpId()` |
| Get email message logs | GET | `/email/1/logs` | `Email\Resource1\Logs::get()` |
| Get email delivery reports | GET | `/email/1/reports` | `Email\Resource1\Reports::get()` |
| Delete suppressions | DELETE | `/email/1/suppressions` | `Email\Resource1\Suppressions::delete()` |
| Get suppressions | GET | `/email/1/suppressions` | `Email\Resource1\Suppressions::get()` |
| Add suppressions | POST | `/email/1/suppressions` | `Email\Resource1\Suppressions::post()` |
| Get suppression domains | GET | `/email/1/suppressions/domains` | `Email\Resource1\Suppressions\Domains::get()` |
| Get email templates | GET | `/email/1/templates` | `Email\Resource1\Templates::get()` |
| Create email template | POST | `/email/1/templates` | `Email\Resource1\Templates::post()` |
| Delete email template | DELETE | `/email/1/templates/{templateId}` | `Email\Resource1\Templates::deleteByTemplateId()` |
| Get email template | GET | `/email/1/templates/{templateId}` | `Email\Resource1\Templates::getByTemplateId()` |
| Patch email template | PATCH | `/email/1/templates/{templateId}` | `Email\Resource1\Templates::patchByTemplateId()` |
| Update email template | PUT | `/email/1/templates/{templateId}` | `Email\Resource1\Templates::putByTemplateId()` |
| Get email template attachments | GET | `/email/1/templates/{templateId}/attachments` | `Email\Resource1\Templates\ByTemplateId\Attachments::get()` |
| Upload email template attachment | POST | `/email/1/templates/{templateId}/attachments` | `Email\Resource1\Templates\ByTemplateId\Attachments::post()` |
| Delete email template attachment | DELETE | `/email/1/templates/{templateId}/attachments/{attachmentId}` | `Email\Resource1\Templates\ByTemplateId\Attachments::deleteByAttachmentId()` |
| Generate email template preview | POST | `/email/1/templates/{templateId}/preview` | `Email\Resource1\Templates\ByTemplateId\Preview::post()` |
| Validate email address | POST | `/email/2/validation` | `Email\Resource2\Validation::post()` |
| Get email validations | GET | `/email/2/validations` | `Email\Resource2\Validations::get()` |
| Validate email addresses | POST | `/email/2/validations` | `Email\Resource2\Validations::post()` |
| Send fully featured email | POST | `/email/3/send` | `Email\Resource3\Send::post()` |
| Get email message logs | GET | `/email/4/logs` | `Email\Resource4\Logs::get()` |
| Send email messages | POST | `/email/4/messages` | `Email\Resource4\Messages::post()` |
| Send MIME email | POST | `/email/4/mime` | `Email\Resource4\Mime::post()` |
| Get email delivery reports | GET | `/email/4/reports` | `Email\Resource4\Reports::get()` |
| Get forms | GET | `/forms/1/forms` | `Forms\Resource1\Forms::get()` |
| Get form | GET | `/forms/1/forms/{id}` | `Forms\Resource1\Forms::getById()` |
| Submit form data | POST | `/forms/1/forms/{id}/data` | `Forms\Resource1\Forms\ById\Data::post()` |
| Increment form view count | POST | `/forms/1/forms/{id}/views` | `Forms\Resource1\Forms\ById\Views::post()` |
| Get outbound Instagram message logs | GET | `/instagram/1/logs` | `Instagram\Resource1\Logs::get()` |
| Send a Instagram message | POST | `/instagram/1/messages` | `Instagram\Resource1\Messages::post()` |
| Get Instagram delivery reports | GET | `/instagram/1/reports` | `Instagram\Resource1\Reports::get()` |
| Get outbound Kakao Alim message logs | GET | `/kakao-alim/1/logs` | `KakaoAlim\Resource1\Logs::get()` |
| Send a Kakao Alim message | POST | `/kakao-alim/1/messages` | `KakaoAlim\Resource1\Messages::post()` |
| Get Kakao Alim delivery reports | GET | `/kakao-alim/1/reports` | `KakaoAlim\Resource1\Reports::get()` |
| Get Brand Message templates | GET | `/kakao-brand-messages/1/templates` | `KakaoBrandMessages\Resource1\Templates::get()` |
| Create Brand Message template | POST | `/kakao-brand-messages/1/templates` | `KakaoBrandMessages\Resource1\Templates::post()` |
| Get Brand Message template | GET | `/kakao-brand-messages/1/templates/single` | `KakaoBrandMessages\Resource1\Templates\Single::get()` |
| Update Brand Message template | PUT | `/kakao-brand-messages/1/templates/{templateCode}` | `KakaoBrandMessages\Resource1\Templates::putByTemplateCode()` |
| Get message logs | GET | `/kakao-chingu/1/logs` | `KakaoChingu\Resource1\Logs::get()` |
| Send a brand message | POST | `/kakao-chingu/1/messages` | `KakaoChingu\Resource1\Messages::post()` |
| Get brand message delivery reports | GET | `/kakao-chingu/1/reports` | `KakaoChingu\Resource1\Reports::get()` |
| Get outbound Kakao Sangdam message logs | GET | `/kakao-sangdam/1/logs` | `KakaoSangdam\Resource1\Logs::get()` |
| Send a Kakao Sangdam message | POST | `/kakao-sangdam/1/messages` | `KakaoSangdam\Resource1\Messages::post()` |
| Get Kakao Sangdam delivery reports | GET | `/kakao-sangdam/1/reports` | `KakaoSangdam\Resource1\Reports::get()` |
| Get articles | GET | `/knowledge-base/1/articles` | `KnowledgeBase\Resource1\Articles::get()` |
| Create article | POST | `/knowledge-base/1/articles` | `KnowledgeBase\Resource1\Articles::post()` |
| Delete article | DELETE | `/knowledge-base/1/articles/{articleId}` | `KnowledgeBase\Resource1\Articles::deleteByArticleId()` |
| Get article | GET | `/knowledge-base/1/articles/{articleId}` | `KnowledgeBase\Resource1\Articles::getByArticleId()` |
| Update article | PUT | `/knowledge-base/1/articles/{articleId}` | `KnowledgeBase\Resource1\Articles::putByArticleId()` |
| Get article comments | GET | `/knowledge-base/1/articles/{articleId}/comments` | `KnowledgeBase\Resource1\Articles\ByArticleId\Comments::get()` |
| Create comment | POST | `/knowledge-base/1/articles/{articleId}/comments` | `KnowledgeBase\Resource1\Articles\ByArticleId\Comments::post()` |
| Delete comment | DELETE | `/knowledge-base/1/articles/{articleId}/comments/{commentId}` | `KnowledgeBase\Resource1\Articles\ByArticleId\Comments::deleteByCommentId()` |
| Update comment | PUT | `/knowledge-base/1/articles/{articleId}/comments/{commentId}` | `KnowledgeBase\Resource1\Articles\ByArticleId\Comments::putByCommentId()` |
| Get article versions | GET | `/knowledge-base/1/articles/{articleId}/history` | `KnowledgeBase\Resource1\Articles\ByArticleId\History::get()` |
| Update article status | PATCH | `/knowledge-base/1/articles/{articleId}/status` | `KnowledgeBase\Resource1\Articles\ByArticleId\Status::patch()` |
| Upload attachment | POST | `/knowledge-base/1/attachments` | `KnowledgeBase\Resource1\Attachments::post()` |
| Delete attachment | DELETE | `/knowledge-base/1/attachments/{attachmentId}` | `KnowledgeBase\Resource1\Attachments::deleteByAttachmentId()` |
| Get attachment details | GET | `/knowledge-base/1/attachments/{attachmentId}` | `KnowledgeBase\Resource1\Attachments::getByAttachmentId()` |
| Get attachment linked article | GET | `/knowledge-base/1/attachments/{attachmentId}/linked-article` | `KnowledgeBase\Resource1\Attachments\ByAttachmentId\LinkedArticle::get()` |
| Get categories | GET | `/knowledge-base/1/categories` | `KnowledgeBase\Resource1\Categories::get()` |
| Create content tree node | POST | `/knowledge-base/1/content-tree/nodes` | `KnowledgeBase\Resource1\ContentTree\Nodes::post()` |
| Get content tree categories | GET | `/knowledge-base/1/content-tree/nodes/categories` | `KnowledgeBase\Resource1\ContentTree\Nodes\Categories::get()` |
| Delete content tree node | DELETE | `/knowledge-base/1/content-tree/nodes/{nodeId}` | `KnowledgeBase\Resource1\ContentTree\Nodes::deleteByNodeId()` |
| Get content tree node | GET | `/knowledge-base/1/content-tree/nodes/{nodeId}` | `KnowledgeBase\Resource1\ContentTree\Nodes::getByNodeId()` |
| Update content tree node | PUT | `/knowledge-base/1/content-tree/nodes/{nodeId}` | `KnowledgeBase\Resource1\ContentTree\Nodes::putByNodeId()` |
| Move content tree node | POST | `/knowledge-base/1/content-tree/nodes/{nodeId}/move` | `KnowledgeBase\Resource1\ContentTree\Nodes\ByNodeId\Move::post()` |
| Get folders | GET | `/knowledge-base/1/folders` | `KnowledgeBase\Resource1\Folders::get()` |
| Search knowledge base | POST | `/knowledge-base/1/search` | `KnowledgeBase\Resource1\Search::post()` |
| Get tags | GET | `/knowledge-base/1/tags` | `KnowledgeBase\Resource1\Tags::get()` |
| Create tag | POST | `/knowledge-base/1/tags` | `KnowledgeBase\Resource1\Tags::post()` |
| Get tag | GET | `/knowledge-base/1/tags/{tagId}` | `KnowledgeBase\Resource1\Tags::getByTagId()` |
| Update tag | PUT | `/knowledge-base/1/tags/{tagId}` | `KnowledgeBase\Resource1\Tags::putByTagId()` |
| Get outbound LINE Official Account message logs | GET | `/line-oa/1/logs` | `LineOa\Resource1\Logs::get()` |
| Send a LINE Official Account message | POST | `/line-oa/1/messages` | `LineOa\Resource1\Messages::post()` |
| Get LINE Official Account delivery reports | GET | `/line-oa/1/reports` | `LineOa\Resource1\Reports::get()` |
| Send a LINE message | POST | `/line/1/messages` | `Line\Resource1\Messages::post()` |
| Get LON delivery reports | GET | `/line/1/reports` | `Line\Resource1\Reports::get()` |
| Invalidate authenticated session | DELETE | `/livechat/1/widgets/{widgetId}/sessions/{sessionId}` | `Livechat\Resource1\Widgets\ByWidgetId\Sessions::deleteBySessionId()` |
| Get markup language configurations | GET | `/markuplanguage/1/config` | `Markuplanguage\Resource1\Config::get()` |
| Create a markup language configuration | POST | `/markuplanguage/1/config` | `Markuplanguage\Resource1\Config::post()` |
| Delete a markup language configuration | DELETE | `/markuplanguage/1/config/{configId}` | `Markuplanguage\Resource1\Config::deleteByConfigId()` |
| Get a markup language configuration | GET | `/markuplanguage/1/config/{configId}` | `Markuplanguage\Resource1\Config::getByConfigId()` |
| Update a markup language configuration | PUT | `/markuplanguage/1/config/{configId}` | `Markuplanguage\Resource1\Config::putByConfigId()` |
| Create markup language call | POST | `/markuplanguage/1/create` | `Markuplanguage\Resource1\Create::post()` |
| Delete recording | DELETE | `/markuplanguage/1/recordings` | `Markuplanguage\Resource1\Recordings::delete()` |
| Get recordings | GET | `/markuplanguage/1/recordings` | `Markuplanguage\Resource1\Recordings::get()` |
| Download recording file | GET | `/markuplanguage/1/recordings/files/{fileId}` | `Markuplanguage\Resource1\Recordings\Files::getByFileId()` |
| Send a Messages API event | POST | `/messages-api/1/events` | `MessagesApi\Resource1\Events::post()` |
| Get inbound messages | GET | `/messages-api/1/inbound` | `MessagesApi\Resource1\Inbound::get()` |
| Send a Messages API message | POST | `/messages-api/1/messages` | `MessagesApi\Resource1\Messages::post()` |
| Validate a Messages API message | POST | `/messages-api/1/messages/validate` | `MessagesApi\Resource1\Messages\Validate::post()` |
| Get delivery reports | GET | `/messages-api/1/reports` | `MessagesApi\Resource1\Reports::get()` |
| Get ad accounts | GET | `/messenger/1/ad-accounts` | `Messenger\Resource1\AdAccounts::get()` |
| Get audiences | GET | `/messenger/1/audiences` | `Messenger\Resource1\Audiences::get()` |
| Create custom audience | POST | `/messenger/1/audiences` | `Messenger\Resource1\Audiences::post()` |
| Delete audience | DELETE | `/messenger/1/audiences/{audienceId}` | `Messenger\Resource1\Audiences::deleteByAudienceId()` |
| Remove users from audience | DELETE | `/messenger/1/audiences/{audienceId}/users` | `Messenger\Resource1\Audiences\ByAudienceId\Users::delete()` |
| Upload users to audience | POST | `/messenger/1/audiences/{audienceId}/users` | `Messenger\Resource1\Audiences\ByAudienceId\Users::post()` |
| Get campaigns | GET | `/messenger/1/campaigns` | `Messenger\Resource1\Campaigns::get()` |
| Create campaign | POST | `/messenger/1/campaigns` | `Messenger\Resource1\Campaigns::post()` |
| Delete campaign | DELETE | `/messenger/1/campaigns/{campaignId}` | `Messenger\Resource1\Campaigns::deleteByCampaignId()` |
| Get outbound Messenger message logs | GET | `/messenger/1/logs` | `Messenger\Resource1\Logs::get()` |
| Send a Messenger message | POST | `/messenger/1/messages` | `Messenger\Resource1\Messages::post()` |
| Get marketing subscriptions | GET | `/messenger/1/pages/{pageId}/subscriptions` | `Messenger\Resource1\Pages\ByPageId\Subscriptions::get()` |
| Delete marketing subscription | DELETE | `/messenger/1/pages/{pageId}/subscriptions/{notificationMessagesToken}` | `Messenger\Resource1\Pages\ByPageId\Subscriptions::deleteByNotificationMessagesToken()` |
| Get Messenger delivery reports | GET | `/messenger/1/reports` | `Messenger\Resource1\Reports::get()` |
| Query aggregated traffic data | POST | `/metrics/1/query-aggregate-data` | `Metrics\Resource1\QueryAggregateData::post()` |
| Get status of query aggregate data request | GET | `/metrics/1/requests/{requestId}` | `Metrics\Resource1\Requests::getByRequestId()` |
| National Identity Number check | POST | `/mi/national-identity-number/1/check` | `Mi\NationalIdentityNumber\Resource1\Check::post()` |
| Number Intelligence | POST | `/mi/number-intelligence/1/query` | `Mi\NumberIntelligence\Resource1\Query::post()` |
| SIM Swap | POST | `/mi/simswap/1/check` | `Mi\Simswap\Resource1\Check::post()` |
| Silent Mobile Verification | POST | `/mi/verification/1/verify` | `Mi\Verification\Resource1\Verify::post()` |
| Advanced Silent Mobile Verification | POST | `/mi/verification/1/verify/advanced` | `Mi\Verification\Resource1\Verify\Advanced::post()` |
| Synchronous Silent Mobile Verification | POST | `/mi/verification/1/verify/synchronous` | `Mi\Verification\Resource1\Verify\Synchronous::post()` |
| Zero rated request verify | POST | `/mi/verification/1/verify/zero-rated` | `Mi\Verification\Resource1\Verify\ZeroRated::post()` |
| Zero rated request initialization | POST | `/mi/verification/1/zero-rated/init` | `Mi\Verification\Resource1\ZeroRated\Init::post()` |
| Send MMS message | POST | `/mms/1/advanced` | `Mms\Resource1\Advanced::post()` |
| Upload binary content | POST | `/mms/1/content` | `Mms\Resource1\Content::post()` |
| Get inbound MMS messages | GET | `/mms/1/inbox/reports` | `Mms\Resource1\Inbox\Reports::get()` |
| Get MMS message logs | GET | `/mms/2/logs` | `Mms\Resource2\Logs::get()` |
| Send MMS messages | POST | `/mms/2/messages` | `Mms\Resource2\Messages::post()` |
| Get MMS delivery reports | GET | `/mms/2/reports` | `Mms\Resource2\Reports::get()` |
| Add participants to flow | POST | `/moments/1/flows/{campaignId}/participants` | `Moments\Resource1\Flows\ByCampaignId\Participants::post()` |
| Get a report on participants added to flow | GET | `/moments/1/flows/{campaignId}/participants/report` | `Moments\Resource1\Flows\ByCampaignId\Participants\Report::get()` |
| Get Network Reports metadata | GET | `/number-activation-state/1/network-reports` | `NumberActivationState\Resource1\NetworkReports::get()` |
| Get Network Report content | GET | `/number-activation-state/1/network-reports/{reportId}/records` | `NumberActivationState\Resource1\NetworkReports\ByReportId\Records::get()` |
| Submit Campaign Info for AI Review | POST | `/number-registration/1/automatic-review` | `NumberRegistration\Resource1\AutomaticReview::post()` |
| Submit Existing Campaign for AI Review | POST | `/number-registration/1/automatic-review/campaigns/{campaignUuid}` | `NumberRegistration\Resource1\AutomaticReview\Campaigns::postByCampaignUuid()` |
| Get AI Review Results | GET | `/number-registration/1/automatic-review/{requestUuid}` | `NumberRegistration\Resource1\AutomaticReview::getByRequestUuid()` |
| Get Brands | GET | `/number-registration/1/brands` | `NumberRegistration\Resource1\Brands::get()` |
| Create Brand | POST | `/number-registration/1/brands` | `NumberRegistration\Resource1\Brands::post()` |
| Delete Brand | DELETE | `/number-registration/1/brands/{brandId}` | `NumberRegistration\Resource1\Brands::deleteByBrandId()` |
| Get Brand | GET | `/number-registration/1/brands/{brandId}` | `NumberRegistration\Resource1\Brands::getByBrandId()` |
| Update Brand | PUT | `/number-registration/1/brands/{brandId}` | `NumberRegistration\Resource1\Brands::putByBrandId()` |
| Submit Brand Identity Appeal | POST | `/number-registration/1/brands/{brandId}/appeal` | `NumberRegistration\Resource1\Brands\ByBrandId\Appeal::post()` |
| Get Brand Appeals | GET | `/number-registration/1/brands/{brandId}/appeals` | `NumberRegistration\Resource1\Brands\ByBrandId\Appeals::get()` |
| Request Brand Authentication+ Verification | POST | `/number-registration/1/brands/{brandId}/brand-auth-verification` | `NumberRegistration\Resource1\Brands\ByBrandId\BrandAuthVerification::post()` |
| Register Brand | POST | `/number-registration/1/brands/{brandId}/register` | `NumberRegistration\Resource1\Brands\ByBrandId\Register::post()` |
| Get Brand Registrar Statuses | GET | `/number-registration/1/brands/{brandId}/registrar-statuses` | `NumberRegistration\Resource1\Brands\ByBrandId\RegistrarStatuses::get()` |
| Resend 2FA Email For Brand Authentication | POST | `/number-registration/1/brands/{brandId}/resend2fa` | `NumberRegistration\Resource1\Brands\ByBrandId\Resend2fa::post()` |
| Get Brand Vets | GET | `/number-registration/1/brands/{brandId}/vets` | `NumberRegistration\Resource1\Brands\ByBrandId\Vets::get()` |
| Vet Brand | POST | `/number-registration/1/brands/{brandId}/vets` | `NumberRegistration\Resource1\Brands\ByBrandId\Vets::post()` |
| Import Existing Brand Vet | PUT | `/number-registration/1/brands/{brandId}/vets/import` | `NumberRegistration\Resource1\Brands\ByBrandId\Vets\Import::put()` |
| Get Brand Vet | GET | `/number-registration/1/brands/{brandId}/vets/{vetId}` | `NumberRegistration\Resource1\Brands\ByBrandId\Vets::getByVetId()` |
| Update Brand Vet | PUT | `/number-registration/1/brands/{brandId}/vets/{vetId}` | `NumberRegistration\Resource1\Brands\ByBrandId\Vets::putByVetId()` |
| Get Brand Enhanced Vet Report | GET | `/number-registration/1/brands/{brandId}/vets/{vetId}/report` | `NumberRegistration\Resource1\Brands\ByBrandId\Vets\ByVetId\Report::get()` |
| Start Campaign Builder | POST | `/number-registration/1/campaign-builder` | `NumberRegistration\Resource1\CampaignBuilder::post()` |
| Get Campaign Builder Results | GET | `/number-registration/1/campaign-builder/{requestUuid}` | `NumberRegistration\Resource1\CampaignBuilder::getByRequestUuid()` |
| Get Campaigns | GET | `/number-registration/1/campaigns` | `NumberRegistration\Resource1\Campaigns::get()` |
| Create Campaign | POST | `/number-registration/1/campaigns` | `NumberRegistration\Resource1\Campaigns::post()` |
| Get Campaign Priorities | GET | `/number-registration/1/campaigns/priorities` | `NumberRegistration\Resource1\Campaigns\Priorities::get()` |
| Create Toll Free Campaign | POST | `/number-registration/1/campaigns/toll-free` | `NumberRegistration\Resource1\Campaigns\TollFree::post()` |
| Delete Campaign | DELETE | `/number-registration/1/campaigns/{campaignId}` | `NumberRegistration\Resource1\Campaigns::deleteByCampaignId()` |
| Get Campaign | GET | `/number-registration/1/campaigns/{campaignId}` | `NumberRegistration\Resource1\Campaigns::getByCampaignId()` |
| Update Campaign | PUT | `/number-registration/1/campaigns/{campaignId}` | `NumberRegistration\Resource1\Campaigns::putByCampaignId()` |
| Add Numbers to Registered Campaign | POST | `/number-registration/1/campaigns/{campaignId}/add-numbers` | `NumberRegistration\Resource1\Campaigns\ByCampaignId\AddNumbers::post()` |
| Appeal Campaign | POST | `/number-registration/1/campaigns/{campaignId}/appeal` | `NumberRegistration\Resource1\Campaigns\ByCampaignId\Appeal::post()` |
| Deregister Campaign | POST | `/number-registration/1/campaigns/{campaignId}/deregister` | `NumberRegistration\Resource1\Campaigns\ByCampaignId\Deregister::post()` |
| Get Campaign Network Statuses | GET | `/number-registration/1/campaigns/{campaignId}/network-statuses` | `NumberRegistration\Resource1\Campaigns\ByCampaignId\NetworkStatuses::get()` |
| Attach Number Pool to Campaign | POST | `/number-registration/1/campaigns/{campaignId}/number-pool/attach` | `NumberRegistration\Resource1\Campaigns\ByCampaignId\NumberPool\Attach::post()` |
| Detach Number Pool from Campaign | POST | `/number-registration/1/campaigns/{campaignId}/number-pool/detach` | `NumberRegistration\Resource1\Campaigns\ByCampaignId\NumberPool\Detach::post()` |
| Get Campaign numbers | GET | `/number-registration/1/campaigns/{campaignId}/numbers` | `NumberRegistration\Resource1\Campaigns\ByCampaignId\Numbers::get()` |
| Submit Campaign | POST | `/number-registration/1/campaigns/{campaignId}/register` | `NumberRegistration\Resource1\Campaigns\ByCampaignId\Register::post()` |
| Remove Numbers from Registered Campaign | POST | `/number-registration/1/campaigns/{campaignId}/remove-numbers` | `NumberRegistration\Resource1\Campaigns\ByCampaignId\RemoveNumbers::post()` |
| Update Registered Campaign | POST | `/number-registration/1/campaigns/{campaignId}/update-registration` | `NumberRegistration\Resource1\Campaigns\ByCampaignId\UpdateRegistration::post()` |
| Upload Document | POST | `/number-registration/1/documents` | `NumberRegistration\Resource1\Documents::post()` |
| Download Document | GET | `/number-registration/1/documents/{documentId}` | `NumberRegistration\Resource1\Documents::getByDocumentId()` |
| Get Document Metadata | GET | `/number-registration/1/documents/{documentId}/metadata` | `NumberRegistration\Resource1\Documents\ByDocumentId\Metadata::get()` |
| Get Owned Number Pools | GET | `/number-registration/1/number-pools` | `NumberRegistration\Resource1\NumberPools::get()` |
| Get businesses | GET | `/number-reputation/1/businesses` | `NumberReputation\Resource1\Businesses::get()` |
| Register a new business | POST | `/number-reputation/1/businesses` | `NumberReputation\Resource1\Businesses::post()` |
| Remove access to a business | DELETE | `/number-reputation/1/businesses/{businessId}` | `NumberReputation\Resource1\Businesses::deleteByBusinessId()` |
| Get business | GET | `/number-reputation/1/businesses/{businessId}` | `NumberReputation\Resource1\Businesses::getByBusinessId()` |
| Update business registration info | PUT | `/number-reputation/1/businesses/{businessId}` | `NumberReputation\Resource1\Businesses::putByBusinessId()` |
| Remove phone numbers | DELETE | `/number-reputation/1/businesses/{businessId}/numbers` | `NumberReputation\Resource1\Businesses\ByBusinessId\Numbers::delete()` |
| Get business phone numbers | GET | `/number-reputation/1/businesses/{businessId}/numbers` | `NumberReputation\Resource1\Businesses\ByBusinessId\Numbers::get()` |
| Register phone numbers | POST | `/number-reputation/1/businesses/{businessId}/numbers` | `NumberReputation\Resource1\Businesses\ByBusinessId\Numbers::post()` |
| Get phone number registration jobs | GET | `/number-reputation/1/businesses/{businessId}/numbers/jobs` | `NumberReputation\Resource1\Businesses\ByBusinessId\Numbers\Jobs::get()` |
| Get phone numbers (cross-business) | GET | `/number-reputation/1/numbers` | `NumberReputation\Resource1\Numbers::get()` |
| Check reputation for phone numbers | POST | `/number-reputation/1/reputation` | `NumberReputation\Resource1\Reputation::post()` |
| Query phone number attributes | POST | `/number-risk-score/1/query` | `NumberRiskScore\Resource1\Query::post()` |
| Get Number Context logs | GET | `/number/1/logs` | `Number\Resource1\Logs::get()` |
| Number Context lookup (async) | POST | `/number/1/notify` | `Number\Resource1\Notify::post()` |
| Number Context lookup | POST | `/number/1/query` | `Number\Resource1\Query::post()` |
| List owned numbers | GET | `/numbers/1/numbers` | `Numbers\Resource1\Numbers::get()` |
| Purchase number | POST | `/numbers/1/numbers` | `Numbers\Resource1\Numbers::post()` |
| Get available numbers | GET | `/numbers/1/numbers/available` | `Numbers\Resource1\Numbers\Available::get()` |
| Cancel number | DELETE | `/numbers/1/numbers/{numberKey}` | `Numbers\Resource1\Numbers::deleteByNumberKey()` |
| Get single owned number | GET | `/numbers/1/numbers/{numberKey}` | `Numbers\Resource1\Numbers::getByNumberKey()` |
| Update owned number | PUT | `/numbers/1/numbers/{numberKey}` | `Numbers\Resource1\Numbers::putByNumberKey()` |
| Get all number MMS configurations | GET | `/numbers/2/numbers/{numberKey}/mms` | `Numbers\Resource2\Numbers\ByNumberKey\Mms::get()` |
| Create number MMS configuration | POST | `/numbers/2/numbers/{numberKey}/mms` | `Numbers\Resource2\Numbers\ByNumberKey\Mms::post()` |
| Delete number MMS configuration | DELETE | `/numbers/2/numbers/{numberKey}/mms/{configurationKey}` | `Numbers\Resource2\Numbers\ByNumberKey\Mms::deleteByConfigurationKey()` |
| Get number MMS configuration | GET | `/numbers/2/numbers/{numberKey}/mms/{configurationKey}` | `Numbers\Resource2\Numbers\ByNumberKey\Mms::getByConfigurationKey()` |
| Update number MMS configuration | PUT | `/numbers/2/numbers/{numberKey}/mms/{configurationKey}` | `Numbers\Resource2\Numbers\ByNumberKey\Mms::putByConfigurationKey()` |
| Get all number configurations | GET | `/numbers/2/numbers/{numberKey}/sms` | `Numbers\Resource2\Numbers\ByNumberKey\Sms::get()` |
| Create number configuration | POST | `/numbers/2/numbers/{numberKey}/sms` | `Numbers\Resource2\Numbers\ByNumberKey\Sms::post()` |
| Update number configuration | PUT | `/numbers/2/numbers/{numberKey}/sms` | `Numbers\Resource2\Numbers\ByNumberKey\Sms::put()` |
| Delete number configuration | DELETE | `/numbers/2/numbers/{numberKey}/sms/{configurationKey}` | `Numbers\Resource2\Numbers\ByNumberKey\Sms::deleteByConfigurationKey()` |
| Get single number configuration | GET | `/numbers/2/numbers/{numberKey}/sms/{configurationKey}` | `Numbers\Resource2\Numbers\ByNumberKey\Sms::getByConfigurationKey()` |
| Delete voice setup on number | DELETE | `/numbers/2/numbers/{numberKey}/voice` | `Numbers\Resource2\Numbers\ByNumberKey\Voice::delete()` |
| Get voice setup on number | GET | `/numbers/2/numbers/{numberKey}/voice` | `Numbers\Resource2\Numbers\ByNumberKey\Voice::get()` |
| Create voice setup on number | POST | `/numbers/2/numbers/{numberKey}/voice` | `Numbers\Resource2\Numbers\ByNumberKey\Voice::post()` |
| Update voice setup on number | PUT | `/numbers/2/numbers/{numberKey}/voice` | `Numbers\Resource2\Numbers\ByNumberKey\Voice::put()` |
| Delete CNAM | DELETE | `/numbers/2/numbers/{numberKey}/voice/cnam` | `Numbers\Resource2\Numbers\ByNumberKey\Voice\Cnam::delete()` |
| Get CNAM | GET | `/numbers/2/numbers/{numberKey}/voice/cnam` | `Numbers\Resource2\Numbers\ByNumberKey\Voice\Cnam::get()` |
| Create CNAM | POST | `/numbers/2/numbers/{numberKey}/voice/cnam` | `Numbers\Resource2\Numbers\ByNumberKey\Voice\Cnam::post()` |
| Update CNAM | PUT | `/numbers/2/numbers/{numberKey}/voice/cnam` | `Numbers\Resource2\Numbers\ByNumberKey\Voice\Cnam::put()` |
| Get CNAM status | GET | `/numbers/2/numbers/{numberKey}/voice/cnam/status` | `Numbers\Resource2\Numbers\ByNumberKey\Voice\Cnam\Status::get()` |
| Delete Emergency Service Address | DELETE | `/numbers/2/numbers/{numberKey}/voice/emergency-service` | `Numbers\Resource2\Numbers\ByNumberKey\Voice\EmergencyService::delete()` |
| Get Emergency Service Address | GET | `/numbers/2/numbers/{numberKey}/voice/emergency-service` | `Numbers\Resource2\Numbers\ByNumberKey\Voice\EmergencyService::get()` |
| Create Emergency Service Address | POST | `/numbers/2/numbers/{numberKey}/voice/emergency-service` | `Numbers\Resource2\Numbers\ByNumberKey\Voice\EmergencyService::post()` |
| Update Emergency Service Address | PUT | `/numbers/2/numbers/{numberKey}/voice/emergency-service` | `Numbers\Resource2\Numbers\ByNumberKey\Voice\EmergencyService::put()` |
| Get Emergency Service Address status | GET | `/numbers/2/numbers/{numberKey}/voice/emergency-service/status` | `Numbers\Resource2\Numbers\ByNumberKey\Voice\EmergencyService\Status::get()` |
| Validate Emergency Service Address | POST | `/numbers/2/numbers/{numberKey}/voice/emergency-service/validate-address` | `Numbers\Resource2\Numbers\ByNumberKey\Voice\EmergencyService\ValidateAddress::post()` |
| Send OMNI failover message | POST | `/omni/1/advanced` | `Omni\Resource1\Advanced::post()` |
| Get OMNI failover message logs | GET | `/omni/1/logs` | `Omni\Resource1\Logs::get()` |
| Get OMNI failover delivery reports | GET | `/omni/1/reports` | `Omni\Resource1\Reports::get()` |
| List all OMNI failover scenarios | GET | `/omni/1/scenarios` | `Omni\Resource1\Scenarios::get()` |
| Create new OMNI failover scenario | POST | `/omni/1/scenarios` | `Omni\Resource1\Scenarios::post()` |
| Get specific OMNI failover scenario | GET | `/omni/1/scenarios/{scenarioKey}` | `Omni\Resource1\Scenarios::getByScenarioKey()` |
| Update OMNI failover scenario | PUT | `/omni/1/scenarios/{scenarioKey}` | `Omni\Resource1\Scenarios::putByScenarioKey()` |
| Send Open Channel inbound message | POST | `/open-channel/1/messages/inbound` | `OpenChannel\Resource1\Messages\Inbound::post()` |
| Send RCS message | POST | `/ott/rcs/1/message` | `Ott\Rcs\Resource1\Message::post()` |
| Send bulk RCS message | POST | `/ott/rcs/1/message/bulk` | `Ott\Rcs\Resource1\Message\Bulk::post()` |
| Send RCS template message | POST | `/ott/rcs/1/message/template` | `Ott\Rcs\Resource1\Message\Template::post()` |
| Send bulk RCS template message | POST | `/ott/rcs/1/message/template/bulk` | `Ott\Rcs\Resource1\Message\Template\Bulk::post()` |
| Delete a company | DELETE | `/people/2/companies` | `People\Resource2\Companies::delete()` |
| Get a single company or a list of companies | GET | `/people/2/companies` | `People\Resource2\Companies::get()` |
| Partial company update | PATCH | `/people/2/companies` | `People\Resource2\Companies::patch()` |
| Create a new company | POST | `/people/2/companies` | `People\Resource2\Companies::post()` |
| Batch companies delete | DELETE | `/people/2/companies/batch` | `People\Resource2\Companies\Batch::delete()` |
| Batch companies update | PATCH | `/people/2/companies/batch` | `People\Resource2\Companies\Batch::patch()` |
| Batch companies create | POST | `/people/2/companies/batch` | `People\Resource2\Companies\Batch::post()` |
| Remove persons from company batch | DELETE | `/people/2/companies/persons` | `People\Resource2\Companies\Persons::delete()` |
| Add persons to company batch | PATCH | `/people/2/companies/persons` | `People\Resource2\Companies\Persons::patch()` |
| Get push device registration | GET | `/people/2/contactInformation/push/{pushRegId}` | `People\Resource2\ContactInformation\Push::getByPushRegId()` |
| Update push device registration | PATCH | `/people/2/contactInformation/push/{pushRegId}` | `People\Resource2\ContactInformation\Push::patchByPushRegId()` |
| Depersonalize push instance | POST | `/people/2/contactInformation/push/{pushRegId}/depersonalize` | `People\Resource2\ContactInformation\Push\ByPushRegId\Depersonalize::post()` |
| Personalize push instance | POST | `/people/2/contactInformation/push/{pushRegId}/personalize` | `People\Resource2\ContactInformation\Push\ByPushRegId\Personalize::post()` |
| Get a list of custom attributes | GET | `/people/2/customAttributes` | `People\Resource2\CustomAttributes::get()` |
| Create a custom attribute | POST | `/people/2/customAttributes` | `People\Resource2\CustomAttributes::post()` |
| Delete a custom attribute | DELETE | `/people/2/customAttributes/{name}` | `People\Resource2\CustomAttributes::deleteByName()` |
| Get a single custom attribute | GET | `/people/2/customAttributes/{name}` | `People\Resource2\CustomAttributes::getByName()` |
| Append item to custom attribute | POST | `/people/2/customAttributes/{name}/append` | `People\Resource2\CustomAttributes\ByName\Append::post()` |
| Delete a person | DELETE | `/people/2/persons` | `People\Resource2\Persons::delete()` |
| Get a single person or a list of people | GET | `/people/2/persons` | `People\Resource2\Persons::get()` |
| Partial person update | PATCH | `/people/2/persons` | `People\Resource2\Persons::patch()` |
| Create a new person | POST | `/people/2/persons` | `People\Resource2\Persons::post()` |
| Update a person | PUT | `/people/2/persons` | `People\Resource2\Persons::put()` |
| Batch people delete | DELETE | `/people/2/persons/batch` | `People\Resource2\Persons\Batch::delete()` |
| Batch people update | PATCH | `/people/2/persons/batch` | `People\Resource2\Persons\Batch::patch()` |
| Batch people create | POST | `/people/2/persons/batch` | `People\Resource2\Persons\Batch::post()` |
| Delete contact information from person | DELETE | `/people/2/persons/contactInformation` | `People\Resource2\Persons\ContactInformation::delete()` |
| Add contact information to person | PATCH | `/people/2/persons/contactInformation` | `People\Resource2\Persons\ContactInformation::patch()` |
| Set contact information to person | PUT | `/people/2/persons/contactInformation` | `People\Resource2\Persons\ContactInformation::put()` |
| Match profiles | POST | `/people/2/persons/match` | `People\Resource2\Persons\MatchResource::post()` |
| Delete lists | DELETE | `/people/2/persons/{personId}/lists` | `People\Resource2\Persons\ByPersonId\Lists::delete()` |
| Get lists | GET | `/people/2/persons/{personId}/lists` | `People\Resource2\Persons\ByPersonId\Lists::get()` |
| Update a list | PATCH | `/people/2/persons/{personId}/lists/{listName}` | `People\Resource2\Persons\ByPersonId\Lists::patchByListName()` |
| Replace a list | PUT | `/people/2/persons/{personId}/lists/{listName}` | `People\Resource2\Persons\ByPersonId\Lists::putByListName()` |
| Delete items | DELETE | `/people/2/persons/{personId}/lists/{listName}/items` | `People\Resource2\Persons\ByPersonId\Lists\ByListName\Items::delete()` |
| Get items | GET | `/people/2/persons/{personId}/lists/{listName}/items` | `People\Resource2\Persons\ByPersonId\Lists\ByListName\Items::get()` |
| Append items | POST | `/people/2/persons/{personId}/lists/{listName}/items` | `People\Resource2\Persons\ByPersonId\Lists\ByListName\Items::post()` |
| Update an item | PATCH | `/people/2/persons/{personId}/lists/{listName}/items/{itemId}` | `People\Resource2\Persons\ByPersonId\Lists\ByListName\Items::patchByItemId()` |
| Replace an item | PUT | `/people/2/persons/{personId}/lists/{listName}/items/{itemId}` | `People\Resource2\Persons\ByPersonId\Lists\ByListName\Items::putByItemId()` |
| Get list of tags | GET | `/people/2/tags` | `People\Resource2\Tags::get()` |
| Create a new tag | POST | `/people/2/tags` | `People\Resource2\Tags::post()` |
| Delete a tag | DELETE | `/people/2/tags/{name}` | `People\Resource2\Tags::deleteByName()` |
| Get a tag | GET | `/people/2/tags/{name}` | `People\Resource2\Tags::getByName()` |
| Remove tag from people batch | DELETE | `/people/2/tags/{name}/persons` | `People\Resource2\Tags\ByName\Persons::delete()` |
| Add tag to people batch | PATCH | `/people/2/tags/{name}/persons` | `People\Resource2\Tags\ByName\Persons::patch()` |
| Batch Send Events | POST | `/people/3/events` | `People\Resource3\Events::post()` |
| Delete lists | DELETE | `/people/3/lists` | `People\Resource3\Lists::delete()` |
| Get lists | GET | `/people/3/lists` | `People\Resource3\Lists::get()` |
| Update a list | PATCH | `/people/3/lists/{listName}` | `People\Resource3\Lists::patchByListName()` |
| Replace a list | PUT | `/people/3/lists/{listName}` | `People\Resource3\Lists::putByListName()` |
| Delete items | DELETE | `/people/3/lists/{listName}/items` | `People\Resource3\Lists\ByListName\Items::delete()` |
| Get items | GET | `/people/3/lists/{listName}/items` | `People\Resource3\Lists\ByListName\Items::get()` |
| Append items | POST | `/people/3/lists/{listName}/items` | `People\Resource3\Lists\ByListName\Items::post()` |
| Update an item | PATCH | `/people/3/lists/{listName}/items/{itemId}` | `People\Resource3\Lists\ByListName\Items::patchByItemId()` |
| Replace an item | PUT | `/people/3/lists/{listName}/items/{itemId}` | `People\Resource3\Lists\ByListName\Items::putByItemId()` |
| Batch merge profiles | POST | `/people/3/persons/merge` | `People\Resource3\Persons\Merge::post()` |
| Batch partial people upsert | PATCH | `/people/3/persons/upsert` | `People\Resource3\Persons\Upsert::patch()` |
| Batch full people upsert | PUT | `/people/3/persons/upsert` | `People\Resource3\Persons\Upsert::put()` |
| Get a list of segments | GET | `/people/3/segments` | `People\Resource3\Segments::get()` |
| Create a segment | POST | `/people/3/segments` | `People\Resource3\Segments::post()` |
| Delete a segment | DELETE | `/people/3/segments/{segmentId}` | `People\Resource3\Segments::deleteBySegmentId()` |
| Get a segment | GET | `/people/3/segments/{segmentId}` | `People\Resource3\Segments::getBySegmentId()` |
| Update a segment | PUT | `/people/3/segments/{segmentId}` | `People\Resource3\Segments::putBySegmentId()` |
| Get persons in a segment | GET | `/people/3/segments/{segmentId}/persons` | `People\Resource3\Segments\BySegmentId\Persons::get()` |
| Submit event export request | POST | `/peopleevents/1/export` | `Peopleevents\Resource1\Export::post()` |
| Get list of event definitions | GET | `/peopleevents/1/export/definitions` | `Peopleevents\Resource1\Export\Definitions::get()` |
| Check status of event export request | GET | `/peopleevents/1/export/status/{requestId}` | `Peopleevents\Resource1\Export\Status::getByRequestId()` |
| Asynchronous cancellation of an event export request | DELETE | `/peopleevents/1/export/{requestId}` | `Peopleevents\Resource1\Export::deleteByRequestId()` |
| List Event Definitions | GET | `/peopleevents/2/definitions` | `Peopleevents\Resource2\Definitions::get()` |
| Create Event Definition | POST | `/peopleevents/2/definitions` | `Peopleevents\Resource2\Definitions::post()` |
| Get Event Definition | GET | `/peopleevents/2/definitions/{definitionId}` | `Peopleevents\Resource2\Definitions::getByDefinitionId()` |
| Update Event Definition | POST | `/peopleevents/2/definitions/{definitionId}` | `Peopleevents\Resource2\Definitions::postByDefinitionId()` |
| Send Event | POST | `/peopleevents/2/persons/{personId}/definitions/{definitionId}/events` | `Peopleevents\Resource2\Persons\ByPersonId\Definitions\ByDefinitionId\Events::post()` |
| Delete blocklists | DELETE | `/platform/1/blocklists` | `Platform\Resource1\Blocklists::delete()` |
| Get all blocklists | GET | `/platform/1/blocklists` | `Platform\Resource1\Blocklists::get()` |
| Create blocklists | POST | `/platform/1/blocklists` | `Platform\Resource1\Blocklists::post()` |
| Get OpenAPI Specification | GET | `/platform/1/openapi` | `Platform\Resource1\Openapi::get()` |
| Get a list of available products | GET | `/platform/1/openapi/available-products` | `Platform\Resource1\Openapi\AvailableProducts::get()` |
| Get OpenAPI Specification for a specific product | GET | `/platform/1/openapi/{product}` | `Platform\Resource1\Openapi::getByProduct()` |
| Get applications | GET | `/provisioning/1/applications` | `Provisioning\Resource1\Applications::get()` |
| Create application | POST | `/provisioning/1/applications` | `Provisioning\Resource1\Applications::post()` |
| Delete application | DELETE | `/provisioning/1/applications/{applicationId}` | `Provisioning\Resource1\Applications::deleteByApplicationId()` |
| Get application | GET | `/provisioning/1/applications/{applicationId}` | `Provisioning\Resource1\Applications::getByApplicationId()` |
| Modify application | PUT | `/provisioning/1/applications/{applicationId}` | `Provisioning\Resource1\Applications::putByApplicationId()` |
| Delete resource association | DELETE | `/provisioning/1/associations` | `Provisioning\Resource1\Associations::delete()` |
| Get resource associations | GET | `/provisioning/1/associations` | `Provisioning\Resource1\Associations::get()` |
| Create resource association | POST | `/provisioning/1/associations` | `Provisioning\Resource1\Associations::post()` |
| Get resource association | GET | `/provisioning/1/associations/single` | `Provisioning\Resource1\Associations\Single::get()` |
| Get entities | GET | `/provisioning/1/entities` | `Provisioning\Resource1\Entities::get()` |
| Create entity | POST | `/provisioning/1/entities` | `Provisioning\Resource1\Entities::post()` |
| Delete entity | DELETE | `/provisioning/1/entities/{entityId}` | `Provisioning\Resource1\Entities::deleteByEntityId()` |
| Get entity | GET | `/provisioning/1/entities/{entityId}` | `Provisioning\Resource1\Entities::getByEntityId()` |
| Modify entity | PUT | `/provisioning/1/entities/{entityId}` | `Provisioning\Resource1\Entities::putByEntityId()` |
| Get sending strategies | GET | `/provisioning/2/sending-strategies` | `Provisioning\Resource2\SendingStrategies::get()` |
| Create sending strategy | POST | `/provisioning/2/sending-strategies` | `Provisioning\Resource2\SendingStrategies::post()` |
| Delete sending strategy by sending strategy id | DELETE | `/provisioning/2/sending-strategies/{sendingStrategyId}` | `Provisioning\Resource2\SendingStrategies::deleteBySendingStrategyId()` |
| Get push applications | GET | `/push/1/applications` | `Push\Resource1\Applications::get()` |
| Get push Application by applicationCode | GET | `/push/1/applications/{applicationCode}` | `Push\Resource1\Applications::getByApplicationCode()` |
| List all configurations | GET | `/push/1/applications/{applicationCode}/configurations` | `Push\Resource1\Applications\ByApplicationCode\Configurations::get()` |
| Create a new configuration | POST | `/push/1/applications/{applicationCode}/configurations` | `Push\Resource1\Applications\ByApplicationCode\Configurations::post()` |
| Delete the configuration | DELETE | `/push/1/applications/{applicationCode}/configurations/{configurationKey}` | `Push\Resource1\Applications\ByApplicationCode\Configurations::deleteByConfigurationKey()` |
| Get a single configuration | GET | `/push/1/applications/{applicationCode}/configurations/{configurationKey}` | `Push\Resource1\Applications\ByApplicationCode\Configurations::getByConfigurationKey()` |
| List all actions | GET | `/push/1/applications/{applicationCode}/configurations/{configurationKey}/actions` | `Push\Resource1\Applications\ByApplicationCode\Configurations\ByConfigurationKey\Actions::get()` |
| Create new action | POST | `/push/1/applications/{applicationCode}/configurations/{configurationKey}/actions` | `Push\Resource1\Applications\ByApplicationCode\Configurations\ByConfigurationKey\Actions::post()` |
| Delete action | DELETE | `/push/1/applications/{applicationCode}/configurations/{configurationKey}/actions/{actionKey}` | `Push\Resource1\Applications\ByApplicationCode\Configurations\ByConfigurationKey\Actions::deleteByActionKey()` |
| Delete Push Inbox messages | DELETE | `/push/1/inbox/messages` | `Push\Resource1\Inbox\Messages::delete()` |
| Receive MO Push messages | GET | `/push/1/inbox/reports` | `Push\Resource1\Inbox\Reports::get()` |
| Get Push reports | GET | `/push/1/reports` | `Push\Resource1\Reports::get()` |
| Get Push statistics | GET | `/push/1/statistics` | `Push\Resource1\Statistics::get()` |
| Delete Push Inbox message for a specific user | DELETE | `/push/1/user/{externalUserId}/inbox/messages` | `Push\Resource1\User\ByExternalUserId\Inbox\Messages::delete()` |
| Send multiple Push notifications | POST | `/push/2/message/multi` | `Push\Resource2\Message\Multi::post()` |
| Send single Push notification | POST | `/push/2/message/single` | `Push\Resource2\Message\Single::post()` |
| Get Push message logs | GET | `/push/3/logs` | `Push\Resource3\Logs::get()` |
| Send Push notifications | POST | `/push/3/messages` | `Push\Resource3\Messages::post()` |
| Get Push delivery reports | GET | `/push/3/reports` | `Push\Resource3\Reports::get()` |
| Send RCS events | POST | `/rcs/1/events` | `Rcs\Resource1\Events::post()` |
| Get RCS senders | GET | `/rcs/1/senders` | `Rcs\Resource1\Senders::get()` |
| Create an RCS sender | POST | `/rcs/1/senders` | `Rcs\Resource1\Senders::post()` |
| Get RCS available providers | GET | `/rcs/1/senders/providers` | `Rcs\Resource1\Senders\Providers::get()` |
| Get RCS sender | GET | `/rcs/1/senders/{senderName}` | `Rcs\Resource1\Senders::getBySenderName()` |
| Update an RCS sender | PUT | `/rcs/1/senders/{senderName}` | `Rcs\Resource1\Senders::putBySenderName()` |
| Get RCS sender launch status | GET | `/rcs/1/senders/{senderName}/launch-status` | `Rcs\Resource1\Senders\BySenderName\LaunchStatus::get()` |
| Update RCS sender platform parameters | PATCH | `/rcs/1/senders/{senderName}/platform-parameters` | `Rcs\Resource1\Senders\BySenderName\PlatformParameters::patch()` |
| Get RCS test numbers | GET | `/rcs/1/senders/{senderName}/test-numbers` | `Rcs\Resource1\Senders\BySenderName\TestNumbers::get()` |
| Add RCS test number | POST | `/rcs/1/senders/{senderName}/test-numbers` | `Rcs\Resource1\Senders\BySenderName\TestNumbers::post()` |
| Get RCS test number | GET | `/rcs/1/senders/{senderName}/test-numbers/{testNumber}` | `Rcs\Resource1\Senders\BySenderName\TestNumbers::getByTestNumber()` |
| Update primary flag of RCS test number | PATCH | `/rcs/1/senders/{senderName}/test-numbers/{testNumber}` | `Rcs\Resource1\Senders\BySenderName\TestNumbers::patchByTestNumber()` |
| Refresh RCS test number | PUT | `/rcs/1/senders/{senderName}/test-numbers/{testNumber}/refresh` | `Rcs\Resource1\Senders\BySenderName\TestNumbers\ByTestNumber\Refresh::put()` |
| Get RCS templates | GET | `/rcs/1/senders/{sender}/templates` | `Rcs\Resource1\Senders\BySender\Templates::get()` |
| Create an RCS template | POST | `/rcs/1/senders/{sender}/templates` | `Rcs\Resource1\Senders\BySender\Templates::post()` |
| Delete an RCS template | DELETE | `/rcs/1/senders/{sender}/templates/{templateName}` | `Rcs\Resource1\Senders\BySender\Templates::deleteByTemplateName()` |
| Get RCS template | GET | `/rcs/1/senders/{sender}/templates/{templateName}` | `Rcs\Resource1\Senders\BySender\Templates::getByTemplateName()` |
| Create an RCS template | POST | `/rcs/1/senders/{sender}/templates/{templateName}` | `Rcs\Resource1\Senders\BySender\Templates::postByTemplateName()` |
| Edit an RCS template | PUT | `/rcs/1/senders/{sender}/templates/{templateName}` | `Rcs\Resource1\Senders\BySender\Templates::putByTemplateName()` |
| Register an RCS template | PATCH | `/rcs/1/senders/{sender}/templates/{templateName}/register` | `Rcs\Resource1\Senders\BySender\Templates\ByTemplateName\Register::patch()` |
| Get RCS template status | GET | `/rcs/1/senders/{sender}/templates/{templateName}/status` | `Rcs\Resource1\Senders\BySender\Templates\ByTemplateName\Status::get()` |
| Get RCS template providers | GET | `/rcs/1/templates/template-providers` | `Rcs\Resource1\Templates\TemplateProviders::get()` |
| Check RCS capability (async) | POST | `/rcs/2/capability-check/notify` | `Rcs\Resource2\CapabilityCheck\Notify::post()` |
| Check RCS capability | POST | `/rcs/2/capability-check/query` | `Rcs\Resource2\CapabilityCheck\Query::post()` |
| Get RCS message logs | GET | `/rcs/2/logs` | `Rcs\Resource2\Logs::get()` |
| Send RCS messages | POST | `/rcs/2/messages` | `Rcs\Resource2\Messages::post()` |
| Get RCS delivery reports | GET | `/rcs/2/reports` | `Rcs\Resource2\Reports::get()` |
| Get inbound configurations | GET | `/resource-management/1/inbound-message-configurations` | `ResourceManagement\Resource1\InboundMessageConfigurations::get()` |
| Manage inbound configuration | POST | `/resource-management/1/inbound-message-configurations` | `ResourceManagement\Resource1\InboundMessageConfigurations::post()` |
| Delete inbound configuration | DELETE | `/resource-management/1/inbound-message-configurations/{configurationKey}` | `ResourceManagement\Resource1\InboundMessageConfigurations::deleteByConfigurationKey()` |
| Lookup coverage for a resource | POST | `/resources/1/coverage-lookup` | `Resources\Resource1\CoverageLookup::post()` |
| Upload document | POST | `/resources/1/documents` | `Resources\Resource1\Documents::post()` |
| Delete document | DELETE | `/resources/1/documents/{documentId}` | `Resources\Resource1\Documents::deleteByDocumentId()` |
| Download document | GET | `/resources/1/documents/{documentId}` | `Resources\Resource1\Documents::getByDocumentId()` |
| Get feedback errors | GET | `/resources/1/feedback-errors` | `Resources\Resource1\FeedbackErrors::get()` |
| Get resource requests | GET | `/resources/1/requests` | `Resources\Resource1\Requests::get()` |
| Submit resource request | POST | `/resources/1/requests` | `Resources\Resource1\Requests::post()` |
| Get resource request | GET | `/resources/1/requests/{id}` | `Resources\Resource1\Requests::getById()` |
| Update resource request | PATCH | `/resources/1/requests/{id}` | `Resources\Resource1\Requests::patchById()` |
| Cancel resource request | POST | `/resources/1/requests/{id}/cancel` | `Resources\Resource1\Requests\ById\Cancel::post()` |
| Get resource request requirements | GET | `/resources/1/requests/{id}/requirements` | `Resources\Resource1\Requests\ById\Requirements::get()` |
| Get resource requirements | POST | `/resources/1/requirements-lookup` | `Resources\Resource1\RequirementsLookup::post()` |
| Search resources | POST | `/resources/1/resources` | `Resources\Resource1\Resources::post()` |
| Get SaaS request status | GET | `/saas/1/request/{requestId}/status` | `Saas\Resource1\Request\ByRequestId\Status::get()` |
| Import SaaS resource | POST | `/saas/1/{resourceType}/import` | `Saas\Resource1\ByResourceType\Import::post()` |
| Export SaaS resource | GET | `/saas/1/{resourceType}/{resourceId}/export` | `Saas\Resource1\ByResourceType\ByResourceId\Export::get()` |
| Share SaaS resource | POST | `/saas/1/{resourceType}/{resourceId}/share` | `Saas\Resource1\ByResourceType\ByResourceId\Share::post()` |
| Get all sub accounts with filter | GET | `/settings/1/accounts` | `Settings\Resource1\Accounts::get()` |
| Update account | PUT | `/settings/1/accounts/{accountKey}` | `Settings\Resource1\Accounts::putByAccountKey()` |
| Get API keys by filter | GET | `/settings/1/accounts/{accountKey}/api-keys` | `Settings\Resource1\Accounts\ByAccountKey\ApiKeys::get()` |
| Create API key | POST | `/settings/1/accounts/{accountKey}/api-keys` | `Settings\Resource1\Accounts\ByAccountKey\ApiKeys::post()` |
| Get API key | GET | `/settings/1/accounts/{accountKey}/api-keys/{key}` | `Settings\Resource1\Accounts\ByAccountKey\ApiKeys::getByKey()` |
| Update API key | PUT | `/settings/1/accounts/{accountKey}/api-keys/{key}` | `Settings\Resource1\Accounts\ByAccountKey\ApiKeys::putByKey()` |
| Get API keys by filter | GET | `/settings/2/api-keys` | `Settings\Resource2\ApiKeys::get()` |
| Create API key | POST | `/settings/2/api-keys` | `Settings\Resource2\ApiKeys::post()` |
| Get API key | GET | `/settings/2/api-keys/{apiKeyId}` | `Settings\Resource2\ApiKeys::getByApiKeyId()` |
| Update API key | PUT | `/settings/2/api-keys/{apiKeyId}` | `Settings\Resource2\ApiKeys::putByApiKeyId()` |
| Remove phone numbers from a list | DELETE | `/signals/1/trusted-msisdns` | `Signals\Resource1\TrustedMsisdns::delete()` |
| Add phone numbers to a list | POST | `/signals/1/trusted-msisdns` | `Signals\Resource1\TrustedMsisdns::post()` |
| Check for phone numbers on a list | GET | `/signals/1/trusted-msisdns/{msisdn}/check` | `Signals\Resource1\TrustedMsisdns\ByMsisdn\Check::get()` |
| List blocking configs | GET | `/signals/2/configs/blocking` | `Signals\Resource2\Configs\Blocking::get()` |
| Update blocking configs | PATCH | `/signals/2/configs/blocking` | `Signals\Resource2\Configs\Blocking::patch()` |
| Create blocking configs | POST | `/signals/2/configs/blocking` | `Signals\Resource2\Configs\Blocking::post()` |
| Delete daily limits | DELETE | `/signals/2/configs/blocking/{configId}/daily-limits` | `Signals\Resource2\Configs\Blocking\ByConfigId\DailyLimits::delete()` |
| List daily limits | GET | `/signals/2/configs/blocking/{configId}/daily-limits` | `Signals\Resource2\Configs\Blocking\ByConfigId\DailyLimits::get()` |
| Update daily limits | PATCH | `/signals/2/configs/blocking/{configId}/daily-limits` | `Signals\Resource2\Configs\Blocking\ByConfigId\DailyLimits::patch()` |
| Create daily limits | POST | `/signals/2/configs/blocking/{configId}/daily-limits` | `Signals\Resource2\Configs\Blocking\ByConfigId\DailyLimits::post()` |
| Delete country-level blocking overrides | DELETE | `/signals/2/configs/blocking/{configId}/overrides` | `Signals\Resource2\Configs\Blocking\ByConfigId\Overrides::delete()` |
| List country-level blocking overrides | GET | `/signals/2/configs/blocking/{configId}/overrides` | `Signals\Resource2\Configs\Blocking\ByConfigId\Overrides::get()` |
| Update country-level blocking overrides | PATCH | `/signals/2/configs/blocking/{configId}/overrides` | `Signals\Resource2\Configs\Blocking\ByConfigId\Overrides::patch()` |
| Create country-level blocking overrides | POST | `/signals/2/configs/blocking/{configId}/overrides` | `Signals\Resource2\Configs\Blocking\ByConfigId\Overrides::post()` |
| Remove trusted phone numbers | DELETE | `/signals/2/configs/blocking/{configId}/trusted-numbers` | `Signals\Resource2\Configs\Blocking\ByConfigId\TrustedNumbers::delete()` |
| Add trusted phone numbers | POST | `/signals/2/configs/blocking/{configId}/trusted-numbers` | `Signals\Resource2\Configs\Blocking\ByConfigId\TrustedNumbers::post()` |
| Check if a phone number is trusted | GET | `/signals/2/configs/blocking/{configId}/trusted-numbers/{phoneNumber}` | `Signals\Resource2\Configs\Blocking\ByConfigId\TrustedNumbers::getByPhoneNumber()` |
| Get scheduled SMS messages | GET | `/sms/1/bulks` | `Sms\Resource1\Bulks::get()` |
| Reschedule SMS messages | PUT | `/sms/1/bulks` | `Sms\Resource1\Bulks::put()` |
| Get scheduled SMS messages status | GET | `/sms/1/bulks/status` | `Sms\Resource1\Bulks\Status::get()` |
| Update scheduled SMS messages status | PUT | `/sms/1/bulks/status` | `Sms\Resource1\Bulks\Status::put()` |
| Get inbound SMS messages | GET | `/sms/1/inbox/reports` | `Sms\Resource1\Inbox\Reports::get()` |
| Get outbound SMS message logs | GET | `/sms/1/logs` | `Sms\Resource1\Logs::get()` |
| Preview SMS message | POST | `/sms/1/preview` | `Sms\Resource1\Preview::post()` |
| Get outbound SMS message delivery reports | GET | `/sms/1/reports` | `Sms\Resource1\Reports::get()` |
| Send SMS message over query parameters | GET | `/sms/1/text/query` | `Sms\Resource1\Text\Query::get()` |
| Send binary SMS message | POST | `/sms/2/binary/advanced` | `Sms\Resource2\Binary\Advanced::post()` |
| Send SMS message | POST | `/sms/2/text/advanced` | `Sms\Resource2\Text\Advanced::post()` |
| Get outbound SMS message logs | GET | `/sms/3/logs` | `Sms\Resource3\Logs::get()` |
| Send SMS message | POST | `/sms/3/messages` | `Sms\Resource3\Messages::post()` |
| Get outbound SMS message delivery reports | GET | `/sms/3/reports` | `Sms\Resource3\Reports::get()` |
| Send SMS message over query parameters | GET | `/sms/3/text/query` | `Sms\Resource3\Text\Query::get()` |
| Get filtered certificate details page | GET | `/subscriptions/1/certificates` | `Subscriptions\Resource1\Certificates::get()` |
| Upload certificate | POST | `/subscriptions/1/certificates` | `Subscriptions\Resource1\Certificates::post()` |
| Get filtered certificates statuses page | GET | `/subscriptions/1/certificates/status` | `Subscriptions\Resource1\Certificates\Status::get()` |
| Get certificate status by identifier | GET | `/subscriptions/1/certificates/status/{certificateId}` | `Subscriptions\Resource1\Certificates\Status::getByCertificateId()` |
| Test connection to a webhook | POST | `/subscriptions/1/certificates/test/webhook` | `Subscriptions\Resource1\Certificates\Test\Webhook::post()` |
| Delete certificate | DELETE | `/subscriptions/1/certificates/{certificateId}` | `Subscriptions\Resource1\Certificates::deleteByCertificateId()` |
| Get certificate details by identifier | GET | `/subscriptions/1/certificates/{certificateId}` | `Subscriptions\Resource1\Certificates::getByCertificateId()` |
| Get notification profiles | GET | `/subscriptions/1/profiles` | `Subscriptions\Resource1\Profiles::get()` |
| Create notification profile | POST | `/subscriptions/1/profiles` | `Subscriptions\Resource1\Profiles::post()` |
| Delete notification profile | DELETE | `/subscriptions/1/profiles/{profileId}` | `Subscriptions\Resource1\Profiles::deleteByProfileId()` |
| Get single notification profile | GET | `/subscriptions/1/profiles/{profileId}` | `Subscriptions\Resource1\Profiles::getByProfileId()` |
| Update notification profile | PUT | `/subscriptions/1/profiles/{profileId}` | `Subscriptions\Resource1\Profiles::putByProfileId()` |
| Get security settings | GET | `/subscriptions/1/security` | `Subscriptions\Resource1\Security::get()` |
| Create security settings | POST | `/subscriptions/1/security` | `Subscriptions\Resource1\Security::post()` |
| Delete security settings | DELETE | `/subscriptions/1/security/{authId}` | `Subscriptions\Resource1\Security::deleteByAuthId()` |
| Get single security settings | GET | `/subscriptions/1/security/{authId}` | `Subscriptions\Resource1\Security::getByAuthId()` |
| Update security settings | PUT | `/subscriptions/1/security/{authId}` | `Subscriptions\Resource1\Security::putByAuthId()` |
| Get subscriptions | GET | `/subscriptions/1/subscription/{channel}` | `Subscriptions\Resource1\Subscription::getByChannel()` |
| Create subscription | POST | `/subscriptions/1/subscription/{channel}` | `Subscriptions\Resource1\Subscription::postByChannel()` |
| Delete subscription | DELETE | `/subscriptions/1/subscription/{channel}/{subscriptionId}` | `Subscriptions\Resource1\Subscription\ByChannel::deleteBySubscriptionId()` |
| Get single subscription | GET | `/subscriptions/1/subscription/{channel}/{subscriptionId}` | `Subscriptions\Resource1\Subscription\ByChannel::getBySubscriptionId()` |
| Update subscription | PUT | `/subscriptions/1/subscription/{channel}/{subscriptionId}` | `Subscriptions\Resource1\Subscription\ByChannel::putBySubscriptionId()` |
| Send TikTok events | POST | `/tiktok/1/events` | `Tiktok\Resource1\Events::post()` |
| Get TikTok message logs | GET | `/tiktok/1/logs` | `Tiktok\Resource1\Logs::get()` |
| Send TikTok messages | POST | `/tiktok/1/messages` | `Tiktok\Resource1\Messages::post()` |
| Get TikTok delivery reports | GET | `/tiktok/1/reports` | `Tiktok\Resource1\Reports::get()` |
| Send advanced voice message | POST | `/tts/3/advanced` | `Tts\Resource3\Advanced::post()` |
| Get sent bulks | GET | `/tts/3/bulks` | `Tts\Resource3\Bulks::get()` |
| Reschedule sent bulk | PUT | `/tts/3/bulks` | `Tts\Resource3\Bulks::put()` |
| Get sent bulk's status | GET | `/tts/3/bulks/status` | `Tts\Resource3\Bulks\Status::get()` |
| Manage sent bulk's status | PUT | `/tts/3/bulks/status` | `Tts\Resource3\Bulks\Status::put()` |
| Get sent Voice logs | GET | `/tts/3/logs` | `Tts\Resource3\Logs::get()` |
| Send multiple voice messages | POST | `/tts/3/multi` | `Tts\Resource3\Multi::post()` |
| Get Voice Delivery Reports | GET | `/tts/3/reports` | `Tts\Resource3\Reports::get()` |
| Send single voice message | POST | `/tts/3/single` | `Tts\Resource3\Single::post()` |
| Get Voices | GET | `/tts/3/voices/{language}` | `Tts\Resource3\Voices::getByLanguage()` |
| Get outbound Viber bot message logs | GET | `/viber-bot/1/logs` | `ViberBot\Resource1\Logs::get()` |
| Send a Viber Bot message | POST | `/viber-bot/1/messages` | `ViberBot\Resource1\Messages::post()` |
| Get Viber Bot delivery reports | GET | `/viber-bot/1/reports` | `ViberBot\Resource1\Reports::get()` |
| Send Viber file message | POST | `/viber/1/message/file` | `Viber\Resource1\Message\File::post()` |
| Send Viber image message | POST | `/viber/1/message/image` | `Viber\Resource1\Message\Image::post()` |
| Send Viber text message(s) | POST | `/viber/1/message/text` | `Viber\Resource1\Message\Text::post()` |
| Send Viber video message | POST | `/viber/1/message/video` | `Viber\Resource1\Message\Video::post()` |
| Get Viber templates | GET | `/viber/1/senders/{sender}/templates` | `Viber\Resource1\Senders\BySender\Templates::get()` |
| Create Viber template | POST | `/viber/1/senders/{sender}/templates` | `Viber\Resource1\Senders\BySender\Templates::post()` |
| Delete Viber template | DELETE | `/viber/1/senders/{sender}/templates/{templateId}` | `Viber\Resource1\Senders\BySender\Templates::deleteByTemplateId()` |
| Get Viber template | GET | `/viber/1/senders/{sender}/templates/{templateId}` | `Viber\Resource1\Senders\BySender\Templates::getByTemplateId()` |
| Update Viber template name | PATCH | `/viber/1/senders/{sender}/templates/{templateId}` | `Viber\Resource1\Senders\BySender\Templates::patchByTemplateId()` |
| Get Viber message logs | GET | `/viber/2/logs` | `Viber\Resource2\Logs::get()` |
| Send Viber messages | POST | `/viber/2/messages` | `Viber\Resource2\Messages::post()` |
| Get Viber delivery reports | GET | `/viber/2/reports` | `Viber\Resource2\Reports::get()` |
| Create campaign | POST | `/vocalize/2/campaigns` | `Vocalize\Resource2\Campaigns::post()` |
| Get my campaigns | GET | `/vocalize/2/campaigns/me` | `Vocalize\Resource2\Campaigns\Me::get()` |
| Delete campaign | DELETE | `/vocalize/2/campaigns/{campaignId}` | `Vocalize\Resource2\Campaigns::deleteByCampaignId()` |
| Get campaign | GET | `/vocalize/2/campaigns/{campaignId}` | `Vocalize\Resource2\Campaigns::getByCampaignId()` |
| Get campaign leaderboard | GET | `/vocalize/2/campaigns/{campaignId}/leaderboard` | `Vocalize\Resource2\Campaigns\ByCampaignId\Leaderboard::get()` |
| Delete campaign scores | DELETE | `/vocalize/2/campaigns/{campaignId}/reset` | `Vocalize\Resource2\Campaigns\ByCampaignId\Reset::delete()` |
| Update campaign settings | PATCH | `/vocalize/2/campaigns/{campaignId}/settings` | `Vocalize\Resource2\Campaigns\ByCampaignId\Settings::patch()` |
| Get campaign statistics | GET | `/vocalize/2/campaigns/{campaignId}/stats` | `Vocalize\Resource2\Campaigns\ByCampaignId\Stats::get()` |
| Update score | PUT | `/vocalize/2/scores` | `Vocalize\Resource2\Scores::put()` |
| Get user score statistics | GET | `/vocalize/2/scores/stats` | `Vocalize\Resource2\Scores\Stats::get()` |
| Get Voice Delivery Reports | GET | `/voice/1/reports` | `Voice\Resource1\Reports::get()` |
| Send click-to-call message | POST | `/voice/ctc/1/send` | `Voice\Ctc\Resource1\Send::post()` |
| Search Voice IVR Recorded Files | GET | `/voice/ivr/1/files` | `Voice\Ivr\Resource1\Files::get()` |
| Download Voice IVR Recorded File. | GET | `/voice/ivr/1/files/{id}` | `Voice\Ivr\Resource1\Files::getById()` |
| Launch IVR Scenario | POST | `/voice/ivr/1/messages` | `Voice\Ivr\Resource1\Messages::post()` |
| Search Voice IVR Scenarios | GET | `/voice/ivr/1/scenarios` | `Voice\Ivr\Resource1\Scenarios::get()` |
| Create Voice IVR Scenarios | POST | `/voice/ivr/1/scenarios` | `Voice\Ivr\Resource1\Scenarios::post()` |
| Delete Voice IVR Scenarios | DELETE | `/voice/ivr/1/scenarios/{id}` | `Voice\Ivr\Resource1\Scenarios::deleteById()` |
| Get a Voice IVR Scenario | GET | `/voice/ivr/1/scenarios/{id}` | `Voice\Ivr\Resource1\Scenarios::getById()` |
| Update Voice IVR Scenarios | PUT | `/voice/ivr/1/scenarios/{id}` | `Voice\Ivr\Resource1\Scenarios::putById()` |
| Get files | GET | `/voice/ivr/1/uploads` | `Voice\Ivr\Resource1\Uploads::get()` |
| Upload file | POST | `/voice/ivr/1/uploads` | `Voice\Ivr\Resource1\Uploads::post()` |
| Upload audio files | POST | `/voice/masking/1/upload` | `Voice\Masking\Resource1\Upload::post()` |
| Get number masking configurations | GET | `/voice/masking/2/config` | `Voice\Masking\Resource2\Config::get()` |
| Create number masking configuration | POST | `/voice/masking/2/config` | `Voice\Masking\Resource2\Config::post()` |
| Delete number masking configuration | DELETE | `/voice/masking/2/config/{key}` | `Voice\Masking\Resource2\Config::deleteByKey()` |
| Get number masking configuration | GET | `/voice/masking/2/config/{key}` | `Voice\Masking\Resource2\Config::getByKey()` |
| Update number masking configuration | PUT | `/voice/masking/2/config/{key}` | `Voice\Masking\Resource2\Config::putByKey()` |
| Delete number masking credentials | DELETE | `/voice/masking/2/credentials` | `Voice\Masking\Resource2\Credentials::delete()` |
| Get number masking credentials | GET | `/voice/masking/2/credentials` | `Voice\Masking\Resource2\Credentials::get()` |
| Create number masking credentials | POST | `/voice/masking/2/credentials` | `Voice\Masking\Resource2\Credentials::post()` |
| Update number masking credentials | PUT | `/voice/masking/2/credentials` | `Voice\Masking\Resource2\Credentials::put()` |
| List uploaded audio files | GET | `/voice/ringless-voicemail/1/audio` | `Voice\RinglessVoicemail\Resource1\Audio::get()` |
| Upload audio file | POST | `/voice/ringless-voicemail/1/audio` | `Voice\RinglessVoicemail\Resource1\Audio::post()` |
| Delete audio file | DELETE | `/voice/ringless-voicemail/1/audio/{audioId}` | `Voice\RinglessVoicemail\Resource1\Audio::deleteByAudioId()` |
| Send ringless voicemail | POST | `/voice/ringless-voicemail/1/messages` | `Voice\RinglessVoicemail\Resource1\Messages::post()` |
| Get ringless voicemail delivery reports | GET | `/voice/ringless-voicemail/1/reports` | `Voice\RinglessVoicemail\Resource1\Reports::get()` |
| Get files | GET | `/webrtc/1/files` | `Webrtc\Resource1\Files::get()` |
| Delete file | DELETE | `/webrtc/1/files/{id}` | `Webrtc\Resource1\Files::deleteById()` |
| Get file | GET | `/webrtc/1/files/{id}` | `Webrtc\Resource1\Files::getById()` |
| Download file | GET | `/webrtc/1/files/{id}/download` | `Webrtc\Resource1\Files\ById\Download::get()` |
| Get WebRTC recordings | GET | `/webrtc/1/recordings` | `Webrtc\Resource1\Recordings::get()` |
| Delete WebRTC recording by ID | DELETE | `/webrtc/1/recordings/{id}` | `Webrtc\Resource1\Recordings::deleteById()` |
| Download WebRTC recording file | GET | `/webrtc/1/recordings/{id}/download` | `Webrtc\Resource1\Recordings\ById\Download::get()` |
| Generate WebRTC Token | POST | `/webrtc/1/token` | `Webrtc\Resource1\Token::post()` |
| Get WebRTC user activity | GET | `/webrtc/1/user-activity` | `Webrtc\Resource1\UserActivity::get()` |
| Get WebRTC push configurations | GET | `/webrtc/1/webrtc-push-config` | `Webrtc\Resource1\WebrtcPushConfig::get()` |
| Create WebRTC push configuration | POST | `/webrtc/1/webrtc-push-config` | `Webrtc\Resource1\WebrtcPushConfig::post()` |
| Delete WebRTC push configuration | DELETE | `/webrtc/1/webrtc-push-config/{id}` | `Webrtc\Resource1\WebrtcPushConfig::deleteById()` |
| Get WebRTC push configuration | GET | `/webrtc/1/webrtc-push-config/{id}` | `Webrtc\Resource1\WebrtcPushConfig::getById()` |
| Patch WebRTC push configuration | PATCH | `/webrtc/1/webrtc-push-config/{id}` | `Webrtc\Resource1\WebrtcPushConfig::patchById()` |
| Update WebRTC push configuration | PUT | `/webrtc/1/webrtc-push-config/{id}` | `Webrtc\Resource1\WebrtcPushConfig::putById()` |
| Submit conversions | POST | `/whatsapp/1/conversions` | `Whatsapp\Resource1\Conversions::post()` |
| Submit WABA conversions | POST | `/whatsapp/1/conversions/waba` | `Whatsapp\Resource1\Conversions\Waba::post()` |
| Add WhatsApp sender | POST | `/whatsapp/1/embedded-signup/registrations/business-account/{businessAccountId}/senders` | `Whatsapp\Resource1\EmbeddedSignup\Registrations\BusinessAccount\ByBusinessAccountId\Senders::post()` |
| Verify WhatsApp sender | POST | `/whatsapp/1/embedded-signup/registrations/senders/{sender}/verification` | `Whatsapp\Resource1\EmbeddedSignup\Registrations\Senders\BySender\Verification::post()` |
| Retry WhatsApp sender verification | PUT | `/whatsapp/1/embedded-signup/registrations/senders/{sender}/verification` | `Whatsapp\Resource1\EmbeddedSignup\Registrations\Senders\BySender\Verification::put()` |
| Send WhatsApp events | POST | `/whatsapp/1/events` | `Whatsapp\Resource1\Events::post()` |
| Send WhatsApp audio message | POST | `/whatsapp/1/message/audio` | `Whatsapp\Resource1\Message\Audio::post()` |
| Send WhatsApp contact message | POST | `/whatsapp/1/message/contact` | `Whatsapp\Resource1\Message\Contact::post()` |
| Send WhatsApp document message | POST | `/whatsapp/1/message/document` | `Whatsapp\Resource1\Message\Document::post()` |
| Send WhatsApp image message | POST | `/whatsapp/1/message/image` | `Whatsapp\Resource1\Message\Image::post()` |
| Send WhatsApp interactive buttons message | POST | `/whatsapp/1/message/interactive/buttons` | `Whatsapp\Resource1\Message\Interactive\Buttons::post()` |
| Send WhatsApp interactive call permission request message | POST | `/whatsapp/1/message/interactive/call-permission-request` | `Whatsapp\Resource1\Message\Interactive\CallPermissionRequest::post()` |
| Send WhatsApp interactive flow message | POST | `/whatsapp/1/message/interactive/flow` | `Whatsapp\Resource1\Message\Interactive\Flow::post()` |
| Send WhatsApp interactive in-thread authentication request message | POST | `/whatsapp/1/message/interactive/in-thread-authentication-request` | `Whatsapp\Resource1\Message\Interactive\InThreadAuthenticationRequest::post()` |
| Send WhatsApp interactive list message | POST | `/whatsapp/1/message/interactive/list` | `Whatsapp\Resource1\Message\Interactive\ListResource::post()` |
| Send WhatsApp interactive location request message | POST | `/whatsapp/1/message/interactive/location-request` | `Whatsapp\Resource1\Message\Interactive\LocationRequest::post()` |
| Send WhatsApp interactive media carousel message | POST | `/whatsapp/1/message/interactive/media-carousel` | `Whatsapp\Resource1\Message\Interactive\MediaCarousel::post()` |
| Send WhatsApp interactive multi-product message | POST | `/whatsapp/1/message/interactive/multi-product` | `Whatsapp\Resource1\Message\Interactive\MultiProduct::post()` |
| Send WhatsApp interactive order-details message | POST | `/whatsapp/1/message/interactive/order-details` | `Whatsapp\Resource1\Message\Interactive\OrderDetails::post()` |
| Send WhatsApp interactive order-status message | POST | `/whatsapp/1/message/interactive/order-status` | `Whatsapp\Resource1\Message\Interactive\OrderStatus::post()` |
| Send WhatsApp interactive product message | POST | `/whatsapp/1/message/interactive/product` | `Whatsapp\Resource1\Message\Interactive\Product::post()` |
| Send WhatsApp interactive request contact info message | POST | `/whatsapp/1/message/interactive/request-contact-info` | `Whatsapp\Resource1\Message\Interactive\RequestContactInfo::post()` |
| Send WhatsApp interactive url button message | POST | `/whatsapp/1/message/interactive/url-button` | `Whatsapp\Resource1\Message\Interactive\UrlButton::post()` |
| Send WhatsApp interactive voice button message | POST | `/whatsapp/1/message/interactive/voice-button` | `Whatsapp\Resource1\Message\Interactive\VoiceButton::post()` |
| Send WhatsApp location message | POST | `/whatsapp/1/message/location` | `Whatsapp\Resource1\Message\Location::post()` |
| Send WhatsApp sticker message | POST | `/whatsapp/1/message/sticker` | `Whatsapp\Resource1\Message\Sticker::post()` |
| Send WhatsApp template message | POST | `/whatsapp/1/message/template` | `Whatsapp\Resource1\Message\Template::post()` |
| Send WhatsApp text message | POST | `/whatsapp/1/message/text` | `Whatsapp\Resource1\Message\Text::post()` |
| Send WhatsApp video message | POST | `/whatsapp/1/message/video` | `Whatsapp\Resource1\Message\Video::post()` |
| Get quality information of WhatsApp senders | GET | `/whatsapp/1/senders/quality` | `Whatsapp\Resource1\Senders\Quality::get()` |
| Get business info of WhatsApp sender | GET | `/whatsapp/1/senders/{sender}/business-info` | `Whatsapp\Resource1\Senders\BySender\BusinessInfo::get()` |
| Update business info of WhatsApp sender | PATCH | `/whatsapp/1/senders/{sender}/business-info` | `Whatsapp\Resource1\Senders\BySender\BusinessInfo::patch()` |
| Download business logo of WhatsApp sender | GET | `/whatsapp/1/senders/{sender}/business-info/logo` | `Whatsapp\Resource1\Senders\BySender\BusinessInfo\Logo::get()` |
| Get calling status | GET | `/whatsapp/1/senders/{sender}/calls` | `Whatsapp\Resource1\Senders\BySender\Calls::get()` |
| Disable WhatsApp Voice | POST | `/whatsapp/1/senders/{sender}/calls/disable` | `Whatsapp\Resource1\Senders\BySender\Calls\Disable::post()` |
| Enable WhatsApp Voice | POST | `/whatsapp/1/senders/{sender}/calls/enable` | `Whatsapp\Resource1\Senders\BySender\Calls\Enable::post()` |
| Get calling permission | GET | `/whatsapp/1/senders/{sender}/calls/{identifier}/permissions` | `Whatsapp\Resource1\Senders\BySender\Calls\ByIdentifier\Permissions::get()` |
| Get WhatsApp Flows | GET | `/whatsapp/1/senders/{sender}/flows` | `Whatsapp\Resource1\Senders\BySender\Flows::get()` |
| Create WhatsApp Flow | POST | `/whatsapp/1/senders/{sender}/flows` | `Whatsapp\Resource1\Senders\BySender\Flows::post()` |
| Generate WhatsApp Flow | POST | `/whatsapp/1/senders/{sender}/flows/generate` | `Whatsapp\Resource1\Senders\BySender\Flows\Generate::post()` |
| Delete WhatsApp Flow | DELETE | `/whatsapp/1/senders/{sender}/flows/{flowId}` | `Whatsapp\Resource1\Senders\BySender\Flows::deleteByFlowId()` |
| Update WhatsApp Flow | PATCH | `/whatsapp/1/senders/{sender}/flows/{flowId}` | `Whatsapp\Resource1\Senders\BySender\Flows::patchByFlowId()` |
| Deprecate WhatsApp Flow | POST | `/whatsapp/1/senders/{sender}/flows/{flowId}/deprecate` | `Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId\Deprecate::post()` |
| Get WhatsApp Flow JSON | GET | `/whatsapp/1/senders/{sender}/flows/{flowId}/json` | `Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId\Json::get()` |
| Add WhatsApp Flow JSON | PUT | `/whatsapp/1/senders/{sender}/flows/{flowId}/json` | `Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId\Json::put()` |
| Get WhatsApp Flow's preview | GET | `/whatsapp/1/senders/{sender}/flows/{flowId}/preview` | `Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId\Preview::get()` |
| Publish WhatsApp Flow | POST | `/whatsapp/1/senders/{sender}/flows/{flowId}/publish` | `Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId\Publish::post()` |
| Delete media | DELETE | `/whatsapp/1/senders/{sender}/media` | `Whatsapp\Resource1\Senders\BySender\Media::delete()` |
| Download inbound media | GET | `/whatsapp/1/senders/{sender}/media/{mediaId}` | `Whatsapp\Resource1\Senders\BySender\Media::getByMediaId()` |
| Get media metadata | HEAD | `/whatsapp/1/senders/{sender}/media/{mediaId}` | `Whatsapp\Resource1\Senders\BySender\Media::headByMediaId()` |
| Mark as read | POST | `/whatsapp/1/senders/{sender}/message/{messageId}/read` | `Whatsapp\Resource1\Senders\BySender\Message\ByMessageId\Read::post()` |
| Get Brazil payment status | GET | `/whatsapp/1/senders/{sender}/payments/br/{paymentId}` | `Whatsapp\Resource1\Senders\BySender\Payments\Br::getByPaymentId()` |
| Get India UPI PayU payment status | GET | `/whatsapp/1/senders/{sender}/payments/upi/payu/{paymentId}` | `Whatsapp\Resource1\Senders\BySender\Payments\Upi\Payu::getByPaymentId()` |
| Get India UPI PayU/Razorpay payment status | GET | `/whatsapp/1/senders/{sender}/payments/upi/{paymentId}` | `Whatsapp\Resource1\Senders\BySender\Payments\Upi::getByPaymentId()` |
| Get WhatsApp sender public key | GET | `/whatsapp/1/senders/{sender}/public-key` | `Whatsapp\Resource1\Senders\BySender\PublicKey::get()` |
| Upload WhatsApp sender public key | POST | `/whatsapp/1/senders/{sender}/public-key` | `Whatsapp\Resource1\Senders\BySender\PublicKey::post()` |
| Get WhatsApp Templates | GET | `/whatsapp/1/senders/{sender}/templates` | `Whatsapp\Resource1\Senders\BySender\Templates::get()` |
| Create WhatsApp Template | POST | `/whatsapp/1/senders/{sender}/templates` | `Whatsapp\Resource1\Senders\BySender\Templates::post()` |
| Get account WhatsApp templates | GET | `/whatsapp/1/templates` | `Whatsapp\Resource1\Templates::get()` |
| Delete identity | DELETE | `/whatsapp/1/{sender}/contacts/{userIdentifier}/identity` | `Whatsapp\Resource1\BySender\Contacts\ByUserIdentifier\Identity::delete()` |
| Get identity | GET | `/whatsapp/1/{sender}/contacts/{userIdentifier}/identity` | `Whatsapp\Resource1\BySender\Contacts\ByUserIdentifier\Identity::get()` |
| Confirm identity | PUT | `/whatsapp/1/{sender}/contacts/{userIdentifier}/identity` | `Whatsapp\Resource1\BySender\Contacts\ByUserIdentifier\Identity::put()` |
| Get WhatsApp Templates | GET | `/whatsapp/2/senders/{sender}/templates` | `Whatsapp\Resource2\Senders\BySender\Templates::get()` |
| Create WhatsApp Template | POST | `/whatsapp/2/senders/{sender}/templates` | `Whatsapp\Resource2\Senders\BySender\Templates::post()` |
| Delete WhatsApp Template | DELETE | `/whatsapp/2/senders/{sender}/templates/{id}` | `Whatsapp\Resource2\Senders\BySender\Templates::deleteById()` |
| Get WhatsApp Template | GET | `/whatsapp/2/senders/{sender}/templates/{id}` | `Whatsapp\Resource2\Senders\BySender\Templates::getById()` |
| Edit WhatsApp Template | PATCH | `/whatsapp/2/senders/{sender}/templates/{id}` | `Whatsapp\Resource2\Senders\BySender\Templates::patchById()` |
| Get Zalo logs | GET | `/zalo/1/logs` | `Zalo\Resource1\Logs::get()` |
| Upload Zalo media | POST | `/zalo/1/sender/{sender}/media` | `Zalo\Resource1\Sender\BySender\Media::post()` |
| Get Zalo media | GET | `/zalo/1/sender/{sender}/media/{mediaId}` | `Zalo\Resource1\Sender\BySender\Media::getByMediaId()` |
| Get Zalo sender public key | GET | `/zalo/1/sender/{sender}/public-key` | `Zalo\Resource1\Sender\BySender\PublicKey::get()` |
| Create Zalo sender public key | POST | `/zalo/1/sender/{sender}/public-key` | `Zalo\Resource1\Sender\BySender\PublicKey::post()` |
| Get Zalo quota | GET | `/zalo/1/sender/{sender}/quota` | `Zalo\Resource1\Sender\BySender\Quota::get()` |
| Get Zalo templates | GET | `/zalo/1/sender/{sender}/templates` | `Zalo\Resource1\Sender\BySender\Templates::get()` |
| Get Zalo template | GET | `/zalo/1/sender/{sender}/templates/{templateName}` | `Zalo\Resource1\Sender\BySender\Templates::getByTemplateName()` |
| Send Zalo messages | POST | `/zalo/2/messages` | `Zalo\Resource2\Messages::post()` |
| Create Zalo template | POST | `/zalo/2/sender/{sender}/templates` | `Zalo\Resource2\Sender\BySender\Templates::post()` |
| Edit Zalo template | PUT | `/zalo/2/sender/{sender}/templates/{templateName}` | `Zalo\Resource2\Sender\BySender\Templates::putByTemplateName()` |
