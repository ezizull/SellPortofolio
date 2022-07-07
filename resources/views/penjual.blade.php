<x-app-layout>
    <section class="flex pt-14 w-full justify-center min-h-screen bg-gray-100 space-x-4">
        @auth
        <section class="flex flex-col w-auto space-y-3">
            <a id="add" href="{{ route('penjual.add') }}"
                class="flex shadow w-auto p-2 space-x-4 bg-[#5baae7] rounded">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    class="fill-white stroke-2 stroke-white"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                </svg>
            </a>
        </section>
        @endauth
        <section id="penjual" class="flex min-w-[32] flex-col w-auto space-y-4">
            @if (isset($portofolio))
            @foreach ($portofolio as $porto)
            <a id="{{ $porto->id }}" href="{{ route('penjual.show', $porto->id) }}"
                class="flex shadow w-[30em] space-x-4 h-[5em] bg-white rounded">
                <div><img class="object-cover w-32 h-[5em] rounded-l"
                        src="{{ asset('img/default_img.jpg') }}}"
                        onerror="this.src='img/default_img.jpg'"></div>
                <div class="flex flex-col p-1 pr-4 w-full justify-center space-y-2">
                    <div class="flex text-lg h-5 font-bold tracking-tight-soft max-title capitalize">
                        {{$porto->title }}
                    </div>
                    <div class="flex h-7 items-center space-x-2">
                        <p class="text-[0.8rem] font-light m-0 max-text">{{ $porto->deskripsi }}</p>
                    </div>
                </div>
            </a>
            @endforeach
            @endif
        </section>
    </section>
</x-app-layout>
