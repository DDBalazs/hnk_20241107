<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\telepulesek;

class HnkController extends Controller
{
    public function Welcome(){
        return view('welcome', [
            'varos' => telepulesek::select('jogallas')
                                    ->where('jogallas','város')
                                    ->orWhere('jogallas','LIKE','megyeszékhely%')
                                    ->orWhere('jogallas','megyei jogi város')
                                    ->orWhere('jogallas','főváros')
                                    ->count('jogallas'),
            'nagykozseg' => telepulesek::select('jogallas')
                                        ->where('jogallas','nagyközség')
                                        ->count('jogallas'),
            'kozseg' => telepulesek::select('jogallas')
                                    ->where('jogallas','község')
                                    ->count('jogallas')
        ]);
    }

    public function All(){
        return view('all', [
            'result' => telepulesek::select('*')
                                    ->paginate(100)
        ]);
    }
    public function ABC(){
        return view('abc', [
            'abc' => telepulesek::selectRaw('substr(helyseg,1,1) as betu')
                                    ->distinct()
                                    ->get(),
            'act' => 'A',
            'result' => telepulesek::where('helyseg','LIKE','A%')
                                    ->paginate(100),
            'sv' => 1
        ]);
    }
    public function ABCP($p){
        return view('abc', [
            'abc' => telepulesek::selectRaw('substr(helyseg,1,1) as betu')
                                    ->distinct()
                                    ->get(),
            'act' => $p,
            'result' => telepulesek::where('helyseg','LIKE',$p.'%')
                                    ->paginate(100),
            'sv' => 1
        ]);

    }
    public function Adatlap($id){
        return view('adatlap',[
            'result' => telepulesek::find($id),
            'prev'   => telepulesek::where('id','<',$id)
                                    -> orderBy('id','DESC')
                                    -> first(),
            'next'   => telepulesek::where('id','>',$id)
                                    -> first(),
            'first'  => telepulesek::select('id')
                                    -> first(),
            'last'   => telepulesek::select('id')
                                    -> orderby('id','DESC')
                                    -> first()
        ]);
    }
    public function Varosok(){
        return view('telepules',[
            'darab' => telepulesek::select('jogallas')
                                    ->where('jogallas','város')
                                    ->orWhere('jogallas','LIKE','megyeszékhely%')
                                    ->orWhere('jogallas','megyei jogi város')
                                    ->orWhere('jogallas','főváros')
                                    ->count('jogallas'),
            'result' => telepulesek::select('*')
                                    ->where('jogallas','város')
                                    ->orWhere('jogallas','LIKE','megyeszékhely%')
                                    ->orWhere('jogallas','megyei jogi város')
                                    ->orWhere('jogallas','főváros')
                                    ->paginate(100),
            'h1'     => 'Város',
            'sv'     => 1
        ]);
    }
    public function Nagykozseg(){
        return view('telepules',[
            'darab' => telepulesek::select('jogallas')
                                    ->where('jogallas','nagyközség')
                                    ->count('jogallas'),
            'result' => telepulesek::select('*')
                                    ->where('jogallas','nagyközség')
                                    ->paginate(100),
            'h1'     => 'Nagyközség',
            'sv'     => 1
        ]);
    }
    public function Kozseg(){
        return view('telepules',[
            'darab' => telepulesek::select('jogallas')
                                    ->where('jogallas','község')
                                    ->count('jogallas'),
            'result' => telepulesek::select('*')
                                    ->where('jogallas','község')
                                    ->paginate(100),
            'h1'     => 'Község',
            'sv'     => 1
        ]);
    }
}
