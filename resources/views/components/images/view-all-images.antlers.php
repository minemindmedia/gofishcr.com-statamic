<div x-data="{ open: false }" class="flex justify-center">
    <!-- Trigger -->
    <span x-on:click="open = true">
        <button type="button" class="absolute bottom-0 right-0 px-4 py-2 m-4 text-sm bg-white rounded-lg hover:bg-gray-100">
            View all images
        </button>
    </span>
    <!-- Modal -->
    <div
        x-show="open"
        style="display: none"
        x-on:keydown.escape.prevent.stop="open = false"
        role="dialog"
        aria-modal="true"
        x-id="['modal-title']"
        :aria-labelledby="$id('modal-title')"
        class="fixed inset-0 z-[999999999999] overflow-y-auto"
        x-swipe:down.threshold.200px="open = false"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        <!-- Overlay -->
        <div x-show="open" x-transition.opacity class="fixed inset-0 bg-opacity-100 z-[99999999] bg-brown-100" x-on:click="open = false"></div>
        <!-- Scroll down text -->


        <!-- Panel -->
        <div
            x-show="open" x-transition
            x-on:click="open = false"
            class="inset-0 overflow-y-auto "
        >
            <div
                x-on:click.stop
                x-trap.noscroll.inert="open"
                class="relative w-full max-w-2xl p-4 mx-auto overflow-y-auto bg-white"
            >
                <div class="flex flex-col space-y-4">
                    <div class="absolute top-0 right-0 p-4">
                        <i class="cursor-pointer fa-solid fa-times" x-on:click="open = false"></i>
                    </div>
                    <div class="flex items-center justify-center">
                        <i class="mr-2 fa-solid fa-arrow-down"></i>
                        {{ partial:/typography/p content="Scroll For More" class="!m-0 !p-0"}}
                        <i class="ml-2 fa-solid fa-arrow-down"></i>
                    </div>
                    {{ if additional_photos }}
                    {{ additional_photos }}
                    <img src="{{ url }}" alt="{{ img:alt }}">
                    <div class="flex items-center justify-center">
                        {{ if last }}
                        {{ partial:/typography/p content="THE END" class="!m-0 !p-0"}}
                        {{ else }}
                        <i class="mr-2 fa-solid fa-arrow-down"></i>
                        {{ partial:/typography/p content="Scroll For More" class="!m-0 !p-0"}}
                        <i class="ml-2 fa-solid fa-arrow-down"></i>
                        {{ /if }}
                    </div>
                    {{ /additional_photos }}
                    {{ /if }}
                </div>
            </div>
        </div>
    </div>
</div>
