<input type="@isset($data["type"]){{$data["type"]}}@endisset" id="@isset($data["ids"][0]){{$data["ids"][0]}}@endisset" name="@isset($data["name"]){{$data["name"]}}@endisset" class="@isset($data["classes"]) @forelse ($data["classes"] as $cls){{$cls}} @empty  @endforelse @endisset" value="@isset($data["values"]["prev_value"]){{$data["values"]["prev_value"]}}@endisset" required="@isset($data["required"]){{$data["required"]}}@endisset">