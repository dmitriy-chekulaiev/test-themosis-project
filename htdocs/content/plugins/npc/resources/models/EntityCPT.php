<?php
/**
 * Created by PhpStorm.
 * User: nifontov
 * Date: 6/30/17
 * Time: 3:30 PM
 */

namespace Nepchure\Test\Models;

abstract class EntityCPT
{
    /**
     * Register Post Type
     */
    abstract protected function makePostType();

    /**
     * Add Advanced Custom Fields
     */
    abstract protected function addCustomFields();
}