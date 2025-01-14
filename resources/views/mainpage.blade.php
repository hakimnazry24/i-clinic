@extends('layouts.layout')

@section('title', 'Medical Record Management')

@section('content')

<div class="container mt-5">
    <div class="row">
        <!-- Left Panel: User Profile -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="text-center">Full Name: John Doe</h5>
                </div>
                <div class="card-body">
                    <p><strong>Age:</strong> 35</p>
                    <p><strong>Contact:</strong> +60 145674567</p>
                    <p><strong>Medical History:</strong></p>
                    <ul>
                        <li>Hypertension</li>
                        <li>Diabetes</li>
                        <li>Asthma</li>
                    </ul>
                    <p><strong>Doctor:</strong> Dr. Smith</p>
                    <a href="#" class="btn btn-warning w-100">Edit Profile</a>
                </div>
            </div>
        </div>

        <!-- Right Panel: Medical Records -->
        <div class="col-md-8">
            <!-- Medical Records Table -->
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="text-center">Medical Records</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <input type="text" class="form-control w-75" placeholder="Search Records">
                        <button class="btn btn-primary">Search</button>
                    </div>
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Date</th>
                                <th>Type</th>
                                <th>Notes</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01/01/24</td>
                                <td>Consultation</td>
                                <td>Follow-up required</td>
                                <td>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>02/01/24</td>
                                <td>Lab Test</td>
                                <td>Bloodwork normal</td>
                                <td>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-success w-100">Add New Record</button>
                </div>
            </div>
            <!-- Medical Images Section -->
<div class="card shadow-sm mt-4">
    <div class="card-header bg-info text-white">
        <h5 class="text-center">Medical Images</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('storage/uploads/sample1.jpg') }}" alt="Medical Image" class="img-thumbnail">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('storage/uploads/sample2.jpg') }}" alt="Medical Image" class="img-thumbnail">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('storage/uploads/sample3.jpg') }}" alt="Medical Image" class="img-thumbnail">
            </div>
        </div>
        <form action="#" method="POST" enctype="multipart/form-data" class="mt-3">
            @csrf
            <input type="file" name="image" class="form-control">
            <button type="submit" class="btn btn-info w-100 mt-2">Upload</button>
        </form>
    </div>
</div>
</div>
</div>
</div>

@endsection
