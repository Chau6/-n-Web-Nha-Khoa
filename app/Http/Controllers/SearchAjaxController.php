<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function JmesPath\search;

class SearchAjaxController extends Controller
{
    public function PostSearchProduct(Request $request){
        $search = $request->searchProduct;
        $result = DB::table('category')->where('name','LIKE','%'+$search+'%')->orderBy('id')->get();
        $xhtml = '';
        foreach ($result as $product){
            $xhtml += '<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">';
            $xhtml += '<div class="single-blog-post">';
            $xhtml += '<div class="img-holder">';
            $xhtml += '<img src="{{ asset("images/"'+$product->images+')}}" alt="Awesome Image">';
            $xhtml += '<div class="categorie-button">';
            $xhtml += '<a class="btn-one" @switch('+$product->category_id+')';
            $xhtml += '@case(3)';
            $xhtml += 'href="{{route("client.pages.product_pages", ["slug"=>"toothbrushes"])}}"';
            $xhtml += '@break';
            $xhtml += '@case(4)';
            $xhtml += 'href="{{route("client.pages.product_pages", ["slug"=>"toothpaste"])}}"';
            $xhtml +='@break';
            $xhtml +='@case(5)';
            $xhtml +='href="{{route("client.pages.product_pages", ["slug"=>"dental-floss"])}}"';
            $xhtml +='@break';
            $xhtml +='@case(6)';
            $xhtml +='href="{{route("client.pages.product_pages", ["slug"=>"face-mask"])}}"';
            $xhtml +='@break';
            $xhtml +='@case(7)';
            $xhtml +='href="{{route("client.pages.product_pages", ["slug"=>"dental-picks-and-sticks"])}}"';
            $xhtml +='@break';
            $xhtml +='@case(8)';
            $xhtml +='href="{{route("client.pages.product_pages", ["slug"=>"tongue-scrapers"])}}"';
            $xhtml +='@break';
            $xhtml +='@case(9)';
            $xhtml +='href="{{route("client.pages.product_pages", ["slug"=>"oral-medicine"])}}"';
            $xhtml +='@break';
            $xhtml +='@default';
                                    
            $xhtml +='@endswitch >';
            $xhtml +='image.png<?php';
            $xhtml +='switch ('+$product->category_id+') {';
                $xhtml +='case "3":';
                $xhtml +='echo "Toothbrushes";';
                $xhtml +='break;';
                $xhtml +='case "4":';
                $xhtml +='  echo "Toothpaste";';
                $xhtml +='   break;';
                $xhtml +='case "5":';
                $xhtml +='    echo "Dental Floss";';
                $xhtml +='    break;';
                $xhtml +=' case "6":';
                $xhtml +=' echo "Face Mask";';
                $xhtml +=' break;';
                $xhtml +=' case "7":';
                $xhtml +=' echo "Dental Picks And Sticks";';
                $xhtml +=' break;';
                $xhtml +=' case "8":';
                $xhtml +=' echo "Tongue Scrapers";';
                $xhtml +=' break;';
                $xhtml +=' case "9":';
                $xhtml +=' echo "Oral Medicine";';
                $xhtml +=' break;';
                $xhtml +=' default:';
                $xhtml +=' break;';
                $xhtml +=' }';
                $xhtml +=' ?>';
                $xhtml +=' </a>';
                $xhtml +=' </div>';
                $xhtml +=' </div>';
                $xhtml +=' <div class="text-holder">';
                $xhtml +=' <div class="meta-box">';
                $xhtml +=' <div class="author-thumb">';
                $xhtml +=' <img src="{{ asset("images/'+$product->images+')}}" alt="Image">';
                $xhtml +=' </div>';
                $xhtml +=' <ul class="meta-info">';
                $xhtml +=' <li>{{date("d-m-Y", strtotime('+$product->created_at+'))}}</li>';
                $xhtml +=' </ul>    ';
                $xhtml +=' </div>';
                $xhtml +=' <h3 class="blog-title"><a href="">{{'+$product->name+'}}</a></h3>'; 
                $xhtml +=' <div class="text-box">';
                $xhtml +=' <p>{!!'+$product->price+'!!}.00$</p>';
                $xhtml +=' </div>';
                $xhtml +=' <div class="readmore-button">';
                $xhtml +=' <a class="btn-two" @switch('+$product->category_id+')';
                $xhtml +=' @case(3)';
                $xhtml +=' href="{{route("client.pages.product_infor",["id"=>'+$product->id+',"slug"=>"toothbrushes", "slug_infor"=>'+$product->slug+'])}}"';
                $xhtml +='@break';
                $xhtml +='@case(4)';
                $xhtml +=' href="{{route("client.pages.product_infor",["id"=>'+$product->id+',"slug"=>"toothpaste", "slug_infor"=>'+$product->slug+'])}}"';
                $xhtml +='@break';
                $xhtml +='@case(5)';
                $xhtml +=' href="{{route("client.pages.product_infor",["id"=>'+$product->id+',"slug"=>"dental-floss", "slug_infor"=>'+$product->slug+'])}}"';
                $xhtml +=' @break';
                $xhtml +='@case(6)';
                $xhtml +=' href="{{route("client.pages.product_infor",["id"=>'+$product->id+',"slug"=>"face-mask", "slug_infor"=>'+$product->slug+'])}}"';
                $xhtml +='@break';
                $xhtml +='@case(7)';
                $xhtml +=' href="{{route("client.pages.product_infor",["id"=>'+$product->id+',"slug"=>"dental-picks-and-sticks", "slug_infor"=>'+$product->slug+'])}}"';
                $xhtml +='@break';
                $xhtml +='@case(8)';
                $xhtml +=' href="{{route("client.pages.product_infor",["id"=>'+$product->id+',"slug"=>"tongue-scrapers", "slug_infor"=>'+$product->slug+'])}}"';
                $xhtml +='@break';
                $xhtml +='@case(9)';
                $xhtml +=' href="{{route("client.pages.product_infor",["id"=>'+$product->id+',"slug"=>"oral-medicine", "slug_infor"=>'+$product->slug+'])}}"';
                $xhtml +='@break';
                $xhtml +='@default';
                                    
                $xhtml +='@endswitch><span class="flaticon-next"></span>Reading</a>';
                $xhtml +='</div>  ';
                $xhtml +='</div>';
                $xhtml +='</div>';
                $xhtml +='</div>'; 
        }
        return $xhtml;
    }
}
