@extends('dashboard.layouts.admin')

@section('page-title', 'لوحة التحكم')

@section('content')
  <div class="row g-4">
    <div class="col-md-3">
      <div class="card shadow-sm">
        <div class="card-body">
          <div class="fs-6 text-muted">إجمالي الشحنات</div>
          <div class="fs-3 fw-bold mt-2">0</div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow-sm">
        <div class="card-body">
          <div class="fs-6 text-muted">الشحنات قيد المعالجة</div>
          <div class="fs-3 fw-bold mt-2">0</div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow-sm">
        <div class="card-body">
          <div class="fs-6 text-muted">إجمالي المستخدمين</div>
          <div class="fs-3 fw-bold mt-2">0</div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow-sm">
        <div class="card-body">
          <div class="fs-6 text-muted">أرباح هذا الشهر</div>
          <div class="fs-3 fw-bold mt-2">0</div>
        </div>
      </div>
    </div>
  </div>
@endsection

