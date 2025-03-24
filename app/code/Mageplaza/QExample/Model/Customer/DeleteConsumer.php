<?php
namespace Mageplaza\QExample\Model\Customer;

use Magento\Customer\Api\Data\CustomerInterface;
use Psr\Log\LoggerInterface;

/**
* Class DeleteConsumer
* @package Mageplaza\QExample\Model\Customer
*/
class DeleteConsumer
{
    private $logger;
    
    /**
    * DeleteConsumer constructor.
    */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
    * @param CustomerInterface $customer
    */
    public function processMessage(CustomerInterface $customer)
    {
        $this->logger->info('Received message: ' . $customer->getFirstname());
    }
}