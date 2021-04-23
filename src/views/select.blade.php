<select id="@isset($data["ids"][0]){{$data["ids"][0]}}@endisset" name="@isset($data["name"]){{$data["name"]}}@endisset" class="@isset($data["classes"]) @forelse ($data["classes"] as $cls){{$cls}} @empty @endforelse @endisset" @isset($data["required"]) @if($data["required"] == true) required @endif @endisset>
            <option selected>Select</option>
            @isset($data["values"])
            @forelse ($data["values"] as $value => $option)
            <option value="{{$value}}" @isset($data["active"]) @if($data["active"] !=null && $data["active"]==$value) selected @endif @endisset>{{$option}}</option>
            @empty

            @endforelse
            @endisset
</select>