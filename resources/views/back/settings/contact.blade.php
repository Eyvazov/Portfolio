@extends('back.layouts.master')
@section('sncss')
    <link rel="stylesheet" href="{{asset('back/')}}/plugins/summernote/summernote-bs4.min.css">
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Əlaqə Parametrləri</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Əsas Səhifə</a></li>
                            <li class="breadcrumb-item active">Əlaqə Parametrləri</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- general form elements -->
                <div class="card card-primary">
                    <!-- form start -->
                    <form action="{{route('admin.contact.update')}}" method="POST">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card-header">
                            <button type="submit" class="btn btn-primary float-right">Yadda Saxla</button>
                        </div>

                        <div id="exTab1" class="tab-content">
                            <ul class="nav nav-tabs nav-fill mb-3">
                                <li class="nav-item active">
                                    <a href="#az" class="nav-link active" data-toggle="tab">Azərbaycan Dili</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#en" class="nav-link" data-toggle="tab">İngilis Dili</a>
                                </li>
                            </ul>

                            <div class="tab-content clearfix">
                                <div class="tab-pane active" id="az">

                                    <!-- Tabs content -->
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="title">Başlıq</label>
                                            <input type="text" class="form-control"
                                                   value="{{old('title', isset($item->lang['az']['title']) ? $item->lang['az']['title'] : '')}}"
                                                   name="az[title]" id="title"
                                                   placeholder="Əlaqə Səhifəsi üçün Başlıq Daxil Edin...">
                                        </div>
                                        <div class="form-group">
                                            <label for="summernote">Mətn</label>
                                            <textarea class="summernote"
                                                      name="az[text]">{{old('text',  isset($item->lang['az']['text']) ? $item->lang['az']['text'] : '')}}</textarea>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <div class="tab-pane" id="en">

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="title">Başlıq</label>
                                            <input type="text" class="form-control"
                                                   value="{{old('title', isset($item->lang['en']['title']) ? $item->lang['en']['title'] : '')}}"
                                                   name="en[title]" id="title"
                                                   placeholder="Əlaqə Səhifəsi üçün Başlıq Daxil Edin...">
                                        </div>
                                        <div class="form-group">
                                            <label for="summernote">Mətn</label>
                                            <textarea class="summernote"
                                                      name="en[description]">{{old('description', isset($item->lang['en']['description']) ? $item->lang['en']['description'] : '')}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Yadda Saxla</button>
                        </div>
                </div>
                </form>
            </div>
            <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
@endsection

@section('snjs')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="{{asset('back/')}}/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function () {
            $('.summernote').summernote(
                {
                    height: 250,
                    placeholder: 'Əlaqə Səhifəsi üçün Mətn Daxil Edin...',
                }
            );
        })
    </script>
@endsection
