<section class="px-4 lg:px-8 py-6 space-y-6">
  <!-- Quick Filters -->
  <div class="flex flex-col md:flex-row md:items-center gap-3">
    <div class="flex items-center gap-2">
      <span class="text-sm text-slate-500 dark:text-slate-400">حالة الطلب:</span>
      <select id="statusFilter"
        class="px-3 py-2 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 text-sm outline-none">
        <option value="all">الكل</option>
        <option value="new">جديدة</option>
        <option value="assigned">مُسندة</option>
        <option value="done">مكتملة</option>
        <option value="canceled">ملغاة</option>
      </select>

      <select id="cityFilter"
        class="px-3 py-2 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 text-sm outline-none">
        <option value="all">كل المدن</option>
        <option value="riyadh">الرياض</option>
        <option value="jeddah">جدة</option>
        <option value="dammam">الدمام</option>
      </select>
    </div>

    <div class="md:mr-auto flex items-center gap-2">
      <button id="exportBtn"
        class="px-4 py-2 rounded-2xl border border-slate-200 dark:border-slate-800 hover:bg-slate-100 dark:hover:bg-slate-800 text-sm flex items-center gap-2">
        <i class="fa-solid fa-file-arrow-down"></i>
        تصدير
      </button>

      <button id="refreshBtn"
        class="px-4 py-2 rounded-2xl border border-slate-200 dark:border-slate-800 hover:bg-slate-100 dark:hover:bg-slate-800 text-sm flex items-center gap-2">
        <i class="fa-solid fa-rotate"></i>
        تحديث
      </button>
    </div>
  </div>

  <!-- Stats -->
  <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">
    <div class="p-5 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-soft">
      <div class="flex items-center justify-between">
        <p class="text-sm text-slate-500 dark:text-slate-400">الوظائف اليوم</p>
        <div class="w-10 h-10 rounded-2xl bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 flex items-center justify-center">
          <i class="fa-solid fa-briefcase"></i>
        </div>
      </div>
      <p class="mt-3 text-3xl font-extrabold" id="statJobs">18</p>
      <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">+12% عن أمس</p>
    </div>

    <div class="p-5 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-soft">
      <div class="flex items-center justify-between">
        <p class="text-sm text-slate-500 dark:text-slate-400">حرفيون نشطون</p>
        <div class="w-10 h-10 rounded-2xl bg-sky-500/15 text-sky-600 dark:text-sky-400 flex items-center justify-center">
          <i class="fa-solid fa-users"></i>
        </div>
      </div>
      <p class="mt-3 text-3xl font-extrabold" id="statWorkers">342</p>
      <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">آخر 24 ساعة</p>
    </div>

    <div class="p-5 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-soft">
      <div class="flex items-center justify-between">
        <p class="text-sm text-slate-500 dark:text-slate-400">طلبات جديدة</p>
        <div class="w-10 h-10 rounded-2xl bg-amber-500/15 text-amber-700 dark:text-amber-300 flex items-center justify-center">
          <i class="fa-solid fa-bell"></i>
        </div>
      </div>
      <p class="mt-3 text-3xl font-extrabold" id="statNew">29</p>
      <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">تحتاج متابعة</p>
    </div>

    <div class="p-5 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-soft">
      <div class="flex items-center justify-between">
        <p class="text-sm text-slate-500 dark:text-slate-400">معدل الإكمال</p>
        <div class="w-10 h-10 rounded-2xl bg-violet-500/15 text-violet-700 dark:text-violet-300 flex items-center justify-center">
          <i class="fa-solid fa-chart-line"></i>
        </div>
      </div>
      <p class="mt-3 text-3xl font-extrabold" id="statRate">86%</p>
      <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">آخر 7 أيام</p>
    </div>
  </div>

  <!-- Content Grid -->
  <div class="grid grid-cols-1 xl:grid-cols-3 gap-4">
    <!-- Jobs Table -->
    <div class="xl:col-span-2 p-5 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-soft">
      <div class="flex items-center justify-between gap-3">
        <div>
          <h2 class="font-bold text-lg">آخر الوظائف (الطلبات)</h2>
          <p class="text-xs text-slate-500 dark:text-slate-400">يمكنك البحث والفلترة مباشرة</p>
        </div>

        <div class="flex items-center gap-2">
          <div class="md:hidden flex items-center gap-2 px-4 py-2 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900">
            <i class="fa-solid fa-magnifying-glass text-slate-400"></i>
            <input id="searchInputMobile" type="text" placeholder="بحث..."
              class="w-40 bg-transparent outline-none text-sm placeholder:text-slate-400"/>
          </div>
        </div>
      </div>

      <div class="mt-4 overflow-x-auto">
        <table class="w-full text-sm">
          <thead class="text-slate-500 dark:text-slate-400">
            <tr class="border-b border-slate-200 dark:border-slate-800">
              <th class="text-right py-3 px-2">#</th>
              <th class="text-right py-3 px-2">الوظيفة</th>
              <th class="text-right py-3 px-2">المدينة</th>
              <th class="text-right py-3 px-2">الميزانية</th>
              <th class="text-right py-3 px-2">الحالة</th>
              <th class="text-right py-3 px-2">إجراءات</th>
            </tr>
          </thead>
          <tbody id="jobsBody" class="divide-y divide-slate-100 dark:divide-slate-800">
            <!-- JS renders -->
          </tbody>
        </table>
      </div>
    </div>

    <!-- Latest Workers -->
    <div class="p-5 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-soft">
      <div class="flex items-center justify-between">
        <div>
          <h2 class="font-bold text-lg">أحدث الحرفيين</h2>
          <p class="text-xs text-slate-500 dark:text-slate-400">آخر من انضموا للمنصة</p>
        </div>
        <button class="text-sm px-3 py-2 rounded-2xl hover:bg-slate-100 dark:hover:bg-slate-800">
          عرض الكل
        </button>
      </div>

      <div class="mt-4 space-y-3" id="workersList">
        <!-- JS renders -->
      </div>
    </div>
  </div>
