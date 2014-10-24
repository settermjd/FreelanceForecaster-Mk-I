<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Short description for file
 *
 * Long description for file (if any)...
 *
 * PHP version 5.4
 *
 * @category   CategoryName
 * @package    PackageName
 * @author     Matthew Setter <matthew@maltblue.com>
 * @copyright  2014 Client/Author
 * @see        Enter if required
 * @since      File available since Release/Tag:
 */

namespace ForecasterTest\Controller;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase,
    Zend\Http\Response;


class IndexControllerTest extends AbstractHttpControllerTestCase
{
    protected $_validData;

    public function tearDown()
    {

    }

    public function setUp()
    {
        $this->setApplicationConfig(
            include __DIR__ . '/../../../../../config/application.config.php'
        );
        parent::setUp();
    }

    public function testCanDispatchToIndexPage()
    {
        $this->dispatch('/');
    }

}