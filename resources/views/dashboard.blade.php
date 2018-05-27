@extends('layouts.apps')
@section('content')

    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12">
                    <div class="card white-grey ">
                        <div class="card-content dark-text">
                            <span class="card-title">Home</span>
                            <form>
                                <div class="row">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label for="text" class=" form-control-label">Category</label>
                                        </div>
                                        <div class="col s6" style="margin-top:5%">
                                            <select class="browser-default">
                                                <option value="" disabled selected>Choose your option</option>
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label for="text" class=" form-control-label">Sub Category</label>
                                        </div>
                                        <div class="col s6" style="margin-top:5%">
                                            <select class="browser-default">
                                                <option value="" disabled selected>Choose your option</option>
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <center>
                                        <div class="row">
                                            <div id="chartContainer" style="height: 300px; width: 70%;"></div>
                                        </div>
                                    </center>
                                </div>
                            </form>

                            <div>
                                <span class="card-title">Table Project</span>
                                <table class="responsive-table centered highlight striped">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pemilik Project</th>
                                        <th>Nama Project</th>
                                        <th>Tanggal Target Project</th>
                                        <th>Nilai Target</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php $i = 1?>
                                    @foreach($category as $c)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$c->nama}}</td>
                                            <td>{{$c->project}}</td>
                                            <td>{{$c->tgl_target}}</td>
                                            <td>{{$c->target}}</td>
                                        </tr>
                                    @endforeach
                                    <?php ;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection