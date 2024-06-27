<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smooth Scrolling Header</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <header id="header" class="bg-gray-800 text-white py-4 fixed w-full z-30" data-aos="slide-down" data-aos-duration="700">
        <div class="container mx-auto px-4">
            <h1 class="text-lg">Smooth Scrolling Header</h1>
        </div>
    </header>

    <div style="height: 1500px; width: 100%">
        <!-- <p class="container mx-auto px-4" style="height: 1500px;">
            Scroll down to see the header slide effect.
        </p> -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 100) {
                header.classList.add('aos-animate');
            } else {
                header.classList.remove('aos-animate');
            }
        });
    </script>
</body>

</html>