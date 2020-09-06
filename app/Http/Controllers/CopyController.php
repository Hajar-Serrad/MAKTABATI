<?php

namespace App\Http\Controllers;
use App\Copy;
use App\Book;
use Illuminate\Http\Request;

class CopyController extends Controller
{

    public function add(Request $request)
    {
        $books = Book::all();
        $ISBN = $request->ISBN;
        $number = $request->number;
        return view('copies.create',compact('books','ISBN','number'));
    }
 
    public function store(Request $request)
    {
        //
        $request->validate([
            'ISBN'=>'required',
            'editor'=>'required'
        ]);
        
        $number = Copy::where("ISBN","=",$request->ISBN)->latest('copy_nbr')->count();
        if($number)
        {
            $nbr = Copy::where("ISBN","=",$request->ISBN)->latest('copy_nbr')->first();
            for($i=0; $i<$request->number; $i++)
            {
                $copy = new Copy([
                    'ISBN' => $request->get('ISBN'),
                    'editor' => $request->get('editor')
                ]);
                $copy->copy_nbr = ++$nbr->copy_nbr;
                $copy->save();
            }
        }
        else
        {
            $nbr = 1;
            for($i=0; $i<$request->number; $i++)
            {
                $copy = new Copy([
                    'ISBN' => $request->get('ISBN'),
                    'editor' => $request->get('editor')
                ]);
                $copy->copy_nbr = $nbr++;
                $copy->save();
            }
        }
       
        return redirect('/admin/books')->with('success', 'Copies added!');
    }

    public function update1(Request $request)
    {
        $ISBN = $request->ISBN;
        $editor = $request->editor;
        return view('copies.edit',compact('ISBN','editor'));
    }

    public function update2(Request $request)
    {
        $request->validate([
            'newEditor'=>'required',
        ]);
        $copies = Copy::where('ISBN','=',$request->ISBN)->where('editor','=',$request->oldEditor)->get();
        foreach($copies as $copy)
        {
            $copy->editor =  $request->get('newEditor');
            $copy->save();
        }  
        
        return redirect()->route('index')->with('success', 'Copies updated!');
    }

    public function destroy($ISBN)
    {
        Copy::where("ISBN","=",$ISBN)->delete();
        return redirect()->route('index')->with('success', 'Copies deleted!');
    }
    public function delete(Request $request)
    {
        Copy::where("ISBN","=",$request->ISBN)->where("editor","=",$request->editor)->where("available","=",1)
              ->latest('copy_nbr')->first()->delete();
        return redirect()->route('index')->with('success', 'Copy deleted!');
    }
}