</section>

<!-- Add Job Modal -->
<div id="modal" class="fixed inset-0 hidden items-center justify-center z-50">
  <div class="absolute inset-0 bg-black/40" id="modalBackdrop"></div>

  <div class="relative w-[95%] max-w-2xl rounded-3xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-soft p-5">
    <div class="flex items-start justify-between gap-3">
      <div>
        <h3 class="text-lg font-extrabold">إضافة وظيفة جديدة</h3>
        <p class="text-xs text-slate-500 dark:text-slate-400">أدخل تفاصيل الطلب ليظهر للحرفيين</p>
      </div>
      <button id="closeModal" class="p-2 rounded-2xl hover:bg-slate-100 dark:hover:bg-slate-800">
        <i class="fa-solid fa-xmark"></i>
      </button>
    </div>

    <form id="jobForm" class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-3">
      <div class="md:col-span-2">
        <label class="text-sm text-slate-600 dark:text-slate-300">عنوان الوظيفة</label>
        <input required name="title" class="mt-1 w-full px-4 py-3 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-950 outline-none"
          placeholder="مثال: سباكة - إصلاح تسريب في المطبخ"/>
      </div>

      <div>
        <label class="text-sm text-slate-600 dark:text-slate-300">المدينة</label>
        <select name="city" class="mt-1 w-full px-4 py-3 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-950 outline-none">
          <option value="riyadh">الرياض</option>
          <option value="jeddah">جدة</option>
          <option value="dammam">الدمام</option>
        </select>
      </div>

      <div>
        <label class="text-sm text-slate-600 dark:text-slate-300">الميزانية (ر.س)</label>
        <input required name="budget" type="number" min="0"
          class="mt-1 w-full px-4 py-3 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-950 outline-none"
          placeholder="مثال: 250"/>
      </div>

      <div>
        <label class="text-sm text-slate-600 dark:text-slate-300">التصنيف</label>
        <select name="category" class="mt-1 w-full px-4 py-3 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-950 outline-none">
          <option>كهرباء</option>
          <option>سباكة</option>
          <option>نجارة</option>
          <option>تكييف</option>
          <option>دهان</option>
        </select>
      </div>

      <div>
        <label class="text-sm text-slate-600 dark:text-slate-300">الحالة</label>
        <select name="status" class="mt-1 w-full px-4 py-3 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-950 outline-none">
          <option value="new">جديدة</option>
          <option value="assigned">مُسندة</option>
          <option value="done">مكتملة</option>
          <option value="canceled">ملغاة</option>
        </select>
      </div>

      <div class="md:col-span-2">
        <label class="text-sm text-slate-600 dark:text-slate-300">الوصف</label>
        <textarea name="description" rows="4"
          class="mt-1 w-full px-4 py-3 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-950 outline-none"
          placeholder="اكتب تفاصيل الطلب..."></textarea>
      </div>

      <div class="md:col-span-2 flex items-center justify-end gap-2 mt-2">
        <button type="button" id="cancelModal"
          class="px-4 py-2 rounded-2xl border border-slate-200 dark:border-slate-800 hover:bg-slate-100 dark:hover:bg-slate-800">
          إلغاء
        </button>
        <button type="submit"
          class="px-5 py-2 rounded-2xl bg-emerald-600 text-white hover:bg-emerald-700 shadow-soft flex items-center gap-2">
          <i class="fa-solid fa-check"></i>
          حفظ
        </button>
      </div>
    </form>
  </div>
