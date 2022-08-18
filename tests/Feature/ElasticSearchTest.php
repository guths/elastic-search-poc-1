<?php

namespace Tests\Feature;

use App\Models\Log;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ElasticSearchTest extends TestCase
{

    //teste utilizando busca com o orm no mysql
    public function test_orm_default_query()
    {
        $logs = Log::query()->where('message', 'like', '%Veniam%')->get();

        $this->assertNotEmpty($logs);
    }

    //teste utilizando o pacote elasticquent fazendo a busca pelo campo message
    public function test_elastic_search_query()
    {
        $logs = Log::searchByQuery(['match' => ['message' => 'Veniam']]);
        $this->assertNotEmpty($logs);
    }


}
