@extends('dashboard.layouts.admin')

@section('page-title', 'تفاصيل المستخدم')

@section('content')
  <h2 class="h5 mb-3">تفاصيل المستخدم عميل تجريبي</h2>

  <div class="card shadow-sm">
    <div class="card-body">
      <dl class="row mb-0">
        <dt class="col-sm-3">الاسم</dt>
        <dd class="col-sm-9">عميل تجريبي</dd>

        <dt class="col-sm-3">البريد الإلكتروني</dt>
        <dd class="col-sm-9">demo@example.com</dd>

        <dt class="col-sm-3">تاريخ التسجيل</dt>
        <dd class="col-sm-9">2024-01-01</dd>
      </dl>
    </div>
  </div>
@endsection

