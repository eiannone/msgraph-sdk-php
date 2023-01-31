<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamsAppDefinition extends Entity implements Parsable 
{
    /**
     * Instantiates a new teamsAppDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsAppDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsAppDefinition {
        return new TeamsAppDefinition();
    }

    /**
     * Gets the bot property value. The details of the bot specified in the Teams app manifest.
     * @return TeamworkBot|null
    */
    public function getBot(): ?TeamworkBot {
        return $this->getBackingStore()->get('bot');
    }

    /**
     * Gets the createdBy property value. 
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the description property value. Verbose description of the application.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The name of the app provided by the app developer.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bot' => fn(ParseNode $n) => $o->setBot($n->getObjectValue([TeamworkBot::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'publishingState' => fn(ParseNode $n) => $o->setPublishingState($n->getEnumValue(TeamsAppPublishingState::class)),
            'shortDescription' => fn(ParseNode $n) => $o->setShortDescription($n->getStringValue()),
            'teamsAppId' => fn(ParseNode $n) => $o->setTeamsAppId($n->getStringValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. 
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the publishingState property value. The published status of a specific version of a Teams app. Possible values are:submitted — The specific version of the Teams app has been submitted and is under review. published  — The request to publish the specific version of the Teams app has been approved by the admin and the app is published.  rejected — The request to publish the specific version of the Teams app was rejected by the admin.
     * @return TeamsAppPublishingState|null
    */
    public function getPublishingState(): ?TeamsAppPublishingState {
        return $this->getBackingStore()->get('publishingState');
    }

    /**
     * Gets the shortDescription property value. Short description of the application.
     * @return string|null
    */
    public function getShortDescription(): ?string {
        return $this->getBackingStore()->get('shortDescription');
    }

    /**
     * Gets the teamsAppId property value. The ID from the Teams app manifest.
     * @return string|null
    */
    public function getTeamsAppId(): ?string {
        return $this->getBackingStore()->get('teamsAppId');
    }

    /**
     * Gets the version property value. The version number of the application.
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->getBackingStore()->get('version');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('bot', $this->getBot());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeEnumValue('publishingState', $this->getPublishingState());
        $writer->writeStringValue('shortDescription', $this->getShortDescription());
        $writer->writeStringValue('teamsAppId', $this->getTeamsAppId());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the bot property value. The details of the bot specified in the Teams app manifest.
     * @param TeamworkBot|null $value Value to set for the bot property.
    */
    public function setBot(?TeamworkBot $value): void {
        $this->getBackingStore()->set('bot', $value);
    }

    /**
     * Sets the createdBy property value. 
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the description property value. Verbose description of the application.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The name of the app provided by the app developer.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. 
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the publishingState property value. The published status of a specific version of a Teams app. Possible values are:submitted — The specific version of the Teams app has been submitted and is under review. published  — The request to publish the specific version of the Teams app has been approved by the admin and the app is published.  rejected — The request to publish the specific version of the Teams app was rejected by the admin.
     * @param TeamsAppPublishingState|null $value Value to set for the publishingState property.
    */
    public function setPublishingState(?TeamsAppPublishingState $value): void {
        $this->getBackingStore()->set('publishingState', $value);
    }

    /**
     * Sets the shortDescription property value. Short description of the application.
     * @param string|null $value Value to set for the shortDescription property.
    */
    public function setShortDescription(?string $value): void {
        $this->getBackingStore()->set('shortDescription', $value);
    }

    /**
     * Sets the teamsAppId property value. The ID from the Teams app manifest.
     * @param string|null $value Value to set for the teamsAppId property.
    */
    public function setTeamsAppId(?string $value): void {
        $this->getBackingStore()->set('teamsAppId', $value);
    }

    /**
     * Sets the version property value. The version number of the application.
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
