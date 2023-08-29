{{-- MASTERS PAGES COMPONENTS --}}
<x-masters title="Accompany">

    {{-- SECTION HOME --}}
    <section id="home" class="bg-gray-100">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mx-auto px-2 py-8 md:py-8 md:px-20 max-w-7xl">
            <div class="md:mt-32">
                <h1 class="font-semibold text-4xl md:text-6xl mb-4">We Code</h1>
                <h1 class="font-semibold text-4xl md:text-6xl mb-4">We Deliver</h1>
                <p class="mt-3 text-lg md:text-xl">The Perfect Accompaniment for High-Performing Mobile and Web Development</p>
                <button class="mt-6 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    <i class="fas fa-play mr-2"></i> Get Started
                </button>
                <button class="mt-6 px-4 py-2 bg-gray-100 text-blue-500 rounded-lg hover:bg-blue-600 hover:text-white">
                    Read More <i class="fas fa-arrow-right mr-2"></i> 
                </button>
            </div>
            <div class="-mr-20 md:mt-3 md:ml-auto">
                <img src="/img/home.png" alt="Home Image" class="w-full h-auto">
            </div>
        </div>
    </section>

    {{-- SECTION SERVICE --}}
    <section id="service" class="py-10 md:py-16">
        <h1 class="text-3xl md:text-4xl font-semibold mt-6 md:mt-10 text-center">What We Do?</h1>
    
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-10 mx-4 md:mx-10 lg:mx-20 mt-6 md:mt-10">
            <div class="mt-6 md:mt-0">
                <img src="/img/page2.jpg" class="h-[350px] w-full object-cover rounded-md" alt="Mobile Application">
            </div>
            <div class="md:col-span-2 mt-6 md:mt-0">
                <div class="md:ml-8">
                    <div class="text-xl md:text-2xl font-semibold">
                        <i class="fas fa-mobile-alt fa-icon"></i> Mobile Application
                    </div>
                    <p class="mt-2 md:mt-3">
                        Building mobile applications is never easy.
                        Whether it's a P2P lending app, a Logistic App, or an E-Commerce App,
                        we've done them all well and fast.
                    </p>
                    <div class="text-xl md:text-2xl font-semibold mt-4">
                        <i class="fas fa-code fa-icon"></i> Web Development
                    </div>
                    <p class="mt-2 md:mt-3">
                        We can build any web applications you need, from personal blogs to company profiles,
                        e-commerce platforms, or any specific functionalities you require.
                        Our strong team of web developers can follow your stack and needs.
                    </p>
                    <div class="text-xl md:text-2xl font-semibold mt-4">
                        <i class="fas fa-paint-brush fa-icon"></i> UI/UX Design
                    </div>
                    <p class="mt-2 md:mt-3">
                        All things are designed, but only a few are designed well.
                        We aim to elevate your ideas with exceptional UI/UX design tailored to your preferences,
                        addressing the right pain points.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION OUR TEAM --}}
    <section id="team" class="team py-10 md:py-16">
        <div class="bg-gray-100">
            <h1 class="text-3xl md:text-4xl font-semibold mt-6 md:mt-10 text-center pt-4">Our Team</h1>
            <div class="carousel w-full">
                <div id="item1" class="carousel-item w-full">
                    <div class="grid grid-cols-1 md:grid-cols-3 ml-0 md:ml-[135px] mt-6 md:mt-10 items-center gap-4 md:gap-32">
                        <div class="grid-span-1">
                            <img class="mt-2 w-52 h-52 rounded-full shrink-0" src="https://i.pravatar.cc/150" alt="p">
                            <h1 class="font-semibold text-2xl ml-16 mt-3">Bang Pis</h1>
                            <h1 class="font-semibold text-gray-500 text-2xl ml-20 mt-3">COO</h1>
                        </div>
                        <div class="grid-span-1 ">
                            <img class="mt-2 w-60 h-60 rounded-full shrink-0" src="https://i.pravatar.cc/150" alt="p">
                            <h1 class="font-semibold text-2xl ml-[74px] mt-3">Guaryyyy</h1>
                            <h1 class="font-semibold text-gray-500 text-2xl ml-24 mt-3">CEO</h1>
                        </div>
                        <div class="grid-span-1">
                            <img class="mt-2 w-52 h-52 rounded-full shrink-0" src="https://i.pravatar.cc/150" alt="p">
                            <h1 class="font-semibold text-2xl ml-16 mt-3">Bang Hen</h1>
                            <h1 class="font-semibold text-gray-500 text-2xl ml-24 mt-3">CFO</h1>
                        </div>
                    </div>
                </div>
                <div id="item2" class="carousel-item w-full">
                    <div class="grid grid-cols-3 ml-[135px] mt-10 items-center gap-32">
                        <div class="grid-span-1">
                            <img class="mt-2 w-52 h-52 rounded-full shrink-0" src="https://i.pravatar.cc/150" alt="p">
                            <h1 class="font-semibold text-2xl ml-16 mt-3">Bang Mir</h1>
                            <h1 class="font-semibold text-gray-500 text-2xl ml-6 mt-3">Mb Development</h1>
                        </div>
                        <div class="grid-span-1 ">
                            <img class="mt-2 w-60 h-60 rounded-full shrink-0" src="https://i.pravatar.cc/150" alt="p">
                            <h1 class="font-semibold text-2xl ml-[74px] mt-3">Bang Bal</h1>
                            <h1 class="font-semibold text-gray-500 text-2xl ml-7 mt-3">Fe Development</h1>
                        </div>
                        <div class="grid-span-1">
                            <img class="mt-2 w-52 h-52 rounded-full shrink-0" src="https://i.pravatar.cc/150" alt="p">
                            <h1 class="font-semibold text-2xl ml-16 mt-3">Bang Ru</h1>
                            <h1 class="font-semibold text-gray-500 text-2xl ml-6 mt-3">Be Development</h1>
                        </div>
                    </div> 
                </div> 
                    <div id="item3" class="carousel-item w-full">
                        <div class="grid grid-cols-3 ml-[135px] mt-10 items-center gap-32">
                            <div class="grid-span-1">
                                <img class="mt-2 w-52 h-52 rounded-full shrink-0" src="https://i.pravatar.cc/150" alt="p">
                                <h1 class="font-semibold text-2xl ml-16 mt-3">Bang Duk</h1>
                                <h1 class="font-semibold text-gray-500 text-2xl ml-14 mt-3">UI/UX dev</h1>
                            </div>
                            <div class="grid-span-1 ">
                                <img class="mt-2 w-60 h-60 rounded-full shrink-0" src="https://i.pravatar.cc/150" alt="p">
                                <h1 class="font-semibold text-2xl ml-[74px] mt-3">Bang Hk</h1>
                                <h1 class="font-semibold text-gray-500 text-2xl ml-16 mt-3">UI/UX dev</h1>
                            </div>
                            <div class="grid-span-1">
                                <img class="mt-2 w-52 h-52 rounded-full shrink-0" src="https://i.pravatar.cc/150" alt="p">
                                <h1 class="font-semibold text-2xl ml-16 mt-3">Bang Uya</h1>
                                <h1 class="font-semibold text-gray-500 text-2xl ml-14 mt-3">Pd Manajer</h1>
                            </div>
                        </div> 
                    </div> 
                </div> 
            <div class="flex justify-center w-full py-2 gap-2 ml-4 mt-6">
                <a href="#item1" class="bg-white btn btn-xs">- 1 -</a> 
                <a href="#item2" class="bg-white btn btn-xs">- 2 -</a> 
                <a href="#item3" class="bg-white btn btn-xs">- 3 -</a> 
            </div>
        </div>
    </section>

    {{-- SECTION OUR CLIENT --}}
    <section id="ourcustomers" class="py-4">
        <div class="text-center">
            <h1 class="text-3xl md:text-4xl font-semibold">Our Customers are</h1>
            <h1 class="text-3xl md:text-4xl font-semibold">Our biggest fans</h1>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mx-4 md:mx-10 lg:mx-20 mt-8">
            <img src="/img/cbn.png" alt="">
            <img src="/img/ciputra.png" alt="">
            <img src="/img/hubble.png" alt="">
            <img src="/img/image 1.png" alt="">
            <img src="/img/image 2" alt="">
            <img src="/img/image 3" alt="">
            <img src="/img/image 4" alt="">
            <img src="/img/image 6" alt="">
            <img src="/img/income.png" alt="">
            <img src="/img/jawa pos.png" alt="">
            <img src="/img/lazada.png" alt="">
            <img src="/img/pe.png" alt="">
        </div>
    </section>

    {{-- SECTION BUSINNES AND CAREER --}}
    <section id="ourbusiness" class="bg-gray-100 py-10">
        <h1 class="ml-40 text-4xl font-semibold">Information</h1>
        <div class="relative grid grid-cols-2 mt-5 ml-40">
            <div class="relative group">
              <div class="w-[508px] h-[283px] bg-white shadow-md ml-8 group-hover:ml-96 group-hover:ease-in group-hover:transition-transform ease-linear trasition duration-1000">
                    <h1 class="ml-36 pt-11 text-4xl font-semibold">How We Work?</h1>
                    <p class="ml-36 mt-4 text-gray-400 font-semibold">Let's discuss what project </p>
                    <p class="ml-36 text-gray-400 font-semibold">you have in mind?😁</p>
                    <div class="mt-8">
                        <a class="ml-36 py-4 px-3 bg-gray-600 text-white rounded-xl focus:ring-2" href="https://api.whatsapp.com/send?phone=6283133737660&text=Halo%2C%20saya%20tertarik%20untuk%20Berbisnis!">Click to Chat About Our Bussiness😁</a>
                    </div>
                
              </div>
              <img src="/img/Rectangle 27.png" class="h-full absolute top-0 left-0 transition-transform transform-gpu group-hover:-translate-x-1" alt="">
              </div>
            </div>
          </div>
          
        <div class="mt-10 mx-36 ">
            <div class="grid grid-cols-2">
                <div class="grid-span-1">
                    <h3 class="text-4xl font-semibold">Join Our Team</h3>
                    <img src="/img/Rectangle 23.jpg" class="mt-6 rounded-lg" alt="">
                </div>
                <div class="grid-span-1">
                    <p class="text-base mt-16">TwistCode sedang membuka lowongan pekerjaan nihh... bagi kamu yang berminat dan punya talent serta skill yang memadai dalam bidang IT bisa banget daftarr siniiiii. ada banyak bidang yang bisa kamu submitted.. coba dicek gih😯</p>
                    <br>    
                    @guest
                        <a id="loginChecked" class="px-10 py-2 text-white bg-black rounded-xl focus focus:ring-4" href="{{ route('login') }}">Apply</a>
                    @else
                        <a href="{{ route('user.carrier.index') }}" class="px-10 py-2 text-white bg-black rounded-xl focus focus:ring-4">Apply</a>

                    @endguest

                </div>
            </div>
        </div>
    </section>

{{-- END MASTERPAGES --}}
</x-masters>