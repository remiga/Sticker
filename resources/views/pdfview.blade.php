<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
        {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

        <title>Lipdukų spausdinimas</title>
        <style>
            @page { margin-top: -2px; margin-left: 2px; position: fixed;}
            /* latin-ext */
            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 400;
                src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v14/S6uyw4BMUTPHjxAwXjeu.woff2) format('woff2');
                unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 400;
                src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v14/S6uyw4BMUTPHjx4wXg.woff2) format('woff2');
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            }
            header { position: fixed; top: 1px; left: 0px; right: 0px; height: 1px; }
            footer { position: fixed; bottom: 1px; left: 0px; right: 0px; height: 1px; }
            p { page-break-after: always;
                page-break-inside: avoid;}
            p:last-child { page-break-after: never; }
            body {
                /*font-family: DejaVu Sans;*/
                font-family: DejaVu Sans Mono;
                /*font-family: DejaVu Serif;*/
                font-size: 50px;
                margin: 0px;
                padding: 0px;
                line-height: 0.85em;
            }
            .historynumber{
                text-align: center;
                font-size: 40px;
                font-family: DejaVu Sans Mono;
                font-style: Bold;
            }
        </style>
    </head>
    <body>
    {{--{{ dd($data) }}--}}


<main>
        {{--@for ($i = 1; $i <= 8; $i--)--}}
        {!! $text !!}

        {{--@endfor--}}
            {{--{!! $text !!}--}}
</main>
    {{--@foreach ($patients as $patient)--}}
        {{--{{ $patient->name }}--}}
        {{--{{ $patient->surnname }}--}}
        {{--{{ $patient->pn }}--}}
    {{--@endforeach--}}
    {{--{{print_r($patients)}};--}}
    </body>
</html>
