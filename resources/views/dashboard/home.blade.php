@extends('../layouts/main')
@section('content')
<div class="panel-header bg-danger-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                <h5 class="text-white op-7 mb-2">SIMORA ( Sistem Monitoring Kasus Dan Anggaran )</h5>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-5">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-title">Monitoring Kasus Per Subdit</div>
                    <div class="card-category">Data Kasus</div>
                    <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                        <div class="px-2 pb-2 pb-md-0 text-center">
                            <div id="circles-1"></div>
                            <h6 class="fw-bold mt-3 mb-0">Targer</h6>
                        </div>
                        <div class="px-2 pb-2 pb-md-0 text-center">
                            <div id="circles-2"></div>
                            <h6 class="fw-bold mt-3 mb-0">JTP</h6>
                        </div>
                        <div class="px-2 pb-2 pb-md-0 text-center">
                            <div id="circles-3"></div>
                            <h6 class="fw-bold mt-3 mb-0">PTP</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-title">Total Anggaran Anggaran 2021</div>
                    <br>
                    <br>
                    
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="card card-stats card-primary card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="icon-big text-center">
                                                <i class="flaticon-users"></i>
                                            </div>
                                        </div>
                                        <div class="col-10 col-stats">
                                            <div class="numbers">
                                                <p class="card-category">PAGU ANGGARAN</p>
                                                <h4 class="card-title">Rp. 300.540.000.000</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="card card-stats card-info card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="icon-big text-center">
                                                <i class="flaticon-interface-6"></i>
                                            </div>
                                        </div>
                                        <div class="col-10 col-stats">
                                            <div class="numbers">
                                                <p class="card-category">Realisasi Anggaran</p>
                                                <h4 class="card-title">Rp. 300.000.000.000</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="card card-stats card-secondary card-round">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="icon-big text-center">
                                                <i class="flaticon-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-10 col-stats">
                                            <div class="numbers">
                                                <p class="card-category">Sisa Anggaran</p>
                                                <h4 class="card-title">Rp. 540.000.000</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   
@stop