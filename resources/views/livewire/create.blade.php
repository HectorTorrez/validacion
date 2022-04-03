<form class="container" action="{{url('usuario')}}" method="POST">
    @csrf
    @include('livewire.form')
</form>