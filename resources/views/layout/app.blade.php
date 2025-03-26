<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>accc10.websitehoinghi</title>
  @vite('resources/css/app.css')
</head>

<script src="https://unpkg.com/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>

@php
  $title = trim($__env->yieldContent('title', 'VIETNAM VISA'));
  // AIRPORT TRANSFER
  // ACCOMMODATION
@endphp

<body class="max-w-screen overflow-x-hidden">
  <img class="h-screen w-screen object-cover fixed -z-10" src="{{ asset('images/background.jpg') }}" alt="background_img">
  <div class="z-10 container max-w-[1200px] mx-auto min-h-screen bg-slate-100 bg-opacity-95 py-10 px-4 sm:px-8 md:px-16">
    @include('components.header', ['title' => $title])
    <main class="flex-1">
      @yield('content')
    </main>
    @include('components.footer')
  </div>
</body>

</html>

<script>
  const lenis = new Lenis({
    duration: 1.7, // Điều chỉnh tốc độ mượt
  });

  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }
  requestAnimationFrame(raf);
</script>
