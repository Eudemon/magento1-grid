<?php
/**
 * Created by PhpStorm.
 * User: eudem
 * Date: 11/28/2018
 * Time: 11:27 AM
 */



class Randy_HalfLife_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * @return array
     */
    public function getRadioColumnParams()
    {
        return array(
            'header' => 'Radio Active',
            'index' => 'radio_active',
            'type' => 'text',
        );
    }

}