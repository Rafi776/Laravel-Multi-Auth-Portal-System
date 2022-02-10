<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HashFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    
    protected $fillable=[
    'disname', 'division', 'dissecretary', 'secphone', 'disemail', 'mtname', 'mtphone', 'mtemail'

    ];
}
