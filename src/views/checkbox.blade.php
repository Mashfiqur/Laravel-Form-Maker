<div id="@isset($data["ids"][0]){{$data["ids"][0]}}@endisset" class="@isset($data["classes"]) @forelse ($data["classes"] as $cls){{$cls}} @empty @endforelse @endisset" @isset($data["required"]) @if($data["required"] == true) required @endif @endisset>
        @isset($data["values"])
            @forelse ($data["values"] as $value => $option)
            <label><input type="checkbox" value="{{$value}}" name="@isset($data["name"]){{$data["name"]}}@endisset"> {{$option}}</label>
            @empty
            @endforelse
        @endisset
</div>