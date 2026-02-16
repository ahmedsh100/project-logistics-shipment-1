@extends('dashboard.layouts.admin')

@section('page-title', 'تفاصيل الشحنة')

@section('content')
  <h2 class="h5 mb-3">تفاصيل الشحنة TRK-0001</h2>

  <div class="card shadow-sm">
    <div class="card-body">
      <dl class="row mb-0">
        <dt class="col-sm-3">رقم التتبع</dt>
        <dd class="col-sm-9">TRK-0001</dd>

        <dt class="col-sm-3">العميل</dt>
        <dd class="col-sm-9">عميل تجريبي</dd>

        <dt class="col-sm-3">الحالة</dt>
        <dd class="col-sm-9">قيد المعالجة</dd>

        <dt class="col-sm-3">تاريخ الإنشاء</dt>
        <dd class="col-sm-9">2024-01-01</dd>
      </dl>
    </div>
  </div>
@endsection

