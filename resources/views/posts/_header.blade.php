<header class="max-w-4xl mx-auto mt-20 text-center">
    <div class="mx-w-lg mx-auto">
        <h1 class="text-4xl">
            Latest <span class="text-blue-500">Laravel From Scratch</span> News
        </h1>
        <h2 class="inline-flex mt-2">By Ragy Costa de jesus <img src="/images/lary-head.svg" alt="Lary Head" ></h2>

        <div class="tw-flex tw-justify-center mt-4 space-y-4 lg:space-y- 0 lg:space-x-8">
            <!-- Category-->
            <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
                <x-category-dropdown />
            </div>


            <!-- Other Filters-->
            {{-- <span class="relative flex lg:inline-flex item-center bg-gray-100 inline-block rounded-xl">
                <select class=" flex-1 appearance-none bg-transparent py-2 px-3 pr-9 text-sm fron-semibold">
                    <option value="category" disabled selected>Other Filters</option>
                    <option value="personal" disabled selected>Foo</option>
                    <option value="business" disabled selected>Other Filters</option>
                </select>

                <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                height="35" viewBox="0 0 22 22">
                    <g fill="none" fill-rule="evenodd">
                        <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                        </path>
                        <path fill="#222"
                         d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                    </g>
                </svg>
            </span> --}}
            <!-- Search-->


            <span class="relative flex lg:inline-flex item-center bg-gray-100 inline-block rounded-xl py-2 px-3 ">
                <form action="#" method="GET">
                    @if(request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    <input type="text"
                        name="search"
                        placeholder="Find something"
                        class="bg-transparent placeholder-black font-semibold focus-within:outline-none"
                        value="{{ request('search') }}"
                    >
                </form>
            </span>
        </div>
    </div>
</header>
