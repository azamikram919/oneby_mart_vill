<div class="card chart-order-status">
    <div class="card-header">
        <h5 class="font-weight-600 c-gray-5">{{ __('ORDER STATUS THIS MONTH') }}</h5>
    </div>
    <div class="card-block h-360">
        @if (max($orderStatus['count']))
            <canvas id="chart-donut-1" class="w-100 h-300px"></canvas>
        @else
            <h6 class="text-secondary">{{ __('No data found.') }}</h6>
        @endif
    </div>
</div>
<script>
    let chartOrderStatus = @json($orderStatus);
</script>
