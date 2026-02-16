@extends('dashboard.layouts.admin')

@section('page-title', 'رسائل اتصل بنا')

@section('content')
  <h2 class="h5 mb-3">رسائل اتصل بنا</h2>

  <div class="card shadow-sm">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table mb-0 align-middle">
          <thead class="table-light">
            <tr>
              <th>#</th>
              <th>الاسم</th>
              <th>البريد الإلكتروني</th>
              <th>الموضوع</th>
              <th>تاريخ الإرسال</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>زائر الموقع</td>
              <td>visitor@example.com</td>
              <td>استفسار تجريبي</td>
              <td>2024-01-01</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

