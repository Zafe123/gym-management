@extends('layout')
@section('content')

<h1 class="fw-bold">Gym Management Member Info</h1>
<table class="table">
    <thead>
        <tr>
            <th>Trainer</th>
            <th>Membership</th>
            <th>Name</th>
            <th>Email</th>
            <th>Expiration</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Testing</td>
            <td>Gold</td>
            <td>Joshua Zafe</td>
            <td>testing@123yahoo.com</td>
            <td>December 32, 2023</td>
            <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#edit">⚙️</button>
            </td>
        </tr>
    </tbody>
</table>
<a href="{{route ('trainer')}}"><button type="button" class="btn btn-primary">Trainer Info</button></a>
<a href="{{route ('membership')}}"><button type="button" class="btn btn-primary">Membership
        Info</button></a>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">Create New
    Member</button>

<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">User settings</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    @csrf
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Trainer:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Testing">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Membership:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Gold">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Joshua Zafe">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Email:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="testing@123yahoo.com">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Expiration:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="December 32, 2023">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger">Delete Record</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2-->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New Member:</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route ('createmember')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Trainer:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Testing">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Membership:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Gold">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Joshua Zafe"
                            name="name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Email:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="testing@123yahoo.com">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Expiration:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="December 32, 2023">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection