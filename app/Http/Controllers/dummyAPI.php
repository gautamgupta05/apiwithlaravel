<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
        function getData(){
            return ['name'=>'Jacky',
                    'email'=>'jacky@email.com ',
                'address'=>'America'];
        }

}
