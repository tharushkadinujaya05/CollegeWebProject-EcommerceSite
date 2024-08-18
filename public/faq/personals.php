<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .accordion-content {
            display: none;
        }
        .accordion-header.active .accordion-content {
            display: block;
        }
        .accordion-header .arrow {
            transition: transform 0.3s ease;
        }
        .accordion-header.active .arrow {
            transform: rotate(90deg);
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6 bg-white shadow-md">
        <div class="flex">
            <div class="w-1/4 p-4 border-r border-gray-200">
                <h2 class="text-lg font-semibold mb-4">Categories</h2>
                <ul class="space-y-2">
                    <li><a href="delivery.html" class="text-gray-700 hover:text-blue-500">Delivery and order tracking</a></li>
                    <li><a href="returns.html" class="text-gray-700 hover:text-blue-500">Returns, exchanges and refunds</a></li>
                    <li><a href="payment.html" class="text-gray-700 hover:text-blue-500">Payments and promotions</a></li>
                    <li><a href="informations.html" class="text-gray-700 hover:text-blue-500">Information on sizes and products</a></li>
                    <li><a href="personals.html" class="text-gray-700 hover:text-blue-500">Personal data and notifications</a></li>
                </ul>
            </div>
            <div class="w-3/4 p-4">
                <!--<h1 class="text-2xl font-bold mb-4">Where is my order?</h1>
                <p class="text-gray-700 mb-6">Check the details of your in-store and online purchases, and know their status at any moment in My purchases. If you already have an account, log in with your e-mail address and password. If you purchased as a guest, enter your e-mail address and the order number you wish to consult. In this case, be sure to log in from My purchases &gt; I am not registered.</p>-->
                <h3 class="text-xl font-semibold mb-4">Personal data and notifications</h3>
                        <div class="accordion-item border-b border-gray-200">
            <div class="accordion-header flex justify-between items-center cursor-pointer p-4" onclick="toggleAccordion(this)">
                <span>How do you protect my personal data?</span>
                <svg class="arrow w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </div>
            <div class="accordion-content p-4">
                <p>We prioritize the security of your personal data and employ industry-standard encryption and security measures to protect your information.

                </p>
            </div>
        </div>
        <div class="accordion-item border-b border-gray-200">
            <div class="accordion-header flex justify-between items-center cursor-pointer p-4" onclick="toggleAccordion(this)">
                <span>Can I request to view or deleted my personal data?</span>
                <svg class="arrow w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </div>
            <div class="accordion-content p-4">
                <p>Yes, you can request access to or deletion of your personal data. Contact our customer service team or refer to our Privacy Policy for more information.</p>
            </div>
        </div>
        <div class="accordion-item border-b border-gray-200">
            <div class="accordion-header flex justify-between items-center cursor-pointer p-4" onclick="toggleAccordion(this)">
                <span>How do I contact customer service about my personal data?</span>
                <svg class="arrow w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </div>
            <div class="accordion-content p-4">
                <p>For inquiries regarding your personal data, please contact our customer service team directly. They will assist you with any questions or requests you may have.</p>
            </div>
        </div>
        <div class="accordion-item border-b border-gray-200">
            <div class="accordion-header flex justify-between items-center cursor-pointer p-4" onclick="toggleAccordion(this)">
                <span>How do I sign up for notifications?</span>
                <svg class="arrow w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </div>
            <div class="accordion-content p-4">
                <p>You can sign up for notifications by subscribing to our newsletter or opting in during checkout. You may also manage your notification preferences in your account settings.</p>
            </div>
        </div>
        <div class="accordion-item border-b border-gray-200">
            <div class="accordion-header flex justify-between items-center cursor-pointer p-4" onclick="toggleAccordion(this)">
                <span>What types of notifications will I receive?</span>
                <svg class="arrow w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </div>
            <div class="accordion-content p-4">
                <p>Notifications may include order updates, promotional offers, and important announcements related to your account and preferences.</p>
            </div>
        </div>
        <div class="accordion-item border-b border-gray-200">
            <div class="accordion-header flex justify-between items-center cursor-pointer p-4" onclick="toggleAccordion(this)">
                <span>Why am I not receiving notifications?</span>
                <svg class="arrow w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </div>
            <div class="accordion-content p-4">
                <p>If you're not receiving notifications, check your email spam folder and ensure your notification preferences are correctly set in your account settings. If issues persist, contact our customer support for assistance.</p>
            </div>
        </div>
            </div>
        </div>
    </div>
    <script>
        function toggleAccordion(element) {
            element.classList.toggle('active');
            const content = element.nextElementSibling;
            if (element.classList.contains('active')) {
                content.style.display = 'block';
            } else {
                content.style.display = 'none';
            }
        }
    </script>
</body>
</html>