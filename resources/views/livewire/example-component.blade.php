<div>
    <b>I'm a Livewire Component within a blade view...</b>

    <p>Select 2 Example Below</p>

    <livewire:select-2 :options="$this->items" onchange="callChange" name="items" model="{{$this->items[0]}}" /> 
    <b>Triggered : {{$this->triggered}}</b>
</div>
