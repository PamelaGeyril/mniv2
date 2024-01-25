@extends('adminlte::page')

@section('title', 'OPENLOOK-MNI')

@section('content')
@include('layouts.includes.alert')
<div class="content p-3">
    <h1>Add User</h1>

    <form action="{{ route('users.add') }}" method="POST" style="width:500px" id="createUserForm">
        @csrf
        <div class="form-group" id="agentIdGroup">
            <label for="agent_id">Agent ID</label>
            <input type="text" name="agent_id" id="agent_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="user_type">User Type</label>
            <select name="user_type" id="user_type" class="form-control" required onchange="toggleAgentIdField()">
                @foreach (get_user_types() as $keyType => $type)
                <option value="{{ $keyType }}" @if ($type === 'agent') selected @endif> {{ $type }} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary w-100 btn-form-submit" type="submit" data-form="#createUserForm" id="submitButton">Save User</button>
        </div>
    </form>

    <script>
        function toggleAgentIdField() {
            var userType = document.getElementById("user_type").value;
            var agentIdGroup = document.getElementById("agentIdGroup");

            if (userType === "admin") {
                agentIdGroup.style.display = "none";
            } else {
                agentIdGroup.style.display = "block";
            }
        }
        toggleAgentIdField();

        document.addEventListener('DOMContentLoaded', function () {
            function disableSubmitButton() {
                var submitButton = document.getElementById('submitButton');
                submitButton.disabled = true;
                submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Saving...';
            }
            document.getElementById('createUserForm').addEventListener('submit', function () {
                disableSubmitButton();
            });
        });
    </script>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@endsection
