@extends('layout')
@section('content')


<h1 class="fw-bold">Gym Management Membership Info</h1>
<table class="table">
    <thead>
        <tr>
            <th>Membership Type</th>
            <th>Membership Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Gold</td>
            <td>200</td>
            <td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#edit">⚙️</button>
            </td>
        </tr>
    </tbody>
</table>
<a href="{{ route ('trainer') }}"><button class="btn btn-primary">Trainer Info</button></a>
<a href="{{ route ('welcome') }}"><button class="btn btn-primary">Member Info</button></a>

<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Membership rsettings</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Membership Type:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Gold">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Membership Price:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="200">
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