</div>

<script>
  // Demo Data
  const jobs = [
    { id: 1201, title: "سباكة - إصلاح تسريب", city: "riyadh", budget: 250, status: "new" },
    { id: 1202, title: "كهرباء - تركيب مفاتيح", city: "jeddah", budget: 180, status: "assigned" },
    { id: 1203, title: "نجارة - تعديل باب", city: "dammam", budget: 300, status: "done" },
    { id: 1204, title: "تكييف - صيانة وحدة", city: "riyadh", budget: 400, status: "new" },
    { id: 1205, title: "دهان - غرفة نوم", city: "jeddah", budget: 650, status: "canceled" },
  ];

  const workers = [
    { name: "أحمد", job: "سبّاك", city: "الرياض", rate: 4.8 },
    { name: "سامي", job: "كهربائي", city: "جدة", rate: 4.6 },
    { name: "خالد", job: "نجّار", city: "الدمام", rate: 4.7 },
    { name: "مروان", job: "فني تكييف", city: "الرياض", rate: 4.5 },
  ];

  const cityMap = { riyadh: "الرياض", jeddah: "جدة", dammam: "الدمام" };
  const statusMap = {
    new: { text: "جديدة", cls: "bg-amber-100 text-amber-900 dark:bg-amber-400/15 dark:text-amber-200" },
    assigned: { text: "مُسندة", cls: "bg-sky-100 text-sky-900 dark:bg-sky-400/15 dark:text-sky-200" },
    done: { text: "مكتملة", cls: "bg-emerald-100 text-emerald-900 dark:bg-emerald-400/15 dark:text-emerald-200" },
    canceled: { text: "ملغاة", cls: "bg-rose-100 text-rose-900 dark:bg-rose-400/15 dark:text-rose-200" },
  };

  const jobsBody = document.getElementById("jobsBody");
  const workersList = document.getElementById("workersList");

  const searchInput = document.getElementById("searchInput");
  const searchInputMobile = document.getElementById("searchInputMobile");
  const statusFilter = document.getElementById("statusFilter");
  const cityFilter = document.getElementById("cityFilter");

  function renderWorkers() {
    workersList.innerHTML = workers.map(w => `
      <div class="flex items-center gap-3 p-3 rounded-2xl border border-slate-200 dark:border-slate-800">
        <div class="w-10 h-10 rounded-2xl bg-slate-200 dark:bg-slate-700 flex items-center justify-center">
          <i class="fa-solid fa-user"></i>
        </div>
        <div class="leading-5">
          <p class="font-semibold">${w.name} <span class="text-xs text-slate-500 dark:text-slate-400">(${w.city})</span></p>
          <p class="text-xs text-slate-500 dark:text-slate-400">${w.job}</p>
        </div>
        <div class="mr-auto text-sm font-bold flex items-center gap-1">
          <i class="fa-solid fa-star text-amber-500"></i>
          ${w.rate}
        </div>
      </div>
    `).join("");
  }

  function getQuery() {
    return (searchInput?.value || searchInputMobile?.value || "").trim().toLowerCase();
  }

  function renderJobs() {
    const q = getQuery();
    const s = statusFilter.value;
    const c = cityFilter.value;

    const filtered = jobs.filter(j => {
      const matchesQuery = !q || j.title.toLowerCase().includes(q) || String(j.id).includes(q);
      const matchesStatus = (s === "all") || (j.status === s);
      const matchesCity = (c === "all") || (j.city === c);
      return matchesQuery && matchesStatus && matchesCity;
    });

    jobsBody.innerHTML = filtered.map(j => `
      <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30">
        <td class="py-3 px-2 font-semibold">${j.id}</td>
        <td class="py-3 px-2">
          <div class="font-semibold">${j.title}</div>
          <div class="text-xs text-slate-500 dark:text-slate-400">تصنيف: ${guessCategory(j.title)}</div>
        </td>
        <td class="py-3 px-2">${cityMap[j.city]}</td>
        <td class="py-3 px-2 font-semibold">${j.budget} ر.س</td>
        <td class="py-3 px-2">
          <span class="px-3 py-1 rounded-2xl text-xs font-bold ${statusMap[j.status].cls}">
            ${statusMap[j.status].text}
          </span>
        </td>
        <td class="py-3 px-2">
          <div class="flex items-center gap-2">
            <button class="px-3 py-2 rounded-2xl border border-slate-200 dark:border-slate-800 hover:bg-slate-100 dark:hover:bg-slate-800 text-xs"
              onclick="alert('عرض الطلب #${j.id}')">
              <i class="fa-regular fa-eye"></i> عرض
            </button>
            <button class="px-3 py-2 rounded-2xl bg-slate-900 text-white dark:bg-white dark:text-slate-900 text-xs"
              onclick="alert('تعيين حرفي للطلب #${j.id}')">
              <i class="fa-solid fa-user-check"></i> إسناد
            </button>
          </div>
        </td>
      </tr>
    `).join("");

    if (!filtered.length) {
      jobsBody.innerHTML = `
        <tr>
          <td colspan="6" class="py-10 text-center text-slate-500 dark:text-slate-400">
            لا توجد نتائج مطابقة لبحثك.
          </td>
        </tr>`;
    }
  }

  function guessCategory(title) {
    if (title.includes("سبا")) return "سباكة";
    if (title.includes("كهرب")) return "كهرباء";
    if (title.includes("نجار")) return "نجارة";
    if (title.includes("تكييف")) return "تكييف";
    if (title.includes("دهان")) return "دهان";
    return "عام";
  }

  // Sidebar mobile open/close
  const openSidebarBtn = document.getElementById("openSidebarBtn");
  const sidebar = document.getElementById("sidebar");
  const backdrop = document.getElementById("backdrop");
  const collapseBtn = document.getElementById("collapseBtn");

  function openSidebar() {
    sidebar.classList.remove("hidden");
    sidebar.classList.add("fixed","z-50","inset-y-0","right-0");
    backdrop.classList.remove("hidden");
    backdrop.classList.add("block","z-40");
  }
  function closeSidebar() {
    sidebar.classList.add("hidden");
    sidebar.classList.remove("fixed","z-50","inset-y-0","right-0");
    backdrop.classList.add("hidden");
    backdrop.classList.remove("block","z-40");
  }

  openSidebarBtn?.addEventListener("click", openSidebar);
  collapseBtn?.addEventListener("click", closeSidebar);
  backdrop?.addEventListener("click", closeSidebar);

  // Dark mode
  const darkBtn = document.getElementById("darkBtn");
  function setDark(isDark){
    document.documentElement.classList.toggle("dark", isDark);
    localStorage.setItem("theme", isDark ? "dark" : "light");
  }
  const savedTheme = localStorage.getItem("theme");
  if (savedTheme) setDark(savedTheme === "dark");

  darkBtn.addEventListener("click", () => {
    const isDark = !document.documentElement.classList.contains("dark");
    setDark(isDark);
  });

  // Modal
  const modal = document.getElementById("modal");
  const addJobBtn = document.getElementById("addJobBtn");
  const closeModal = document.getElementById("closeModal");
  const cancelModal = document.getElementById("cancelModal");
  const modalBackdrop = document.getElementById("modalBackdrop");

  function openModal(){ modal.classList.remove("hidden"); modal.classList.add("flex"); }
  function hideModal(){ modal.classList.add("hidden"); modal.classList.remove("flex"); }

  addJobBtn.addEventListener("click", openModal);
  closeModal.addEventListener("click", hideModal);
  cancelModal.addEventListener("click", hideModal);
  modalBackdrop.addEventListener("click", hideModal);

  // Form submit (demo only)
  const jobForm = document.getElementById("jobForm");
  jobForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const fd = new FormData(jobForm);
    const newJob = {
      id: Math.floor(1000 + Math.random() * 9000),
      title: fd.get("title"),
      city: fd.get("city"),
      budget: Number(fd.get("budget") || 0),
      status: fd.get("status")
    };
    jobs.unshift(newJob);
    jobForm.reset();
    hideModal();
    renderJobs();
    alert("تمت إضافة الوظيفة بنجاح ✅");
  });

  // Search & Filters
  function hookSearch(el){
    el?.addEventListener("input", () => {
      // sync both inputs
      const val = el.value;
      if (el === searchInput && searchInputMobile) searchInputMobile.value = val;
      if (el === searchInputMobile && searchInput) searchInput.value = val;
      renderJobs();
    });
  }
  hookSearch(searchInput);
  hookSearch(searchInputMobile);

  statusFilter.addEventListener("change", renderJobs);
  cityFilter.addEventListener("change", renderJobs);

  // Buttons
  document.getElementById("refreshBtn").addEventListener("click", () => {
    renderJobs();
    alert("تم التحديث ✅");
  });

  document.getElementById("exportBtn").addEventListener("click", () => {
    alert("تصدير (Demo) — اربطه لاحقًا بـ Excel/PDF من الباك اند.");
  });

  // Initial render
  renderWorkers();
  renderJobs();
</script>
