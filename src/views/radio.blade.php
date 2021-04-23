<fieldset id="@isset($data["ids"][0]){{$data["ids"][0]}}@endisset" class="@isset($data["classes"]) @forelse ($data["classes"] as $cls){{$cls}} @empty @endforelse @endisset">
        @isset($data["values"])
            @forelse ($data["values"] as $value => $option)
            <label><input type="radio" value="{{$value}}" name="@isset($data["name"]){{$data["name"]}}@endisset" @isset($data["active"]) @if($data["active"] !=null && $data["active"]==$value) checked @endif @endisset> {{$option}}</label>
            @empty
            @endforelse
        @endisset
</fieldset>