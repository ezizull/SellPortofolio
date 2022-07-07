<x-admin-layout>
    <section
        class="flex w-full min-h-screen justify-center items-center bg-gray-100">
        <section
            class="flex h-[24rem] w-[70%] rounded p-2 bg-white">
            <div class="flex flex-col w-1/2 justify-center items-center">
                <h1 class="font-bold text-xl">
                    Portofolio
                </h1>
                <p class="text-xl">{{ isset($portofolio) ? $portofolio->count() : '' }}</p>
            </div>
            <div class="flex flex-col w-1/2 justify-center items-center">
                <h1 class="font-bold text-xl">
                    User
                </h1>
                <p class="text-xl">{{ isset($user) ? $user->count() : '' }}</p>
            </div>
        </section>

    </section>
</x-admin-layout>
