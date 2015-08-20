@extends('admin.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">会员管理</div>
        <div class="panel-body">
        <table class="table table-striped">
          <tr class="row">
            <th class="col-lg-2">序号</th>
            <th class="col-lg-2">姓名</th>
            <th class="col-lg-3">昵称</th>
            <th class="col-lg-3">手机号</th>
            <th class="col-lg-2">操作</th>
          </tr>
          @foreach ($members as $member)
            <tr class="row">
              <td class="col-lg-1">
                {{ $member->id }}
              </td>
              <td class="col-lg-3">
                {{ $member->name }}
              </td>
              <td class="col-lg-3">
                {{ $member->nick }}
              </td>
              <td class="col-lg-3">
                {{ $member->mobile }}
              </td>
              <td class="col-lg-2">
                <form action="{{ URL('admin/member/'.$member->id) }}" method="POST" style="display: inline;">
                  <input name="_method" type="hidden" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button type="submit" class="btn btn-danger">锁定</button>
                </form>
              </td>
            </tr>
          @endforeach
        </table>
       </div>
      </div>
    </div>
  </div>
</div>
 <div style="text-align:right;"><?php echo $members->render(); ?></div>
 @endsection