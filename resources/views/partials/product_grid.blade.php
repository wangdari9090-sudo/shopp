<div id="product-list">
    <div class="row">
        @foreach($products as $product)
            @endforeach
    </div>
    
    <div class="luxury-pagination">
        {{ $products->links('pagination::bootstrap-5') }}
    </div>
</div>