<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * Botoes helper
 */
class BotoesHelper extends Helper
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    function linkView($title, $url)
    {
    	return $this->_View->Html->link($title, $url, ['class' => 'btn btn-primary btn-md fa fa-search']);

    }

    function linkEdit($title, $url)
    {
        return $this->_View->Html->link($title, $url, ['class' => 'btn btn-danger btn-md fa fa-edit']);

    }
    function postlinkDelete($title, $url, $confirmation)
    {
        $confirmation[]=['class' => 'btn btn-danger btn-md fa fa-delete'];
        return $this->_View->Form->postLink($title, $url, $confirmation);

    }
}
