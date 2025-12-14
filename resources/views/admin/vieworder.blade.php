@extends('admin.maindesign')

@section('view_orders')
<div class="container-fluid">

    <h3 class="mb-4 fw-bold">All Orders</h3>

    <div class="card shadow-sm">
        <div class="card-body table-responsive">

            <table class="table table-bordered table-hover align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>No.</th>
                        <th>Customer Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Product</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($orders as $key => $order)
                        <tr>
                            <td>{{ $key + 1 }}</td>

                            <td>{{ $order->receiver_name ?? $order->user->name }}</td>

                            <td>{{ $order->receiver_address }}</td>

                            <td>{{ $order->receiver_phone }}</td>

                            <td>{{ $order->product->product_title }}</td>

                            <td>
                                <img src="{{ asset('storage/products/' . $order->product->product_image) }}"
                                     width="60" height="60"
                                     class="rounded"
                                     style="object-fit: cover;">
                            </td>

                            <td>
                                ${{ number_format($order->product->product_price, 2) }}
                            </td>

                            <td>
                                <a href="#" class="btn btn-sm btn-primary">View</a>

                                <form action="#" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger"
                                            onclick="return confirm('Delete this order?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-muted">No orders found</td>
                        </tr>
                    @endforelse
                </tbody>

            </table>

        </div>
    </div>

</div>
@endsection
