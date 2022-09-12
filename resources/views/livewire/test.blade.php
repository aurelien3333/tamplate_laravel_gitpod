

<div class="h-screen pt-12 mx-auto bg-gray-300">
    <div class='max-w-4xl p-4 mx-auto mt-12 bg-white border border-black rounded-md shadow-md'>
       <div>Question {{$step}} / {{$maxStep}}</div>
        <div class="h-12 my-4 text-center">
            {{$question['question']}}
        </div>

        <div class="flex flex-col justify-between my-12">

            <div class="flex justify-between px-24">
                @foreach ($reponses as $index => $reponse)
                    <div>
                        <div class="w-16 h-16 border border-gray-600 rounded-full shadow-xl cursor-pointer" wire:click='reponse({{$reponse}})'></div>
                        <div class="text-[10px] font-bold text-center mt-2 w-16">{{$reponse}}</div>
                    </div>
                @endforeach

            </div>
            <div class="flex flex-row justify-around mt-12">
                <div class="btn" wire:click="previous">Précedent</div>
                <div>
                    @if($step == $maxStep)
                        <div class="btn" wire:click="finish">Terminer</div>
                    @else
                        <div class="text-white bg-green-600 border border-green-700 shadow-xl btn" wire:click="next">Suivant</div>
                    @endif
                </div>
            </div>



        </div>
    </div>

</div>


