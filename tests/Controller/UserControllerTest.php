<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerControllerTest extends WebTestCase
{
    public function testTrueIsTrue(){
        $client = static::createClient();
        $client->request('GET', '/system_user/');
        $this->assertEquals(401, $client->getResponse()->getStatusCode());
    }

    public function index(){
        $client = static::createClient();
        $client->request('GET', '/api');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
