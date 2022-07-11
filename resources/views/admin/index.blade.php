@extends('layouts.admin')

@section('title')
    Aminstrator Dashboard
@endsection

@section('content')
    {{-- Index Content --}}
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div id="crypto-stats-3" class="row">
                    <div class="col-xl-6 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc BTC warning font-large-2" title="BTC"></i></h1>
                                        </div>
                                        <div class="col-6 pl-2">
                                            <h4>{{ __('dashboard.Total sales') }}</h4>

                                        </div>
                                        <div class="col-4 text-right">
                                            <h4>$9,980</h4>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="btc-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc BTC warning font-large-2" title="BTC"></i></h1>
                                        </div>
                                        <div class="col-6 pl-2">
                                            <h4>{{ __('dashboard.Total orders') }}</h4>

                                        </div>
                                        <div class="col-4 text-right">
                                            <h4>$9,980</h4>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="xrp-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc ETH blue-grey lighten-1 font-large-2" title="ETH"></i></h1>
                                        </div>
                                        <div class="col-6 pl-2">
                                            <h4>{{ __('dashboard.number of products') }}</h4>

                                        </div>
                                        <div class="col-4 text-right">
                                            <h4>$944</h4>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="eth-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc XRP info font-large-2" title="XRP"></i></h1>
                                        </div>
                                        <div class="col-6 pl-2">
                                            <h4>{{ __('dashboard.Number of clients') }}</h4>

                                        </div>
                                        <div class="col-4 text-right">
                                            <h4>$1.2</h4>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="clients-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Candlestick Multi Level Control Chart -->

                <!-- Sell Orders & Buy Order -->
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('dashboard.Latest orders') }}</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-de mb-0">
                                        <thead>
                                            <tr>
                                                <th>{{ __('dashboard.Order number') }}</th>
                                                <th>{{ __('dashboard.client') }}</th>
                                                <th>{{ __('dashboard.price') }}</th>
                                                <th>{{ __('dashboard.Order status') }}</th>
                                                <th>{{ __('dashboard.total') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="bg-success bg-lighten-5">
                                                <td>10583.4</td>
                                                <td><i class="cc BTC-alt"></i> 0.45000000</td>
                                                <td>$ 4762.53</td>
                                                <td>$ 4762.53</td>
                                                <td>$ 4762.53</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('dashboard.Latest reviews ') }}</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>

                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-de mb-0">
                                        <thead>
                                            <tr>
                                                <th>{{ __('dashboard.client ') }}</th>
                                                <th>{{ __('dashboard.product ') }}</th>
                                                <th>{{ __('dashboard.Evaluation ') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="bg-danger bg-lighten-5">
                                                <td>10599.5</td>
                                                <td><i class="cc BTC-alt"></i> 0.02000000</td>
                                                <td>$ 211.99</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Sell Orders & Buy Order -->

            </div>
        </div>
    </div>
@endsection
