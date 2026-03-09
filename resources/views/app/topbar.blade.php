<!-- Topbar -->
<header class="sticky top-0 z-30 bg-white/80 dark:bg-slate-950/70 backdrop-blur border-b border-slate-200 dark:border-slate-800">
  <div class="px-4 lg:px-8 py-4 flex items-center gap-3">
    <button id="openSidebarBtn"
      class="lg:hidden p-2 rounded-2xl hover:bg-slate-100 dark:hover:bg-slate-800">
      <i class="fa-solid fa-bars"></i>
    </button>

    <div class="flex-1">
      <h1 class="text-lg font-bold">لوحة التحكم</h1>
      <p class="text-xs text-slate-500 dark:text-slate-400">إدارة الوظائف والحرفيين والطلبات</p>
    </div>

    <!-- Search -->
    <div class="hidden md:flex items-center gap-2 px-4 py-2 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900">
      <i class="fa-solid fa-magnifying-glass text-slate-400"></i>
      <input id="searchInput" type="text" placeholder="ابحث عن وظيفة أو حرفي..."
        class="w-72 bg-transparent outline-none text-sm placeholder:text-slate-400"/>
    </div>

    <!-- Actions -->
    <button id="addJobBtn"
      class="px-4 py-2 rounded-2xl bg-emerald-600 text-white hover:bg-emerald-700 shadow-soft flex items-center gap-2">
      <i class="fa-solid fa-plus"></i>
      <span class="hidden sm:inline">إضافة وظيفة</span>
    </button>

    <button id="darkBtn"
      class="p-2 rounded-2xl border border-slate-200 dark:border-slate-800 hover:bg-slate-100 dark:hover:bg-slate-800"
      title="الوضع الليلي">
      <i class="fa-solid fa-moon"></i>
    </button>
  </div>
</header>
