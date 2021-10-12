@extends('layout.admin.index' )
@section('title')
   Order List
@stop
@section('extra_css')
@stop
@section('content')

    <div class="box box-info">
        <div class="box-header">
            <i class="ace-icon fa fa-list orange" aria-hidden="true"></i>
            <h3 class="box-title">Danh sách phiếu thu</h3>
        </div>
        <div class="box-body">
            @include('admin.report._formSearch', ['type' => 'income'])

           <div class="table-responsive">
              <table id="simple-table" class="table table-bordered table-hover table-responsive">
                 <thead>
                 <tr class="">
                    <th class="center">
                       ID
                    </th>
                    <th class="center">Chi nhánh</th>
                    <th class="center">Số phiếu</th>
                    <th class="center">Ngày thu</th>
                    <th class="center">Người thu</th>
                    <th class="center">Mã khách</th>
                    <th class="center">Tên khách</th>
                    <th class="center">Số điện thoại</th>
                    <th class="center">Địa chỉ</th>
                    <th class="center">Tiền thu</th>
                    <th class="center">Tiền mặt / Chuyển khoản</th>
                    <th class="center">Tài khoản</th>
                    <th class="center">Lý do thu</th>
                    <th class="center">Phương thức</th>
                    <th class="center">Ghi chú</th>
                 </tr>
                 </thead>
                 <tbody class="table_data">
                    @include('admin.report._data')
                    @if(count($data) > 0)
                    <tr class="bg-info text-right">
                        <td colspan="9" class="bolder text-uppercase">Tổng tiền</td>
                        <td class="bolder">{{ number_format($totalMoney) }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endif
                 </tbody>
              </table>
           </div>

            <div class="form-group text-center">
                {{ $data->appends(request()->except('page'))->links() }}
            </div>
        </div>
    </div>
@endsection
@include('admin.report._js')
