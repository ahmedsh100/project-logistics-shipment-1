@extends('dashboard.layouts.admin')

@section('page-title', 'تعديل شحنة')

@section('content')
  <h2 class="h5 mb-3">تعديل شحنة</h2>

  <div class="card shadow-sm">
    <div class="card-body">
      <form>
        <div class="mb-3">
          <label class="form-label">رقم التتبع</label>
          <input type="text" class="form-control" value="TRK-0001">
        </div>
        <div class="mb-3">
          <label class="form-label">اسم العميل</label>
          <input type="text" class="form-control" value="عميل تجريبي">
        </div>
        <div class="mb-3">
          <label class="form-label">العنوان</label>
          <input type="text" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">الحالة</label>
          <select class="form-select">
            <option selected>قيد المعالجة</option>
            <option>تم الشحن</option>
            <option>تم التسليم</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">تحديث</button>
      </form>
    </div>
  </div>
@endsection

