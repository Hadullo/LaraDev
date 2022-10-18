@extends('layouts.admin')


@section('head')
   <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endsection


@section('content')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">


                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">

                                       <h4>Create Post Page </h4>                                </div>
                                    <div class="card-body">
                                        <form  method = "POST" action = "{{ route('blog.store') }}"   enctype="multipart/form-data" >
                                            @csrf
                                                            <div class="form-group mb-3">
                                                              <label for="title"><b>Title</b></label>
                                                              <input type="text" class="form-control" name = "title" id="title" aria-describedby="title" placeholder="Enter Post Title">
                                                            </div>

                                                            @error('title')
                                                            <div class = alert-danger>{{ $message }}</div>
                                                            @enderror

                                                            <b>Image Upload</b>

                                                            <div class="form-group mb-3">
                                                                <label for="exampleFormControlFile1">Upload Post Image</label>
                                                                <input type="file"  name = "imagep" id  = "imagep "class="form-control-file">
                                                              </div>
                                                              @if($errors->first('imagep'))
                                                            <div class = alert-danger>{{ $errors->first('imagep') }}</div>
                                                             @endif


                                                             <b>Comments</b>
                                                            <div class="form-group form-check">

                                                                <div class="input-group mb-3">

                                                                    <textarea class="form-control" id="body" name = "body" rows="3"   placeholder="Posts  Content" value = "{{ old('body') }}"></textarea>
                                                                    <div class="input-group-append">
                                                                      <div class="input-group-text">
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                  @if($errors->first('body'))
                                                                    <div class = alert-danger>{{ $errors->first('body') }}</div>
                                                                  @endif





                                                            <button type="submit" class="btn btn-primary">Submit</button>

                                        </form>

									</div>
                                </div>
                            </div>

                        </div>


                    </div>
                </main>

@endsection

@section('scripts')
<script>CKEDITOR.replace( 'body' );</script>
@endsection
