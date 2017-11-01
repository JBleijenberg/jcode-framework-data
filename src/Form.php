<?php
/**
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the General Public License (GPL 3.0)
 * that is bundled with this package in the file LICENSE
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/GPL-3.0
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future.
 *
 * @category    docroot
 * @package     docroot
 * @author      Jeroen Bleijenberg <jeroen@jcode.nl>
 *
 * @copyright   Copyright (c) 2017 J!Code (http://www.jcode.nl)
 * @license     http://opensource.org/licenses/GPL-3.0 General Public License (GPL 3.0)
 */
namespace Jcode\Data;

use Jcode\Application;
use Jcode\Data\Form\Fieldset;
use Jcode\DataObject;

class Form extends DataObject
{

    protected $id;

    protected $fieldsets = [];

    protected $method = 'POST';

    protected $action;

    protected $encType = 'application/x-www-form-urlencoded';

    /**
     * Instantiate a new fieldset and return it
     *
     * @param $name
     * @return Fieldset|object
     * @internal param array $options
     */
    public function addFieldset($name) :Fieldset
    {
        $this->fieldsets[$name] = Application::getClass('\Jcode\Data\Form\Fieldset', [['label' => $name]]);

        return $this->fieldsets[$name];
    }

    /**
     * Return all added fieldsets
     *
     * @return array
     */
    public function getFieldsets()
    {
        return $this->fieldsets;
    }

    public function getFieldSet($name) :Fieldset
    {
        return $this->fieldsets[$name];
    }

    /**
     * Set form action
     *
     * @param $method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = (!in_array($method, ['POST', 'GET'])) ?: $method;

        return $this;
    }

    /**
     * Return form action
     *
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set encoding type
     *
     * @param $encType
     * @return $this
     */
    public function setEncType($encType)
    {
        $this->encType = $encType;

        return $this;
    }

    /**
     * Return form encoding type
     *
     * @return string
     */
    public function getEncType()
    {
        return $this->encType;
    }

    /**
     * @param string|int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }
}