@extends('dashboard.layouts.admin')

@section('page-title', 'الشحنات')

@section('content')
  <div class="mb-3 d-flex justify-content-between align-items-center">
    <h2 class="mb-0 h5">كل الشحنات</h2>
    <a href="#" class="btn btn-primary">إضافة شحنة جديدة</a>
  </div>

  <div class="shadow-sm card">
    <div class="p-0 card-body">
      <div class="table-responsive">
        <table class="table mb-0 align-middle">
          <thead class="table-light">
            <tr>
              <th>#</th>
              <th>رقم التتبع</th>
              <th>العميل</th>
              <th>الحالة</th>
              <th>تاريخ الإنشاء</th>
              <th>إجراءات</th>
            </tr>
          </thead>
          <tbody>
            @foreach($shipments as $shipment)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $shipment->tracking_number }}</td>
              <td>{{ $shipment->customer->name ?? '-' }}</td>
              <td>{{ $shipment->status }}</td>
              {{-- <td>{{ $shipment->created_at->format('Y-m-d') }}</td> --}}
              <td>
                <a href="#" class="btn btn-sm btn-outline-secondary">عرض</a>
                <a href="#" class="btn btn-sm btn-outline-primary">تعديل</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

