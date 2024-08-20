@section('title', 'Home')

<div>
    <div class="w-full h-2 bg-gradient-to-r from-[#0061ff] to-[#60efff]"></div>
    <nav class="flex h-[80px] items-center justify-center bg-white shadow-lg">
        <div class="lg:w-[50%] w-[90%] mx-auto flex items-center justify-between">
            <div class="text-xl font-bold text-gradient-primary">
                <img src="/assets/Ninelabs Logo.png" alt="Ninelabs Logo" class="w-[150px]">
            </div>
            <ul class="lg:flex gap-4 hidden">
                <li class="text-gradient-primary"><a href="/">Home</a></li>
                <li class="null"><a href="/blog">Pertanyaan</a></li>
                <li class="null"><a href="/projects">Services</a></li>
                <li class="null"><a href="/about">Tutorial</a></li>
            </ul>
        </div>
    </nav>
    {{-- <div class="absolute top-[100px] inset-0 max-w-lg m-auto h-[27rem] sm:h-64 sm:max-w-7xl -z-50"
        style="background:linear-gradient(106.89deg, rgba(192, 132, 252, 0.11) 15.73%, rgba(14, 165, 233, 0.41) 15.74%, rgba(232, 121, 249, 0.26) 56.49%, rgba(79, 70, 229, 0.4) 115.91%);filter:blur(118px)">
    </div> --}}
    {{-- <div class="grid grid-cols-2 w-[50%] mx-auto gap-5">
        <div class="flex items-center">
            <div>
                <h3 class="text-slate-500">Jasa Pembuatan Website</h3>
                <h1 class="text-4xl font-bold text-slate-700">Website Profesional tanpa Ribet untuk Meningkatkan
                    Penjualan Bisnis Anda
                </h1>
            </div>
        </div>
        <div>
            <img src="/assets/Web Design.png" alt="">
        </div>
    </div> --}}
    <div style="background-image: url('/assets/bg.webp')"
        class="relative  bg-cover bg-no-repeat lg:bg-[center_top_-60rem] md:bg-[center_top_-30rem] bg-[center_top_-10rem] overflow-clip">
        <img src="/assets/cloud.webp"
            class="absolute lg:w-[200px] lg:top-[10px] lg:left-[150px] w-[100px] top-[10px] left-[10px] drop-shadow">
        <img src="/assets/cloud.webp"
            class="absolute lg:w-[200px] lg:top-[180px] lg:right-[150px] w-[100px] top-[210px] -right-[50px] drop-shadow">
        <div class="lg:w-[50%] w-[90%] mx-auto">
            <div class="pt-16">
                <h1 class="font-semibold lg:text-5xl text-3xl text-white text-center">Website Profesional tanpa Ribet
                    untuk
                    Meningkatkan Penjualan <span class="underline underline-offset-[1px] decoration-yellow-200">Bisnis
                        Anda</span></h1>
                <p class="text-center mt-5 text-slate-600 lg:text-base text-sm">Wujudkan website
                    profesional yang cepat,
                    menarik,
                    aman, dan user-friendly untuk mengoptimalkan bisnis Anda. Kami siap mendukung kesuksesan digital
                    Anda.</p>
                <div class="flex lg:flex-row flex-col items-center gap-3 justify-center mt-5">
                    <button type="button"
                        class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2  focus:outline-none  flex items-center gap-2 transition-all">Konsultasi
                        Gratis
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M4.848 2.771A49.144 49.144 0 0 1 12 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 0 1-3.476.383.39.39 0 0 0-.297.17l-2.755 4.133a.75.75 0 0 1-1.248 0l-2.755-4.133a.39.39 0 0 0-.297-.17 48.9 48.9 0 0 1-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97ZM6.75 8.25a.75.75 0 0 1 .75-.75h9a.75.75 0 0 1 0 1.5h-9a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <button type="button"
                        class="text-white bg-cyan-500 hover:bg-cyan-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2  focus:outline-none  flex items-center gap-2  transition-all">Langkah
                        Kerja
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z"
                                clip-rule="evenodd" />
                        </svg>
                        </svg>
                    </button>
                </div>
                <img src="/assets/illustration.webp" class=" mx-auto mt-5">
            </div>
        </div>
    </div>
    <div class="lg:w-[50%] w-[90%] mx-auto mt-20">
        <p class="font-semibold text-blue-400 text-center text-xl">Jasa Pembuatan Website</p>
        <h1 class="font-semibold text-slate-600 text-center text-4xl">All in One Solution</h1>
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-4 mt-10">
            <div
                class="rounded-xl shadow-md p-4 hover:scale-[1.02] cursor-pointer hover:border-2  hover:border-blue-500  transition-all">
                <img src="/assets/Web Design.png" alt="">
                <div class="text-center">
                    <h3 class="font-bold text-slate-600 text-lg">Jasa Pembuatan Landing Page</h3>
                    <p class="text-sm mt-2 text-slate-600">Layanan jasa pembuatan website berupa landing page
                        yang profesional dan
                        berkualitas.</p>
                </div>
                <div class="flex justify-center mt-4">
                    <a href="/" class="text-blue-500 flex items-center gap-2">Info
                        Detail
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z"
                                clip-rule="evenodd" />
                        </svg>
                        </svg>
                    </a>
                </div>
            </div>
            <div
                class="rounded-xl shadow-md p-4 hover:scale-[1.02] cursor-pointer hover:border-2  hover:border-blue-500  transition-all">
                <img src="/assets/Product Service.png" alt="">
                <div class="text-center">
                    <h3 class="font-bold text-slate-600 text-lg">Jasa Pembuatan Website Company Profile</h3>
                    <p class="text-sm mt-2 text-slate-600">Layanan pembuatan website untuk perusahaan atau
                        produk anda.</p>
                </div>
                <div class="flex justify-center mt-4">
                    <a href="/" class="text-blue-500 flex items-center gap-2">Info
                        Detail
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z"
                                clip-rule="evenodd" />
                        </svg>
                        </svg>
                    </a>
                </div>
            </div>
            <div
                class="rounded-xl shadow-md p-4 hover:scale-[1.02] cursor-pointer hover:border-2  hover:border-blue-500  transition-all">
                <img src="/assets/Creative Service.png" alt="">
                <div class="text-center">
                    <h3 class="font-bold text-slate-600 text-lg">Jasa Kelola Website</h3>
                    <p class="text-sm mt-2 text-slate-600">Layanan maintenance website teraman dan termurah
                        dengan harga ekonomis yang bisa dibayar perbulan.</p>
                </div>
                <div class="flex justify-center mt-4">
                    <a href="/" class="text-blue-500 flex items-center gap-2">Info
                        Detail
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z"
                                clip-rule="evenodd" />
                        </svg>
                        </svg>
                    </a>
                </div>
            </div>
            <div
                class="rounded-xl shadow-md p-4 hover:scale-[1.02] cursor-pointer hover:border-2  hover:border-blue-500  transition-all">
                <img src="/assets/Custom Service.png" alt="">
                <div class="text-center">
                    <h3 class="font-bold text-slate-600 text-lg">Jasa Website Custom</h3>
                    <p class="text-sm mt-2 text-slate-600">Jasa pembuatan website custom seperti sistem
                        informasi perkantoran.</p>
                </div>
                <div class="flex justify-center mt-4">
                    <a href="/" class="text-blue-500 flex items-center gap-2">Info
                        Detail
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z"
                                clip-rule="evenodd" />
                        </svg>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
