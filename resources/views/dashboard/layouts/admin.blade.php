@include('partial.head')

<body class="admin-dashboard">

  <div class="d-flex min-vh-100">

    <aside class="bg-dark text-white p-3" style="width: 260px;">
      <div class="mb-4 fs-4 fw-bold">
        لوحة التحكم
      </div>
      <nav class="nav flex-column gap-1">
        <a href="#" class="nav-link text-white">الإحصائيات</a>
        <a href="#" class="nav-link text-white">الشحنات</a>
        <a href="#" class="nav-link text-white">المستخدمون</a>
        <a href="#" class="nav-link text-white">الرسائل</a>
        <a href="#" class="nav-link text-white">التقارير</a>
        <a href="#" class="nav-link text-white">سجل النشاطات</a>
      </nav>
    </aside>

    <main class="flex-grow-1 bg-light">
      <header class="bg-white border-bottom px-4 py-3 d-flex justify-content-between align-items-center">
        <div class="fs-5 fw-semibold">
          @yield('page-title', 'لوحة التحكم')
        </div>
        <div class="d-flex align-items-center gap-3">
          <span>مرحباً، أدمن</span>
        </div>
      </header>

      <section class="p-4">
        @yield('content')
      </section>
    </main>

  </div>

  @include('partial.script')

</body>

