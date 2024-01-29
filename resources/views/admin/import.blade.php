@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
@include('layouts.includes.alert')
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Import Leads</h6>
        </div>
        <form method="POST" id="importForm" action="{{ route('admin.importCsv') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group row">

                    <div class="col-md-12 mb-3 mt-3">
                        <p>Please Upload CSV in Given Format <a
                                target="_blank">Sample CSV Format</a></p>
                    </div>
                    {{-- File Input --}}
                    <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
                        <span style="color:red;">*</span>File Input(Datasheet)</label>
                        <input type="file" class="form-control"
                            id="exampleFile" name="file">

                            <span id="fileError" class="text-danger"></span>
                    </div>

                </div>
            </div>

            <div class="card-footer">
                <button type="submit" id="submitButton" class="btn btn-success btn-user float-right mb-3">Upload Data</button>
            </div>
        </form>
    </div>

</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
document.addEventListener('DOMContentLoaded', function () {
        function disableSubmitButton() {
            var submitButton = document.getElementById('submitButton');
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Uploading...';
        }

        document.getElementById('importForm').addEventListener('submit', function (event) {
            var fileInput = document.getElementById('exampleFile');
            var fileError = document.getElementById('fileError');
            
            if (!fileInput.value) {
                fileError.textContent = 'Please select a file.';
                event.preventDefault();
            } else {
                // Check file extension
                var fileName = fileInput.value.toLowerCase();
                if (!fileName.endsWith('.csv')) {
                    fileError.textContent = 'Please select a valid CSV file.';
                    event.preventDefault();
                } else {
                    fileError.textContent = ''; // Clear previous error messages
                    disableSubmitButton();
                }
            }
        });
    });

</script>
@stop
