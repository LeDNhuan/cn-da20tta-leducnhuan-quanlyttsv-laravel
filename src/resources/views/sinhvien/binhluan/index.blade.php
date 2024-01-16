@extends('user.thanhphan.layout')
@section('content')
    <div class="post-details">
        <div class="details-header923">
            <div>
                <h2 class="myh4">{{ $baidang->TieuDeBD }}</h2> 
            </div>
        </div>
        <div class="post-details-info1982">
            <p>{{ $baidang->NoiDungBD }}</p>
            <hr>
            <div class="post-footer29032">
                {{-- <div class="l-side2023"> 
                    <i class="fa fa-clock-o clock2" aria-hidden="true"> 4 min ago</i> 
                    <a href="#"><i class="fa fa-commenting commenting2" aria-hidden="true"> 5 answer</i></a> 
                </div>
                <div class="l-rightside39">
                    <button type="button" class="tolltip-button thumbs-up2" data-toggle="tooltip" data-placement="bottom" title="Like"><i class="fa fa-thumbs-o-up " aria-hidden="true"></i></button>
                    <button type="button" class="tolltip-button  thumbs-down2" data-toggle="tooltip" data-placement="bottom" title="Dislike"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></button> 
                    <span class="single-question-vote-result">+22</span> 
                </div> --}}
            </div>
        </div>
    </div>

    <div class="comment-list12993">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul id="comments-list" class="comments-list">
                        <li>
                            <h3 class="myh4">Người đăng</h3>
                            <hr>
                            @if (isset($sinhvienbd) && is_object($sinhvienbd))
                                    <div class="comment-main-level" style="margin-top: 20px">
                                    <!-- Avatar -->
                                        <div class="comment-avatar"><img src="{{ $nguoidung->AnhDaiDien }}" alt=""></div>
                                        <!-- Contenedor del Comentario -->
                                        <div class="comment-box">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="comment-head">
                                                        <h6 class="comment-name"><a href="">{{ $sinhvienbd->HoSV }} {{ $sinhvienbd->TenSV }}</a></h6> 
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"> January 15 , 2014 at 10:00 pm</i></span> 
                                                        <i class="fa fa-reply"></i> <i class="fa fa-heart"></i>  
                                                    </div>
                                                </div>
                                            </div>                                               
                                        </div>
                                    </div>
                                    <hr>
                            @else 
                                    <div class="comment-main-level" style="margin-top: 20px">
                                    <!-- Avatar -->
                                        <div class="comment-avatar"><img src="{{ $nguoidung->AnhDaiDien }}" alt=""></div>
                                        <!-- Contenedor del Comentario -->
                                        <div class="comment-box">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="comment-head">
                                                        <h6 class="comment-name"><a href="">{{ $giangvienbd->HoGV }} {{ $giangvienbd->TenGV }}</a></h6> 
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"> January 15 , 2014 at 10:00 pm</i></span> 
                                                        <i class="fa fa-reply"></i> <i class="fa fa-heart"></i>  
                                                    </div>
                                                </div>
                                            </div>                                               
                                        </div>
                                    </div>
                                    <hr>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="comment-list12993">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul id="comments-list" class="comments-list">
                        <li>
                            <h3 class="myh4">Tất cả bình luận</h3>
                            <hr>
                            {{-- @if (isset($binhluan) && is_object($binhluan)) --}}
                                @foreach ($binhluan as $bl)
                                    @if (isset($bl->sinhvien) && is_object($bl->sinhvien))
                                        <div class="comment-main-level" style="margin-top: 20px">
                                        <!-- Avatar -->
                                            <div class="comment-avatar"><img src="" alt=""></div>
                                            <!-- Contenedor del Comentario -->
                                            <div class="comment-box">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="comment-head">
                                                            <h6 class="comment-name"><a href="">{{ $bl->sinhvien->HoSV }} {{ $bl->sinhvien->TenSV }}</a></h6> 
                                                            <span><i class="fa fa-clock-o" aria-hidden="true"> January 15 , 2014 at 10:00 pm</i></span> 
                                                            <i class="fa fa-reply"></i> <i class="fa fa-heart"></i> 
                                                            <div class="post-que-rep-rihght320"> 
                                                                <a href="#">Sửa</a> 
                                                                <a href="#">Xóa</a> 
                                                            </div>  
                                                        </div>
                                                        <div class="comment-content"> 
                                                            {{ $bl->NoiDungBL }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>                      
                                    @else
                                        <div class="comment-main-level" style="margin-top: 20px">
                                        <!-- Avatar -->
                                            <div class="comment-avatar"><img src="" alt=""></div>
                                            <!-- Contenedor del Comentario -->
                                            <div class="comment-box">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="comment-head">
                                                            <h6 class="comment-name"><a href="">{{ $bl->giangvien->HoGV }} {{ $bl->giangvien->TenGV }}</a></h6> 
                                                            <span><i class="fa fa-clock-o" aria-hidden="true"> January 15 , 2014 at 10:00 pm</i></span> 
                                                            <i class="fa fa-reply"></i> <i class="fa fa-heart"></i> 
                                                            <div class="post-que-rep-rihght320"> 
                                                                <a href="#">Sửa</a> 
                                                                <a href="#">Xóa</a> 
                                                            </div>  
                                                        </div>
                                                        <div class="comment-content"> 
                                                            {{ $bl->NoiDungBL }}
                                                        </div>
                                                    </div>
                                                </div>                                               
                                            </div>
                                        </div>
                                        <hr>                    
                                    @endif
                                     
                                @endforeach
                            {{-- @endif          --}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="comment289-box">
        <h3 class="myh4">Bình luận</h3>
        <hr>
        <div class="row">
            <div class="col-md-12">
                {{-- <div class="post9320-box">
                    <input type="text" name="" class="comment-input219882" placeholder="Nhập bình luận">
                </div>
                <button type="button" class="pos393-submit">Đăng bình luận</button> --}}
                <form method="POST" action="{{ route('binhluan.them', $baidang->id) }}">
                @csrf    
                    <div class="form-group myform">
                        <textarea style="" type="text" id="NoiDungBL" name="NoiDungBL" class="form-control" placeholder="Nhập bình luận"></textarea>
                    </div>

                    {{---------- SCRIPT_CKEDITOR5 ---------}}
                    <script>
                        ClassicEditor
                            .create(document.querySelector('#NoiDungBL'), {
                                paragraph: {
                                    shouldNotGroupWhenJoined: true,
                                    previous: ['heading1', 'heading2', 'heading3', 'heading4', 'heading5', 'heading6'],
                                    next: ['heading1', 'heading2', 'heading3', 'heading4', 'heading5', 'heading6'],
                                }
                            })
                            .catch(error => {
                                console.error(error);
                            });
                        
                    </script>
                    
                    <div class="publish-button2389">
                        <input type="submit" value="Đăng bình luận" class="publis1291">
                    </div>
                </form>   

            </div>
               
        </div>
    </div>
@endsection