<?php

class UrlTest extends TestCase {

	public function testHomePage()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(200, $response->getStatusCode());
	}

	public function testAboutPage()
	{
		$response = $this->call('GET', '/about');

		$this->assertEquals(200, $response->getStatusCode());
	}

	public function testProjectsPage()
	{
		$response = $this->call('GET', '/projects');

		$this->assertEquals(200, $response->getStatusCode());
	}

	public function testContactPage()
	{
		$response = $this->call('GET', '/contact');

		$this->assertEquals(200, $response->getStatusCode());
	}

	public function test404Page()
	{
		$response = $this->call('GET', '/foo');

		$this->assertEquals(404, $response->getStatusCode());
	}

}
