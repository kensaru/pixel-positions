{{-- @props(['tag', 'classes' => 'tag ', 'size' => 'medium']) --}}
{{-- to use the global $tag variable passed in automatically thru the foreach, props needs to be fully removed --}}

@php

$classes = "tag ";
$size = null;

if ($size === 'smaller') {
    $classes .= " smaller"; //add classes to make tags smaller
}
elseif ($size === 'bigger') {
    $classes .= " bigger"; //add classes to make tags bigger
}
else {'what?';}


@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ ucwords($tag->name) }}</a>