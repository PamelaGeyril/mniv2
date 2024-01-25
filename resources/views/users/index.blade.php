@extends('adminlte::page')

@section('title', 'OPENLOOK-MNI')

@section('plugins.Datatables', true)

@section('content')
    
    <div class="content p-3">

        <h1>All Users</h1>

        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>User Type</th>
                    <th>Agent ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $key => $user)
                    <tr>
                        <td>{{ ucfirst($user->user_type) }}</td>
                        <td>{{ $user->agent_id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <button type="button" data-toggle="modal" data-target="#editUser_{{ $user->id }}" class="btn bg-info"> Edit User </button>
                            
                            <button type="button" data-toggle="modal" data-target="#deleteUser_{{ $user->id }}" class="btn bg-danger"> Delete User </button>
                        
                        </td>
                    </tr>

                    <div class="modal right fade" id="editUser_{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title fs-5" id="exampleModalLabel">Edit User</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('users.update', $user->id) }}" method="POST" id="updateUserForm_{{$key}}">
                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <label for="">User type</label>
                                            <select name="user_type" class="form-control">
                                                @foreach (get_user_types() as $keyType => $type)
                                                    <option value="{{$keyType}}" {{ $user->user_type == $keyType ? 'selected' : '' }}> {{$type}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @if($user->user_type != 'admin')
                                            <div class="form-group" id="agentIdGroup">
                                                <label for="agent_id">Agent ID</label>
                                                <input type="text" name="agent_id" id="agent_id" class="form-control" value="{{ $user->agent_id }}">
                                            </div>
                                        @endif
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" name="name" id="" class="form-control" value="{{ $user->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" name="email" id="" class="form-control" value="{{ $user->email }}">
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-success w-100 btn-form-submit" data-form="#updateUserForm_{{$key}}" type="submit">Update User</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal right fade" id="deleteUser_{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title fs-5" id="exampleModalLabel">Delete User</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('users.delete', $user->id) }}" method="POST" id="deleteUserForm_{{$key}}">
                                        @csrf
                                        @method('delete')
                                        <p>Are you sure you want to delete {{ $user->name }}?</p>

                                        <div class="modal-footer">
                                            <button class="btn btn-danger w-100 btn-form-submit" type="submit" data-form="#deleteUserForm_{{$key}}" >Delete User</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection
