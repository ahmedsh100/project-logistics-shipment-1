@extends('dashboard.layouts.admin')

@section('page-title', 'المستخدمون')

@section('content')
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="h5 mb-0">كل المستخدمين</h2>
    <a href="#" class="btn btn-primary">إضافة مستخدم جديد</a>
  </div>

  <div class="card shadow-sm">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table mb-0 align-middle">
          <thead class="table-light">
            <tr>
              <th>#</th>
              <th>الاسم</th>
              <th>البريد الإلكتروني</th>
              <th>عدد الشحنات</th>
              <th>تاريخ التسجيل</th>
              <th>إجراءات</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>عميل تجريبي</td>
              <td>demo@example.com</td>
              <td>0</td>
              <td>2024-01-01</td>
              <td>
                <a href="#" class="btn btn-sm btn-outline-secondary">عرض</a>
                <a href="#" class="btn btn-sm btn-outline-primary">تعديل</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

