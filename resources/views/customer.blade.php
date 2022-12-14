<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Customer</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased">
        <div class="space-y-10 relative flex flex-col items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="p-6 md:w-1/2 w-10/12 bg-gray-300">
                <div class="w-max mx-auto pb-6">
                    Now Serving:
                    @if(isset($ticket['now_serving']))
                    <span id="current-queue">{{$ticket['now_serving']->id}}</span><br>
                    @else
                    <span id="current-queue"></span><br>
                    @endif
                    Last Number:
                    @if(isset($ticket['last_number']))
                    <span id="last-number">{{$ticket['last_number']->id}}</span><br>
                    @else
                    <span id="last-number"></span><br>
                    @endif
                </div>
                <button id="take-a-number" class="block p-6 bg-white mx-auto">
                    Take a Number
                </button>
            </div>
            <div class="w-10/12 justify-around flex flex-col md:flex-row">
                <div id="main-counter-1" class="p-2 bg-white text-center">
                    <div class="flex justify-end">
                        @if(isset($ticket['c1']))
                        <div id="color-indicator-color-1" class="bg-red-500 w-[30px] h-[30px] rounded-full"></div>
                        @else
                        <div id="color-indicator-color-1" class="bg-green-500 w-[30px] h-[30px] rounded-full"></div>
                        @endif
                    </div>
                    <div class="px-4 pt-4">
                        <div class="pb-4">
                            Counter 1
                        </div>
                        <div id="currently-serving-ticket-1" class="">
                            @if(isset($ticket['c1']))
                            {{$ticket['c1']->id}}
                            @endif
                        </div>
                    </div>
                </div>
                <div id="main-counter-2" class="p-2 bg-white text-center">
                    <div class="flex justify-end">
                        @if(isset($ticket['c2']))
                        <div id="color-indicator-color-2" class="bg-red-500 w-[30px] h-[30px] rounded-full"></div>
                        @else
                        <div id="color-indicator-color-2" class="bg-green-500 w-[30px] h-[30px] rounded-full"></div>
                        @endif
                    </div>
                    <div class="px-4 pt-4">
                        <div class="pb-4">
                            Counter 2
                        </div>
                        <div id="currently-serving-ticket-2" class="">
                        @if(isset($ticket['c2']))
                        {{$ticket['c2']->id}}
                        @endif
                        </div>
                    </div>
                </div>
                <div id="main-counter-3" class="p-2 bg-white text-center">
                    <div class="flex justify-end">
                        @if(isset($ticket['c3']))
                        <div id="color-indicator-color-3" class="bg-red-500 w-[30px] h-[30px] rounded-full"></div>
                        @else
                        <div id="color-indicator-color-3" class="bg-green-500 w-[30px] h-[30px] rounded-full"></div>
                        @endif
                    </div>
                    <div class="px-4 pt-4">
                        <div class="pb-4">
                            Counter 3
                        </div>
                        <div id="currently-serving-ticket-3" class="">
                        @if(isset($ticket['c3']))
                        {{$ticket['c3']->id}}
                        @endif
                        </div>
                    </div>
                </div>
                <div id="main-counter-4" class="p-2 bg-white text-center">
                    <div class="flex justify-end">
                        @if(isset($ticket['c4']))
                        <div id="color-indicator-color-4" class="bg-red-500 w-[30px] h-[30px] rounded-full"></div>
                        @else
                        <div id="color-indicator-color-4" class="bg-green-500 w-[30px] h-[30px] rounded-full"></div>
                        @endif
                    </div>
                    <div class="px-4 pt-4">
                        <div class="pb-4">
                            Counter 4
                        </div>
                        <div id="currently-serving-ticket-4" class="">
                        @if(isset($ticket['c4']))
                        {{$ticket['c4']->id}}
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('615e35fa0d02b471a698', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('customer-view');
        channel.bind('on-off-toggled', function(data) {
            var counter_string = "main-counter-"+data.counter
            var counter_obj = document.getElementById(counter_string)
            if (data.status == "on") {
                counter_obj.classList.remove('opacity-20')
            } else {
                counter_obj.classList.add('opacity-20')
            }
        });

        channel.bind('counter-updated', function(data) {
            var color_indicator = "color-indicator-color-"+data.counter
            var color_obj = document.getElementById(color_indicator)
            var id_string = "currently-serving-ticket-"+data.counter
            var currently_serving = document.getElementById(id_string)

            if (data.status == "done") {
                color_obj.classList.add('bg-green-500')
                color_obj.classList.remove('bg-red-500')
                currently_serving.innerHTML = ""
            } else {
                color_obj.classList.add('bg-red-500')
                color_obj.classList.remove('bg-green-500')
            }
        });

        channel.bind('queue-updated', function(data) {
            var id_string = "currently-serving-ticket-"+data.counter
            var currently_serving = document.getElementById(id_string)
            console.log('asdasdasd')
            console.log(data.ticket)
            currently_serving.innerHTML = data.ticket
        });

        document.getElementById("take-a-number").addEventListener('click', (event) => {
            fetch("/api/take-number")
            .then(response => response.json())
            .then(data => {
                console.log(data)
                document.getElementById("last-number").innerHTML = data.id
            })
        })
    </script>
</html>
