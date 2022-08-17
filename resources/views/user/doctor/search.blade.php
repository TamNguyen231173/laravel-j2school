@extends('user.layout.master')
@section('content')
    <div style="padding: 20px;">
        <div class="row">
            <div class="header header-raised header-rose text-center"
                style="display: flex; justify-content: space-between; align-items: center;">
                <div class="col-md-5" style="display: flex; align-items: flex-end; padding-left: 0">
                    <h2 style="margin: 0">
                        Bác sĩ
                    </h2>
                    <h4 class="title">
                        <span class="tim-note"
                            style="margin-left: 12px; margin-right: 4px; border-left: 2px solid #ccc; padding-left: 12px;">
                            Tìm thấy
                        </span>
                        <span style="color: #e91e63; font-size: 26px;">
                            {{ count($doctors) }}
                        </span>
                        bác sĩ
                    </h4>
                </div>
                <div class="col-md-7">
                    <form class="navbar-form navbar-right" role="search" method="get" id="search-form"
                          action="{{ route('doctor.search') }}">
                        <div class="form-group form-rose is-empty">
                            <input type="text" class="form-control" placeholder="Search" value=""
                                   name="key">
                            <span class="material-input"></span>
                        </div>
                        <button type="submit" class="btn btn-rose btn-raised btn-fab btn-fab-mini">
                            <i class="material-icons">search</i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="col-md-12 col-lg-12">
                    <form id="form-sort">
                        <h4 class="card-title">Lọc</h4>
                        <div class="form-group">
                            <select class="select-sort form-control" name="price_sort">
                                <option selected>Giá</option>
                                <option value="desc">Cao - Thấp</option>
                                <option value="asc">Thấp - Cao</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tầm giá</label>
                            <div class="panel-body panel-refine">
                                <span id="price-left" class="pull-left" data-currency="đ"></span>
                                <span id="price-right" class="pull-right" data-currency="đ"></span>
                                <div class="clearfix"></div>
                                <div id="sliderRefine" class="slider slider-rose noUi-target noUi-ltr noUi-horizontal">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label class="label-control">Ngày</label>
                                <input type="date" class="form-control datepicker" value="10/10/2016">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label class="label-control">Giờ</label>
                                <input type="time" class="form-control datepicker" value="10/10/2016">
                            </div>
                        </div>
                        <button class="btn btn-rose col-md-12">Lọc</button>
                    </form>
                </div>
            </div>
            <div class="col-md-10">
                @foreach ($doctors as $doctor)
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-image" style="height: auto;">
                                <a href="{{ route('user.appointment.create', $doctor) }}">
                                    <img src="{{ $doctor->avatar }}"
                                         style="width: 100%; height: 200px; object-fit: cover; object-position: top;">
                                </a>
                                <div class="colored-shadow"
                                     style="
                                    background-image: url('{{ $doctor->avatar }}');
                                    opacity: 1;
                                    width: 103%;
                                    height: 200px;">
                                </div>
                            </div>
                            <div class="card-content d-flex flex-column">
                                <div class="">
                                    <h6 class="category text-rose">{{ $doctor->specialist->name }}</h6>
                                </div>
                                <div class="">
                                    <h4 class="card-title">
                                        <a href="{{ route('user.appointment.create', $doctor) }}">{{ $doctor->name }}</a>
                                    </h4>
                                </div>
                                <div class="" style="display: flex; align-items: center; margin-bottom: 12px;">
                                    <i class="material-icons" style="font-size: 14px; color: #e91e63;">email</i>
                                    {{ $doctor->email }}
                                </div>
                                <div class="" style="display: flex; align-items: center; margin-bottom: 12px;">
                                    <i class="material-icons" style="font-size: 14px; color: #e91e63;">phone</i>
                                    {{ $doctor->phone }}
                                </div>
                                <h3 class="card-title" style="margin: 0;">
                                    <span class="text-rose">{{ $doctor->price }}</span> đ
                                </h3>
                                <div class="">
                                    <a href="{{ route('user.appointment.create', $doctor) }}"
                                       class="btn btn-rose btn-raised btn-square m-0 col-md-12" style="margin-bottom: 20px;">
                                        Đặt hẹn ngay
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        {{ $doctors->links('user.paginator.index') }}
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $(".select-sort").change(function() {
                $("#form-sort").submit();
            });
        });
    </script>
@endpush
