<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SubjectRightsRequestStageDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new subjectRightsRequestStageDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubjectRightsRequestStageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubjectRightsRequestStageDetail {
        return new SubjectRightsRequestStageDetail();
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
     * Gets the error property value. Describes the error, if any, for the current stage.
     * @return PublicError|null
    */
    public function getError(): ?PublicError {
        return $this->getBackingStore()->get('error');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([PublicError::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'stage' => fn(ParseNode $n) => $o->setStage($n->getEnumValue(SubjectRightsRequestStage::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SubjectRightsRequestStageStatus::class)),
        ];
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the stage property value. The stage of the subject rights request. Possible values are: contentRetrieval, contentReview, generateReport, contentDeletion, caseResolved, unknownFutureValue.
     * @return SubjectRightsRequestStage|null
    */
    public function getStage(): ?SubjectRightsRequestStage {
        return $this->getBackingStore()->get('stage');
    }

    /**
     * Gets the status property value. Status of the current stage. Possible values are: notStarted, current, completed, failed, unknownFutureValue.
     * @return SubjectRightsRequestStageStatus|null
    */
    public function getStatus(): ?SubjectRightsRequestStageStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('stage', $this->getStage());
        $writer->writeEnumValue('status', $this->getStatus());
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
     * Sets the error property value. Describes the error, if any, for the current stage.
     * @param PublicError|null $value Value to set for the error property.
    */
    public function setError(?PublicError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the stage property value. The stage of the subject rights request. Possible values are: contentRetrieval, contentReview, generateReport, contentDeletion, caseResolved, unknownFutureValue.
     * @param SubjectRightsRequestStage|null $value Value to set for the stage property.
    */
    public function setStage(?SubjectRightsRequestStage $value): void {
        $this->getBackingStore()->set('stage', $value);
    }

    /**
     * Sets the status property value. Status of the current stage. Possible values are: notStarted, current, completed, failed, unknownFutureValue.
     * @param SubjectRightsRequestStageStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SubjectRightsRequestStageStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
