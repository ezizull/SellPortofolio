<x-app-layout>
    <section
        class="flex pt-14 w-full justify-center min-h-screen bg-gray-100 space-x-6">
        <section
            class="flex w-2/5 mt-20 mb-32 py-10 px-6 justify-center items-center rounded bg-white">
            @if (isset($data))
            <form class="w-full" method="post" action=""
                enctype="multipart/form-data">


                @else
                <form class="w-full" method="post" action="" enctype="multipart/form-data">
                    @endif
                    @csrf

                    @php
                    if (request()->routeIs('penjual.delete')){
                    $readonly = "readonly";
                    $disabled = "disabled";
                    } else {
                    $readonly = "";
                    $disabled = "";
                    }
                    @endphp

                    <div class="space-y-6">
                        <div>
                            <x-label for="title" :value="__('Title')" />

                            <input id="title"
                                class="block rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 mt-1 h-10 w-full"
                                type="text" name="title"
                                value="{{ isset($data)? $data->title : '' }}"
                                required
                                autofocus
                                {{ $readonly }} />
                        </div>

                        <div>
                            <div class="flex justify-between">
                                <label for="photo">
                                    {{ __('Photo') }}
                                </label>
                                <span class="text-red-500" id="error"></span>
                            </div>

                            @php
                            if (request()->routeIs('penjual.add')){
                            $target = 'addpenjual';
                            } else if (request()->routeIs('penjual.edit')){
                            $target = 'editpenjual';
                            } else if (request()->routeIs('penjual.delete')){
                            $target = 'delpenjual';
                            }
                            @endphp

                            <div class="flex h-10 space-x-2">
                                <input id="photo"
                                    class="block rounded-md shadow border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 mt-1 h-10 w-full"
                                    type="file" target="{{ $target }}" name="photo" accept="image/*"
                                    required="required" {{ $disabled }}
                                    autofocus />

                                @if (isset($data))
                                <div>
                                    <img id="display" class="object-cover h-11 w-11 rounded shadow-sm"
                                        src="{{  asset($data->photo) }}"
                                        onerror="this.src='{{ asset('img/default_img.jpg') }}'" {{ $readonly }}>

                                    <script>
                                        const img = document.getElementById("photo");
                                            if(img.src == ''){
                                                img.src = 'img/default_img.jpg';
                                            }

                                            let error = document.getElementById("error");
                                            const display = document.getElementById("display");
                                            const old = display;
                                            img.addEventListener("change", (e) => {
                                                const file = document.querySelector("input[type=file]").files[0];
                                                if (file) {
                                                    previewImage(file);
                                                } else {
                                                    error.innerText = "*Select Image";
                                                }
                                            })
                                            function previewImage(imgD) {
                                                const reader = new FileReader();

                                                // PREVIEW
                                                reader.addEventListener("load", function () {
                                                    display.src = reader.result;
                                                })

                                                // CHECK IF THERE IS SELECTION
                                                if (imgD) {
                                                    // CHECK IF THE FILE IS AN IMAGE
                                                    if (imgD.type === "image/jpeg" || imgD.type == "image/jpg" || imgD.type == "image/gif" || imgD.type == "image/png") {
                                                        error.innerText = "";

                                                        // CONVERTS FILE TO BASE 64
                                                        reader.readAsDataURL(imgD);
                                                    } else {
                                                        error.innerText = "*Must Image"
                                                        display.src = old;
                                                    }
                                                }

                                                // IF NO IMAGE
                                                else {
                                                    display.src = old;
                                                    error.innerText = "*Select Image";
                                                }
                                            }
                                    </script>
                                </div>
                                @endif
                            </div>
                        </div>

                        <div>
                            <x-label for="deskripsi" :value="__('Deskripsi')" />

                            <textarea id="deskripsi"
                                class="block mt-1 min-h-40 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="deskripsi"
                                :value="old('deskripsi')"
                                required
                                autofocus {{ $readonly }}>{{ $data->deskripsi ?? '' }}</textarea>
                        </div>

                        @php
                        if (request()->routeIs('penjual.add')){
                        $border = ' focus:border-[#53A8E9]';
                        } else if (request()->routeIs('penjual.edit')){
                        $border = ' focus:border-[#35E263]';
                        } else if (request()->routeIs('penjual.delete')){
                        $border = ' focus:border-[#EC4E4E]';
                        }
                        @endphp

                        <div>
                            <x-label for="harga" :value="__('Harga')" />

                            @php
                            if (request()->routeIs('penjual.add')){
                            $text = 'text-[#7DBDEE]';
                            } else if (request()->routeIs('penjual.edit')){
                            $text = 'text-[#6fed91]';
                            } else if (request()->routeIs('penjual.delete')){
                            $text = 'text-[#fe8c8c]';
                            }
                            @endphp

                            <div class="flex {{ $text }} space-x-2 items-end">
                                <p class="text-xl font-black">
                                    Rp
                                </p>
                                <input id="harga"
                                    class="w-full text-xl font-bold p-2 border-b border-t-0 border-x-0 focus:border-b-2 border-gray-400 {{ $border }} focus:ring-0 border-opacity-50 h-10"
                                    type="text" name="harga" onkeypress="return onlyNumberKey(event)"
                                    value="{{ isset($data)? $data->harga : '' }}"
                                    required
                                    autofocus {{ $readonly }} />

                                <script>
                                    function onlyNumberKey(evt) {

                                        // Only ASCII character in that range allowed
                                        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
                                        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                                            return false;
                                        return true;
                                    }
                                </script>
                            </div>
                        </div>
                    </div>


                    @php
                    if (request()->routeIs('penjual.add')){
                    $background = 'bg-[#53A8E9] hover:bg-[#67b2ec]';
                    } else if (request()->routeIs('penjual.edit')){
                    $background = 'bg-[#35E263] hover:bg-[#47e972]';
                    } else if (request()->routeIs('penjual.delete')){
                    $background = 'bg-[#EC4E4E] hover:bg-[#f65757]';
                    }
                    @endphp

                    <button type="submit"
                        class="{{ $background }} flex mt-8 justify-center w-full items-center px-4 py-2.5 border border-transparent rounded-md font-black text-xs text-white uppercase tracking-widest focus:outline-none focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                        {{ __('Submit') }}
                    </button>
                </form>
        </section>
    </section>
</x-app-layout>
