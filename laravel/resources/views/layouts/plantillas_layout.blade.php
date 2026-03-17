<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;1,300;1,400&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        stone: {
                            50: '#fafaf9',
                            100: '#f5f5f4',
                            200: '#e7e5e4',
                            300: '#d6d3d1',
                            400: '#a8a29e',
                            500: '#78716c',
                            600: '#57534e',
                            700: '#44403c',
                            800: '#292524',
                            900: '#1c1917',
                        },
                        sage: {
                            100: '#f0f4f0',
                            200: '#dce8dc',
                            300: '#b8d0b8',
                            400: '#8ab48a',
                            500: '#6a9a6a',
                            600: '#4e7a4e',
                        },
                        sand: {
                            100: '#fdf8f2',
                            200: '#f5ead8',
                            300: '#e8d5b7',
                            400: '#d4b896',
                        },
                        velvet: {
                            900: '#0a0a0f',
                            800: '#13131c',
                            700: '#1c1c2e',
                            600: '#252540',
                            500: '#2e2e52',
                        },
                        gold: {
                            300: '#f5d68a',
                            400: '#e8bc5a',
                            500: '#c9952a',
                            600: '#9a6e18',
                        },
                        mist: {
                            400: '#9b9bbf',
                            500: '#7070a0',
                            600: '#505078',
                        },
                        noir: {
                            950: '#080808',
                            900: '#0f0f0f',
                            800: '#1a1a1a',
                            700: '#252525',
                            600: '#333333',
                            500: '#444444',
                        },
                        champagne: {
                            300: '#f7e8c8',
                            400: '#e8cfa0',
                            500: '#c9a96e',
                            600: '#a07840',
                        },
                        pearl: {
                            100: '#f9f7f4',
                            200: '#ede8e0',
                            300: '#d4ccc0',
                            400: '#b0a594',
                        }


                    },
                    fontFamily: {
                        'display': ['Cormorant Garamond', 'serif'],
                        'body': ['Jost', 'sans-serif'],
                    },
                    fontFamily: {
                        display: ['DM Serif Display', 'serif'],
                        body: ['DM Sans', 'sans-serif'],
                    },
                    fontFamily: {
                        display: ['Playfair Display', 'serif'],
                        body: ['Outfit', 'sans-serif'],
                    }


                }
            }
        }
    </script>
@yield('content')