<?php

namespace Microsoft\Graph\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeleconferenceDeviceMediaQuality implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new teleconferenceDeviceMediaQuality and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeleconferenceDeviceMediaQuality
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeleconferenceDeviceMediaQuality {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.teleconferenceDeviceAudioQuality': return new TeleconferenceDeviceAudioQuality();
                case '#microsoft.graph.teleconferenceDeviceScreenSharingQuality': return new TeleconferenceDeviceScreenSharingQuality();
                case '#microsoft.graph.teleconferenceDeviceVideoQuality': return new TeleconferenceDeviceVideoQuality();
            }
        }
        return new TeleconferenceDeviceMediaQuality();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the averageInboundJitter property value. The average inbound stream network jitter.
     * @return DateInterval|null
    */
    public function getAverageInboundJitter(): ?DateInterval {
        return $this->getBackingStore()->get('averageInboundJitter');
    }

    /**
     * Gets the averageInboundPacketLossRateInPercentage property value. The average inbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
     * @return float|null
    */
    public function getAverageInboundPacketLossRateInPercentage(): ?float {
        return $this->getBackingStore()->get('averageInboundPacketLossRateInPercentage');
    }

    /**
     * Gets the averageInboundRoundTripDelay property value. The average inbound stream network round trip delay.
     * @return DateInterval|null
    */
    public function getAverageInboundRoundTripDelay(): ?DateInterval {
        return $this->getBackingStore()->get('averageInboundRoundTripDelay');
    }

    /**
     * Gets the averageOutboundJitter property value. The average outbound stream network jitter.
     * @return DateInterval|null
    */
    public function getAverageOutboundJitter(): ?DateInterval {
        return $this->getBackingStore()->get('averageOutboundJitter');
    }

    /**
     * Gets the averageOutboundPacketLossRateInPercentage property value. The average outbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
     * @return float|null
    */
    public function getAverageOutboundPacketLossRateInPercentage(): ?float {
        return $this->getBackingStore()->get('averageOutboundPacketLossRateInPercentage');
    }

    /**
     * Gets the averageOutboundRoundTripDelay property value. The average outbound stream network round trip delay.
     * @return DateInterval|null
    */
    public function getAverageOutboundRoundTripDelay(): ?DateInterval {
        return $this->getBackingStore()->get('averageOutboundRoundTripDelay');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the channelIndex property value. The channel index of media. Indexing begins with 1.  If a media session contains 3 video modalities, channel indexes will be 1, 2, and 3.
     * @return int|null
    */
    public function getChannelIndex(): ?int {
        return $this->getBackingStore()->get('channelIndex');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'averageInboundJitter' => fn(ParseNode $n) => $o->setAverageInboundJitter($n->getDateIntervalValue()),
            'averageInboundPacketLossRateInPercentage' => fn(ParseNode $n) => $o->setAverageInboundPacketLossRateInPercentage($n->getFloatValue()),
            'averageInboundRoundTripDelay' => fn(ParseNode $n) => $o->setAverageInboundRoundTripDelay($n->getDateIntervalValue()),
            'averageOutboundJitter' => fn(ParseNode $n) => $o->setAverageOutboundJitter($n->getDateIntervalValue()),
            'averageOutboundPacketLossRateInPercentage' => fn(ParseNode $n) => $o->setAverageOutboundPacketLossRateInPercentage($n->getFloatValue()),
            'averageOutboundRoundTripDelay' => fn(ParseNode $n) => $o->setAverageOutboundRoundTripDelay($n->getDateIntervalValue()),
            'channelIndex' => fn(ParseNode $n) => $o->setChannelIndex($n->getIntegerValue()),
            'inboundPackets' => fn(ParseNode $n) => $o->setInboundPackets($n->getIntegerValue()),
            'localIPAddress' => fn(ParseNode $n) => $o->setLocalIPAddress($n->getStringValue()),
            'localPort' => fn(ParseNode $n) => $o->setLocalPort($n->getIntegerValue()),
            'maximumInboundJitter' => fn(ParseNode $n) => $o->setMaximumInboundJitter($n->getDateIntervalValue()),
            'maximumInboundPacketLossRateInPercentage' => fn(ParseNode $n) => $o->setMaximumInboundPacketLossRateInPercentage($n->getFloatValue()),
            'maximumInboundRoundTripDelay' => fn(ParseNode $n) => $o->setMaximumInboundRoundTripDelay($n->getDateIntervalValue()),
            'maximumOutboundJitter' => fn(ParseNode $n) => $o->setMaximumOutboundJitter($n->getDateIntervalValue()),
            'maximumOutboundPacketLossRateInPercentage' => fn(ParseNode $n) => $o->setMaximumOutboundPacketLossRateInPercentage($n->getFloatValue()),
            'maximumOutboundRoundTripDelay' => fn(ParseNode $n) => $o->setMaximumOutboundRoundTripDelay($n->getDateIntervalValue()),
            'mediaDuration' => fn(ParseNode $n) => $o->setMediaDuration($n->getDateIntervalValue()),
            'networkLinkSpeedInBytes' => fn(ParseNode $n) => $o->setNetworkLinkSpeedInBytes($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'outboundPackets' => fn(ParseNode $n) => $o->setOutboundPackets($n->getIntegerValue()),
            'remoteIPAddress' => fn(ParseNode $n) => $o->setRemoteIPAddress($n->getStringValue()),
            'remotePort' => fn(ParseNode $n) => $o->setRemotePort($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the inboundPackets property value. The total number of the inbound packets.
     * @return int|null
    */
    public function getInboundPackets(): ?int {
        return $this->getBackingStore()->get('inboundPackets');
    }

    /**
     * Gets the localIPAddress property value. the local IP address for the media session.
     * @return string|null
    */
    public function getLocalIPAddress(): ?string {
        return $this->getBackingStore()->get('localIPAddress');
    }

    /**
     * Gets the localPort property value. The local media port.
     * @return int|null
    */
    public function getLocalPort(): ?int {
        return $this->getBackingStore()->get('localPort');
    }

    /**
     * Gets the maximumInboundJitter property value. The maximum inbound stream network jitter.
     * @return DateInterval|null
    */
    public function getMaximumInboundJitter(): ?DateInterval {
        return $this->getBackingStore()->get('maximumInboundJitter');
    }

    /**
     * Gets the maximumInboundPacketLossRateInPercentage property value. The maximum inbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
     * @return float|null
    */
    public function getMaximumInboundPacketLossRateInPercentage(): ?float {
        return $this->getBackingStore()->get('maximumInboundPacketLossRateInPercentage');
    }

    /**
     * Gets the maximumInboundRoundTripDelay property value. The maximum inbound stream network round trip delay.
     * @return DateInterval|null
    */
    public function getMaximumInboundRoundTripDelay(): ?DateInterval {
        return $this->getBackingStore()->get('maximumInboundRoundTripDelay');
    }

    /**
     * Gets the maximumOutboundJitter property value. The maximum outbound stream network jitter.
     * @return DateInterval|null
    */
    public function getMaximumOutboundJitter(): ?DateInterval {
        return $this->getBackingStore()->get('maximumOutboundJitter');
    }

    /**
     * Gets the maximumOutboundPacketLossRateInPercentage property value. The maximum outbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
     * @return float|null
    */
    public function getMaximumOutboundPacketLossRateInPercentage(): ?float {
        return $this->getBackingStore()->get('maximumOutboundPacketLossRateInPercentage');
    }

    /**
     * Gets the maximumOutboundRoundTripDelay property value. The maximum outbound stream network round trip delay.
     * @return DateInterval|null
    */
    public function getMaximumOutboundRoundTripDelay(): ?DateInterval {
        return $this->getBackingStore()->get('maximumOutboundRoundTripDelay');
    }

    /**
     * Gets the mediaDuration property value. The total modality duration. If the media enabled and disabled multiple times, MediaDuration will the summation of all of the durations.
     * @return DateInterval|null
    */
    public function getMediaDuration(): ?DateInterval {
        return $this->getBackingStore()->get('mediaDuration');
    }

    /**
     * Gets the networkLinkSpeedInBytes property value. The network link speed in bytes
     * @return int|null
    */
    public function getNetworkLinkSpeedInBytes(): ?int {
        return $this->getBackingStore()->get('networkLinkSpeedInBytes');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the outboundPackets property value. The total number of the outbound packets.
     * @return int|null
    */
    public function getOutboundPackets(): ?int {
        return $this->getBackingStore()->get('outboundPackets');
    }

    /**
     * Gets the remoteIPAddress property value. The remote IP address for the media session.
     * @return string|null
    */
    public function getRemoteIPAddress(): ?string {
        return $this->getBackingStore()->get('remoteIPAddress');
    }

    /**
     * Gets the remotePort property value. The remote media port.
     * @return int|null
    */
    public function getRemotePort(): ?int {
        return $this->getBackingStore()->get('remotePort');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateIntervalValue('averageInboundJitter', $this->getAverageInboundJitter());
        $writer->writeFloatValue('averageInboundPacketLossRateInPercentage', $this->getAverageInboundPacketLossRateInPercentage());
        $writer->writeDateIntervalValue('averageInboundRoundTripDelay', $this->getAverageInboundRoundTripDelay());
        $writer->writeDateIntervalValue('averageOutboundJitter', $this->getAverageOutboundJitter());
        $writer->writeFloatValue('averageOutboundPacketLossRateInPercentage', $this->getAverageOutboundPacketLossRateInPercentage());
        $writer->writeDateIntervalValue('averageOutboundRoundTripDelay', $this->getAverageOutboundRoundTripDelay());
        $writer->writeIntegerValue('channelIndex', $this->getChannelIndex());
        $writer->writeIntegerValue('inboundPackets', $this->getInboundPackets());
        $writer->writeStringValue('localIPAddress', $this->getLocalIPAddress());
        $writer->writeIntegerValue('localPort', $this->getLocalPort());
        $writer->writeDateIntervalValue('maximumInboundJitter', $this->getMaximumInboundJitter());
        $writer->writeFloatValue('maximumInboundPacketLossRateInPercentage', $this->getMaximumInboundPacketLossRateInPercentage());
        $writer->writeDateIntervalValue('maximumInboundRoundTripDelay', $this->getMaximumInboundRoundTripDelay());
        $writer->writeDateIntervalValue('maximumOutboundJitter', $this->getMaximumOutboundJitter());
        $writer->writeFloatValue('maximumOutboundPacketLossRateInPercentage', $this->getMaximumOutboundPacketLossRateInPercentage());
        $writer->writeDateIntervalValue('maximumOutboundRoundTripDelay', $this->getMaximumOutboundRoundTripDelay());
        $writer->writeDateIntervalValue('mediaDuration', $this->getMediaDuration());
        $writer->writeIntegerValue('networkLinkSpeedInBytes', $this->getNetworkLinkSpeedInBytes());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('outboundPackets', $this->getOutboundPackets());
        $writer->writeStringValue('remoteIPAddress', $this->getRemoteIPAddress());
        $writer->writeIntegerValue('remotePort', $this->getRemotePort());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the averageInboundJitter property value. The average inbound stream network jitter.
     * @param DateInterval|null $value Value to set for the averageInboundJitter property.
    */
    public function setAverageInboundJitter(?DateInterval $value): void {
        $this->getBackingStore()->set('averageInboundJitter', $value);
    }

    /**
     * Sets the averageInboundPacketLossRateInPercentage property value. The average inbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
     * @param float|null $value Value to set for the averageInboundPacketLossRateInPercentage property.
    */
    public function setAverageInboundPacketLossRateInPercentage(?float $value): void {
        $this->getBackingStore()->set('averageInboundPacketLossRateInPercentage', $value);
    }

    /**
     * Sets the averageInboundRoundTripDelay property value. The average inbound stream network round trip delay.
     * @param DateInterval|null $value Value to set for the averageInboundRoundTripDelay property.
    */
    public function setAverageInboundRoundTripDelay(?DateInterval $value): void {
        $this->getBackingStore()->set('averageInboundRoundTripDelay', $value);
    }

    /**
     * Sets the averageOutboundJitter property value. The average outbound stream network jitter.
     * @param DateInterval|null $value Value to set for the averageOutboundJitter property.
    */
    public function setAverageOutboundJitter(?DateInterval $value): void {
        $this->getBackingStore()->set('averageOutboundJitter', $value);
    }

    /**
     * Sets the averageOutboundPacketLossRateInPercentage property value. The average outbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
     * @param float|null $value Value to set for the averageOutboundPacketLossRateInPercentage property.
    */
    public function setAverageOutboundPacketLossRateInPercentage(?float $value): void {
        $this->getBackingStore()->set('averageOutboundPacketLossRateInPercentage', $value);
    }

    /**
     * Sets the averageOutboundRoundTripDelay property value. The average outbound stream network round trip delay.
     * @param DateInterval|null $value Value to set for the averageOutboundRoundTripDelay property.
    */
    public function setAverageOutboundRoundTripDelay(?DateInterval $value): void {
        $this->getBackingStore()->set('averageOutboundRoundTripDelay', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the channelIndex property value. The channel index of media. Indexing begins with 1.  If a media session contains 3 video modalities, channel indexes will be 1, 2, and 3.
     * @param int|null $value Value to set for the channelIndex property.
    */
    public function setChannelIndex(?int $value): void {
        $this->getBackingStore()->set('channelIndex', $value);
    }

    /**
     * Sets the inboundPackets property value. The total number of the inbound packets.
     * @param int|null $value Value to set for the inboundPackets property.
    */
    public function setInboundPackets(?int $value): void {
        $this->getBackingStore()->set('inboundPackets', $value);
    }

    /**
     * Sets the localIPAddress property value. the local IP address for the media session.
     * @param string|null $value Value to set for the localIPAddress property.
    */
    public function setLocalIPAddress(?string $value): void {
        $this->getBackingStore()->set('localIPAddress', $value);
    }

    /**
     * Sets the localPort property value. The local media port.
     * @param int|null $value Value to set for the localPort property.
    */
    public function setLocalPort(?int $value): void {
        $this->getBackingStore()->set('localPort', $value);
    }

    /**
     * Sets the maximumInboundJitter property value. The maximum inbound stream network jitter.
     * @param DateInterval|null $value Value to set for the maximumInboundJitter property.
    */
    public function setMaximumInboundJitter(?DateInterval $value): void {
        $this->getBackingStore()->set('maximumInboundJitter', $value);
    }

    /**
     * Sets the maximumInboundPacketLossRateInPercentage property value. The maximum inbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
     * @param float|null $value Value to set for the maximumInboundPacketLossRateInPercentage property.
    */
    public function setMaximumInboundPacketLossRateInPercentage(?float $value): void {
        $this->getBackingStore()->set('maximumInboundPacketLossRateInPercentage', $value);
    }

    /**
     * Sets the maximumInboundRoundTripDelay property value. The maximum inbound stream network round trip delay.
     * @param DateInterval|null $value Value to set for the maximumInboundRoundTripDelay property.
    */
    public function setMaximumInboundRoundTripDelay(?DateInterval $value): void {
        $this->getBackingStore()->set('maximumInboundRoundTripDelay', $value);
    }

    /**
     * Sets the maximumOutboundJitter property value. The maximum outbound stream network jitter.
     * @param DateInterval|null $value Value to set for the maximumOutboundJitter property.
    */
    public function setMaximumOutboundJitter(?DateInterval $value): void {
        $this->getBackingStore()->set('maximumOutboundJitter', $value);
    }

    /**
     * Sets the maximumOutboundPacketLossRateInPercentage property value. The maximum outbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
     * @param float|null $value Value to set for the maximumOutboundPacketLossRateInPercentage property.
    */
    public function setMaximumOutboundPacketLossRateInPercentage(?float $value): void {
        $this->getBackingStore()->set('maximumOutboundPacketLossRateInPercentage', $value);
    }

    /**
     * Sets the maximumOutboundRoundTripDelay property value. The maximum outbound stream network round trip delay.
     * @param DateInterval|null $value Value to set for the maximumOutboundRoundTripDelay property.
    */
    public function setMaximumOutboundRoundTripDelay(?DateInterval $value): void {
        $this->getBackingStore()->set('maximumOutboundRoundTripDelay', $value);
    }

    /**
     * Sets the mediaDuration property value. The total modality duration. If the media enabled and disabled multiple times, MediaDuration will the summation of all of the durations.
     * @param DateInterval|null $value Value to set for the mediaDuration property.
    */
    public function setMediaDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('mediaDuration', $value);
    }

    /**
     * Sets the networkLinkSpeedInBytes property value. The network link speed in bytes
     * @param int|null $value Value to set for the networkLinkSpeedInBytes property.
    */
    public function setNetworkLinkSpeedInBytes(?int $value): void {
        $this->getBackingStore()->set('networkLinkSpeedInBytes', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the outboundPackets property value. The total number of the outbound packets.
     * @param int|null $value Value to set for the outboundPackets property.
    */
    public function setOutboundPackets(?int $value): void {
        $this->getBackingStore()->set('outboundPackets', $value);
    }

    /**
     * Sets the remoteIPAddress property value. The remote IP address for the media session.
     * @param string|null $value Value to set for the remoteIPAddress property.
    */
    public function setRemoteIPAddress(?string $value): void {
        $this->getBackingStore()->set('remoteIPAddress', $value);
    }

    /**
     * Sets the remotePort property value. The remote media port.
     * @param int|null $value Value to set for the remotePort property.
    */
    public function setRemotePort(?int $value): void {
        $this->getBackingStore()->set('remotePort', $value);
    }

}
