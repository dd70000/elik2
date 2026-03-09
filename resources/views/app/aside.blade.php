<!-- Sidebar -->
<aside id="sidebar"
  class="w-72 shrink-0 bg-white dark:bg-slate-900 border-l border-slate-200 dark:border-slate-800
         hidden lg:flex flex-col">
  <div class="p-5 border-b border-slate-200 dark:border-slate-800 flex items-center justify-between">
    <div class="flex items-center gap-3">
      <div class="w-10 h-10 rounded-2xl bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 flex items-center justify-center">
        <i class="fa-solid fa-hammer"></i>
      </div>
      <div>
        <p class="font-bold leading-5">منصة الحرفيين</p>
        <p class="text-xs text-slate-500 dark:text-slate-400">لوحة التحكم</p>
      </div>
    </div>

    <button id="collapseBtn" class="lg:hidden p-2 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800">
      <i class="fa-solid fa-xmark"></i>
    </button>
  </div>

  <nav class="p-4 space-y-1 overflow-y-auto">
    <a class="flex items-center gap-3 px-4 py-3 rounded-2xl bg-emerald-600 text-white shadow-soft" href="#">
      <i class="fa-solid fa-grid-2"></i>
      <span class="font-semibold">الرئيسية</span>
    </a>

    <a class="flex items-center gap-3 px-4 py-3 rounded-2xl hover:bg-slate-100 dark:hover:bg-slate-800" href="#">
      <i class="fa-solid fa-briefcase"></i>
      <span>الوظائف / الطلبات</span>
      <span class="mr-auto text-xs bg-slate-200 dark:bg-slate-700 px-2 py-1 rounded-xl">24</span>
    </a>

    <a class="flex items-center gap-3 px-4 py-3 rounded-2xl hover:bg-slate-100 dark:hover:bg-slate-800" href="#">
      <i class="fa-solid fa-users"></i>
      <span>الحرفيون</span>
    </a>

    <a class="flex items-center gap-3 px-4 py-3 rounded-2xl hover:bg-slate-100 dark:hover:bg-slate-800" href="#">
      <i class="fa-solid fa-building"></i>
      <span>العملاء / الشركات</span>
    </a>

    <a class="flex items-center gap-3 px-4 py-3 rounded-2xl hover:bg-slate-100 dark:hover:bg-slate-800" href="#">
      <i class="fa-solid fa-star"></i>
      <span>التقييمات</span>
    </a>

    <a class="flex items-center gap-3 px-4 py-3 rounded-2xl hover:bg-slate-100 dark:hover:bg-slate-800" href="#">
      <i class="fa-solid fa-bell"></i>
      <span>الإشعارات</span>
      <span class="mr-auto text-xs bg-amber-200 text-amber-900 dark:bg-amber-400/20 dark:text-amber-200 px-2 py-1 rounded-xl">5</span>
    </a>

    <a class="flex items-center gap-3 px-4 py-3 rounded-2xl hover:bg-slate-100 dark:hover:bg-slate-800" href="#">
      <i class="fa-solid fa-gear"></i>
      <span>الإعدادات</span>
    </a>
  </nav>

  <div class="p-4 mt-auto border-t border-slate-200 dark:border-slate-800">
    <div class="flex items-center gap-3 p-3 rounded-2xl bg-slate-50 dark:bg-slate-800/40">
      <div class="w-10 h-10 rounded-2xl bg-slate-200 dark:bg-slate-700 flex items-center justify-center">
        <i class="fa-solid fa-user"></i>
      </div>
      <div class="leading-5">
        <p class="font-semibold">Admin</p>
        <p class="text-xs text-slate-500 dark:text-slate-400">لوحة الإدارة</p>
      </div>
      <button class="mr-auto p-2 rounded-xl hover:bg-slate-200 dark:hover:bg-slate-700" title="تسجيل خروج">
        <i class="fa-solid fa-right-from-bracket"></i>
      </button>
    </div>
  </div>
</aside>

<!-- Mobile Sidebar Backdrop -->
<div id="backdrop" class="fixed inset-0 bg-black/30 hidden z-40"></div>
