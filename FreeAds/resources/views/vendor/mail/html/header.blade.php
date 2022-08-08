<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'BarFlaTo')
<img src="https://i.ibb.co/K27QLTp/logo.png" class="logo" alt="Barflato Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
