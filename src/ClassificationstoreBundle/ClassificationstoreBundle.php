<?php
/**
 * @category    ClassificationstoreBundle
 * @date        27/09/2018 10:15
 * @author      Wojciech Peisert <wpeisert@divante.co>
 * @copyright   Copyright (c) 2018 Divante Ltd. (https://divante.co/)
 */

namespace Divante\ClassificationstoreBundle;

use Pimcore\Extension\Bundle\Traits\PackageVersionTrait;
use Pimcore\Extension\Bundle\AbstractPimcoreBundle;

/**
 * Class ClassificationstoreBundle
 * @package Divante\ClassificationstoreBundle
 */
class ClassificationstoreBundle extends AbstractPimcoreBundle
{
    use PackageVersionTrait;

    /**
     * @return string
     */
    public function getComposerPackageName(): string
    {
        return 'divante-ltd/pimcore-classification-store-importer';
    }

    /**
     * @return string
     */
    public function getNiceName(): string
    {
        return 'Classificationstore Tools';
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return
            'Pimcore5 bundle that provides import and export for classification store structure and other facilities.';
    }

    /**
     * @return array
     */
    public function getJsPaths(): array
    {
        return [];
    }

    /**
     * @return array
     */
    public function getCssPaths(): array
    {
        return [];
    }
}
