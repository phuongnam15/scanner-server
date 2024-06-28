<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <title>Lam Scanner</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="bg-[#070a29] h-auto w-full overflow-hidden">
        <header class="bg-[#080a28] relative text-white w-full flex justify-center mb-[100px]" id="header_main">
            <div class="h-[80px] lg:w-[90%] xl:w-[80%] 2xl:w-[65%] w-[95%] flex justify-between items-center">
                <div class="flex justify-center items-center text-lg relative z-10">
                    <a href="/" class="cursor-pointer">
                        <h5>Blockchain Scanner</h5>
                    </a>
                </div>
                <nav class="hidden lg:block relative z-10">
                    <ul class="flex item-center justify-start text-sm">
                        <li class="pr-[40px] md:pr-[20px] xl:pr-[40px] 2xl:pr-[30px]">
                            <a class="hover:text-[#5832f9] transition-text duration-300" href="#home">Home</a>
                        </li>
                        <li class="pr-[40px] md:pr-[20px] xl:pr-[40px] 2xl:pr-[30px]">
                            <a class="hover:text-[#5832f9] transition-text duration-300" href="#how">How it works</a>
                        </li>
                        <li class="pr-[40px] md:pr-[20px] xl:pr-[40px] 2xl:pr-[30px]">
                            <a class="hover:text-[#5832f9] transition-text duration-300" href="#install">How to install</a>
                        </li>
                        <li class="pr-[40px] md:pr-[20px] xl:pr-[40px] 2xl:pr-[30px]">
                            <a class="hover:text-[#5832f9] transition-text duration-300" href="#buy">Buy now</a>
                        </li>
                        <li class="pr-[40px] md:pr-[20px] xl:pr-[40px] 2xl:pr-[30px]">
                            <a class="hover:text-[#5832f9] transition-text duration-300" href="#faq">Faq</a>
                        </li>
                        <li class="">
                            <a class="hover:text-[#5832f9] transition-text duration-300 relative z-10" href="#contact">Contact us</a>
                        </li>
                    </ul>
                </nav>
                <div class="mobile-button"><span></span></div>
            </div>
            <nav class="main-nav" id="main-nav-mobi">
                <ul class="menu" id="menu-primary-menu">
                    <li class="menu-item menu-current-item"><a href="/">Home</a></li>
                    <li class="menu-item"><a href="#how">How it works</a></li>
                    <li class="menu-item"><a href="#install">How to install</a></li>
                    <li class="menu-item"><a href="#buy">Buy now</a></li>
                    <li class="menu-item"><a href="#faq">Faq</a></li>
                    <li class="menu-item"><a href="#contact">Contact us</a></li>
                </ul>
            </nav>
        </header>
        <section class="point-background relative text-white flex flex-col items-center mb-[100px]" id="home">
            <div class="absolute h-[2000px] w-[2000px] left-[-35%] top-[-30%] bg-custom-radial opacity-50 content-['']"></div>
            <div class="absolute h-[2000px] w-[2000px] left-auto top-[-80%] right-[-55%] bg-custom-radial opacity-50 content-['']"></div>
            <div class="flex flex-col items-center gap-5">
                <div class="max-w-fit inline-block rounded-2xl bg-gradient-to-r from-[rgba(255,255,255,0.05)] via-[rgba(255,255,255,0.008)] to-[rgba(255,255,255,0.05)]">
                    <p class="xs:text-sm text-[12px] font-bold py-1 px-4 rounded-2xl bg-clip-text text-transparent bg-gradient-to-r from-[#6532fe] to-[#b898ff] border border-gray-700 bg-white bg-opacity-5">
                        BEST WALLET BRUTEFORCE SOFTWARE
                    </p>
                </div>
                <div class="flex flex-col items-center">
                    <h1 class="text-[40px] md:text-[60px] text-center">SCAN & HACK</h1>
                    <h1 class="text-[40px] md:text-[60px] bg-gradient-to-r from-[#6532fe] to-[#b898ff] bg-clip-text text-transparent" id="typing"></h1>
                    <h1 class="text-[40px] md:text-[60px] text-center">FROM LOST WALLETS</h1>
                </div>
                <span class="font-readex w-2/3 text-center">In my own opinion, the best way to make money with cryptocurrency is to get it from abandoned/forgotten wallets.</span>
                <a class="btn-effect p-1.5 border-1 border-solid border-gray-700 rounded-xl cursor-pointer">
                    <p class="bg-gradient-to-r from-[#6532fe] to-[#b898ff] rounded-xl py-3 px-8 md:py-5 md:px-12">JOIN OUR TELEGRAM CHANEL</p>
                </a>
            </div>
            <div id="carousel" class="relative text-center mt-[150px] w-full flex justify-center h-[800px]">
                <div class="carousel-item flex flex-col gap-7">
                    <div class="flex gap-3 item-center w-2/3">
                        <img src="{{asset('./assets/images/icons/vip.png')}}" class="h-12 w-12" alt="">
                        <h1 class="text-[20px] text-left">MULTICHAIN SCANNER</h1>
                    </div>
                    <div class="overflow-hidden w-full h-[80%] bg-cover rounded-lg flex justify-center items-center">
                        <img src="{{asset('./assets/images/multi_scanner.png')}}" alt="" class="scale-220">
                    </div>
                    <p>View info</p>
                </div>
                <div class="carousel-item carousel-item-2 flex flex-col gap-7">
                    <div class="flex gap-3 item-center w-2/3">
                        <img src="{{asset('./assets/images/icons/eth.png')}}" class="h-12 w-12" alt="">
                        <h1 class="text-[20px] text-left">ETH SCANNER</h1>
                    </div>
                    <div class="overflow-hidden w-full h-[80%] bg-cover rounded-lg flex justify-center items-center">
                        <img src="{{asset('./assets/images/multi_scanner.png')}}" alt="" class="scale-220">
                    </div>
                    <p>View info</p>
                </div>
                <div class="carousel-item carousel-item-3 flex flex-col gap-7">
                    <div class="flex gap-3 item-center w-2/3">
                        <img src="{{asset('./assets/images/icons/bnb.png')}}" class="h-12 w-12" alt="">
                        <h1 class="text-[20px] text-left">BSC SCANNER</h1>
                    </div>
                    <div class="overflow-hidden w-full h-[80%] bg-cover rounded-lg flex justify-center items-center">
                        <img src="{{asset('./assets/images/multi_scanner.png')}}" alt="" class="scale-220">
                    </div>
                    <p>View info</p>
                </div>
                <div class="carousel-item carousel-item-4 flex flex-col gap-7">
                    <div class="flex gap-3 item-center w-2/3">
                        <img src="{{asset('./assets/images/icons/vip.png')}}" class="h-12 w-12" alt="">
                        <h1 class="text-[20px] text-left">FILE SCANNER</h1>
                    </div>
                    <div class="overflow-hidden w-full h-[80%] bg-cover rounded-lg flex justify-center items-center">
                        <img src="{{asset('./assets/images/multi_scanner.png')}}" alt="" class="scale-220">
                    </div>
                    <p>View info</p>
                </div>
                <div id="leftBtn" class="absolute z-40 bottom-[150px] sm:bottom-14 right-[51%] 2xl:right-auto 2xl:bottom-auto 2xl:left-[15%] 2xl:top-[325px] cursor-pointer">
                    <i class="fa-solid fa-chevron-left text-white text-3xl px-4 py-2 border-[#ffffff1a] border-1 border-solid rounded-full hover:border-[#ffffff73] transition-border duration-300"></i>
                </div>
                <div id="rightBtn" class="absolute z-40 bottom-[150px] sm:bottom-14 left-[51%] 2xl:left-auto 2xl:bottom-auto 2xl:right-[15%] 2xl:top-[325px] cursor-pointer">
                    <i class="fa-solid fa-chevron-right text-white text-3xl px-4 py-2 border-[#ffffff1a] border-1 border-solid rounded-full hover:border-[#ffffff73] transition-border duration-300"></i>
                </div>
            </div>
        </section>
        <section class="relative text-white flex items-center justify-center mb-[100px]" id="how">
            <div class="absolute h-[2000px] w-[2000px] left-[-65%] top-[-90%] bg-custom-radial opacity-50 content-['']"></div>
            <div class="w-full max-w-[1140px] flex flex-col lg:flex-row item-center justify-center">
                <div class="lg:w-1/2 flex relative justify-center" id="floating">
                    <div class="ether-coin w-[120px] h-[120px] absolute z-10 left-[15%] xl:left-[-15%] lg:top-[-10%] xl:top-[20%]">
                        <img src="{{asset('./assets/images/icons/eth.png')}}" alt="">
                    </div>
                    <div class="bcs-coin w-[70px] h-[70px] absolute z-10 right-[25%] bottom-[-30px]">
                        <img src="{{asset('./assets/images/icons/bnb.png')}}" alt="">
                    </div>
                    <!-- <div class="preview-scan overflow-hidden w-[200px] h-[150px] absolute z-0 left lg:z-10 lg:bottom-[-10%] lg:left-[15%] 2xl:left-[-15%] bottom-[10px] rounded-3xl flex justify-center items-center">
                        <img src="{{asset('./assets/images/scan.png')}}" class="scale-y-150" alt="">
                    </div> -->
                    <div class="bgBlur w-[450px] h-[600px] rounded-[100px] rotate-[15deg] absolute top-[-10px] lg:left-[10%]"></div>
                    <div class="overflow-hidden w-[450px] h-[600px] rounded-[100px] flex relative justify-center items-center">
                        <img src="{{asset('./assets/images/multi_scanner.png')}}" alt="" class="scale-220">
                    </div>
                </div>
                <div class="lg:w-1/2 p-10 lg:p-0">
                    <div class="flex flex-col max-w-max gap-3">
                        <div class="max-w-fit relative inline-block rounded-2xl bg-gradient-to-r from-[rgba(255,255,255,0.05)] via-[rgba(255,255,255,0.008)] to-[rgba(255,255,255,0.05)]">
                            <p class="font-bold text-sm py-1 px-4 rounded-2xl bg-clip-text text-transparent bg-gradient-to-r from-[#6532fe] to-[#b898ff] border border-gray-700 bg-white bg-opacity-5">
                                How it works
                            </p>
                        </div>
                        <p class="my-[7px]">Understanding Seed Phraseand Private Key</p>
                        <span class="text-sm">Each cryptocurrency wallet has a private key generated by a 12-24 word mnemonic phrase that serves as a gateway to your wallet through any device or cryptocurrency wallet app, such as Trust Wallet or Metamask.</span>
                        <span class="text-sm">These words or private key are automatically generated by a special algorithm when you create a wallet through any crypto wallet app.</span>
                        <span class="text-sm">Afterward, it assess the balance of the wallets and provide the results: a crypto wallet and key to it, which could potentially contain coins that forgotten on these wallets</span>
                        <p class="my-[7px]">To earn with our software easy and stable !</p>
                        <ul class="list-disc">
                            <li><span class="text-sm">You don’t need special knowledges or skills</span></li>
                            <li><span class="text-sm">You don’t need to fix losses like traders</span></li>
                            <li><span class="text-sm">You don’t need huge capital for making results</span></li>
                            <li><span class="text-sm">You don’t need to depend on the markets to get profit</span></li>
                        </ul>
                        <span class="text-sm">In my own opinion, the best way to make money with cryptocurrency is to get it from abandoned/forgotten wallets.</span>
                        <span class="text-sm mb-3">The software test thousands of potential seed phrase combinations against generated wallets every few seconds so you are able to unlock access to the lost wallet To Get Access To The Hacking/Phrase Recovery Software.</span>
                        <a class="btn-effect p-1 border-1 border-solid border-gray-700 rounded-xl cursor-pointer max-w-max">
                            <p class="bg-gradient-to-r from-[#6532fe] to-[#b898ff] rounded-xl py-3 px-6 text-sm">View info</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="point-background relative flex flex-col justify-center items-center mb-[100px]" id="install">
            <img class="absolute max-w-[2000px] left-0 z-0 top-[10%]" src="{{asset('./assets/images/backgrounds/line.png')}}" alt="">
            <div class="absolute h-[2000px] w-[2000px] left-[-40%] top-[-5%] bg-custom-radial opacity-70 content-['']"></div>
            <div class="flex flex-col gap-5 items-center">
                <div class="max-w-fit relative inline-block rounded-2xl bg-gradient-to-r from-[rgba(255,255,255,0.05)] via-[rgba(255,255,255,0.008)] to-[rgba(255,255,255,0.05)]">
                    <p class="font-bold text-sm py-1 px-4 rounded-2xl bg-clip-text text-transparent bg-gradient-to-r from-[#6532fe] to-[#b898ff] border border-gray-700 bg-white bg-opacity-5">
                        How to install
                    </p>
                </div>
                <h1 class="text-white text-[35px] md:text-[45px] text-center">Text Instruction Of Software</h1>
            </div>
            <div class="roadmap__main w-[70%]" data-aos="fade-up" data-aos-duration="2000">
                <div class="roadmap-box">
                    <div class="time">Step 1</div>
                    <div class="content">
                        <h5 class="title">Download tools</h5>
                        <p class="text">You can Download Tools here : <a href="https://1drv.ms/f/s!AlgupcqwjUUraljMQq_VtE-kh04?e=PcIChg" target="_blank">Click here</a></p>
                    </div>
                </div>
                <div class="roadmap-box right">
                    <div class="time">Step 2</div>
                    <div class="content">
                        <h5 class="title">Unzip file &amp; Install</h5>
                        <p class="text">Please extract the file using software and then double click on the .exe file.</p>
                    </div>
                </div>
                <div class="roadmap-box">
                    <div class="time">Step 3</div>
                    <div class="content">
                        <h5 class="title">Get license key</h5>
                        <p class="text">When you start the tool, you will need to wait about 2 minutes for the tool to create a UUID. After you have the UUID, pay for the tool and send the admin the newly created UUID code via <a href="https://t.me/blockchaintool_bot" target="_blank" rel="noopener noreferrer">telegram</a> .</p>
                    </div>
                </div>
                <div class="roadmap-box right">
                    <div class="time">Step 4</div>
                    <div class="content">
                        <h5 class="title">Active tool</h5>
                        <p class="text">When we received your payment and UUID code, we will send you the license code.</p>
                    </div>
                </div>
                <div class="roadmap-box">
                    <div class="time">Step 5</div>
                    <div class="content">
                        <h5 class="title">Enjoy</h5>
                        <p class="text">You can start making money with our tool.</p>
                    </div>
                </div>
                <div class="icon"></div>
                <div class="bottom icon"></div>
            </div>
        </section>
        <section class="point-background relative justify-center flex flex-col items-center mb-[100px]" id="buy">
            <div class="absolute h-[2000px] w-[2000px] right-[-80%] top-[-45%] bg-custom-radial opacity-70 content-[''] z-0"></div>
            <div class="max-w-[1230px]">
                <div class="flex text-white flex-col gap-5 items-center mb-10">
                    <h1 class="text-[40px] md:text-[60px] text-center">List Products</h1>
                    <span class="text-sm w-[70%] text-center tracking-wide">We have a variety of products based on different blockchains or multichains, please consider the product that suits your finances.</span>
                    <a class="btn-effect p-1 border-1 border-solid border-gray-700 rounded-xl cursor-pointer max-w-max">
                        <p class="bg-gradient-to-r from-[#6532fe] to-[#b898ff] rounded-xl py-4 px-8 text-sm">Download</p>
                    </a>
                </div>
                <div class="grid grid-cols-12 gap-5 p-5">
                    <div class="nft-item col-start-2 col-end-12 sm:col-span-6 lg:col-span-3 z-10">
                        <div>
                            <div class="card-media"><a href="https://1drv.ms/f/s!AlgupcqwjUUraljMQq_VtE-kh04?e=PcIChg" target="_blank"><img alt="Image" src="{{asset('./assets/images/multi_scanner.png')}}"></a></div>
                            <div class="text-center card-title text-white"><a href="https://1drv.ms/f/s!AlgupcqwjUUraljMQq_VtE-kh04?e=PcIChg" class="h5" target="_blank">BSC Scanner</a></div>
                            <div class="meta-info">
                                <div class="author">
                                    <div class="info">
                                        <p class="text-white">Random logic: <strong style="color:#ffeb3b">Random 64-character private key &amp; Random 12 seed phrase like Metamask</strong></p>
                                        <p class="text-white">Support chain: <strong style="color:#ffeb3b">BNB Chain</strong></p>
                                        <p class="text-white">Support Token: <strong style="color:#ffeb3b">USDT USDC BTC ETH</strong></p>
                                        <p class="text-white">Support Auto Send: <strong style="color:#ffeb3b">Yes</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <hr>
                            <div class="mb-2 price-details w-100"><span class="text-white text-[13px]">Price / Machine / Life Time</span>
                                <h6 style="color:#ffeb3b" class="text-sm">40 USDT</h6><span class="text-white text-[13px]">Price / Machine / 1 Month</span>
                                <h6 style="color:#ffeb3b" class="text-sm">20 USDT</h6>
                            </div>
                            <div class="text-center w-full mt-5">
                                <a class="text-white btn-effect rounded-md cursor-pointer max-w-max">
                                    <p class="bg-gradient-to-r from-[#6532fe] to-[#b898ff] rounded-md py-2 px-4 text-sm">Download</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="nft-item col-start-2 col-end-12 sm:col-span-6 lg:col-span-3 z-10">
                        <div>
                            <div class="card-media"><a href="https://1drv.ms/f/s!AlgupcqwjUUraljMQq_VtE-kh04?e=PcIChg" target="_blank"><img alt="Image" src="{{asset('./assets/images/multi_scanner.png')}}"></a></div>
                            <div class="text-center card-title text-white"><a href="https://1drv.ms/f/s!AlgupcqwjUUraljMQq_VtE-kh04?e=PcIChg" class="h5" target="_blank">ETH Scanner</a></div>
                            <div class="meta-info">
                                <div class="author">
                                    <div class="info">
                                        <p class="text-white">Random logic: <strong style="color:#ffeb3b">Random 64-character private key &amp; Random 12 seed phrase like Metamask</strong></p>
                                        <p class="text-white">Support chain: <strong style="color:#ffeb3b">ETH Chain</strong></p>
                                        <p class="text-white">Support Token: <strong style="color:#ffeb3b">USDT USDC BTC ETH</strong></p>
                                        <p class="text-white">Support Auto Send: <strong style="color:#ffeb3b">Yes</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <hr>
                            <div class="mb-2 price-details w-100"><span class="text-white text-[13px]">Price / Machine / Life Time</span>
                                <h6 style="color:#ffeb3b" class="text-sm">40 USDT</h6><span class="text-white text-[13px]">Price / Machine / 1 Month</span>
                                <h6 style="color:#ffeb3b" class="text-sm">20 USDT</h6>
                            </div>
                            <div class="text-center w-full mt-5">
                                <a class="text-white btn-effect rounded-md cursor-pointer max-w-max">
                                    <p class="bg-gradient-to-r from-[#6532fe] to-[#b898ff] rounded-md py-2 px-4 text-sm">Download</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="nft-item col-start-2 col-end-12 sm:col-span-6 lg:col-span-3 z-10">
                        <div>
                            <div class="card-media"><a href="https://1drv.ms/f/s!AlgupcqwjUUraljMQq_VtE-kh04?e=PcIChg" target="_blank"><img alt="Image" src="{{asset('./assets/images/multi_scanner.png')}}"></a></div>
                            <div class="text-center card-title text-white"><a href="https://1drv.ms/f/s!AlgupcqwjUUraljMQq_VtE-kh04?e=PcIChg" class="h5" target="_blank">FILE Scanner</a></div>
                            <div class="meta-info">
                                <div class="author">
                                    <div class="info">
                                        <p class="text-white">Scan logic: <strong style="color:#ffeb3b">Scan file SeedPhrase or Private Key</strong></p>
                                        <p class="text-white">Support chain: <strong style="color:#ffeb3b">ETH, BNB, POLYGON, OPTIMISM, ARBITRUM</strong></p>
                                        <p class="text-white">Support Token: <strong style="color:#ffeb3b">USDT USDC BTC ETH</strong></p>
                                        <p class="text-white">Support Auto Send: <strong style="color:#ffeb3b">Yes</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <hr>
                            <div class="mb-2 w-100">
                                <span class="text-white text-[13px]">Price / Machine / Life Time</span>
                                <h6 style="color:#ffeb3b" class="text-sm">40 USDT</h6>
                                <span class="text-white  text-[13px]">Price / Machine / 1 Month</span>
                                <h6 style="color:#ffeb3b" class="text-sm">20 USDT</h6>
                            </div>
                            <div class="text-center w-full mt-5">
                                <a class="text-white btn-effect rounded-md cursor-pointer max-w-max">
                                    <p class="bg-gradient-to-r from-[#6532fe] to-[#b898ff] rounded-md py-2 px-4 text-sm">Download</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="nft-item col-start-2 col-end-12 sm:col-span-6 lg:col-span-3 z-10">
                        <div>
                            <div class="card-media"><a href="https://1drv.ms/f/s!AlgupcqwjUUraljMQq_VtE-kh04?e=PcIChg" target="_blank"><img alt="Image" src="{{asset('./assets/images/multi_scanner.png')}}"></a></div>
                            <div class="text-center card-title text-white"><a href="https://1drv.ms/f/s!AlgupcqwjUUraljMQq_VtE-kh04?e=PcIChg" class="h5" target="_blank">Multi Chain Scanner</a></div>
                            <div class="meta-info">
                                <div class="author">
                                    <div class="info">
                                        <p class="text-white">Random logic: <strong style="color:#ffeb3b">Random 64-character private key &amp; Random 12 seed phrase like Metamask</strong></p>
                                        <p class="text-white">Support chain: <strong style="color:#ffeb3b">ETH, BNB, POLYGON, OPTIMISM, AVALANCHE, LINEA, ARBITRUM</strong></p>
                                        <p class="text-white">Support Token: <strong style="color:#ffeb3b">USDT USDC BTC ETH</strong></p>
                                        <p class="text-white">Support Auto Send: <strong style="color:#ffeb3b">Yes</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <hr>
                            <div class="mb-2 price-details w-100"><span class="text-white text-[13px]">Price / Machine / Life Time</span>
                                <h6 style="color:#ffeb3b" class="text-sm">100 USDT</h6>
                                <span class="text-white text-[13px]">Price / Machine / 1 Month</span>
                                <h6 style="color:#ffeb3b" class="text-sm">50 USDT</h6>
                            </div>
                            <div class="text-center w-full mt-5">
                                <a class="text-white btn-effect rounded-md cursor-pointer max-w-max">
                                    <p class="bg-gradient-to-r from-[#6532fe] to-[#b898ff] rounded-md py-2 px-4 text-sm">Download</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="relative flex flex-col items-center mb-[100px]" id="faq">
            <div class="absolute h-[1949px] w-[2000px] left-[-60%] top-[-90%] bg-custom-radial opacity-40 content-['']"></div>
            <div class="max-w-[1230px]">
                <div class="flex text-white flex-col gap-5 items-center">
                    <div class="max-w-fit relative inline-block rounded-2xl bg-gradient-to-r from-[rgba(255,255,255,0.05)] via-[rgba(255,255,255,0.008)] to-[rgba(255,255,255,0.05)]">
                        <p class="font-bold text-sm py-1 px-4 rounded-2xl bg-clip-text text-transparent bg-gradient-to-r from-[#6532fe] to-[#b898ff] border border-gray-700 bg-white bg-opacity-5">
                            FAQs
                        </p>
                    </div>
                    <h1 class="text-[30px] md:text-[50px] w-full md:w-[70%] text-center">Frequently AksedQuestions</h1>
                    <span class="text-sm w-[70%] text-center tracking-wide">Please check this FAQ first before contacting us.</span>
                </div>
                <div class="faq__main flat-tabs flex md:flex-row flex-col px-8 md:gap-5" data-aos="fade-up" data-aos-duration="3000">
                    <div class="flex-1">
                        <div class="flat-toggle">
                            <h6 class="toggle-title"><span>01.</span> What Is A Seed Phrase? <i class="fa-solid fa-plus text-white text-lg absolute right-0 mr-0 top-[-25%]"></i></span></h6>
                            <div class="toggle-content">
                                <p>A seed phrase is a cluster of 12 random words that are generated during the setup for all crypto wallets. It is used as an emergency backup to restore access to the funds.</p>
                            </div>
                        </div>
                        <div class="flat-toggle">
                            <h6 class="toggle-title"><span>02.</span> What does the software do exactly?<i class="fa-solid fa-plus text-white text-lg absolute right-0 mr-0 top-[-25%]"></i></span></h6>
                            <div class="toggle-content">
                                <p>Our software utilizes the most cutting-edge algorithms available to the public to rapidly generate and test thousands of potential seed phrase combinations against generated wallets every few seconds so you are able to unlock access to the lost wallet .</p>
                            </div>
                        </div>
                        <div class="flat-toggle">
                            <h6 class="toggle-title"><span>03.</span> How much a day will I earn?<i class="fa-solid fa-plus text-white text-lg absolute right-0 mr-0 top-[-25%]"></i></span></h6>
                            <div class="toggle-content">
                                <p>Sometimes a day absolutely nothing would be found, even a few days of silence often occur, sometimes in a day finds 5-10 wallets at once.</p>
                            </div>
                        </div>
                        <div class="flat-toggle">
                            <h6 class="toggle-title"><span>04.</span> Which package should I buy?<i class="fa-solid fa-plus text-white text-lg absolute right-0 mr-0 top-[-25%]"></i></span></h6>
                            <div class="toggle-content">
                                <p>Just know this, the more blockchain you have the more chances of finding a wallet with money in it. We recommend you go for the package multi chain as its easier to find</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flat-toggle">
                            <h6 class="toggle-title"><span>05.</span> Is it legal? <i class="fa-solid fa-plus text-white text-lg absolute right-0 mr-0 top-[-25%]"></i></span></h6>
                            <div class="toggle-content">
                                <p>Given that most wallets are old forgotten crypto wallets whose owners have most likely forgotten their accesses to them, I think its legal. I compare it to looking for gold jewelry by the sea-coast, when people with a device walk around looking for lost rings, earrings, etc., no one can say it’s illegal. I think it is the same here! But to avoid any issues, you have to use the software on RDP.</p>
                            </div>
                        </div>
                        <div class="flat-toggle">
                            <h6 class="toggle-title"><span>06.</span> How quickly does the software work?<i class="fa-solid fa-plus text-white text-lg absolute right-0 mr-0 top-[-25%]"></i></span></h6>
                            <div class="toggle-content">
                                <p>~ 20 million checks every 1 hour</p>
                                <p>~ 480 million checks in 1 day</p>
                            </div>
                        </div>
                        <div class="flat-toggle">
                            <h6 class="toggle-title"><span>07.</span> Why do you sell software?<i class="fa-solid fa-plus text-white text-lg absolute right-0 mr-0 top-[-25%]"></i></h6>
                            <div class="toggle-content">
                                <p>We sell software because we want to expand our software and also because we can’t open all crypto wallets ourselves anyway.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="relative flex flex-col items-center justify-center mb-10" id="contact">
            <div class="flex text-white flex-col gap-5 items-center mb-[40px]">
                <div class="max-w-fit relative inline-block rounded-2xl bg-gradient-to-r from-[rgba(255,255,255,0.05)] via-[rgba(255,255,255,0.008)] to-[rgba(255,255,255,0.05)]">
                    <p class="font-bold text-sm py-1 px-4 rounded-2xl bg-clip-text text-transparent bg-gradient-to-r from-[#6532fe] to-[#b898ff] border border-gray-700 bg-white bg-opacity-5">
                        Team Members
                    </p>
                </div>
                <h1 class="text-[40px] md:text-[50px] w-[90%] md:w-[60%] text-center">Our Amazing Team Members</h1>
            </div>
            <div class="team-box">
                <div class="image"><a href="https://t.me/blockchaintool_bot" target="_blank"><img alt="" src="{{asset('./assets/images/icons/lion.png')}}"></a></div>
                <div class="content"><a href="https://t.me/blockchaintool_bot" class="h5 name text-white hover:text-[#5c27fe] trasition-text duration-500" target="_blank">Luca</a>
                    <p class="postion text-white">Developer</p>
                    <ul class="list-social">
                        <li>
                            <a href="https://t.me/blockchaintool_bot" target="_blank">
                                <svg fill="none" height="14" viewBox="0 0 17 14" width="17" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.77846 9.12109L6.51378 12.844C6.89246 12.844 7.05647 12.6813 7.25315 12.4859L9.02858 10.7892L12.7074 13.4833C13.3821 13.8593 13.8575 13.6613 14.0395 12.8626L16.4543 1.54734L16.455 1.54668C16.669 0.54929 16.0943 0.159269 15.4369 0.403949L1.24283 5.83824C0.274106 6.21426 0.288774 6.75429 1.07815 6.99897L4.70701 8.1277L13.1361 2.85341C13.5328 2.59073 13.8935 2.73607 13.5968 2.99876L6.77846 9.12109Z" fill="white"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <h1 class="text-[30px] w-[60%] text-center text-white mt-[80px]">Blockchain Scanner</h1>
            <span class="mt-[20px] text-white text-sm">Copyright © 2024</span>
        </section>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        //TOGGLE NAVBAR
        const mobileTab = document.querySelector('.mobile-button');
        const mobileNav = document.getElementById('main-nav-mobi');
        const mainHeader = document.getElementById('header_main');
        const lining =document.querySelector('.lining');

        mobileTab.addEventListener('click', function() {

            this.classList.toggle('active');

            if (this.classList.contains('active')) {
                mobileNav.style.maxHeight = '500px';
            } else {
                mobileNav.style.maxHeight = '0px';
            }
        });

        //
        const mapRight = document.querySelectorAll('.right');

        function updateDivStyle() {
            if (window.innerWidth < 640) {
                mapRight.forEach(item => {
                    item.classList.remove('right');
                });
            } else {
                mapRight.forEach(item => {
                    item.classList.add('right');
                });
            }
        }
        window.addEventListener('load', updateDivStyle);
        window.addEventListener('resize', updateDivStyle);

        //SCROLL HEADER
        window.addEventListener('scroll', function() {
            console.log(123123);

            if (mobileTab.classList.contains('active')) {
                mobileTab.classList.remove('active');
                mobileNav.style.maxHeight = '0px';
            }

            if (window.scrollY > 150) {
                mainHeader.classList.add('add-top');
            } else if (window.scrollY < 150) {
                mainHeader.classList.remove('add-top');
            }

            if (window.scrollY > 250) {
                mainHeader.classList.add('trans-top');
            } else if (window.scrollY < 250) {
                mainHeader.classList.remove('trans-top');
            }


        });

        // toggle content
        document.querySelectorAll('.flat-toggle').forEach(toggle => {
            toggle.addEventListener('click', function() {
                const content = this.querySelector('.toggle-content');
                if (content) {
                    document.querySelectorAll('.toggle-content').forEach(item => {
                        if (item !== content && item.classList.contains('open')) {
                            item.classList.remove('open');
                        }
                    });

                    content.classList.toggle('open');
                }
            });
        });

        //TYPING
        const strings = ["USDT", "BTC", "ETH", "BNB"];
        const typingSpeed = 50;
        const nextStringDelay = 500;
        let currentString = "";
        let charIndex = 0;
        let arrayIndex = 0;

        const typingElement = document.getElementById('typing');

        function typeString() {
            if (charIndex < strings[arrayIndex].length) {
                currentString += strings[arrayIndex][charIndex++];
                typingElement.textContent = currentString;
                setTimeout(typeString, typingSpeed);
            } else {
                setTimeout(resetTyping, nextStringDelay);
            }
        }

        function resetTyping() {
            currentString = ""; // Clear the current string
            charIndex = 0; // Reset the character index
            arrayIndex = (arrayIndex + 1) % strings.length; // Move to the next string in the array, loop back to start
            setTimeout(typeString, 500); // Slight delay before starting typing new string
        }

        setTimeout(typeString, 500); // Start typing after a slight delay

        //CAROUSEL 3D
        const items = document.querySelectorAll('.carousel-item');
        const numItems = items.length;
        const angleStep = 360 / numItems;
        let currentAngle = 0;
        let autoRotateInterval;

        function updateCarousel() {
            items.forEach((item, index) => {
                const angle = currentAngle + index * angleStep;
                const rad = angle * Math.PI / 180;
                const scale = 0.5 + Math.cos(rad) * 0.5;
                const xPosition = 300 * Math.sin(rad);
                item.style.transform = `translateX(${xPosition}px) scale(${scale})`;
                item.style.zIndex = Math.round(scale * 100) / 50;
            });
        }

        function startAutoRotate() {
            autoRotateInterval = setInterval(() => {
                currentAngle -= angleStep;
                updateCarousel();
            }, 3000);
        }

        function stopAutoRotate() {
            clearInterval(autoRotateInterval);
        }

        document.getElementById('leftBtn').addEventListener('click', () => {
            stopAutoRotate();
            currentAngle += angleStep;
            updateCarousel();
        });

        document.getElementById('rightBtn').addEventListener('click', () => {
            stopAutoRotate();
            currentAngle -= angleStep;
            updateCarousel();
        });

        updateCarousel(); // Khởi tạo carousel
        startAutoRotate();

        const observer = new MutationObserver((mutations) => {
            let shouldInitAOS = mutations.some(mutation => mutation.type === 'childList');
            if (shouldInitAOS) {
                AOS.init();
            }
        });

        observer.observe(document.body, {
            childList: true,
            subtree: true
        });
    </script>
</body>

</html>