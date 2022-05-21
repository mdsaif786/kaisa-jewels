<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyBookRequest;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Author;
use App\Models\Binding;
use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Language;
use App\Models\Publisher;
use App\Models\StockStatus;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Imports\BookItemImport;
use Maatwebsite\Excel\Facades\Excel;
class BookController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('book_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Book::with(['category', 'sub_category', 'book_authors', 'publisher', 'stock_status', 'binding_types', 'language'])->select(sprintf('%s.*', (new Book)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'book_show';
                $editGate      = 'book_edit';
                $deleteGate    = 'book_delete';
                $crudRoutePart = 'books';

                return view('partials.datatablesActionsBook', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
           
            $table->editColumn('isbn_30', function ($row) {
                return $row->isbn_30 ? $row->isbn_30 : "";
            });
            $table->addColumn('author_name', function ($row) {
                return $row->book_authors ? $row->book_authors->name : '';
            });
             $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });

            $table->editColumn('price', function ($row) {
                return $row->price ? $row->price : "";
            });
            $table->editColumn('sku', function ($row) {
                return $row->sku ? $row->sku : "";
            });
            $table->editColumn('status', function ($row) {

              if($row->status==1){
                  return $label=sprintf('<span class="badge badge-primary">%s</span>','Active');
    
                }else {
                    $label=sprintf('<span class="badge badge-danger">%s</span>','Inactive');
                return $label;
                } 
            });

            $table->rawColumns(['actions', 'placeholder', 'best_sellers', 'all_time_classic','status']);

            return $table->make(true);
        }

        return view('admin.books.index');
    }

    public function create()
    {
        abort_if(Gate::denies('book_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = BookCategory::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $sub_categories = BookCategory::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $book_authors = Author::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $publishers = Publisher::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $stock_statuses = StockStatus::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $binding_types = Binding::all()->pluck('name', 'id');

        $languages = Language::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.books.create', compact('categories', 'sub_categories', 'book_authors', 'publishers', 'stock_statuses', 'binding_types', 'languages'));
    }

    public function store(StoreBookRequest $request)
    {
        $data=$request->all();
        if($request->has('image')){
            $path = Storage::disk('s3')->put('images', $request->image);
            $data['image']= Storage::disk('s3')->url($path);
        }

        if(!empty($request->slug))
        {
            $data['slug']=Str::slug($request->slug);
        }else {
            $data['slug']=Str::slug($request->name);
        }

        //let's calculate discount
        $data['discount']=Book::discountPercentageCalculator($request->mrp,$request->price);
        
        $book = Book::create($data);
        $book->binding_types()->sync($request->input('binding_types', []));

        return redirect()->route('admin.books.index');
    }


    private function generateUniqueSlug(String $slug,int $id=0)
    {
        $generatedSlug=Str::slug($slug);

    }

    public function edit(Book $book)
    {
        abort_if(Gate::denies('book_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = BookCategory::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $sub_categories = BookCategory::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $book_authors = Author::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $publishers = Publisher::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $stock_statuses = StockStatus::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $binding_types = Binding::all()->pluck('name', 'id');

        $languages = Language::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $book->load('category', 'sub_category', 'book_authors', 'publisher', 'stock_status', 'binding_types', 'language');

        return view('admin.books.edit', compact('categories', 'sub_categories', 'book_authors', 'publishers', 'stock_statuses', 'binding_types', 'languages', 'book'));
    }

    public function update(UpdateBookRequest $request, Book $book)
    {   
        $data=$request->all();
        if($request->has('image')){
            $path = Storage::disk('s3')->put('images', $request->image);
            $data['image']= Storage::disk('s3')->url($path);
        }
        if(!empty($request->slug))
        {
            $data['slug']=Str::slug($request->slug);
        }else {
            $data['slug']=Str::slug($request->name);
        }

         //let's calculate discount
        $data['discount']=Book::discountPercentageCalculator($request->mrp,$request->price);
        
        $book->update($data);
        $book->binding_types()->sync($request->input('binding_types', []));

        return redirect()->route('admin.books.index');
    }

    public function show(Book $book)
    {
        abort_if(Gate::denies('book_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $book->load('category', 'sub_category', 'book_authors', 'publisher', 'stock_status', 'binding_types', 'language');

        return view('admin.books.show', compact('book'));
    }

    public function destroy(Book $book)
    {
        abort_if(Gate::denies('book_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $book->delete();

        return back();
    }

    public function massDestroy(MassDestroyBookRequest $request)
    {
        Book::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function excelUpload(Request $request)
    {
        $request->validate([
            'excel_file' =>['required','mimes:xlsx'],
        ]);

        $path = Storage::disk('local')->put('file', $request->excel_file);
        $items=  Excel::import(new BookItemImport,$path);
 
        return back()->with('message', 'Book Item Uploade Successfully');

    }

    public function imageUpload(Request $request)
    {
        $request->validate([
            'image' =>['required','mimes:jpeg,bmp,png,jpg'],
        ]);


        $book=Book::FindOrFail($request->bookId);

        if($request->has('image')){
            $path = Storage::disk('s3')->put('images', $request->image);
            $book->image=Storage::disk('s3')->url($path);
        }
        $book->save();

        return back()->with('message', 'Image upload Successfully');

    }
}
