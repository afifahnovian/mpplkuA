<!-- extends user-dashboar layout -->
@extends('layouts.layoutadmin')

@section('content')
<div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Account Overview</h4>

                                    <div class="row">
                                        <div class="col-md-6  col-xl-3">
                                            <div class="card-box mb-0 widget-chart-two shadow-none" dir="ltr">
                                                <div class="float-right">
                                                    <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor="#0acf97" data-bgColor="#404a57" value="37" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".1"/>
                                                </div>
                                                <div class="widget-chart-two-content">
                                                    <p class="text-muted mb-0 mt-2">Daily Sales</p>
                                                    <h3 class="">$35,715</h3>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-6  col-xl-3">
                                            <div class="card-box mb-0 widget-chart-two shadow-none" dir="ltr">
                                                <div class="float-right">
                                                    <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor="#f9bc0b" data-bgColor="#404a57" value="92" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".1"/>
                                                </div>
                                                <div class="widget-chart-two-content">
                                                    <p class="text-muted mb-0 mt-2">Sales Analytics</p>
                                                    <h3 class="">$97,511</h3>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-6  col-xl-3">
                                            <div class="card-box mb-0 widget-chart-two shadow-none" dir="ltr">
                                                <div class="float-right">
                                                    <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor="#f1556c" data-bgColor="#404a57" value="14" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".1"/>
                                                </div>
                                                <div class="widget-chart-two-content">
                                                    <p class="text-muted mb-0 mt-2">Statistics</p>
                                                    <h3 class="">$954</h3>
                                                </div>

                                            </div>
                                        </div>
@endsection