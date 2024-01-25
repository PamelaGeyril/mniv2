@extends('adminlte::page')

@section('title', 'OPENLOOK-MNI')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="dataids">
                <h3 class="data-title" style="text-align:center; padding:20px 0px; text-decoration:underline">
                    ADMINISTRATOR BUTTONS</h3>
                <div class="row">
                    <div class="col-md-3 text-center">
                        <h4>Call Status</h4>
                        <button type="button" data-toggle="modal" data-target="#reset"
                            class="btn bg-danger">Reset</button>
                    </div>
                    <div class="modal right fade" id="reset" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title fs-5" id="exampleModalLabel" style="text-align: center">Enter
                                        your Authorized Code</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-info w-40 btn-form-submit" data-form="#reset"
                                        type="submit">Ok</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 text-center">
                        <h4>Mark Delivered</h4>
                        <button type="button" data-toggle="modal" data-target="#delivered"
                            class="btn bg-success">Delivered</button>
                    </div>
                    <div class="modal right fade" id="delivered" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title fs-5" id="exampleModalLabel" style="text-align: center">Enter
                                        your Authorized Code</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-info w-40 btn-form-submit" data-form="#reset"
                                        type="submit">Ok</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 text-center">
                        <h4>Load Data</h4>
                        <button type="button" data-toggle="modal" data-target="#upload"
                            class="btn bg-primary">Upload</button>
                    </div>
                    <div class="modal right fade" id="upload" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title fs-5" id="exampleModalLabel" style="text-align: center">Enter
                                        your Authorized Code</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-info w-40 btn-form-submit" data-form="#reset"
                                        type="submit">Ok</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <h4>Settings</h4>
                        <button type="button" data-toggle="modal" data-target="#setCalls" class="btn bg-info">Set
                            Calls</button>
                    </div>
                    <div class="modal right fade" id="setCalls" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title fs-5" id="exampleModalLabel" style="text-align: center">Enter
                                        your Authorized Code</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-info w-40 btn-form-submit" data-form="#reset"
                                        type="submit">Ok</button>
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
    .content-wrapper {
        background-image: url('/img/internet-technology-computer-display-360591.jpg');
        background-size: cover;
        background-position: center;
    }

    div#dataids {
        background: #fff;
        padding: 0px 15px 30px 15px;
        margin-top: 2em;
        border-radius: 10px;
        margin-bottom: 2em;
        height: auto;
    }

</style>
@stop

@section('js')
<script>
    console.log('Hi!');

</script>
@stop
