@extends('_layouts.main')

@section('body')
    <section class="mx-auto max-w-7xl relative isolate pt-14 md:pb-28">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="flex flex-col items-start py-10 sm:py-16 lg:py-20 px-6 lg:px-8">
            <div class="hidden sm:mb-5 sm:flex sm:justify-start">
                <a href="#"
                    class="flex items-center rounded-full p-1 pr-2 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    <span class="rounded-full bg-indigo-500 px-3 py-0.5 text-sm font-semibold leading-5 text-white">Hire
                        me</span>
                    <span class="ml-4 text-sm">Lihat linkedin saya</span>
                    <svg class="ml-2 h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <div class="text-left">
                <h1 class="text-5xl sm:text-8xl lg:mt-6 font-extralight">Salam!</h1>
                <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-7xl lg:mt-5">
                    Saya M Dawil Akmami
                </h2>
                <h3 class="text-2xl font-bold text-indigo-400 sm:text-3xl mt-4">Full Stack Web Developer</h3>
            </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </section>

    @include('_partials.about-me')
    @include('_partials.skill')
    @include('_partials.projects')
@endsection
