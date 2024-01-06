@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Your Cart</title>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
                position: relative;
            }

            h2 {
                color: #333;
                text-align: center;
                margin-top: 20px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            thead {
                background-color: #333;
                color: #fff;
            }

            th, td {
                border: 1px solid #ddd;
                padding: 10px;
                text-align: left;
            }

            td img {
                max-width: 50px;
                height: auto;
            }

            form {
                display: inline-block;
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

            p {
                text-align: center;
                margin-top: 10px;
            }

            .action-buttons {
                position: absolute;
                top: 10px;
                right: 10px;
                display: flex;
                align-items: center;
            }

            .add-to-cart-button {
                margin-right: 10px;
            }

            /* Adjustments for responsiveness */
            @media (max-width: 768px) {
                th, td {
                    display: block;
                    width: 100%;
                    box-sizing: border-box;
                }

                td img {
                    max-width: 100%;
                    height: auto;
                }

                form {
                    display: block;
                    margin-top: 10px;
                }

                .action-buttons {
                    position: static;
                    margin-top: 10px;
                    margin-bottom: 10px;
                }
            }
        </style>
    </head>
    <body>
        <div class="action-buttons">
            <a href="{{ route('showAddToCart') }}" class="add-to-cart-button">
                <button>Order Now</button>
            </a>
        </div>

        <h2>Your Cart</h2>

        @if ($cart && count($cart) > 0)
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $itemId => $item)
                        <tr>
                            <td>
                                @if (isset($item['image_path']))
                                    <img src="{{ asset($item['image_path']) }}" alt="{{ $item['name'] }}" style="max-width: 50px;">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>{{ $item['name'] }}</td>
                            <td>${{ $item['price'] }}</td>
                            <td>
                                <form action="{{ route('updateCart', ['id' => $itemId]) }}" method="post">
                                    @csrf
                                    <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1">
                                    <button type="submit">Update</button>
                                </form>
                            </td>
                            <td>${{ $item['price'] * $item['quantity'] }}</td>
                            <td>
                                <form action="{{ route('removeFromCart', ['id' => $itemId]) }}" method="post">
                                    @csrf
                                    <button type="submit">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <p>Total: ${{ $cartTotal }}</p>

            <form action="{{ route('checkout') }}" method="post">
                @csrf
                <button type="submit">Checkout</button>
            </form>
        @else
            <p>Your cart is empty.</p>
        @endif
    </body>
    </html>
@endsection
