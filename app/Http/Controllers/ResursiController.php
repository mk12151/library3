<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DB;
use App\Resursi;
use App\Gramata;
use App\Zurnals;
class ResursiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


public function __construct() {
        // only Admin has access
     //   $this->middleware('admin')->only(['create','store','update', 'destroy']);
    }

    public function home(){
        $article=Resursi::all();
        return view('crud', ['article'=>$article]);
    }



    public function index()
    {
    
    
        return view('result');
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //$article= Resursi::all();
      //  echo '<pre>';
        //print_r($article);
        //echo '</pre>';

        $data = $request->all();

        $this->validate($request, [
            'autors' => 'nullable',
            'gads' => 'nullable|numeric',
            'nosaukums' => 'required|max:100',
            'formats' => 'required|max:60',
            'udk' => 'required|max:60',
            'atslegvardi' => 'required|max:100',
            'lpp' => 'required|numeric',
            'gramata' => 'nullable|exists:gramata,ISBN',
            'zurnals' => 'nullable|exists:zurnals,id',
        ]);

        $i=$request->gramata;
        $k=$request->zurnals;

$ISBN = DB::table('gramata')
            ->where('gramata.ISBN', '=', $i)
            ->value('gramata.id');

$ISSN = DB::table('zurnals')
            ->where('zurnals.ISSN', '=', $k)
            ->value('zurnals.id');




        $objekts=new Resursi();
        $objekts->autors=$request->input('autors');
        $objekts->gads=$request->input('gads');
        $objekts->nosaukums=$request->input('nosaukums');
        $objekts->formats=$request->input('formats');
        $objekts->udk=$request->input('udk');
        $objekts->atslegvardi=$request->input('atslegvardi');
        $objekts->lpp=$request->input('lpp');
        $objekts->gramata()->associate(Gramata::find($ISBN));
        $objekts->zurnals()->associate(Zurnals::find($ISSN));
         $objekts->save();

        // echo "$i";
        // echo "$IS";

  return redirect('/crud')->with('info','Veiksmīgi pievienots!' );
   //  return redirect()->action('ResursiController@home', array($request->id))->withMessage('Successfully added new conference!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('show_result', array('resurs' => Resursi::findOrFail($id)));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $this->validate($request, [
            'autors' => 'nullable',
            'gads' => 'nullable|numeric',
            'nosaukums' => 'required|max:100',
            'formats' => 'required|max:60',
            'udk' => 'required|max:60',
            'atslegvardi' => 'required|max:100',
            'lpp' => 'required|numeric',
            'gramata' => 'nullable|exists:gramata,ISBN',
            'zurnals' => 'nullable|exists:zurnals,id',
        ]);

        $i=$request->gramata;
        $k=$request->zurnals;

$ISBN = DB::table('gramata')
            ->where('gramata.ISBN', '=', $i)
            ->value('gramata.id');

$ISSN = DB::table('zurnals')
            ->where('zurnals.ISSN', '=', $k)
            ->value('zurnals.id');


$data=array(
    'autors'=>$request->input('autors'),
    'gads'=>$request->input('gads'),
    'nosaukums'=>$request->input('nosaukums'),
    'formats'=>$request->input('formats'),
    'udk'=>$request->input('udk'),
    'atslegvardi'=>$request->input('atslegvardi'),
    'lpp'=>$request->input('lpp')
);

            
            Resursi::where('id',$id)
            ->update($data);
         return redirect('/crud')->with('info','Veiksmīgi izlabots!' );
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $article=Resursi::find($id);
        return view('update', ['article'=>$article]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Resursi::where('id',$id)
       ->delete();
        return redirect('/crud')->with('info','Veiksmīgi izdzēsts!' );

      
    }

    public function getData(){
        $data['data']=DB::table('resurs')->get();
        if(count($data)>0)
            {return view('result', $data);}
        else
            {return view('result');}
    }


    public function search(){
            {return view('search_result');}
    }
}
