@extends('dashboard.layouts.admin')

@section('page-title', 'سجل النشاطات')

@section('content')
  <h2 class="h5 mb-3">سجل النشاطات</h2>

  <div class="card shadow-sm">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table mb-0 align-middle">
          <thead class="table-light">
            <tr>
              <th>#</th>
              <th>الوصف</th>
              <th>المستخدم</th>
              <th>التاريخ</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>تسجيل دخول الأدمن</td>
              <td>admin</td>
              <td>2024-01-01 12:00</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

