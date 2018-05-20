<?php
namespace DL\AssetSource\Wikimedia\Api;

/*
 * This file is part of the DL.AssetSource.Pexels package.
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

class WikimediaQueryResult
{

    /**
     * @var \ArrayObject
     */
    protected $assets = [];

    /**
     * @var \ArrayIterator
     */
    protected $assetIterator;

    /**
     * @var int
     */
    protected $totalResults = 0;

    /**
     * @param array $assets
     * @param int $totalResults
     */
    public function __construct(array $assets, int $totalResults)
    {
        $this->assets = new \ArrayObject($assets);
        $this->assetIterator = $this->assets->getIterator();
        $this->totalResults = $totalResults;
    }

    /**
     * @return \ArrayObject
     */
    public function getAssets(): \ArrayObject
    {
        return $this->assets;
    }

    /**
     * @return \ArrayIterator
     */
    public function getAssetIterator(): \ArrayIterator
    {
        return $this->assetIterator;
    }

    /**
     * @return int
     */
    public function getTotalResults(): int
    {
        return $this->totalResults;
    }
}
