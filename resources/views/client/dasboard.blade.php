@extends('layouts.home_template')

@section('content')
    <style>
        canvas {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;

        }
    </style>
    <div class="row">
        <div class="col-md-4">
            <div class="panel btn-noborder-radius">
                <div class="panel-heading">
                    <h4 class="panel-title">Informasi User</h4>
                </div>
                <div class="panel-body">
                    <div class="page-heading">
                        <table class="table">
                            <tr>
                                <td width="30%">NPM</td>
                                <td width="5%" align="center">:</td>
                                <td>{{$user->npm}}</td>
                            </tr>
                            <tr>
                                <td width="30%">Nama User</td>
                                <td width="5%" align="center">:</td>
                                <td>{{$user->nama}}</td>
                            </tr>
                            <tr>
                                <td width="30%">Email</td>
                                <td width="5%" align="center">:</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <td width="30%">Tipe User</td>
                                <td width="5%" align="center">:</td>
                                <td><span class="label label-primary">{{$user->tipe}}</span></td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <textarea class="summernote"></textarea>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{url('plugins/summernote/summernote.css')}}">
    <style>
        .panel .panel-heading{
            background: #d0e9c6 !important;
            border-color: #d0e9c6 !important;
        }
        .panel-title {
            font-weight: bold;
        }
        .panel {
            border-color: #d0e9c6 !important;
            box-shadow: 0px 2px 16px 2px #888888;
        }

        #editor {overflow:scroll; max-height:300px}
    </style>
@endsection
@section('script')
    <script src="{{url('plugins/summernote/summernote.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 300
            });
        });
    </script>
@endsection
