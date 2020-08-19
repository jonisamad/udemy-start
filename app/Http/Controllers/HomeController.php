<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }


    public function contact(){
        return view('contact');
    }

    public function blogspot($id, $welcome =1){
        $pages =[

            1=>  [
                'title'=>'Hello from the Page 1',
            ],
      
            2=>  [
                'title'=>'Hello from the Page 2',
            ],
      
            3=>  [
                'title'=>'Hello from the Page 3',
            ]
          ];
      
          $welcomes=[1 => '<h2>welcome di</h2>', 2=> '<b></b>'];
      
          return view('blogspot', [
              'data' => $pages[ $id],
              'welcome'=> $welcomes[$welcome],
          ]);
    }
}


