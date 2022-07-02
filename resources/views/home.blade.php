<x-app-layout>
    <section id="portofolio" class="flex flex-col pt-14 w-full h-screen items-center bg-gray-100 space-y-4">
        @auth
        {{-- {{ auth()->user()->name }} --}}
        @endauth
        <div class="flex space-x-4 justify-center w-1/2">
            <a id="1" href="{{ route('show', 1) }}"
                class="flex shadow w-[30em] space-x-4 h-[5em] bg-white rounded">
                <div><img class="object-cover w-32 h-[5em] rounded-l"
                        src="{{ asset('img/default_img.jpg') }}}"
                        onerror="this.src='img/default_img.jpg'"></div>
                <div class="flex flex-col p-1 pr-4 w-full justify-center space-y-2">
                    <div class="flex text-lg h-5 font-bold tracking-tight-soft max-title capitalize">
                        Firstname Lastname
                    </div>
                    <div class="flex h-7 items-center space-x-2">
                        <p class="text-[0.8rem] font-light m-0 max-text">Lorem ipsum dolor sit, amet consectetur
                            adipisicing
                            elit. Modi consectetur cum ipsam? Possimus et rem reprehenderit beatae eveniet quo nisi quae
                            laboriosam aliquam illo, tenetur pariatur minus consequatur numquam consectetur?</p>
                    </div>
                </div>
            </a>
        </div>
    </section>
</x-app-layout>
