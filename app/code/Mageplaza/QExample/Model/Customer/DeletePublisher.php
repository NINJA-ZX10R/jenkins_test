<?php
namespace Mageplaza\QExample\Model\Customer;

use Magento\Customer\Api\Data\CustomerInterface;
use Magento\Framework\MessageQueue\PublisherInterface;

class DeletePublisher
{
const TOPIC_NAME = 'customer.clean';

/**
* @var PublisherInterface
*/
private $publisher;

/**
* DeletePublisher constructor.
* @param PublisherInterface $publisher
*/
public function __construct(PublisherInterface $publisher)
{
$this->publisher = $publisher;
}

/**
* @param CustomerInterface $customer
*/
public function execute(CustomerInterface $customer)
{
    // echo  $customer->getId();
    // print_r($customer);
    // exit('stop');
$this->publisher->publish(self::TOPIC_NAME, $customer);
}
}