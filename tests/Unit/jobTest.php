<?php

use App\Models\employer;
use App\Models\job;

// it('belongs to an employer', function ()
// {
//     //*ARRANGE
//     $employer = employer::factory()->create();
// $job = job::factory()->create(
//     [
//         'employer_id'=>$employer->id,
//     ]
// );
//*ACT
// expect($job->employer->is($employer))->toBeTrue();
// });

it('can have a tag', function ()
{
    //*ARRANGE
$job = job::factory()->create();
$job->tag('frontend');
//*ACT
expect($job->tags)->toHaveCount(1);
});