<?php
namespace Mageplaza\QExample\Test\Unit\Model;

use PHPUnit\Framework\TestCase;
use Mageplaza\QExample\Model\SomeClass;
use Psr\Log\LoggerInterface;

class SomeClassTest extends TestCase
{
    /**
     * @var SomeClass
     */
    protected $someClass;
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Set up the test environment.
     */
    protected function setUp(): void
    {
        // สร้างอินสแตนซ์ของ SomeClass
        $this->someClass = new SomeClass();
    }

    /**
     * ทดสอบฟังก์ชัน add()
     */
    public function testAdd()
    {
        $this->logger->info('Testing...: ');
        // ทดสอบการบวกตัวเลข 2 ตัว
        $result = $this->someClass->add(2, 3);
        $this->assertEquals(5, $result);  // ตรวจสอบว่า 2 + 3 = 5 หรือไม่

        // ทดสอบกรณีของค่าลบ
        $result = $this->someClass->add(-2, 3);
        $this->assertEquals(1, $result);  // ตรวจสอบว่า -2 + 3 = 1 หรือไม่
    }
}
