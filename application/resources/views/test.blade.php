<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    @livewireStyles
    <title>Laravel</title>

</head>
<body class="antialiased">
<hr>
<div id="test">
    <test/>
</div>
<hr>

<livewire:card />

@livewireScripts
@vite('resources/js/app.js')
</body>
</html>

<script>
    import Test from "../js/components/Test";

    export default {
        components: {Test}
    }
</script>
