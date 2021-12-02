@extends('welcome')
@section('content')



<section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh mục</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-products-->
                            @foreach($category as $key => $cate)                          
                                <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
                                </div>
                                </div>    
                            @endforeach                                                                                 
                                                       
                        </div><!--/category-products-->
                    
                   
                    </div>
                </div>
                
               
               @yield('contenx')
               @yield('contentt')
                    
                    
                                                                               
                </div>
            </div>
        </div>
    </section>



@endsection