@extends('layouts.user.app')

@section('content')
<div class="container">
    <h1>Welcome to EMN SHOE'S STORE</h1>

    <!-- Dashboard Overview -->
    <div class="row mb-5">
        <!-- Total Sales -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Total Sales
                </div>
                <div class="card-body">
                    <p>Total sales to date</p>
                </div>
            </div>
        </div>

        <!-- Total Products -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Total Products
                </div>
                <div class="card-body">
                    <p>Total number of shoes in stock</p>
                </div>
            </div>
        </div>

        <!-- Total Orders -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Total Orders
                </div>
                <div class="card-body">
                    <p>Total number of orders placed</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Products -->
    <h2>Featured Shoes</h2>
    <div class="row">
        <!-- Example Product 1 -->
        <div class="col-md-4">
          <div class="card">
    <img src="{{ asset('assets/images/shoe1.png') }}" class="card-img-top" alt="Running Shoe">
    <div class="card-body">
        <h5 class="card-title">Running Shoe</h5>
        <p class="card-text">$59.99</p>
        
            @csrf
            <button type="submit" class="btn btn-primary">Add to Cart</button>
        </form>
    </div>
</div>

        </div>

        <!-- Example Product 2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('assets/images/3.png') }}" class="card-img-top" alt="Running Shoe">
                <div class="card-body">
                    <h5 class="card-title">Casual Sneaker</h5>
                    <p class="card-text">$49.99</p>
                    
                        @csrf
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Example Product 3 -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('assets/images/2.png') }}" class="card-img-top" alt="Running Shoe">
                <div class="card-body">
                    <h5 class="card-title">formal Sneaker</h5>
                    <p class="card-text">$49.99</p>
                    
                        @csrf
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
