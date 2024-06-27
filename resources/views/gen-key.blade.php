<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gen Key</title>
    @vite('resources/css/app.css')

</head>

<body>
    <div class="coin-background h-lvh w-lvw flex justify-center items-center bg-cover font-popi">
        <div class="h-full w-full bg-black bg-opacity-85 absolute z-0"></div>
        <form id="genKeyForm" class="absolute z-10 flex flex-col gap-3 justify-center items-center w-1/2">
            @csrf
            <div class="flex w-full">
                <input type="text" name="key" placeholder="Enter your key here..."
                    class="flex-1 rounded-s border-1 border-solid border-gray-700 bg-transparent px-3 py-2 text-xs text-gray-300 outline-none" />
                <button class="rounded-e bg-gray-700 px-4 text-xs font-bold text-green-400 hover:bg-gray-600"
                    type="submit">
                    Generate
                </button>
            </div>
            <p class="cursor-pointer text-emerald-400 hover:text-emerald-500 font-bold tracking-wider text-sm absolute top-[120%]"
                id="hashedKey">
                {{ $hashedKey ?? '' }}
            </p>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('genKeyForm').addEventListener('submit', function (event) {
                event.preventDefault(); // Ngăn chặn form gửi đi và tải lại trang

                let form = event.target;
                let formData = new FormData(form);

                fetch("{{ route('gen-key.post') }}", {
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': form.querySelector('[name="_token"]').value
                    },
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('hashedKey').innerText = data.hashedKey;
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred. Please try again.');
                    });
            });
        });
        const hashedKeyElement = document.getElementById('hashedKey');

        hashedKeyElement.addEventListener('click', () => {
            // Create a temporary textarea to copy the text
            const tempTextarea = document.createElement('textarea');
            tempTextarea.value = hashedKeyElement.textContent;
            document.body.appendChild(tempTextarea);

            // Select and copy the text
            tempTextarea.select();
            document.execCommand('copy');

            // Clean up
            document.body.removeChild(tempTextarea);

            // Show "Copied" message
            const copiedMessage = document.createElement('span');
            copiedMessage.textContent = 'Copied';
            copiedMessage.classList.add('copied');
            hashedKeyElement.appendChild(copiedMessage);

            // Remove the "Copied" message after 1.5 seconds
            setTimeout(() => {
                copiedMessage.remove();
            }, 1500);
        });
    </script>
</body>

</html>