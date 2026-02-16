@extends('dashboard.layouts.admin')

@section('page-title', 'التقارير والأرباح')

@section('content')
  <h2 class="h5 mb-3">التقارير والأرباح</h2>

  <div class="row g-4">
    <div class="col-md-6">
      <div class="card shadow-sm">
        <div class="card-body">
          <div class="fs-6 text-muted mb-2">أرباح هذا الشهر</div>
          <div class="fs-3 fw-bold">0</div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow-sm">
        <div class="card-body">
          <div class="fs-6 text-muted mb-2">عدد الشحنات المكتملة</div>
          <div class="fs-3 fw-bold">0</div>
        </div>
      </div>
    </div>
  </div>
@endsection

