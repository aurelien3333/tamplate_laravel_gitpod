

<div class="h-screen pt-12 mx-auto bg-gray-300">
    <div
        wire:loading.delay.long
        >
        <div class='absolute top-0 left-0 z-50 flex items-center justify-center w-full h-full backdrop-blur-sm'>
            <x-loader-spin class="w-24 h-24 -mt-40 border-8" />
        </div>
    </div>
    <div class='relative max-w-4xl p-4 mx-auto mt-12 bg-white border border-black rounded-md shadow-md'>

       <div>Question {{$step}} / {{$maxStep}}</div>
        <div class="my-4 text-center m-h-12">
            {{$question['question']}}
        </div>

        <div class="my-12">

            <div class="flex flex-wrap justify-between gap-6 px-2 sm:px-24">
                @foreach ($reponses as $reponse)
                    <div class="flex flex-col items-center justify-start">
                        <div class="w-16 h-16 border border-gray-600 rounded-full shadow-xl cursor-pointer" wire:click='reponse({{$reponse['id']}})' style="background-color: {{$reponse['couleur']}}"></div>
                        <div class="text-[10px] font-bold text-center mt-2 w-16">{{$reponse['reponse']}}</div>
                    </div>
                @endforeach

            </div>
            <div class="flex flex-row justify-around mt-12">

                    @if($step > 1)
                        <div class="bg-red-600 btn" wire:click="previous">Précedent</div>
                    @else
                        <a class="block bg-red-600 btn" href="{{route('home')}}">Annuler</a>
                    @endif

                <div>
                    @if($step == $maxStep)
                        <div class="bg-green-600 btn" wire:click="finish">Terminer</div>
                    @else
                        <div class="bg-green-600 border border-green-700 shadow-xl btn" wire:click="next">Suivant</div>
                    @endif
                </div>
            </div>



        </div>
    </div>

</div>


