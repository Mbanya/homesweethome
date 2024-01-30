@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Homes Sweet Home')
<img src="https://homesweethome.co.ke/main/logo/hsh-logo.png" class="logo" alt="HSH Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
