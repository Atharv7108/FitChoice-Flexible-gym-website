@extends('layouts.main')

@section('title', 'My Gym')

@section('content')
<div class="py-12">
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Gym Information</h5>
                    <button class="btn btn-sm btn-primary">Edit</button>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="gymName" class="form-label">Gym Name</label>
                            <input type="text" class="form-control" id="gymName" value="Fitness First">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" rows="3">123 Fitness Street, Muscle City</textarea>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" value="+1234567890">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" value="info@fitness-first.com">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" rows="5">State-of-the-art fitness facility with the latest equipment and professional trainers.</textarea>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Membership Plans</h5>
                    <button class="btn btn-sm btn-primary">Add Plan</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Duration</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Basic</td>
                                    <td>1 Month</td>
                                    <td>$29.99</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-info">Edit</button>
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Premium</td>
                                    <td>3 Months</td>
                                    <td>$79.99</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-info">Edit</button>
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Gym Profile Image</h5>
                </div>
                <div class="card-body">
                    <img src="https://via.placeholder.com/300x200" class="img-fluid rounded mb-3" alt="Gym Profile">
                    <div class="d-grid">
                        <button class="btn btn-primary">Change Image</button>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Operating Hours</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label d-flex justify-content-between">
                                <span>Monday - Friday</span>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" checked>
                                </div>
                            </label>
                            <div class="input-group mb-2">
                                <input type="time" class="form-control" value="06:00">
                                <span class="input-group-text">to</span>
                                <input type="time" class="form-control" value="22:00">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label d-flex justify-content-between">
                                <span>Saturday</span>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" checked>
                                </div>
                            </label>
                            <div class="input-group mb-2">
                                <input type="time" class="form-control" value="08:00">
                                <span class="input-group-text">to</span>
                                <input type="time" class="form-control" value="20:00">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label d-flex justify-content-between">
                                <span>Sunday</span>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" checked>
                                </div>
                            </label>
                            <div class="input-group mb-2">
                                <input type="time" class="form-control" value="10:00">
                                <span class="input-group-text">to</span>
                                <input type="time" class="form-control" value="18:00">
                            </div>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary">Save Hours</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 