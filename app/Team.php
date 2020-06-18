<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'project_name', 'judge_id', 'participants_no', 'check', 'ready'
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
