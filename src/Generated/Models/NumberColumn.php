<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class NumberColumn implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new numberColumn and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NumberColumn
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NumberColumn {
        return new NumberColumn();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the decimalPlaces property value. How many decimal places to display. See below for information about the possible values.
     * @return string|null
    */
    public function getDecimalPlaces(): ?string {
        return $this->getBackingStore()->get('decimalPlaces');
    }

    /**
     * Gets the displayAs property value. How the value should be presented in the UX. Must be one of number or percentage. If unspecified, treated as number.
     * @return string|null
    */
    public function getDisplayAs(): ?string {
        return $this->getBackingStore()->get('displayAs');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'decimalPlaces' => fn(ParseNode $n) => $o->setDecimalPlaces($n->getStringValue()),
            'displayAs' => fn(ParseNode $n) => $o->setDisplayAs($n->getStringValue()),
            'maximum' => fn(ParseNode $n) => $o->setMaximum($n->getFloatValue()),
            'minimum' => fn(ParseNode $n) => $o->setMinimum($n->getFloatValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the maximum property value. The maximum permitted value.
     * @return float|null
    */
    public function getMaximum(): ?float {
        return $this->getBackingStore()->get('maximum');
    }

    /**
     * Gets the minimum property value. The minimum permitted value.
     * @return float|null
    */
    public function getMinimum(): ?float {
        return $this->getBackingStore()->get('minimum');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('decimalPlaces', $this->getDecimalPlaces());
        $writer->writeStringValue('displayAs', $this->getDisplayAs());
        $writer->writeFloatValue('maximum', $this->getMaximum());
        $writer->writeFloatValue('minimum', $this->getMinimum());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the decimalPlaces property value. How many decimal places to display. See below for information about the possible values.
     * @param string|null $value Value to set for the decimalPlaces property.
    */
    public function setDecimalPlaces(?string $value): void {
        $this->getBackingStore()->set('decimalPlaces', $value);
    }

    /**
     * Sets the displayAs property value. How the value should be presented in the UX. Must be one of number or percentage. If unspecified, treated as number.
     * @param string|null $value Value to set for the displayAs property.
    */
    public function setDisplayAs(?string $value): void {
        $this->getBackingStore()->set('displayAs', $value);
    }

    /**
     * Sets the maximum property value. The maximum permitted value.
     * @param float|null $value Value to set for the maximum property.
    */
    public function setMaximum(?float $value): void {
        $this->getBackingStore()->set('maximum', $value);
    }

    /**
     * Sets the minimum property value. The minimum permitted value.
     * @param float|null $value Value to set for the minimum property.
    */
    public function setMinimum(?float $value): void {
        $this->getBackingStore()->set('minimum', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
