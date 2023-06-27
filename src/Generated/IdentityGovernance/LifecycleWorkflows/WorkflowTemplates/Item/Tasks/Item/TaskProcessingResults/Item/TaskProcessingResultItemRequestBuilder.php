<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\WorkflowTemplates\Item\Tasks\Item\TaskProcessingResults\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\WorkflowTemplates\Item\Tasks\Item\TaskProcessingResults\Item\MicrosoftGraphIdentityGovernanceResume\MicrosoftGraphIdentityGovernanceResumeRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\WorkflowTemplates\Item\Tasks\Item\TaskProcessingResults\Item\Subject\SubjectRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\WorkflowTemplates\Item\Tasks\Item\TaskProcessingResults\Item\Task\TaskRequestBuilder;
use Microsoft\Graph\Generated\Models\IdentityGovernance\TaskProcessingResult;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the taskProcessingResults property of the microsoft.graph.identityGovernance.task entity.
*/
class TaskProcessingResultItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the resume method.
    */
    public function microsoftGraphIdentityGovernanceResume(): MicrosoftGraphIdentityGovernanceResumeRequestBuilder {
        return new MicrosoftGraphIdentityGovernanceResumeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the subject property of the microsoft.graph.identityGovernance.taskProcessingResult entity.
    */
    public function subject(): SubjectRequestBuilder {
        return new SubjectRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the task property of the microsoft.graph.identityGovernance.taskProcessingResult entity.
    */
    public function task(): TaskRequestBuilder {
        return new TaskRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new TaskProcessingResultItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/lifecycleWorkflows/workflowTemplates/{workflowTemplate%2Did}/tasks/{task%2Did}/taskProcessingResults/{taskProcessingResult%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The result of processing the task.
     * @param TaskProcessingResultItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?TaskProcessingResultItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [TaskProcessingResult::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * The result of processing the task.
     * @param TaskProcessingResultItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TaskProcessingResultItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

}
