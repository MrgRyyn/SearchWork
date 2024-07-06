<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section id="payment-system" class="p-7">
        <div class="mx-auto">
            <div class="bg-orange-50 py-5 px-8 rounded-md drop-shadow-md">
                <h2 class="text-2xl text-lora">Checkout</h2>
                <div class="flex flex-col mt-10 md:flex-row gap-5">
                    <div class="flex flex-col space-y-10">
                        <div class="bg-neutral-200 p-4 rounded-md">
                            <h3 class="px-3 text-lora text-xl">Address</h3>
                            <div class="border-y-address py-4 px-3 drop-shadow-md space-y-1">
                                <h3 class="font-medium">Muhammad Rayyan Gunawan</h3>
                                <h4>+62 81299 419980</h4>
                                <p>Sukamiskin, Kec. Arcamanik, Kota Bandung, Jawa Barat [SearchWork Note: jl.olahraga II no5] Arcamanik, Kota Bandung, 40293</p>
                            </div>
                            <button class="px-10 py-3 bg-zinc-50 border-1 border-zinc-300 rounded-full mt-4">Change Address</button>
                        </div>
                        <div class="bg-neutral-200 p-4 rounded-md">
                            <h3 class="px-3 text-2xl text-lora">Service Orders</h3>
                            <div class="flex flex-col border-y-address py-4 px-3 drop-shadow-md md:flex-row md:justify-between">
                                <div class="flex flex-col items-center justify-center md:justify start md:flex-row">
                                    <img class="w-28 h-28 object-cover" src="{{asset('img/lamborghini_revuelto_Rayyan_s_specs-removebg-preview.png')}}" alt="">
                                    <div class="flex flex-col items-center justify-center space-y-2 md:items-start md:ml-10">
                                        <h3 class="font-medium text-2xl text-center text-poppins md:text-start">Lamborghini Reveulto</h3>
                                        <h4>Bandung</h4>
                                        <select class="my-2 px-10" name="shipping" id="shipping">
                                            <option value="regular">Basic</option>
                                            <option value="next day">Standard</option>
                                            <option value="same day">Premium</option>
                                        </select>
                                        <h3 class="text-xl text-poppins">Rp300.000</h3>
                                        <select class="bg-darkBlue rounded-full pt-1 pb-2 px-8 text-white md:hidden" name="shipping" id="shipping">
                                            <option value="regular">regular</option>
                                            <option value="next day">next day</option>
                                            <option value="same day">same day</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden mr-2 items-center justify-center md:flex lg:mr-12">
                                    <select class="bg-darkBlue rounded-full pt-1 pb-2 px-8 text-white" name="shipping" id="shipping">
                                        <option value="regular">regular</option>
                                        <option value="next day">next day</option>
                                        <option value="same day">same day</option>
                                    </select>
                                </div>
                            </div>
                            <div class="px-2 py-1 flex flex-col gap-3 justify-between">
                                <div>
                                    <h2>Subtotal</h2>
                                    <p>Service Price     Rp300.000</p>
                                    <p>Shipping Price    Rp30.000</p>
                                </div>
                                <div class="flex justify-end items-end">
                                    <h1 class="text-poppins text-2xl mt-4">Rp330.000</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="bg-neutral-200 p-4">
                            <h2>Subtotal</h2>
                            <div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
