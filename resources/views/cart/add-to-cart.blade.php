<!-- resources/views/cart/add-to-cart.blade.php -->

@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Bubble Teas to Your Cart</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }

            h2 {
                color: #333;
            }

            div {
                border: 1px solid #ccc;
                margin: 10px;
                padding: 15px;
                background-color: #fff;
                width: calc(33.33% - 20px);
                float: left;
                box-sizing: border-box;
            }

            h3 {
                color: #0066cc;
            }

            p {
                color: #666;
            }

            img {
                width: 100%;
                height: 200px; /* Set a fixed height for consistency */
                object-fit: cover; /* Maintain aspect ratio and cover the container */
                margin-top: 10px;
            }

            form {
                margin-top: 10px;
            }

            label {
                display: block;
                margin-bottom: 5px;
                color: #333;
            }

            input {
                padding: 5px;
            }

            button {
                padding: 8px 12px;
                background-color: #0066cc;
                color: #fff;
                border: none;
                cursor: pointer;
            }

            button:hover {
                background-color: #005bb5;
            }

            .my-order-btn {
                display: block;
                position: fixed;
                top: 10px;
                right: 10px;
                padding: 10px;
                background-color: #0066cc;
                color: #fff;
                text-decoration: none;
                text-align: center;
            }

            .my-order-btn:hover {
                background-color: #005bb5;
            }

            /* Clearfix to clear the float and prevent layout issues */
            .clearfix::after {
                content: "";
                clear: both;
                display: table;
            }
        </style>
    </head>
    <body>

        <h2>Add Bubble Teas to Your Cart</h2>

        @foreach ($bubbleTeas as $bubbleTea)
            <div>
                <h3>{{ $bubbleTea->name }}</h3>
                <p>Description: {{ $bubbleTea->description }}</p>
                <p>Price: ${{ $bubbleTea->price }}</p>
                <img src="{{ asset($bubbleTea->image_path) }}" alt="{{ $bubbleTea->name }}">
                <form action="{{ route('addToCart', ['id' => $bubbleTea->id]) }}" method="post">
                    @csrf
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" value="1" min="1">
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
        @endforeach

        <div class="clearfix"></div>

        <a href="{{ route('myOrder') }}" class="my-order-btn">My Order</a>
    </body>
    </html>
@endsection
