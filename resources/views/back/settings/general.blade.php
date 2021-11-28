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
                        <h1>Ümumi Parametrlər</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Əsas Səhifə</a></li>
                            <li class="breadcrumb-item active">Ümumi Parametrlər</li>
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
                    <form action="{{route('admin.settings.general.update')}}" method="POST"
                          enctype="multipart/form-data">
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
                                    <a href="#1a" class="nav-link active" data-toggle="tab">Azərbaycan Dili</a>
                                </li>
                                <li class="nav-item"><a href="#2a" class="nav-link" data-toggle="tab">İngilis Dili</a>
                                </li>
                            </ul>

                            <div class="tab-content clearfix">
                                <div class="tab-pane active" id="1a">

                                    <!-- Tabs content -->
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="title">Başlıq</label>
                                            <input type="text" class="form-control" value="{{old('title', isset($item->lang['az']['title']) ? $item->lang['az']['title'] : '')}}"
                                                   name="az[title]" id="title"
                                                   placeholder="Sayt üçün Başlıq Daxil Edin...">
                                        </div>
                                        <div class="form-group">
                                            <label for="summernote">Açıqlama</label>
                                            <textarea class="summernote"
                                                      name="az[description]">{{old('description',  isset($item->lang['az']['description']) ? $item->lang['az']['description'] : '')}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Açar Sözlər</label>
                                            <input type="text" name="az[keywords]" value="{{old('keywords',  isset($item->lang['az']['keywords']) ? $item->lang['az']['keywords'] : '')}}"
                                                   class="form-control"
                                                   id="title"
                                                   placeholder="Sayt üçün Açar Sözlər Daxil Edin...">
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Müəllif</label>
                                            <input type="text" name="az[author]" value="{{old('keywords',  isset($item->lang['az']['author']) ? $item->lang['az']['author'] : '')}}"
                                                   class="form-control"
                                                   id="title"
                                                   placeholder="Sayt Müəllifinin Adını Daxil Edin...">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <div class="tab-pane" id="2a">

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="title">Başlıq</label>
                                            <input type="text" class="form-control" value="{{old('title', isset($item->lang['en']['title']) ? $item->lang['en']['title'] : '')}}"
                                                   name="en[title]" id="title"
                                                   placeholder="Sayt üçün Başlıq Daxil Edin...">
                                        </div>
                                        <div class="form-group">
                                            <label for="summernote">Açıqlama</label>
                                            <textarea class="summernote"
                                                      name="en[description]">{{old('description', isset($item->lang['en']['description']) ? $item->lang['en']['description'] : '')}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Açar Sözlər</label>
                                            <input type="text" name="en[keywords]" value="{{old('keywords', isset($item->lang['en']['keywords']) ? $item->lang['en']['keywords'] : '')}}"
                                                   class="form-control"
                                                   id="title"
                                                   placeholder="Sayt üçün Açar Sözlər Daxil Edin...">
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Müəllif</label>
                                            <input type="text" name="en[author]" value="{{old('author', isset($item->lang['en']['author']) ? $item->lang['en']['author'] : '')}}"
                                                   class="form-control"
                                                   id="title"
                                                   placeholder="Sayt Müəllifinin Adını Daxil Edin...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                <div class="row">
                    <div class="col-md-6 card p-4">
                        @if(isset($item->logo))
                            <div class="text-center">
                                <img src="{{asset($item->logo)}}" class="rounded"
                                     style="object-fit: cover; width: 150px; height: 100px;"
                                     alt="{{$item->title}}">
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="logo" class="custom-file-input" id="logo">
                                    <label class="custom-file-label" for="logo">Logo Seç</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 card p-4">
                        @if(isset($item->icon))
                            <div class="text-center">
                                <img src="{{asset($item->icon)}}" class="rounded"
                                     style="object-fit: cover; width: 150px; height: 100px;"
                                     alt="{{$item->title}}">
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="favicon">Favikon</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="favicon" class="custom-file-input"
                                           id="favicon">
                                    <label class="custom-file-label" for="favicon">Favikon Seç</label>
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
                    placeholder: 'Sayt üçün Açıqlama Daxil Edin...',
                }
            );
        })
    </script>
@endsection
