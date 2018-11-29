<?php
/**
 * Created by PhpStorm.
 * User: eudem
 * Date: 11/28/2018
 * Time: 8:29 PM
 */

class Randy_HalfLife_Model_Observer {
    public function salesOrderGridCollectionLoadBefore($observer)
    {
        $collection = $observer->getOrderGridCollection();
        $select = $collection->getSelect();
        //add
    }
}

