@extends('admin.addnew')
@section('content')
        <div class="container">
           <div class="row">
               @extends('admin.message')
           </div>

           <div class="row">
               <div class="col-sm-12 col-lg-12">
                   {!!Form::open(['action' => 'PostsController@store', 'method' => 'POST'])!!}
                       {{form::label('title', 'Title')}}
                       {{form::text('Title', '', ['class'=>'form-control'])}}
                       <div class="form-group">
                           {{form::label('Body', 'Body')}}
                           {{form::textarea('Body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                       </div>
                       <div class="row">
                           <div class="col-sm-6">
                               <div class="form-group">
                                   {{form::label('Publish', 'Publish:  ')}}
                                   {{Form::select('Publish', ['Publish' => 'Publish', 'Publish Later' => 'Publish Later'], ['class'=> 'form-control', 'placeholder' => 'select one'])}}
                               </div>
                           </div>
                           <div class="col-sm-6">
                               <div class="form-group">
                                   {{form::label('Featured Image', 'Featured Image:    ')}}
                                   {{Form::file('featuredImage')}}
                               </div>
                           </div>
                           
                       </div>
                       <div class="form-group">
                           
                           {{form::label('CT', 'Categories & Tag')}}
                           {{Form::text('Category', '', ['class'=> 'form-control', 'placeholder' => 'Categories & Tag'])}}
                       </div>
                       {{form::submit('Submit', ['class' => 'btn btn-primary'])}}

                   {!!Form::close()!!}
               </div>
           </div>
       </div>
@endsection