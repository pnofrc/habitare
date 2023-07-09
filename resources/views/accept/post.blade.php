<x-mail::message>

{{$name}} ha postato:

{{$post}}


Con questa immagine:
{{$img}}
<img src="{{$img}}" style="width:100%" alt="">

<x-mail::button :url="$id">
CONFERMA
</x-mail::button>

</x-mail::message>
