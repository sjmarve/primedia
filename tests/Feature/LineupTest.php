<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LineupTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void{
      parent::setUp();
      $this->artisan('db:seed');
    }

    /**
     * Test lineup returns 200
     *
     * @return void
     */
    public function testLineUpKfm()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/api/line-up/2019-12-12/kfm');

        $response->assertStatus(200);
    }

    /**
     * Test lineup returns 200
     *
     * @return void
     */
    public function testLineUpCapetalk()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/api/line-up/2019-12-12/capetalk');

        $response->assertStatus(200);
    }
    /**
     * Test lineup returns 200
     *
     * @return void
     */
    public function testLineUp702()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/api/line-up/2019-12-12/702');

        $response->assertStatus(200);
    }

    /**
     * Test lineup returns 200
     *
     * @return void
     */
    public function testLineUp947()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/api/line-up/2019-12-12/947');

        $response->assertStatus(200);
    }

    /**
     * Test lineup returns 200
     *
     * @return void
     */
    public function testLineUpNoneExistestStationSupplied()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/api/line-up/2019-12-12/asdfasdf');

        $response->assertStatus(422);
    }

    /**
     * Test lineup returns 200
     *
     * @return void
     */
    public function testLineUpInvalidDateSupplied()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/api/line-up/asdfasdf/kfm');

        $response->assertStatus(422);
    }
}
