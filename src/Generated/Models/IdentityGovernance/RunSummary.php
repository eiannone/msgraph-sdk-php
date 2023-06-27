<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class RunSummary implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new runSummary and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RunSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RunSummary {
        return new RunSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
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
     * Gets the failedRuns property value. The number of failed workflow runs.
     * @return int|null
    */
    public function getFailedRuns(): ?int {
        return $this->getBackingStore()->get('failedRuns');
    }

    /**
     * Gets the failedTasks property value. The number of failed tasks of a workflow.
     * @return int|null
    */
    public function getFailedTasks(): ?int {
        return $this->getBackingStore()->get('failedTasks');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'failedRuns' => fn(ParseNode $n) => $o->setFailedRuns($n->getIntegerValue()),
            'failedTasks' => fn(ParseNode $n) => $o->setFailedTasks($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'successfulRuns' => fn(ParseNode $n) => $o->setSuccessfulRuns($n->getIntegerValue()),
            'totalRuns' => fn(ParseNode $n) => $o->setTotalRuns($n->getIntegerValue()),
            'totalTasks' => fn(ParseNode $n) => $o->setTotalTasks($n->getIntegerValue()),
            'totalUsers' => fn(ParseNode $n) => $o->setTotalUsers($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the successfulRuns property value. The number of successful workflow runs.
     * @return int|null
    */
    public function getSuccessfulRuns(): ?int {
        return $this->getBackingStore()->get('successfulRuns');
    }

    /**
     * Gets the totalRuns property value. The total number of runs for a workflow.
     * @return int|null
    */
    public function getTotalRuns(): ?int {
        return $this->getBackingStore()->get('totalRuns');
    }

    /**
     * Gets the totalTasks property value. The total number of tasks processed by a workflow.
     * @return int|null
    */
    public function getTotalTasks(): ?int {
        return $this->getBackingStore()->get('totalTasks');
    }

    /**
     * Gets the totalUsers property value. The total number of users processed by a workflow.
     * @return int|null
    */
    public function getTotalUsers(): ?int {
        return $this->getBackingStore()->get('totalUsers');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('failedRuns', $this->getFailedRuns());
        $writer->writeIntegerValue('failedTasks', $this->getFailedTasks());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('successfulRuns', $this->getSuccessfulRuns());
        $writer->writeIntegerValue('totalRuns', $this->getTotalRuns());
        $writer->writeIntegerValue('totalTasks', $this->getTotalTasks());
        $writer->writeIntegerValue('totalUsers', $this->getTotalUsers());
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
     * Sets the failedRuns property value. The number of failed workflow runs.
     * @param int|null $value Value to set for the failedRuns property.
    */
    public function setFailedRuns(?int $value): void {
        $this->getBackingStore()->set('failedRuns', $value);
    }

    /**
     * Sets the failedTasks property value. The number of failed tasks of a workflow.
     * @param int|null $value Value to set for the failedTasks property.
    */
    public function setFailedTasks(?int $value): void {
        $this->getBackingStore()->set('failedTasks', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the successfulRuns property value. The number of successful workflow runs.
     * @param int|null $value Value to set for the successfulRuns property.
    */
    public function setSuccessfulRuns(?int $value): void {
        $this->getBackingStore()->set('successfulRuns', $value);
    }

    /**
     * Sets the totalRuns property value. The total number of runs for a workflow.
     * @param int|null $value Value to set for the totalRuns property.
    */
    public function setTotalRuns(?int $value): void {
        $this->getBackingStore()->set('totalRuns', $value);
    }

    /**
     * Sets the totalTasks property value. The total number of tasks processed by a workflow.
     * @param int|null $value Value to set for the totalTasks property.
    */
    public function setTotalTasks(?int $value): void {
        $this->getBackingStore()->set('totalTasks', $value);
    }

    /**
     * Sets the totalUsers property value. The total number of users processed by a workflow.
     * @param int|null $value Value to set for the totalUsers property.
    */
    public function setTotalUsers(?int $value): void {
        $this->getBackingStore()->set('totalUsers', $value);
    }

}
