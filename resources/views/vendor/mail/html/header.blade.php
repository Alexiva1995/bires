<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ public_path().'/images/zoe/logo/logo.svg'}}" class="logo" alt="zoe Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
