<?php
declare(strict_types=1);

namespace Jaeger\Span;

use Jaeger\Span\Context\ContextAwareInterface;
use Jaeger\Thrift\Log;
use Jaeger\Thrift\Tag;

interface SpanInterface extends ContextAwareInterface
{
    public function start(int $startTimeUsec): SpanInterface;

    public function finish(int $durationUsec = 0): SpanInterface;

    public function addTag(Tag $tag): SpanInterface;

    public function addLog(Log $log): SpanInterface;

    public function withItem(string $key, $item): SpanInterface;

    public function getItem(string $key, $default = null);

    public function withoutItem(string $key): SpanInterface;

    public function isSampled(): bool;
}
