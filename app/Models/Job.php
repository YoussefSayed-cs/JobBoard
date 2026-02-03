<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public static function getAllJobs()
    {

        return [[
            'title' => 'Software Engineer',
            'company' => 'Tech Corp',
            'location' => 'New York, NY',
            'description' => 'Develop and maintain web applications.'
        ], [
            'title' => 'Data Analyst',
            'company' => 'Data Inc.',
            'location' => 'San Francisco, CA',
            'description' => 'Analyze data to provide business insights.'
        ]];

    }

}
