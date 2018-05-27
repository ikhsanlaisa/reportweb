@extends('layouts.apps')
@section('content')

    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m6">
                    <div class="card white-grey ">
                        <div class="card-content dark-text">
                            <span class="card-title">FORM REKAP DATA HARIAN</span>
                            <form>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="first_name">Name</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input placeholder="Placeholder" name="name" id="first_name" type="text"
                                               class="validate">
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="text" class=" form-control-label">Tanggal</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input type="text" class="datepicker" id="tgl" name="tgl">
                                    </div>

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
                                        <label for="text" class=" form-control-label">Sub Category</label>
                                    </div>
                                    <div class="input-field col s12" style="margin-top:5%">
                                        <select class="browser-default" name="sub_category_id">
                                            <option value="" disabled selected>Choose your option</option>
                                            @foreach($subcategory as $s)
                                            <option value="{{$s->id}}">{{$s->sub_category}}</option>
                                                @endforeach
                                        </select>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="first_name">Progress Harian</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input placeholder="Placeholder" id="first_name" name="progress" type="text"
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