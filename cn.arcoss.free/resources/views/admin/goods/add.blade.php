@extends('admin.app')
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">添加商品</div>

                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ URL('admin/goods/store') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label>商品名称</label>
                            <input type="text" name="nickname" class="form-control" style="width: 300px;" required="required">
                        </div>
                        <div class="form-group">
                            <label>类别</label>
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    --请选择--
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">男士披肩</a></li>
                                    <li><a href="#">男士寸衫</a></li>
                                    <li><a href="#">男士短袖</a></li>
                                    <li><a href="#">男士裤子</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>品牌</label>
                            <textarea name="content" id="newFormContent" class="form-control" rows="10" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <label>市场价</label>
                            <input type="email" name="email" class="form-control" style="width: 300px;">
                        </div>
                        <div class="form-group">
                            <label>销售价</label>
                            <input type="text" name="website" class="form-control" style="width: 300px;">
                        </div>
                        <div class="form-group">
                            <label>上传图片</label>
                            <textarea name="content" id="newFormContent" class="form-control" rows="10" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <label>库存</label>
                            <textarea name="content" id="newFormContent" class="form-control" rows="10" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <label>推荐</label>
                            <textarea name="content" id="newFormContent" class="form-control" rows="10" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <label>热卖</label>
                            <textarea name="content" id="newFormContent" class="form-control" rows="10" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <label>置顶</label>
                            <textarea name="content" id="newFormContent" class="form-control" rows="10" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <label>简介</label>
                            <textarea name="content" id="newFormContent" class="form-control" rows="10" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <label>描述</label>
                            <textarea name="content" id="newFormContent" class="form-control" rows="10" required="required"></textarea>
                        </div>
                        <button type="submit" class="btn btn-lg btn-success col-lg-12">添加</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection