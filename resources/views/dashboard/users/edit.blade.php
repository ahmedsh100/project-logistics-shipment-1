@extends('dashboard.layouts.admin')

@section('page-title', 'تعديل مستخدم')

@section('content')
  <h2 class="h5 mb-3">تعديل مستخدم</h2>

  <div class="card shadow-sm">
    <div class="card-body">
      <form>
        <div class="mb-3">
          <label class="form-label">الاسم</label>
          <input type="text" class="form-control" value="عميل تجريبي">
        </div>
        <div class="mb-3">
          <label class="form-label">البريد الإلكتروني</label>
          <input type="email" class="form-control" value="demo@example.com">
        </div>
        <button type="submit" class="btn btn-primary">تحديث</button>
      </form>
    </div>
  </div>
@endsection

