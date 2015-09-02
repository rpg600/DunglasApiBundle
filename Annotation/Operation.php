<?php

/*
 * This file is part of the DunglasApiBundle package.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Dunglas\ApiBundle\Annotation;

use Doctrine\Common\Annotations\Annotation\Target;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Operation annotation.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 *
 * @Annotation
 * @Target({"ANNOTATION"})
 */
class Operation
{
    /**
     * @var array
     */
    public $attributes;
    /**
     * @var Pagination
     */
    public $pagination;
}