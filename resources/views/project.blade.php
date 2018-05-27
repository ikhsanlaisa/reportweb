@extends('layouts.apps')
@section('content')

    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m6">
                    <div class="card white-grey ">
                        <div class="card-content dark-text">
                            <span class="card-title">TAMBAH PROJECT BARU</span>
                            <form action="/add_project" id="formEdit" method="post" enctype="multipart/form-data"
                                  class="form-horizontal">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="first_name">Pemilik Project </label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input placeholder="Pemilik Project " id="first_name" name="name" type="text" class="validate">
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="first_name">Nama Project </label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input placeholder="Nama Project " id="first_name"  name="project" type="text" class="validate">
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="text" class=" form-control-label">Target Tanggal Project</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input type="text" class="datepicker" id="tgl" name="tgl_target">
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="first_name">Target Project</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input placeholder="Placeholder" id="first_name" name="target" type="text" class="validate">
                                    </div>

                                    <div class="col s12">
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m6">
                        <div class="card white-grey ">
                            <div class="card-content dark-text">
                                <span class="card-title">TAMBAH SUB CATEGORY</span>
                                <form action="/add_sub_project" id="formEdit" method="post" enctype="multipart/form-data"
                                           class="form-horizontal">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label for="text" class=" form-control-label">Category</label>
                                        </div>
                                        <div class="input-field col s12" style="margin-top:5%">
                                            <select class="browser-default" name="category_id">
                                                <option value="" disabled selected>Choose your option</option>
                                                @foreach($category as $c)
                                                <option value="{{$c->id}}">{{$c->project}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="input-field col s12">
                                            <label for="first_name">Sub Category</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input placeholder="Placeholder" id="first_name" name="sub_category" type="text"
                                                   class="validate">
                                        </div>

                                        <div class="col s12">
                                            <button class="btn waves-effect waves-light" type="submit" name="action">
                                                Submit
                                                <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection