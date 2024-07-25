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
                <h3 class="text-xl font-semibold mb-4">Returns,Exchanges and Refunds</h3>
                <div class="accordion-item border-b border-gray-200">
                    <div class="accordion-header flex justify-between items-center cursor-pointer p-4" onclick="toggleAccordion(this)">
                        <span>How do I return an order?</span>
                        <svg class="arrow w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                    <div class="accordion-content p-4">
                        <p>To return an item, log into your Ivory Street account, navigate to 'Cart,' select the order containing the item you wish to return, and follow the instructions for initiating a return. If you checked out as a guest, please contact our customer support team for assistance.</p>
                    </div>
                </div>
                <div class="accordion-item border-b border-gray-200">
                    <div class="accordion-header flex justify-between items-center cursor-pointer p-4" onclick="toggleAccordion(this)">
                        <span>How long do I have to return an item?</span>
                        <svg class="arrow w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                    <div class="accordion-content p-4">
                        <p>You have 3 days from the date of delivery to initiate a return. Items must be in their original condition with tags attached to be eligible for a refund.</p>
                    </div>
                </div>
                <div class="accordion-item border-b border-gray-200">
                    <div class="accordion-header flex justify-between items-center cursor-pointer p-4" onclick="toggleAccordion(this)">
                        <span>How long does it take to process a return?</span>
                        <svg class="arrow w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                    <div class="accordion-content p-4">
                        <p>Once we receive your returned item, please allow 3 business days for us to process your return and issue a refund to your original payment method. You will receive an email confirmation once the refund is processed.</p>
                    </div>
                </div>
                <div class="accordion-item border-b border-gray-200">
                    <div class="accordion-header flex justify-between items-center cursor-pointer p-4" onclick="toggleAccordion(this)">
                        <span>How can I exchange an item?</span>
                        <svg class="arrow w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                    <div class="accordion-content p-4">
                        <p>If you wish to exchange an item for a different size or color, please initiate a return as described above and place a new order for the desired item through our website. This ensures faster processing and availability.</p>
                    </div>
                </div>
                <div class="accordion-item border-b border-gray-200">
                    <div class="accordion-header flex justify-between items-center cursor-pointer p-4" onclick="toggleAccordion(this)">
                        <span>Do I need to pay for shipping on exchange items?</span>
                        <svg class="arrow w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                    <div class="accordion-content p-4">
                        <p>Yes, you are responsible for the shipping costs associated with returning the item to us for exchange. However, we cover the shipping costs for sending the exchanged item back to you.</p>
                    </div>
                </div>
                <div class="accordion-item border-b border-gray-200">
                    <div class="accordion-header flex justify-between items-center cursor-pointer p-4" onclick="toggleAccordion(this)">
                        <span>Can I receive a refund?</span>
                        <svg class="arrow w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                    <div class="accordion-content p-4">
                        <p>Yes, refunds are issued to the original payment method used for the purchase. Once your returned item is processed, you will receive a refund notification via email.</p>
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