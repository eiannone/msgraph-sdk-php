<?php

namespace Microsoft\Graph\Generated\Me\Calendar\CalendarView\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Me\Calendar\CalendarView\Item\Attachments\AttachmentsRequestBuilder;
use Microsoft\Graph\Generated\Me\Calendar\CalendarView\Item\Attachments\Item\AttachmentItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Calendar\CalendarView\Item\Calendar\CalendarRequestBuilder;
use Microsoft\Graph\Generated\Me\Calendar\CalendarView\Item\Extensions\ExtensionsRequestBuilder;
use Microsoft\Graph\Generated\Me\Calendar\CalendarView\Item\Extensions\Item\ExtensionItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Calendar\CalendarView\Item\Instances\InstancesRequestBuilder;
use Microsoft\Graph\Generated\Me\Calendar\CalendarView\Item\MicrosoftGraphAccept\MicrosoftGraphAcceptRequestBuilder;
use Microsoft\Graph\Generated\Me\Calendar\CalendarView\Item\MicrosoftGraphCancel\MicrosoftGraphCancelRequestBuilder;
use Microsoft\Graph\Generated\Me\Calendar\CalendarView\Item\MicrosoftGraphDecline\MicrosoftGraphDeclineRequestBuilder;
use Microsoft\Graph\Generated\Me\Calendar\CalendarView\Item\MicrosoftGraphDismissReminder\MicrosoftGraphDismissReminderRequestBuilder;
use Microsoft\Graph\Generated\Me\Calendar\CalendarView\Item\MicrosoftGraphForward\MicrosoftGraphForwardRequestBuilder;
use Microsoft\Graph\Generated\Me\Calendar\CalendarView\Item\MicrosoftGraphSnoozeReminder\MicrosoftGraphSnoozeReminderRequestBuilder;
use Microsoft\Graph\Generated\Me\Calendar\CalendarView\Item\MicrosoftGraphTentativelyAccept\MicrosoftGraphTentativelyAcceptRequestBuilder;
use Microsoft\Graph\Generated\Me\Calendar\CalendarView\Item\MultiValueExtendedProperties\Item\MultiValueLegacyExtendedPropertyItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Calendar\CalendarView\Item\MultiValueExtendedProperties\MultiValueExtendedPropertiesRequestBuilder;
use Microsoft\Graph\Generated\Me\Calendar\CalendarView\Item\SingleValueExtendedProperties\Item\SingleValueLegacyExtendedPropertyItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Calendar\CalendarView\Item\SingleValueExtendedProperties\SingleValueExtendedPropertiesRequestBuilder;
use Microsoft\Graph\Generated\Models\Event;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the calendarView property of the microsoft.graph.calendar entity.
*/
class EventItemRequestBuilder 
{
    /**
     * Provides operations to manage the attachments property of the microsoft.graph.event entity.
    */
    public function attachments(): AttachmentsRequestBuilder {
        return new AttachmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the calendar property of the microsoft.graph.event entity.
    */
    public function calendar(): CalendarRequestBuilder {
        return new CalendarRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the extensions property of the microsoft.graph.event entity.
    */
    public function extensions(): ExtensionsRequestBuilder {
        return new ExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the instances property of the microsoft.graph.event entity.
    */
    public function instances(): InstancesRequestBuilder {
        return new InstancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the accept method.
    */
    public function microsoftGraphAccept(): MicrosoftGraphAcceptRequestBuilder {
        return new MicrosoftGraphAcceptRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cancel method.
    */
    public function microsoftGraphCancel(): MicrosoftGraphCancelRequestBuilder {
        return new MicrosoftGraphCancelRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the decline method.
    */
    public function microsoftGraphDecline(): MicrosoftGraphDeclineRequestBuilder {
        return new MicrosoftGraphDeclineRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dismissReminder method.
    */
    public function microsoftGraphDismissReminder(): MicrosoftGraphDismissReminderRequestBuilder {
        return new MicrosoftGraphDismissReminderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the forward method.
    */
    public function microsoftGraphForward(): MicrosoftGraphForwardRequestBuilder {
        return new MicrosoftGraphForwardRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the snoozeReminder method.
    */
    public function microsoftGraphSnoozeReminder(): MicrosoftGraphSnoozeReminderRequestBuilder {
        return new MicrosoftGraphSnoozeReminderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the tentativelyAccept method.
    */
    public function microsoftGraphTentativelyAccept(): MicrosoftGraphTentativelyAcceptRequestBuilder {
        return new MicrosoftGraphTentativelyAcceptRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the multiValueExtendedProperties property of the microsoft.graph.event entity.
    */
    public function multiValueExtendedProperties(): MultiValueExtendedPropertiesRequestBuilder {
        return new MultiValueExtendedPropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the singleValueExtendedProperties property of the microsoft.graph.event entity.
    */
    public function singleValueExtendedProperties(): SingleValueExtendedPropertiesRequestBuilder {
        return new SingleValueExtendedPropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the attachments property of the microsoft.graph.event entity.
     * @param string $id Unique identifier of the item
     * @return AttachmentItemRequestBuilder
    */
    public function attachmentsById(string $id): AttachmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['attachment%2Did'] = $id;
        return new AttachmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new EventItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/me/calendar/calendarView/{event%2Did}{?startDateTime*,endDateTime*,%24select}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Provides operations to manage the extensions property of the microsoft.graph.event entity.
     * @param string $id Unique identifier of the item
     * @return ExtensionItemRequestBuilder
    */
    public function extensionsById(string $id): ExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['extension%2Did'] = $id;
        return new ExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The calendar view for the calendar. Navigation property. Read-only.
     * @param EventItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?EventItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Event::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the instances property of the microsoft.graph.event entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Me\Calendar\CalendarView\Item\Instances\Item\EventItemRequestBuilder
    */
    public function instancesById(string $id): \Microsoft\Graph\Generated\Me\Calendar\CalendarView\Item\Instances\Item\EventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event%2Did1'] = $id;
        return new \Microsoft\Graph\Generated\Me\Calendar\CalendarView\Item\Instances\Item\EventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the multiValueExtendedProperties property of the microsoft.graph.event entity.
     * @param string $id Unique identifier of the item
     * @return MultiValueLegacyExtendedPropertyItemRequestBuilder
    */
    public function multiValueExtendedPropertiesById(string $id): MultiValueLegacyExtendedPropertyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['multiValueLegacyExtendedProperty%2Did'] = $id;
        return new MultiValueLegacyExtendedPropertyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the singleValueExtendedProperties property of the microsoft.graph.event entity.
     * @param string $id Unique identifier of the item
     * @return SingleValueLegacyExtendedPropertyItemRequestBuilder
    */
    public function singleValueExtendedPropertiesById(string $id): SingleValueLegacyExtendedPropertyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['singleValueLegacyExtendedProperty%2Did'] = $id;
        return new SingleValueLegacyExtendedPropertyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The calendar view for the calendar. Navigation property. Read-only.
     * @param EventItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EventItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

}
