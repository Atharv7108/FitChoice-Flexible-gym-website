@extends('layouts.main')

@section('title', 'Explore Gyms')

@section('content')
<div class="py-12">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location" placeholder="City, Area or Zip Code">
                        </div>
                        <div class="col-md-3">
                            <label for="gymType" class="form-label">Gym Type</label>
                            <select class="form-select" id="gymType">
                                <option selected value="">All Types</option>
                                <option>Fitness Center</option>
                                <option>CrossFit</option>
                                <option>Yoga Studio</option>
                                <option>Weightlifting</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="priceRange" class="form-label">Price Range</label>
                            <select class="form-select" id="priceRange">
                                <option selected value="">All Prices</option>
                                <option>$0 - $50</option>
                                <option>$51 - $100</option>
                                <option>$101 - $200</option>
                                <option>$200+</option>
                            </select>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary w-100">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mb-3">
        <div class="col-12">
            <h4>Gyms Near You</h4>
        </div>
    </div>
    
    <div class="row">
        <!-- Gym Card 1 -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100">
                <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="Fitness First">
                <div class="card-body">
                    <h5 class="card-title">Fitness First</h5>
                    <p class="card-text">
                        <i class="fas fa-map-marker-alt text-danger"></i> 123 Fitness Street, City
                    </p>
                    <p class="card-text">State-of-the-art fitness facility with the latest equipment and professional trainers.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-primary">From $29.99/month</span>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="text-dark ms-1">4.5</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary w-100">View Details</a>
                </div>
            </div>
        </div>
        
        <!-- Gym Card 2 -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100">
                <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="PowerHouse Gym">
                <div class="card-body">
                    <h5 class="card-title">PowerHouse Gym</h5>
                    <p class="card-text">
                        <i class="fas fa-map-marker-alt text-danger"></i> 456 Power Avenue, City
                    </p>
                    <p class="card-text">Specializing in strength training with a wide range of free weights and machines.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-primary">From $39.99/month</span>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-dark ms-1">4.0</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary w-100">View Details</a>
                </div>
            </div>
        </div>
        
        <!-- Gym Card 3 -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100">
                <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="Yoga Heaven">
                <div class="card-body">
                    <h5 class="card-title">Yoga Heaven</h5>
                    <p class="card-text">
                        <i class="fas fa-map-marker-alt text-danger"></i> 789 Calm Street, City
                    </p>
                    <p class="card-text">Peaceful yoga studio offering various styles of yoga for all levels with expert instructors.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-primary">From $24.99/month</span>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="text-dark ms-1">5.0</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary w-100">View Details</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-12 d-flex justify-content-center">
            <nav aria-label="Gym pagination">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection 