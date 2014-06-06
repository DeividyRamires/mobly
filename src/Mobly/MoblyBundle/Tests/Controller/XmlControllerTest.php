<?php

namespace Mobly\MoblyBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class XmlControllerTest extends WebTestCase
{
    public function testXml()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/xml');
    }

}
