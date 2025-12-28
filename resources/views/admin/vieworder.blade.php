@extends('layouts.admin_main')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold text-dark mb-0">Order Management</h3>
        <span class="badge bg-soft-forest text-forest px-3 py-2 border">
            Total Orders: {{ $orders->total() }}
        </span>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light text-muted small text-uppercase">
                        <tr>
                            <th class="ps-4">No.</th>
                            <th>Voucher No.</th>
                            <th>Customer info</th>
                            <th>Shipping Address</th>
                            <th>Items</th>
                            <th class="text-center">Total Price</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($orders as $key => $order)
                            <tr>
                                <td class="ps-4 text-muted">{{ $orders->firstItem() + $key }}</td>
                                
                                <td class="fw-bold text-success">
                                    #{{ str_pad($order->user_order_number, 4, '0', STR_PAD_LEFT) }}
                                </td>

                                <td>
                                    <div class="fw-bold text-dark">{{ $order->user->name }}</div>
                                    <div class="small text-muted"><i class="bi bi-telephone me-1"></i>{{ $order->receiver_phone }}</div>
                                </td>

                                <td style="max-width: 200px;">
                                    <span class="small text-secondary">{{ $order->receiver_address }}</span>
                                </td>

                               <td>
    <div class="d-flex flex-column gap-2">
        @foreach($order->items as $item)
            <div class="d-flex align-items-center">
                @php 
                    // Safely get the first image whether it's an array or a string
                    $imgArray = collect($item->product->product_image);
                    $imgDisplay = $imgArray->first() ?? 'default.png';
                @endphp

                <img src="{{ asset('storage/products/' . $imgDisplay) }}"
                     width="35" height="35"
                     class="rounded border me-2 shadow-sm"
                     style="object-fit: cover;"
                     onerror="this.src='{{ asset('storage/products/default.png') }}'">
                
                <div class="small text-truncate" style="max-width: 120px;">
                    {{ $item->product->product_title }} 
                    <span class="text-muted fw-normal">(x{{ $item->quantity }})</span>
                </div>
            </div>
        @endforeach
    </div>
</td>

                                <td class="text-center">
                                    <span class="fw-bold text-dark">
                                        ${{ number_format($order->total_price, 2) }}
                                    </span>
                                </td>

                                <td class="text-center">
                                    @if($order->status == 'pending')
                                        <span class="badge rounded-pill bg-light text-secondary border px-3">Pending</span>
                                    @elseif($order->status == 'confirmed')
                                        <span class="badge rounded-pill bg-info text-white px-3">Confirmed</span>
                                    @elseif($order->status == 'delivered')
                                        <span class="badge rounded-pill bg-success px-3">Delivered</span>
                                    @else
                                        <span class="badge rounded-pill bg-light text-dark border px-3">{{ ucfirst($order->status) }}</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-5 text-muted">
                                    <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                                    No orders found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                
                <div class="d-flex justify-content-between align-items-center p-4 border-top">
                    <div class="small text-muted">
                        Showing {{ $orders->firstItem() }} to {{ $orders->lastItem() }} of {{ $orders->total() }} vouchers
                    </div>
                    <div class="luxury-pagination">
                        {{ $orders->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-soft-forest { background-color: rgba(25, 135, 84, 0.05); }
    .text-forest { color: #198754; }
    .table thead th { font-weight: 600; letter-spacing: 0.5px; padding: 15px 10px; }
    .table tbody td { padding: 15px 10px; }
</style>
@endsection