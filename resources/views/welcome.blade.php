@extends('layouts.app')

@section('content')
            <section class="p-3 p-md-4 p-xl-5">
                <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                        <div class="row">
                            <div class="col-12">
                            <div class="mb-5">
                                <h3>Log in</h3>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                            <div class="d-flex gap-3 flex-column">
                                <a href="{{ route("tiktok") }}" class="btn bsb-btn-xl btn-danger">
                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/></svg>
                                <span class="ms-2 fs-6 text-uppercase"> Sign in With Tiktok</span>
                                </a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </section>
    </body>
@endsection
