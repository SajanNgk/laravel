@php
$arr=["Sajan","Sonam","Prashanna"];
print_r($arr);
@endphp
<select>
@foreach ($arr as $key=> $item)

<option value="{{ $key }}">{{ $item }}</option>

    
@endforeach
</select>