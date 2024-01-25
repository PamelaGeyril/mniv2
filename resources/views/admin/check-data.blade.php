@extends('adminlte::page')

@section('title', 'OPENLOOK-MNI')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="dataids">
                <h3 class="data-title" style="text-align:center; padding-top:20px; text-decoration:underline">CHECK YOUR
                    DATA</h3>
                <div class="row">

                    <div class="col-md-12">
                        <div class="CheckData">
                            <hr>

                            <h5 style="text-align:center">Original Data</h5>
                            <div class="same-css-data data-searchnrdata">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <input type="text" name="originalinput" id="originalinput"
                                                    value="3217680010" class="form-control" />
                                            </div>
                                            <div class="col-md-4">
                                                <a id="originaldatabtn" class="btn btn-success">Search</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h5 style="text-align:center; padding-top:20px">Duplicate Added</h5>
                            <div class="same-css-data data-duplicate-searchnrdata">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <input type="text" name="duplicatedata" id="duplicatedatainput"
                                                    class="form-control" />
                                            </div>
                                            <div class="col-md-4">
                                                <a id="duplicatedatabtn" class="btn btn-success">Search</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<style>
    div#dataids {
        background: #fff;
        padding: 0px 15px 30px 15px;
        margin-top: 2em;
        border-radius: 10px;
        margin-bottom: 2em;
        height: auto;
    }

    h3.data-title {
        text-align: center;
        text-transform: uppercase;
        font-size: 25px;
        text-decoration: underline;
    }

    .content-wrapper {
        background-image: url('/img/database.jpg');
        background-size: cover;
        background-position: center;
    }

</style>
@stop

@section('js')
<script>
    console.log('Hi!');

</script>
@stop
