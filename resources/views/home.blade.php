<x-app-layout>
    <section id="portofolio" class="flex flex-col pt-14 w-full h-screen items-center bg-gray-100 space-y-4">
        @if (isset($portofolio))
        <section class="flex space-x-4 justify-center w-1/2">
            <div class="flex flex-col w-auto space-y-4">
                @foreach ($portofolio as $porto)
                <a id="{{ $porto->id }}" href="{{ route('show', $porto->id) }}"
                    class="flex shadow w-[30em] space-x-4 h-[5em] bg-white rounded">
                    <div><img class="object-cover w-32 h-[5em] rounded-l"
                            src="{{ asset('img/default_img.jpg') }}}"
                            onerror="this.src='img/default_img.jpg'"></div>
                    <div class="flex flex-col p-1 pr-4 w-full justify-center space-y-2">
                        <div class="flex text-lg h-5 font-bold tracking-tight-soft max-title capitalize">
                            {{ $porto->title }}
                        </div>
                        <div class="flex h-7 items-center space-x-2">
                            <p class="text-[0.8rem] font-light m-0 max-text">{{ $porto->deskripsi }}</p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </section>
        @endif
    </section>
</x-app-layout>
