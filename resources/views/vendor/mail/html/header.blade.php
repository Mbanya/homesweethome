@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Homes Sweet Home')
<img src="https://wmbanya.ap-south-1.linodeobjects.com/hsh-logo.png" class="logo" alt="HSH Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
