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
                <h3 class="text-xl font-semibold mb-4">Delivery and order tracking</h3>
                <div class="accordion-item border-b border-gray-200">
                    <div class="accordion-header flex justify-between items-center cursor-pointer p-4" onclick="toggleAccordion(this)">
                        <span>Where is my order?</span>
                        <svg class="arrow w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                    <div class="accordion-content p-4">
                        <p>Check the details of your in-store and online purchases, and know their status at any moment in My purchases.</p>
                    </div>
                </div>
                <div class="accordion-item border-b border-gray-200">
                    <div class="accordion-header flex justify-between items-center cursor-pointer p-4" onclick="toggleAccordion(this)">
                        <span>What are the delivery methods and how much time each method takes?</span>
                        <svg class="arrow w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                    <div class="accordion-content p-4">
                        <p>We offer the following delivery methods:<br>
                            1.Standard Shipping: Typically takes 5-7 business days.<br>
                            2.Express Shipping: Usually delivered within 2-3 business days.<br>
                            3.Overnight Shipping: Delivered the next business day for orders placed before 3 PM.<br>
                            4.International Shipping: Delivery times vary by destination, typically 7-14 business days.<br><br>
                            Please note that these delivery times are estimates and may vary depending on your location and the availability of products.
                            </p>
                    </div>
                </div>
                <div class="accordion-item border-b border-gray-200">
                    <div class="accordion-header flex justify-between items-center cursor-pointer p-4" onclick="toggleAccordion(this)">
                        <span>Can I change the delivery address of an order?</span>
                        <svg class="arrow w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                    <div class="accordion-content p-4">
                        <p>Unfortunately, once an order is placed, we cannot alter the delivery address for security reasons. Please contact our customer support for more informations. Please ensure your address is correct before finalizing your purchase.</p>
                    </div>
                </div>
                <div class="accordion-item border-b border-gray-200">
                    <div class="accordion-header flex justify-between items-center cursor-pointer p-4" onclick="toggleAccordion(this)">
                        <span>Can I cancel my order?</span>
                        <svg class="arrow w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                    <div class="accordion-content p-4">
                        <p>Yes, you can cancel your order if it hasn't been processed for shipping yet. Log into your account, go to 'Cart,' select the order, and follow the cancellation instructions. If you checked out as a guest, contact our customer support for assistance.</p>
                    </div>
                </div>
                <div class="accordion-item border-b border-gray-200">
                    <div class="accordion-header flex justify-between items-center cursor-pointer p-4" onclick="toggleAccordion(this)">
                        <span>What should I do if I have not received all the items in my purchase?</span>
                        <svg class="arrow w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                    <div class="accordion-content p-4">
                        <p>If your order arrives incomplete, please check your email for any backorder notifications. If no communication has been received, contact our customer service with your order number, and we'll resolve the issue promptly</p>
                    </div>
                </div>
                <div class="accordion-item border-b border-gray-200">
                    <div class="accordion-header flex justify-between items-center cursor-pointer p-4" onclick="toggleAccordion(this)">
                        <span>What should I do if I have received an incorrect or defective item?</span>
                        <svg class="arrow w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                    <div class="accordion-content p-4">
                        <p>We apologize for any inconvenience caused. Please contact our customer support team immediately with your order number and details of the issue. We'll arrange for a return or replacement as soon as possible.</p>
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