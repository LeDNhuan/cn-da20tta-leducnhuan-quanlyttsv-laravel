@extends('user.thanhphan.layout')
@section('content')

    @foreach ($trangthai as $bd)
    <div>
        <div class="question-type2033">
            <div class="row">
                
                    {{-- <div class="col-md-1">
                        <div class="left-user12923">
                            <img src="" alt="image">
                            <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a>
                        </div>
                    </div> --}}
                    <div class="col-md-9">
                        <div class="right-description893">
                            <div id="que-hedder2983">
                                <h3><a href="{{ route('binhluan.index', $bd -> id) }}">{{ $bd -> TieuDeBD }}</a></h3>
                            </div>
                            <div class="ques-details10018">
                                <p>{{ $bd -> NoiDungBD }}</p>
                            </div>
                            <hr>
                            {{-- <div class="ques-icon-info3293">
                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i> 5 </a>
                                <a href="#"><i class="fa fa-folder" aria-hidden="true"></i> wordpress</a>
                                <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 4 min ago</a>
                                <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Question</a>
                                <a href="#"><i class="fa fa-bug" aria-hidden="true"></i>Report</a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="ques-type302">
                            <a href="#">
                                <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true"></i> 333335 answer</button>
                            </a>
                            <a href="#">
                                <button type="button" class="q-type23 button-ques2973"><i class="fa fa-user-circle-o" aria-hidden="true"></i> 70 view</button>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection