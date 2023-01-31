<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\Item\Axes\ValueAxis\MajorGridlines;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Returns a gridlines object that represents the major gridlines for the specified axis. Read-only.
*/
class MajorGridlinesRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
