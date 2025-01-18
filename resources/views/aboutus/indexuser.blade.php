<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

    <div id="aboutus" class="py-20 bg-white text-center">
        <h2 class="text-3xl font-bold mb-8">About Us</h2>

        @if ($aboutus->isEmpty())
        <p>No data available.</p>
        @else
        <!-- Flexbox untuk menampilkan kotak-kotak tentang kami -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-4">
            @foreach ($aboutus as $item)
            <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-300">
                <h3 class="text-xl font-semibold mb-4">{{ $item->penjelasan }}</h3>
            </div>
            @endforeach
        </div>
        @endif
    </div>
    <!-- Script for Mobile Menu -->
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>

</html>