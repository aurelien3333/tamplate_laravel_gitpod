
<x-app-layout>
    <div class='flex items-center justify-center max-w-4xl mx-auto mt-12 text-center bg-white border border-black rounded-md shadow-md'>
        <div
            x-cloak
            x-data="{
                progress: 0,
                circumference: 30 * 2 * Math.PI,
            }"
            x-init="() => {
                const interval = setInterval(() => {
                    progress = progress + 1;
                    if (progress >= 100) {
                        clearInterval(interval);
                    }
                }, 60);
                this.progress = 0;
            }"
        >
        <div class="relative inline-flex items-center justify-center overflow-hidden" x-show='progress !== 100'>
            <svg class="w-28 h-28">
                <circle
                    class="text-gray-200 scale-150 border-2 border-red-500"
                    stroke-width="5"
                    stroke="currentColor"
                    fill="transparent"
                    r="30"
                    cx="35"
                    cy="35"
                />
                <circle
                    x-cloak
                    class="transition-all duration-100 ease-in-out scale-150 border-2 border-green-500 text-primary"
                    stroke-width="5"
                    :stroke-dasharray="circumference"
                    :stroke-dashoffset="circumference - progress / 100 * circumference"
                    stroke-linecap="round"
                    stroke="currentColor"
                    fill="transparent"
                    r="30"
                    cx="35"
                    cy="35"
                />
            </svg>
            <span class="absolute -mt-1 -ml-1 text-xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 text-primary" x-text="`${progress}%`"></span>
        </div>
        <div x-show='progress !== 100'>Préparation de votre test...</div>
        <div x-show='progress === 100' >
                ok
        </div>
    </div>
</x-app-layout>
