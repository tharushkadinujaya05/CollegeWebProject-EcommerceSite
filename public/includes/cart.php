<!-- cart.php -->
 <style>
    
 </style>
<div class="relative z-10 hidden" id="cartPanel" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
  <div id="overlay" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity opacity-0 pointer-events-none"></div>

  <div class="fixed inset-0 overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
      <div id="panel" class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10 transform translate-x-full transition-transform ease-in-out duration-500">
        <div class="pointer-events-auto w-screen max-w-md">
          <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
            <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
              <div class="flex items-start justify-between">
                <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Shopping cart</h2>
                <div class="ml-3 flex h-7 items-center">
                  <button type="button" id="closeCartBtn" class="relative -m-2 p-2 text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Close panel</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="mt-8">
                <div class="flow-root">
                  <ul role="list" class="-my-6 divide-y divide-gray-200">
                    <li class="flex py-6">
                      <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                        <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg" alt="Product Image" class="h-full w-full object-cover object-center">
                      </div>
                      <div class="ml-4 flex flex-1 flex-col">
                        <div class="flex justify-between text-base font-medium text-gray-900">
                          <h3><a href="#">Throwback Hip Bag</a></h3>
                          <p class="ml-4">$90.00</p>
                        </div>
                        <p class="mt-1 text-sm text-gray-500">Salmon</p>
                        <div class="flex flex-1 items-end justify-between text-sm">
                          <p class="text-gray-500">Qty 1</p>
                          <div class="flex">
                            <button type="button" class="font-medium text-blue-600 hover:text-blue-500">Remove</button>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
              <div class="flex justify-between text-base font-medium text-gray-900">
                <p>Subtotal</p>
                <p>$90.00</p>
              </div>
              <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
              <div class="mt-6">
                <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-blue-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-blue">Checkout</a>
              </div>
              <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                <p>or <button type="button" class="font-medium text-blue-600 hover:text-blue-500">Continue Shopping <span aria-hidden="true"> &rarr;</span></button></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>