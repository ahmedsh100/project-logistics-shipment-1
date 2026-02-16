@extends('dashboard.layouts.admin')

@section('page-title', 'إضافة شحنة جديدة')

@section('content')
  <h2 class="h5 mb-3">إضافة شحنة جديدة</h2>

  <div class="card shadow-sm">
    <div class="card-body">
      <form>
        <div class="mb-3">
          <label class="form-label">رقم التتبع</label>
          <input type="text" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">اسم العميل</label>
          <input type="text" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">العنوان</label>
          <input type="text" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">الحالة</label>
          <select class="form-select">
            <option>قيد المعالجة</option>
            <option>تم الشحن</option>
            <option>تم التسليم</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">حفظ</button>
      </form>
    </div>
  </div>
@endsection

