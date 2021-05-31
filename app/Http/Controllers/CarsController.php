<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {/*select * from cars c'est la meme que
     $cars=Car::all();
    */
    /*select a specifique car 
      $cars=Car::where('name','=','Audi')
      ->get();
    */
    /*s'il existe il va nous afficher tout les données de voiture sinon il va afficher 404
        not found (firstOrFail gérer les exception)
        $cars=Car::where('name','=','tesla')
       ->firstOrFail();
    */
    /*afficher le nombre des cars
    print_r( Car::all()->count());
    */
    /*affficher le nombre des lignes qui ont le name audi
       print_r($cars=Car::where('name','Audi')->count());
    */
    /*afficher la somme
    print_r($cars=Car::sum('founded'));
    */
    /*afficher la moyenne
    print_r($cars=Car::avg('founded'))
    */
    /*$cars=Car::chunk(2,function($cars)
        {
            foreach($cars as $car)
            {
                print_r($car);
            }
        });
    */
     // dd($cars);
    // return view('cars/index');
    $cars=Car::all();
    return view('cars/index',[
        'cars'=>$cars
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /*la premiére méthode
        $car=new Car;
        $car->name=$request->input('name');
        $car->founded=$request->input('founded');
        $car->description=$request->input('description');
        $car->save();
        */
        //la deuxiéme méthode mais on doit spécifier un array dans model car qui est $fillable
        Car::create([
            'name'=>$request->input('name'),
            'founded'=>$request->input('founded'),
            'description'=>$request->input('description')
        ]);
        return redirect("/cars");
        
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find retourne un array dont on met first pour donner le premier élément
        $car=Car::find($id)->first();
        //dd($car);
        //retourne la page edit avec la valeur de car 
        return view('cars.edit')->with('car',$car);
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
        Car::where('id',$id)->update([
            'name'=>$request->input('name'),
            'founded'=>$request->input('founded'),
            'description'=>$request->input('description')
        ]);
        return redirect("/cars");
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {//dd($id);
        $car=Car::find($id)->first();
        $car->delete();
        return redirect("/cars");

    }
}
