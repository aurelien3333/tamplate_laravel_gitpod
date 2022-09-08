

<div class="h-screen pt-12 mx-auto bg-gray-300">
    <div class='max-w-4xl p-4 mx-auto mt-12 bg-white'>
       <div>Question {{$step}} / {{$maxStep}}</div>
        <div class="my-4 text-center">
            {{$question['question']}}
        </div>

        <div class="flex flex-col justify-between">

            <div class="grid grid-cols-3 gap-4">
                @foreach ($reponses as $index => $reponse)
                <div class="btn" wire:click='reponse({{$index + 1}})'>{{$reponse}}</div>
                @endforeach

            </div>
            <div class="flex flex-row justify-around mt-4">
                <div class="btn" wire:click="previous">Précedent</div>
                <div>
                    @if($step == $this->maxStep)
                        <div class="btn" wire:click="finish">Terminer</div>
                    @else
                        <div class="bg-green-500 btn" wire:click="next">Suivant</div>
                    @endif
                </div>
            </div>


        </div>
    </div>

</div>


