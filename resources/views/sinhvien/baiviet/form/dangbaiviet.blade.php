@extends('user.thanhphan.layout')
@section('content')
    <div class="ask-question-input-part032">
        <h3 class="text-center myh4">BÀI ĐĂNG</h3>
        <hr>
        <form method="POST" action="{{ route('baidang.them') }}">
        @csrf
            <div class="form-group myform">
                <label for="TieuDeBD">Tiêu đề:</label>
                <input type="text" name="TieuDeBD" class="form-control" placeholder="Nhập tiêu đề bài đăng">  
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group myform">
                        <label for="HinhAnh">Hình ảnh:</label>
                        <input type="file" name="HinhAnh" class="form-control" placeholder="Chọn hình ảnh">  
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group myform">
                        <label for="MaChuDe">Chủ đề:</label>
                        <select class="custom-select form-control" name="MaChuDe">
                            <option selected disabled>Chọn chủ đề</option>
                            @foreach ($macd as $cd)
                                <option value="{{ $cd->MaChuDe }}">{{ $cd->TenChuDe }}</option>
                            @endforeach                                   
                        </select>
                    </div>
                </div>
            </div>    
            <div class="form-group myform">
                <label for="NoiDungBD">Nội dung:</label>
                <textarea style="" type="text" id="NoiDungBD" name="NoiDungBD" class="form-control" placeholder="Nhập nội dung bài đăng"></textarea>
            </div>

            {{---------- SCRIPT_CKEDITOR5 ---------}}
            <script>
                ClassicEditor
                    .create(document.querySelector('#NoiDungBD'))
                    .catch(error => {
                        console.error(error);
                        paragraph: {
                            shouldNotGroupWhenJoined: true,
                            previous: ['heading1', 'heading2', 'heading3', 'heading4', 'heading5', 'heading6'],
                            next: ['heading1', 'heading2', 'heading3', 'heading4', 'heading5', 'heading6'],
                        }
                    });
                // FCKConfig.EnterMode = 'br' ;         // p | div | br
                // FCKConfig.ShiftEnterMode = 'p' ;   // p | div | b
            </script>
            
            <div class="publish-button2389">
                <input type="submit" value="Đăng" class="publis1291">
            </div>
        </form>    
    </div>    
@endsection