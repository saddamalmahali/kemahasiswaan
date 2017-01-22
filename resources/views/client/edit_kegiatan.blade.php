@extends('layouts.client')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">Posting Kegiatan</h4>
                </div>
                <div class="panel-body">
                    <form action="{{url('/client/simpan_kegiatan')}} " method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{{$post->id}}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title">Judul Kegiatan</label>
                            <input type="text" class="form-control" name="title" placeholder="Masukan Judul Kegiatan" value="{{$post->title}}">
                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group{{ $errors->has('kategori') ? ' has-error' : '' }}">
                                    <label for="title">Ketegori</label>
                                    <input type="text" class="form-control" name="kategori" value="{{Auth::guard('client')->user()->bagian}}" readonly>
                                    @if ($errors->has('kategori'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('kategori') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                                    <label for="title">Status</label>
                                    <select name="status" class="form-control" style="width:30%;">
                                        <option value="" disabled selected>Pilih Status Posting</option>
                                        <option value="1" {{$post->active == '1' ? 'selected' : ''}}>Aktif</option>
                                        <option value="0" {{$post->active == '0' ? 'selected' : ''}}>Draft</option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('status') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group{{ $errors->has('file_header') ? ' has-error' : '' }}">
                                    <label for="title">Foto Header</label>
                                    <input type="file" class="form-control" name="file_header">
                                    @if ($errors->has('file_header'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('file_header') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <textarea  id="summernote" name="note">{{$post->body}}</textarea>
                        </div>
                        <div class="col-md-12 ">
                            <div style=""><input class="btn btn-primary btn-lg pull-right" type="submit" value="Simpan"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
        $(document).ready(function() {
            var note = $('#summernote').summernote({
                height: 300,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: true,
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
            $(document).on('click', '.btn-simpan-post', function(e){
                e.preventDefault();
                var title = $('input[name=title]').val();
                var kategori = $('input[name=kategori]').val();
                var status = $('select[name=status]').val();
                var body = $('#summernote').summernote('code');
                
                $.ajax({
                    url : '/client/tambah_kegiatan',
                    type : 'post',
                    data : {title : title, kategori : kategori, status : status, body : body},
                    dataType : 'json',
                    success : function(data){
                        console.log(data);
                        //if(data == 'sukses'){
                          //  window.location = "{{url('/client/index')}}";
                        //}
                    }
                });
                
            });

        });

    </script>
@endsection