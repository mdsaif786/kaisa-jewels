<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use App\Models\Author;
use App\Models\Binding;
use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Language;
use App\Models\Publisher;
use App\Models\StockStatus;
use Illuminate\Support\Str;

class BookItemImport implements ToCollection,WithStartRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
           //echo "<pre>";
           // print_r($collection->toArray());

           // die;

        foreach ($collection as $row) 
        {   
            $category_id=$this->importCategory($row[0]);
            $sub_category_id=$this->subCategory($row[1],$category_id);

            $get_binding_arr=$this->bindingStringToArray($row[19]);

            $book= new Book;
            $book->category_id=$category_id;
            $book->sub_category_id=$sub_category_id;
            $book->isbn_30=$row[2];
            $book->isbn_10=$row[3];
            $book->name=$row[4];
            $book->book_authors_id=$this->getAuthor($row[5]);
            $book->condition=$row[6];
            $book->description=$row[7];
            if(!empty($row[8])){
                $book->image=$row[8];
            }else {
                $book->image='https://via.placeholder.com/250x365';
            }
            
            $book->mrp=$row[9];
            $book->price=$row[10];
            $book->discount=Book::discountPercentageCalculator($row[9],$row[10]);
            $book->sku=$row[11];
            $book->quantity=$row[12];
            $book->no_of_pages=$row[13];
            
            $book->weight=$row[14];
            $book->dimensions=$row[15];
            $book->book_type=$this->getBookType($row[16]);
            $book->publisher_id=$this->getPublisher($row[17]);
            $book->stock_status_id=$this->getStockStatus($row[18]);
            $book->language_id=$this->getLang($row[20]);
            $book->status=$this->getStatus($row[21]);
            $book->publication_city_or_country=$row[22];
            $book->publication_date=Date('Y-m-d', strtotime($row[23]));
            $book->coupon_discount=$row[24];
            $book->no_of_qty_for_discount=$row[25];
            $book->coupon_code=$row[26];

            if(!empty($row[27]))
            {
                $slug=Str::slug($row[27]);
            }else {
               $slug=Str::slug($row[4]);
            }
            $book->slug=$slug;
            $book->meta_keywords=$row[28];
            $book->meta_description=$row[29];
            $book->handpicked=$this->boolStatus($row[30]);
            $book->new_arrival=$this->boolStatus($row[31]);
            $book->best_sellers=$this->boolStatus($row[32]);
            $book->all_time_classic=$this->boolStatus($row[33]);
            $book->save();
            $book->binding_types()->sync($get_binding_arr);

        }
    }


    public function startRow(): int
    {
        return 2;
    }



    public function importCategory($name)
    {   
        if(!$name){
            return '';
        }

         $category= BookCategory::where('name',$name)->first();
            if(!empty($category)){
                return $category->id;
            }else {
                 $category= new BookCategory();
                 $category->name=$name;
                 $category->show_in_mega_menu=1;
                 $category->show_in_menu=1;
                 $category->slug=Str::slug($name);
                 $category->status=1;
                 $category->save();
                 return $category->id;
            }
    }

     public function subCategory($name,$parent_id=0)
    {   
        if(!$name){
            return '';
        }

            $category= BookCategory::where(['name'=>$name,
                        'parent_category_id'=>$parent_id])
                        ->first();

            if(!empty($category)){
                return $category->id;
            }else {
                 $category= new BookCategory();
                 $category->name=$name;
                 $category->show_in_mega_menu=1;
                 $category->show_in_menu=1;
                 $category->parent_category_id=$parent_id;
                 $category->slug=Str::slug($name);
                 $category->status=1;
                 $category->save();
                 return $category->id;
            }
    }

    public function getAuthor($author_name)
    {
        if(!$author_name){
            return '';
        }

        $author=Author::where('name',$author_name)->first();

        if(!empty($author)){
            return $author->id;
        }else {
             $author=new Author ();
             $author->name=$author_name;
             $author->status=1;
             $author->save();
             return $author->id;
        }
    }

    public function getBookType($type)
    {
        if($type=='Normal Book' || $type=='normal book' || $type=='normalbook' || $type=='NormalBook' ||$type=='Normal' || $type=='normal'){
            return 1;
        }else {
            return 2;
        }
    }

    public function getPublisher($publisher_name)
    {
        if(!$publisher_name){
            return '';
        }

        $pub=Publisher::where('name',$publisher_name)->first();

        if(!empty($pub)){
            return $pub->id;
        }else {
            $new_pub= new Publisher();
            $new_pub->name=$publisher_name;
            $new_pub->status=1;
            $new_pub->save();
        }

    }

    public function getStockStatus($publisher_name)
    {
        if(!$publisher_name){
            return '';
        }

        $pub=StockStatus::where('name',$publisher_name)->first();

        if(!empty($pub)){
            return $pub->id;
        }else {
            $new_pub= new StockStatus();
            $new_pub->name=$publisher_name;
            $new_pub->save();
        }
    }

    public function getLang($language_name)
    {
         if(!$language_name){
            return '';
        }

        $pub=Language::where('name',$language_name)->first();

        if(!empty($pub)){
            return $pub->id;
        }else {
            $new_pub= new Language();
            $new_pub->name=$language_name;
            $new_pub->save();
        }
    }

    public function getStatus($status)
    {
        if($status=='Active' || $status=='active' || $status=="Active" || $status=="active"){
            return 1;
        }

        return 0;
    }

    public function boolStatus($status)
    {

        if($status=='Yes' || $status=='yes' || $status=="Yes" || $status=="yes"){
            return 1;
        }

        return 0;
    }

    public function bindingStringToArray($binding_string)
    {
        if(!$binding_string){
            return [];
        }

        $expload=explode(",",$binding_string);
        $binding_arr=[];

        foreach ($expload as $key => $value) {
           $binding=Binding::where('name',$value)->first();
           if(!empty($binding)){
             $binding_arr[]=$binding->id;
           }else {
             $new_bi=new Binding ();
             $new_bi->name=$value;
             $new_bi->status=1;
             $new_bi->save();
             $binding_arr[]=$new_bi->id;
           }
        }
        return $binding_arr;
    }

}
