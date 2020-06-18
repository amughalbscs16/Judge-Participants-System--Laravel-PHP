<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JudgeTeams extends Model
{
    protected $fillable = [
    	'team_id', 'judge_id', 'Q1', 'comments_q1', 'Q2', 'comments_q2', 'Q3', 'comments_q3', 'Q4', 'comments_q4', 'Q5', 'comments_q5', 'Q6', 'comments_q6', 'assessment', 'total_score', 'check'
	];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = [
        'id'
    ];
    protected $hidden = [
        'remember_token',
    ];
}
