<?php

namespace App\Models;

use Elasticquent\ElasticquentTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    use ElasticquentTrait;

    protected $mappingProperties = array(
        'level' => [
            'type' => 'text',
            "analyzer" => "standard",
        ],
        'message' => [
            'type' => 'text',
            "analyzer" => "standard",
        ],
        'context' => [
            'type' => 'text',
            "analyzer" => "standard",
        ],
    );
}
