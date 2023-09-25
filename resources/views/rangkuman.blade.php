<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            @if ($reportpesanan->isEmpty())
                <div class="inner">
                    <h3>0</h3>
                    <p>Permintaan Pengiriman</p>
                </div>
            @else
                <div class="inner">
                    <h3>{{ $reportpesanan->count() }}</h3>
                    <p>Permintaan Pengiriman</p>
                </div>
            @endif
            <div class="icon">
                <i class="fas fa-dolly-flatbed"></i>
            </div>
            <a href="#" class="small-box-footer">Lebih Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>53</h3>

                <p>Dalam Gudang</p>
            </div>
            <div class="icon">
                <i class="fas fa-warehouse"></i>
            </div>
            <a href="#" class="small-box-footer">Lebih Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>44</h3>

                <p>Dalam Pengiriman</p>
            </div>
            <div class="icon">
                <i class="fas fa-dolly"></i>
            </div>
            <a href="#" class="small-box-footer">Lebih Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>65</h3>

                <p>Paket Sampai</p>
            </div>
            <div class="icon">
                <i class="fas fa-people-carry"></i>
            </div>
            <a href="#" class="small-box-footer">Lebih Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
