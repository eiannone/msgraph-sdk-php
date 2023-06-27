<?php

namespace Microsoft\Graph\Generated\Models\ExternalConnectors;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Property implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new property and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Property
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Property {
        return new Property();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the aliases property value. A set of aliases or a friendly names for the property. Maximum 32 characters. Only alphanumeric characters allowed. For example, each string may not contain control characters, whitespace, or any of the following: :, ;, ,, (, ), [, ], {, }, %, $, +, !, *, =, &, ?, @, #, /, ~, ', ', <, >, `, ^. Optional.
     * @return array<string>|null
    */
    public function getAliases(): ?array {
        return $this->getBackingStore()->get('aliases');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aliases' => fn(ParseNode $n) => $o->setAliases($n->getCollectionOfPrimitiveValues()),
            'isQueryable' => fn(ParseNode $n) => $o->setIsQueryable($n->getBooleanValue()),
            'isRefinable' => fn(ParseNode $n) => $o->setIsRefinable($n->getBooleanValue()),
            'isRetrievable' => fn(ParseNode $n) => $o->setIsRetrievable($n->getBooleanValue()),
            'isSearchable' => fn(ParseNode $n) => $o->setIsSearchable($n->getBooleanValue()),
            'labels' => fn(ParseNode $n) => $o->setLabels($n->getCollectionOfEnumValues(Label::class)),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(PropertyType::class)),
        ];
    }

    /**
     * Gets the isQueryable property value. Specifies if the property is queryable. Queryable properties can be used in Keyword Query Language (KQL) queries. Optional.
     * @return bool|null
    */
    public function getIsQueryable(): ?bool {
        return $this->getBackingStore()->get('isQueryable');
    }

    /**
     * Gets the isRefinable property value. Specifies if the property is refinable.  Refinable properties can be used to filter search results in the Search API and add a refiner control in the Microsoft Search user experience. Optional.
     * @return bool|null
    */
    public function getIsRefinable(): ?bool {
        return $this->getBackingStore()->get('isRefinable');
    }

    /**
     * Gets the isRetrievable property value. Specifies if the property is retrievable. Retrievable properties are returned in the result set when items are returned by the search API. Retrievable properties are also available to add to the display template used to render search results. Optional.
     * @return bool|null
    */
    public function getIsRetrievable(): ?bool {
        return $this->getBackingStore()->get('isRetrievable');
    }

    /**
     * Gets the isSearchable property value. Specifies if the property is searchable. Only properties of type String or StringCollection can be searchable. Non-searchable properties are not added to the search index. Optional.
     * @return bool|null
    */
    public function getIsSearchable(): ?bool {
        return $this->getBackingStore()->get('isSearchable');
    }

    /**
     * Gets the labels property value. Specifies one or more well-known tags added against a property. Labels help Microsoft Search understand the semantics of the data in the connection. Adding appropriate labels would result in an enhanced search experience (e.g. better relevance). The possible values are: title, url, createdBy, lastModifiedBy, authors, createdDateTime, lastModifiedDateTime, fileName, fileExtension, unknownFutureValue. Optional.
     * @return array<Label>|null
    */
    public function getLabels(): ?array {
        return $this->getBackingStore()->get('labels');
    }

    /**
     * Gets the name property value. The name of the property. Maximum 32 characters. Only alphanumeric characters allowed. For example, each string may not contain control characters, whitespace, or any of the following: :, ;, ,, (, ), [, ], {, }, %, $, +, !, *, =, &, ?, @, #, /, ~, ', ', <, >, `, ^.  Required.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the type property value. The type property
     * @return PropertyType|null
    */
    public function getType(): ?PropertyType {
        return $this->getBackingStore()->get('type');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('aliases', $this->getAliases());
        $writer->writeBooleanValue('isQueryable', $this->getIsQueryable());
        $writer->writeBooleanValue('isRefinable', $this->getIsRefinable());
        $writer->writeBooleanValue('isRetrievable', $this->getIsRetrievable());
        $writer->writeBooleanValue('isSearchable', $this->getIsSearchable());
        $writer->writeCollectionOfEnumValues('labels', $this->getLabels());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('type', $this->getType());
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
     * Sets the aliases property value. A set of aliases or a friendly names for the property. Maximum 32 characters. Only alphanumeric characters allowed. For example, each string may not contain control characters, whitespace, or any of the following: :, ;, ,, (, ), [, ], {, }, %, $, +, !, *, =, &, ?, @, #, /, ~, ', ', <, >, `, ^. Optional.
     * @param array<string>|null $value Value to set for the aliases property.
    */
    public function setAliases(?array $value): void {
        $this->getBackingStore()->set('aliases', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the isQueryable property value. Specifies if the property is queryable. Queryable properties can be used in Keyword Query Language (KQL) queries. Optional.
     * @param bool|null $value Value to set for the isQueryable property.
    */
    public function setIsQueryable(?bool $value): void {
        $this->getBackingStore()->set('isQueryable', $value);
    }

    /**
     * Sets the isRefinable property value. Specifies if the property is refinable.  Refinable properties can be used to filter search results in the Search API and add a refiner control in the Microsoft Search user experience. Optional.
     * @param bool|null $value Value to set for the isRefinable property.
    */
    public function setIsRefinable(?bool $value): void {
        $this->getBackingStore()->set('isRefinable', $value);
    }

    /**
     * Sets the isRetrievable property value. Specifies if the property is retrievable. Retrievable properties are returned in the result set when items are returned by the search API. Retrievable properties are also available to add to the display template used to render search results. Optional.
     * @param bool|null $value Value to set for the isRetrievable property.
    */
    public function setIsRetrievable(?bool $value): void {
        $this->getBackingStore()->set('isRetrievable', $value);
    }

    /**
     * Sets the isSearchable property value. Specifies if the property is searchable. Only properties of type String or StringCollection can be searchable. Non-searchable properties are not added to the search index. Optional.
     * @param bool|null $value Value to set for the isSearchable property.
    */
    public function setIsSearchable(?bool $value): void {
        $this->getBackingStore()->set('isSearchable', $value);
    }

    /**
     * Sets the labels property value. Specifies one or more well-known tags added against a property. Labels help Microsoft Search understand the semantics of the data in the connection. Adding appropriate labels would result in an enhanced search experience (e.g. better relevance). The possible values are: title, url, createdBy, lastModifiedBy, authors, createdDateTime, lastModifiedDateTime, fileName, fileExtension, unknownFutureValue. Optional.
     * @param array<Label>|null $value Value to set for the labels property.
    */
    public function setLabels(?array $value): void {
        $this->getBackingStore()->set('labels', $value);
    }

    /**
     * Sets the name property value. The name of the property. Maximum 32 characters. Only alphanumeric characters allowed. For example, each string may not contain control characters, whitespace, or any of the following: :, ;, ,, (, ), [, ], {, }, %, $, +, !, *, =, &, ?, @, #, /, ~, ', ', <, >, `, ^.  Required.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the type property value. The type property
     * @param PropertyType|null $value Value to set for the type property.
    */
    public function setType(?PropertyType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
