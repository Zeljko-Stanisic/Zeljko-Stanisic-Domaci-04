@if($errors->any())
<div class="alert" style="color:red; background-color:#9da19d" class="animation">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    @foreach($errors->all() as $error)
    <span>{{ $error }}</span><br>
    @endforeach
</div>
@endif