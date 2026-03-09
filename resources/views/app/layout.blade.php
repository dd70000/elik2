<!doctype html>
<html lang="ar" dir="rtl" class="h-full scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>لوحة التحكم | منصة الحرفيين</title>

  <!-- Tailwind CDN (للمعاينة فقط) -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          boxShadow: { soft: "0 12px 30px rgba(0,0,0,.08)" }
        }
      }
    }
  </script>

  <style>
    /* سكرول لطيف */
    ::-webkit-scrollbar { width: 10px; height: 10px; }
    ::-webkit-scrollbar-thumb { background: rgba(100,116,139,.35); border-radius: 999px; }
  </style>
</head>

<body class="h-full bg-slate-50 text-slate-800 dark:bg-slate-950 dark:text-slate-100">
  <div class="min-h-screen flex">

    @include('app.aside')

    <main class="flex-1 min-w-0">
      @include('app.topbar')
      @include('app.main')
    </main>
  </div>
</body>
</html>
