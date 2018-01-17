<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DB;
use App\Resursi;
use App\Gramata;
use App\Zurnals;
use Mail;
use App\Mail\BookOrder;
use Auth;

class ResursiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


public function __construct() {
        // only Admin has access
       $this->middleware('admin')->only(['create','store','update', 'edit', 'destroy']);
    }



    public function home(Request $request){
        $init=$request->kd;
        if($init=='2'){ $article=Resursi::all()->sortBy('nosaukums');};
        if($init=='3'){ $article=Resursi::all()->sortBy('gads');};

       if($init!='2' && $init!='3') $article=Resursi::all()->sortBy('id');
       
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

        $data = $request->all();

        $this->validate($request, [
            'autors' => 'nullable',
            'gads' => 'nullable|numeric|between:500,2018',
            'nosaukums' => 'required|max:100',
            'formats' => 'required|max:60',
            'udk' => 'required|max:60',
            'atslegvardi' => 'required|max:100',
            'lpp' => 'required|numeric',
            'gramata' => 'nullable|exists:gramata,ISBN',
            'zurnals' => 'nullable|exists:zurnals,ISSN',
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


  return redirect('/crud')->with('info','Veiksmīgi pievienots!' );
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
            'gads' => 'nullable|numeric|between:500,2018',
            'nosaukums' => 'required|max:100',
            'formats' => 'required|max:60',
            'udk' => 'required|max:60',
            'atslegvardi' => 'required|max:100',
            'lpp' => 'required|numeric',
            'gramata' => 'nullable|exists:gramata,ISBN',
            'zurnals' => 'nullable|exists:zurnals,ISSN',
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

    public function getData(Request $request){
               $name=$request->nosaukums;
         $resultats = DB::table('resurs')
            ->where('resurs.nosaukums', 'like', '%'.$name.'%')
            ->orderBy('resurs.id')
            ->get();

             
        return view('result', ['resultats'=>$resultats]);
    }

  public function search(Request $request){
      return view('search_result');
    }


public function advancedsearch(Request $request){

            $autors=$request->autors;
            $nosaukums=$request->nosaukums;
            $atsv=$request->atslegvardi;
            $no=$request->gads_no;
            $lidz=$request->lidz;

    $query = DB::table('resurs')
    ->orderBy('resurs.id');
            

    if($autors!=''){$query->where('resurs.autors','like', '%'.$autors.'%');}
    if($nosaukums!=''){$query->where("nosaukums",'like', '%'.$nosaukums.'%');}
    if($atsv!=''){$query->where("atslegvardi",'like', '%'.$atsv.'%');}
    if($no!=''){$query->where("gads", '>=', $no);}
    if($lidz!=''){$query->where("gads", '<=', $lidz);}
$resultats= $query->get(); 

    return view('result', ['resultats'=>$resultats]);


}

public function email(Request $request){

    Mail::to(Auth::user()->email)->send(new BookOrder());

return redirect('result')->with('info','Jums piegdādāts e-pasts!');
}


  
}
