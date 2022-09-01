@for ($i=1;$i<=10;$i++)
@if($i==5)
@break
@endif
{{ $i }} 
@endfor BREAKED
<br />

@for ($i=1;$i<=10;$i++)
@if($i==5)
@continue
@endif
{{ $i }} 
@endfor CONTINUED