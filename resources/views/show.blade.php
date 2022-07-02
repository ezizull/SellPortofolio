<x-app-layout>
    <section
        class="flex w-full min-h-screen justify-center items-center bg-gray-100">
        <section class="flex items-start justify-center space-x-6">
            @auth
            @if (request()->routeIs('penjual.show'))
            <section class="flex flex-col items-start w-auto space-y-3">
                <a id="edit" href="{{ route('penjual.edit', 1) }}"
                    class="flex shadow w-auto p-2 space-x-4 bg-[#35E263] rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        class="fill-white"
                        viewBox="0 0 16 16">
                        <path
                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                    </svg>
                </a>
                <a id="del" href="{{ route('penjual.delete', 1) }}"
                    class="flex shadow w-auto p-2 space-x-4 bg-[#EC4E4E] rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        class="fill-white"
                        viewBox="0 0 16 16">
                        <path
                            d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                    </svg>
                </a>
            </section>
            @endif
            @endauth
            <section
                class="flex flex-col space-y-8 my-12 p-2 pb-8 lg:space-y-0 sm:mx-4 md:pb-0 md:h-[62rem] md:w-[55%] lg:flex-row lg:pb-2 lg:space-x-8 lg:my-0 lg:pr-4 lg:w-[85%] lg:h-[65%] xl:h-[55%] xl:w-[70%] 3xl:p-6 3xl:pr-8 3xl:space-x-12 items-center rounded bg-white">
                <div class="relative md:h-[50%] md:w-[100%] lg:w-[42%] lg:h-[100%]">
                    <div class="h-[100%]" id="crousel">
                    </div>
                    <button class="absolute top-1/2 left-3 h-5" onclick="prev_crousel()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            class="w-5 opacity-80" viewBox="0 0 16 16">
                            <path
                                d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                        </svg>
                    </button>
                    <button class="absolute top-1/2 right-3 h-5" onclick="next_crousel()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            class="w-5 opacity-80" viewBox="0 0 16 16">
                            <path
                                d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg>
                    </button>
                </div>
                <script>
                    let crousel = document.getElementById('crousel');

                    const images = [
                        "{{ asset('img/default_img.jpg') }}",
                        "{{ asset('img/user_img.png') }}",
                    ]

                    var index = 0;

                    crousel.innerHTML = `<img src="${images[0]}" onerror="this.src='{{ asset('img/default_img.jpg') }}'" class="object-cover w-full h-full rounded-sm">`

                    function next_crousel() {
                        index = index < images.length - 1 ? index+1 : index;
                        crousel.innerHTML = `<img src="${images[index]}" onerror="this.src='{{ asset('img/default_img.jpg') }}'" class="object-cover w-full h-full rounded-sm">`
                    }

                    function prev_crousel() {
                        index = index > 0 ? index-1 : index;
                        crousel.innerHTML = `<img src="${images[index]}" onerror="this.src='{{ asset('img/default_img.jpg') }}'" class="object-cover w-full h-full rounded-sm">`
                    }

                </script>


                <div
                    class="flex flex-col justify-center items-start py-2 space-y-10 sm:space-y-6 sm:px-3 md:px-2 md:w-[100%] lg:w-[58%]">
                    <h2 class="font-black w-full uppercase truncate text-3xl lg:text-2xl">Lorem Ipsum</h2>
                    <div class="snap-y snap-mandatory overflow-y-auto w-full max-h-72 pr-5 text-xs sm:text-base sm:pr-8 md:max-h-72 lg:max-h-24"
                        id="descr-scroll">
                        <p id="deskripsi" class="snap-start text-justify block">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas
                            similique quae corrupti tempora officiis unde dignissimos, facere rerum officia doloremque
                            sunt.
                            Impedit
                            ipsa officiis voluptas, id et repudiandae quibusdam assumenda.</p>
                        <br>
                        <p id="deskripsi" class="snap-start text-justify block">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas
                            similique quae corrupti tempora officiis unde dignissimos, facere rerum officia doloremque
                            sunt.
                            Impedit
                            ipsa officiis voluptas, id et repudiandae quibusdam assumenda.</p>
                        <br>
                        <p id="deskripsi" class="snap-start text-justify block">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas
                            similique quae corrupti tempora officiis unde dignissimos, facere rerum officia doloremque
                            sunt.
                            Impedit
                            ipsa officiis voluptas, id et repudiandae quibusdam assumenda.</p>
                    </div>


                    <div class="flex space-x-4 justify-start items-center pt-[1rem]">
                        @auth
                        <button
                            class="flex justify-center space-x-3 w-28 uppercase font-black items-center py-2 rounded bg-[#53A8E9] text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-auto h-5 stroke-[0.8px] stroke-white" viewBox="0 0 16 16">
                                <path
                                    d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                            </svg>
                            <p class="text-md">buy</p>
                        </button>
                        @endauth
                        <p class="text-[#7DBDEE] text-xl font-black">
                            <span>Rp</span>500.000
                        </p>
                    </div>
                </div>
            </section>
        </section>
    </section>
</x-app-layout>
