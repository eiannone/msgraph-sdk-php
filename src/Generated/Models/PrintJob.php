<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrintJob extends Entity implements Parsable 
{
    /**
     * Instantiates a new printJob and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintJob
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrintJob {
        return new PrintJob();
    }

    /**
     * Gets the configuration property value. 
     * @return PrintJobConfiguration|null
    */
    public function getConfiguration(): ?PrintJobConfiguration {
        return $this->getBackingStore()->get('configuration');
    }

    /**
     * Gets the createdBy property value. 
     * @return UserIdentity|null
    */
    public function getCreatedBy(): ?UserIdentity {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdDateTime property value. The DateTimeOffset when the job was created. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the documents property value. 
     * @return array<PrintDocument>|null
    */
    public function getDocuments(): ?array {
        return $this->getBackingStore()->get('documents');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'configuration' => fn(ParseNode $n) => $o->setConfiguration($n->getObjectValue([PrintJobConfiguration::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([UserIdentity::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'documents' => fn(ParseNode $n) => $o->setDocuments($n->getCollectionOfObjectValues([PrintDocument::class, 'createFromDiscriminatorValue'])),
            'isFetchable' => fn(ParseNode $n) => $o->setIsFetchable($n->getBooleanValue()),
            'redirectedFrom' => fn(ParseNode $n) => $o->setRedirectedFrom($n->getStringValue()),
            'redirectedTo' => fn(ParseNode $n) => $o->setRedirectedTo($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getObjectValue([PrintJobStatus::class, 'createFromDiscriminatorValue'])),
            'tasks' => fn(ParseNode $n) => $o->setTasks($n->getCollectionOfObjectValues([PrintTask::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isFetchable property value. If true, document can be fetched by printer.
     * @return bool|null
    */
    public function getIsFetchable(): ?bool {
        return $this->getBackingStore()->get('isFetchable');
    }

    /**
     * Gets the redirectedFrom property value. Contains the source job URL, if the job has been redirected from another printer.
     * @return string|null
    */
    public function getRedirectedFrom(): ?string {
        return $this->getBackingStore()->get('redirectedFrom');
    }

    /**
     * Gets the redirectedTo property value. Contains the destination job URL, if the job has been redirected to another printer.
     * @return string|null
    */
    public function getRedirectedTo(): ?string {
        return $this->getBackingStore()->get('redirectedTo');
    }

    /**
     * Gets the status property value. 
     * @return PrintJobStatus|null
    */
    public function getStatus(): ?PrintJobStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the tasks property value. A list of printTasks that were triggered by this print job.
     * @return array<PrintTask>|null
    */
    public function getTasks(): ?array {
        return $this->getBackingStore()->get('tasks');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('configuration', $this->getConfiguration());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfObjectValues('documents', $this->getDocuments());
        $writer->writeBooleanValue('isFetchable', $this->getIsFetchable());
        $writer->writeStringValue('redirectedFrom', $this->getRedirectedFrom());
        $writer->writeStringValue('redirectedTo', $this->getRedirectedTo());
        $writer->writeObjectValue('status', $this->getStatus());
        $writer->writeCollectionOfObjectValues('tasks', $this->getTasks());
    }

    /**
     * Sets the configuration property value. 
     * @param PrintJobConfiguration|null $value Value to set for the configuration property.
    */
    public function setConfiguration(?PrintJobConfiguration $value): void {
        $this->getBackingStore()->set('configuration', $value);
    }

    /**
     * Sets the createdBy property value. 
     * @param UserIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?UserIdentity $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The DateTimeOffset when the job was created. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the documents property value. 
     * @param array<PrintDocument>|null $value Value to set for the documents property.
    */
    public function setDocuments(?array $value): void {
        $this->getBackingStore()->set('documents', $value);
    }

    /**
     * Sets the isFetchable property value. If true, document can be fetched by printer.
     * @param bool|null $value Value to set for the isFetchable property.
    */
    public function setIsFetchable(?bool $value): void {
        $this->getBackingStore()->set('isFetchable', $value);
    }

    /**
     * Sets the redirectedFrom property value. Contains the source job URL, if the job has been redirected from another printer.
     * @param string|null $value Value to set for the redirectedFrom property.
    */
    public function setRedirectedFrom(?string $value): void {
        $this->getBackingStore()->set('redirectedFrom', $value);
    }

    /**
     * Sets the redirectedTo property value. Contains the destination job URL, if the job has been redirected to another printer.
     * @param string|null $value Value to set for the redirectedTo property.
    */
    public function setRedirectedTo(?string $value): void {
        $this->getBackingStore()->set('redirectedTo', $value);
    }

    /**
     * Sets the status property value. 
     * @param PrintJobStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PrintJobStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the tasks property value. A list of printTasks that were triggered by this print job.
     * @param array<PrintTask>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value): void {
        $this->getBackingStore()->set('tasks', $value);
    }

}
