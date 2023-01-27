@extends('layout')
@section('content')
<h1 class="fw-bold">Gym Management Trainer Info</h1>
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Specialization</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Testing ZXC</td>
            <td>testing@123456yahoo.com</td>
            <td>Biceps</td>
            <td>123456789</td>
            <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#edit">⚙️</button>
            </td>
        </tr>
    </tbody>
</table>
<a href="{{route('membership')}}"><button class="btn btn-primary">Membership Info</button></a>
<a href="{{route('welcome')}}"><button class="btn btn-primary">Member Info</button></a>
</div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Trainer settings</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Testing ZXC">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Email:</label>
                        <input type="text" class="form-control" id="recipient-name"
                            placeholder="testing@123456yahoo.com">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Specialization:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Biceps">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Phone:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="123456789">
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
@endsection