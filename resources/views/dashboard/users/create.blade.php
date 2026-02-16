@extends('dashboard.layouts.admin')

@section('page-title', 'إضافة مستخدم جديد')

@section('content')
  <h2 class="h5 mb-3">إضافة مستخدم جديد</h2>

  <div class="card shadow-sm">
    <div class="card-body">
      <form>
        <div class="mb-3">
          <label class="form-label">الاسم</label>
          <input type="text" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">البريد الإلكتروني</label>
          <input type="email" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">كلمة المرور</label>
          <input type="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">حفظ</button>
      </form>
    </div>
  </div>
@endsection

