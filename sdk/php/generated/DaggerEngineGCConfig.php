<?php

/**
 * This class has been generated by dagger-php-sdk. DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dagger;

/**
 * TODO
 */
class DaggerEngineGCConfig extends Client\AbstractObject implements Client\IdAble
{
    /**
     * TODO
     */
    public function filters(): array
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('filters');
        return (array)$this->queryLeaf($leafQueryBuilder, 'filters');
    }

    /**
     * A unique identifier for this DaggerEngineGCConfig.
     */
    public function id(): DaggerEngineGCConfigId
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('id');
        return new \Dagger\DaggerEngineGCConfigId((string)$this->queryLeaf($leafQueryBuilder, 'id'));
    }

    /**
     * The minimum time since last use, in seconds.
     */
    public function minimumLastUseTimeSeconds(): int
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('minimumLastUseTimeSeconds');
        return (int)$this->queryLeaf($leafQueryBuilder, 'minimumLastUseTimeSeconds');
    }

    /**
     * The minimum total disk space used by cache entries, in bytes.
     */
    public function minimumTotalDiskSpaceByteSize(): int
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('minimumTotalDiskSpaceByteSize');
        return (int)$this->queryLeaf($leafQueryBuilder, 'minimumTotalDiskSpaceByteSize');
    }
}