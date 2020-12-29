<?php

namespace App\Http\Controllers;
use DB;
use App\Book;
use App\Copy;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = Book::orderBy('category')->paginate(7);
        return view('books.index', compact('books'));
        
    }

    public function indexAdmin()
    {
        //
        $books = Book::orderBy('category')->paginate(7);
        return view('books.indexAdmin', compact('books'));
        
    }

    
    public function create()
    {
        //
        return view('books.create');
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'ISBN'=>'required',
            'title'=>'required',
            'author'=>'required',
            'category'=>'required',
        ]);
        $book = new Book([
            'ISBN' => $request->get('ISBN'),
            'title' => $request->get('title'),
            'author' => $request->get('author'),
            'category' => $request->get('category'),
            'description' => $request->get('desc'),
        ]);
        if ($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/covers/',$filename);
            $book->image = $filename;
        }
        else
        {
            $book->image = '';
        }
        $book->save();
        return redirect('/admin/books')->with('success', 'Book added!');
    }

    
    public function show($id)
    {
        //
        $book = Book::find($id);
        $total = Copy::where('ISBN','=',$id)->where('available','=',1)->distinct('editor')->count();
        $nbr = Copy::select ('editor',DB::raw('count(*) as total'))->where('ISBN','=',$id)
                     ->where('available','=',1)->groupBy('editor')->get();
        return view('books.show',compact('book','total','nbr'));
    }


    public function showAdmin($id)
    {
        //
        $book = Book::find($id);
        $total = Copy::where('ISBN','=',$id)->where('available','=',1)->distinct('editor')->count();
        $nbr = Copy::select ('editor',DB::raw('count(*) as total'))->where('ISBN','=',$id)
                     ->where('available','=',1)->groupBy('editor')->get();
        return view('books.showAdmin',compact('book','total','nbr'));
    }



    public function edit($ISBN)
    {
        $book = Book::find($ISBN);
        return view('books.edit',compact('book'));
    }

    public function update(Request $request, $ISBN)
    {
        $book = Book::find($ISBN);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->description = $request->desc;
        $book->category = $request->category;

        if ($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/covers/',$filename);
            $book->image = $filename;
        }
        else
        {
            $book->image = '';
        }
        $book->save();
        return redirect('/admin/books')->with('success', 'Book updated!');
    }

    
    public function destroy($ISBN)
    {
        $book = Book::find($ISBN)->delete();
        return redirect('/admin/books')->with('success', 'Book deleted!');

    }
}
