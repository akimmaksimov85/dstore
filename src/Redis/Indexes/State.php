<?php
/**
 * Update of list state
 *
 * @author Artur Turchin <a.turchin@artox.com>
 */

declare(strict_types=1);

namespace ArtoxLab\DStore\Redis\Indexes;

class State
{
    /**
     * Added items
     *
     * @var array
     */
    protected $added;

    /**
     * Deleted items
     *
     * @var array
     */
    protected $deleted;

    /**
     * Is list should flush all actual values
     *
     * @var bool
     */
    protected $isShouldBeFlushed;

    /**
     * State constructor.
     *
     * @param array $added             Added
     * @param array $deleted           Deleted
     * @param bool  $isShouldBeFlushed Is list should flush all actual values
     */
    public function __construct(array $added = [], array $deleted = [], bool $isShouldBeFlushed = false)
    {
        $this->added   = $added;
        $this->deleted = $deleted;
        $this->isShouldBeFlushed = $isShouldBeFlushed;
    }

    /**
     * Added items
     *
     * @return array
     */
    public function getAddedItems() : array
    {
        return $this->added;
    }

    /**
     * Has added items
     *
     * @return bool
     */
    public function hasAddedItems() : bool
    {
        return (empty($this->added) === false);
    }

    /**
     * Deleted items
     *
     * @return array
     */
    public function getDeletedItems() : array
    {
        return $this->deleted;
    }

    /**
     * Has deleted items
     *
     * @return bool
     */
    public function hasDeletedItems() : bool
    {
        return (empty($this->deleted) === false);
    }

    /**
     * Is list should flush all actual values
     *
     * @return bool
     */
    public function isShouldBeFlushed() : bool
    {
        return $this->isShouldBeFlushed;
    }

}
