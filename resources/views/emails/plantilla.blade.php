@component('mail::message')
# Bienvenido a nuestro CMS

Para Validar tu cuenta por favor ingresa el siguiente código en la aplicación.
@component('mail::panel')
{{ $codigo }}
@endcomponent

Gracias,<br>
Mario, Iker y Sebastián.
@endcomponent
