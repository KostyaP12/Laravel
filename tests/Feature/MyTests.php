<?php


use Tests\TestCase;

class MyTests extends TestCase
{
    public function testHome()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function testNews()
    {
        $response = $this->get('/news');
        $response->assertStatus(200);
    }
    public function testAdmin()
    {
        $response = $this->get('/admin');
        $response->assertStatus(200);
    }
}
