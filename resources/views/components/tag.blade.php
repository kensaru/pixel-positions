@php

$classes = "tag";
$size = null;

if ($size === 'smaller') {
    $classes .= " smaller"; //add classes to make tags smaller
}
elseif ($size === 'bigger') {
    $classes .= " bigger"; //add classes to make tags bigger
}
else {'what?';}


@endphp

<span class="{{ $classes }}">{{$tag->name}}</span>
