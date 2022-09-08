

<div class="pt-12 mx-auto bg-gray-300">
    <div class='max-w-4xl p-4 mx-auto mt-12 bg-white'>
       <div>Question {{$step}} / {{$maxStep}}</div>
        <div>
            {{$question['question']}}
        </div>

        <div class="flex justify-between">
            <div class="btn" wire:click="previous">Précedent</div>
            <div class="space-x-4">
                @foreach ($reponses as $reponse)
                <input type="radio" value="{{$reponse}}" wire:model='reponse.{{$reponse}}'>{{$reponse}}</input>
                @endforeach

            </div>
            <div>
                @if($step == $this->maxStep)
                    <div class="btn" wire:click="finish">Terminer</div>
                @else
                <div class="btn" wire:click="next">Suivant</div>
                @endif
            </div>


        </div>
    </div>

</div>


