<?php
declare(strict_types=1);

namespace Jaeger\Process;

use Jaeger\Tag\LongTag;

class ProcessUidTag extends LongTag
{
    public function __construct()
    {
        parent::__construct('process.uid', getmyuid());
    }
}
