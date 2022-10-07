<?php

 namespace Piyush\Parag\Observer;

 

use Magento\Framework\Event\Observer;

use Magento\Framework\Event\ObserverInterface;

 

class ChangeDisplayText implements ObserverInterface

{

    /**

     * Below is the method that will fire whenever the event runs!

     *

     * @param Observer $observer

     */

    public function execute(Observer $observer)

    {

        $product = $observer->getProduct();

        $originalName = $product->getName();

        $modifiedName = $originalName . ' - Piyush';

        $product->setName($modifiedName);

    }

}