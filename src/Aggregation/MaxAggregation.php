<?php

namespace Erichard\ElasticQueryBuilder\Aggregation;

class MaxAggregation extends MetricAggregation
{
    public function getMetricName(): string
    {
        return 'max';
    }
}
