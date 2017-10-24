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
namespace Jcode\Data\Form\Field;

use Jcode\Data\Form\Field;

class Select extends Field
{

    protected $template = 'Jcode_Data::form/field/select.phtml';

    protected $autocomplete = 'off';

    protected $options;

    protected $multiple;

    public function getOptions()
    {
        return $this->options;
    }

    public function getMultiple()
    {
        return $this->multiple;
    }
}