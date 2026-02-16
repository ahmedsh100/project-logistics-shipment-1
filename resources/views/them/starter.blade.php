@extends("them.master")

 @section("hero-title","starter")
 @section("starter-active","active")

@section("content")
<section id="shipment-inquiry-section" class="shipment-inquiry-section section">
  <div class="container section-title" data-aos="fade-up">
    <span>استعلام عن الشحنة<br></span>
    <h2>تتبع شحنتك</h2>
    <p>أدخل رقم التتبع لمعرفة حالة شحنتك.</p>
  </div>

  <div class="container" data-aos="fade-up">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <form id="tracking-form" class="card shadow-sm">
          <div class="card-body">
            <div class="row g-3 align-items-end">
              <div class="col-md-9">
                <label for="tracking-number" class="form-label">رقم التتبع</label>
                <input type="text" id="tracking-number" class="form-control form-control-lg" required placeholder="مثال: TRK-0001">
              </div>
              <div class="col-md-3 d-grid">
                <button id="track-btn" type="submit" class="btn btn-primary btn-lg">تتبع الشحنة</button>
              </div>
            </div>
            <div id="tracking-alert" class="alert alert-danger mt-3 d-none"></div>
          </div>
        </form>

        <div id="tracking-result" class="mt-4 d-none">
          <div class="card shadow-sm">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                  <div class="fs-6 text-muted">رقم التتبع</div>
                  <div id="res-tracking" class="fs-5 fw-semibold"></div>
                </div>
                <span id="res-status" class="badge bg-secondary"></span>
              </div>
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="text-muted">العميل</div>
                  <div id="res-customer"></div>
                </div>
                <div class="col-md-6">
                  <div class="text-muted">المبلغ</div>
                  <div id="res-amount"></div>
                </div>
                <div class="col-md-6">
                  <div class="text-muted">تاريخ الشحن</div>
                  <div id="res-shipped"></div>
                </div>
                <div class="col-md-6">
                  <div class="text-muted">تاريخ التسليم</div>
                  <div id="res-delivered"></div>
                </div>
                <div class="col-12">
                  <div class="text-muted">الوصف</div>
                  <div id="res-description"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  const form = document.getElementById('tracking-form');
  const input = document.getElementById('tracking-number');
  const btn = document.getElementById('track-btn');
  const alertBox = document.getElementById('tracking-alert');
  const resultBox = document.getElementById('tracking-result');
  const resTracking = document.getElementById('res-tracking');
  const resStatus = document.getElementById('res-status');
  const resCustomer = document.getElementById('res-customer');
  const resAmount = document.getElementById('res-amount');
  const resShipped = document.getElementById('res-shipped');
  const resDelivered = document.getElementById('res-delivered');
  const resDescription = document.getElementById('res-description');

  function statusBadge(status) {
    const map = {
      new: 'bg-secondary',
      in_transit: 'bg-info',
      delivered: 'bg-success',
      delayed: 'bg-warning'
    };
    return map[status] || 'bg-secondary';
  }

  function fmt(val) {
    return val ? val : '-';
  }

  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    alertBox.classList.add('d-none');
    resultBox.classList.add('d-none');
    const tracking = input.value.trim();
    if (!tracking) {
      alertBox.textContent = 'يرجى إدخال رقم التتبع';
      alertBox.classList.remove('d-none');
      return;
    }
    btn.disabled = true;
    btn.textContent = 'جارِ البحث...';
    try {
      const resp = await fetch(`/api/track?tracking=${encodeURIComponent(tracking)}`);
      if (!resp.ok) {
        const data = await resp.json().catch(() => ({}));
        alertBox.textContent = data.message || 'تعذر العثور على الشحنة';
        alertBox.classList.remove('d-none');
      } else {
        const data = await resp.json();
        resTracking.textContent = data.tracking_number || tracking;
        resStatus.textContent = data.status || '-';
        resStatus.className = `badge ${statusBadge(data.status)}`;
        resCustomer.textContent = data.customer?.name || fmt(data.customer_id);
        resAmount.textContent = typeof data.amount !== 'undefined' ? `${data.amount}` : '-';
        resShipped.textContent = fmt(data.shipped_at);
        resDelivered.textContent = fmt(data.delivered_at);
        resDescription.textContent = fmt(data.description);
        resultBox.classList.remove('d-none');
      }
    } catch (err) {
      alertBox.textContent = 'حدث خطأ غير متوقع';
      alertBox.classList.remove('d-none');
    } finally {
      btn.disabled = false;
      btn.textContent = 'تتبع الشحنة';
    }
  });
</script>



@endsection
