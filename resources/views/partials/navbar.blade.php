    <nav class="bg-white/80 top-0 py-[18px] fixed flex justify-around items-center w-full z-[3]">
            <a class="flex" href="/">
            <img src="{{url('/assets/Logo-MarinaFF.png')}}" alt="Logo" style="width: 35px">
            <div class="p-2 font-bold rounded">Marina Frozen Food</div>
            </a>
        </div>
        <span class="z-10 content-around block text-3xl px-6 bg-transparent cursor-pointer md:hidden">
            <button onclick="Menu()"><i class="fa-solid fa-bars"></i></button>
        </span>
        <div id="sidebar" class="md:flex md:flex-col md:items-center z-[1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-100 top-[-400px] transition-all ease-in-out duration-500">
            <ul class="flex ml-8">
                <li class="my-6 md:my-0">
                    <a href="/" class="pl-5 xl:pr-5 pr-[370px] py-3 mx-3 duration-500 rounded hover:bg-orange-400">Home</a>
                </li>
                <li class="my-6 md:my-0">
                    <a href="/products" class="pl-5 xl:pr-5 pr-[370px] py-3 mx-3 duration-500 rounded hover:bg-orange-400">Product</a>
                </li>
                <li class="my-6 md:my-0">
                    <a href="/about" class="pl-5 xl:pr-5 pr-[370px] py-3 mx-3 duration-500 rounded hover:bg-orange-400">About</a>
                </li>
                <li class="my-6 md:my-0">
                    <a href="/contact" class="pl-5 xl:pr-5 pr-[370px] py-3 mx-3 duration-500 rounded hover:bg-orange-400">Contact us</a>
                </li>
            </ul>
        </div>
    
    </nav>

<script>
    let menuOpen = false;
    let list = document.querySelector('#sidebar');
    let unlist = document.querySelector('ul');

    const Menu = () => {
        if (menuOpen) {
            list.classList.remove('top-[80px]');
            list.classList.remove('opacity-100');
            unlist.classList.remove('flex');
        } else {
            list.classList.add('top-[80px]');
            list.classList.add('opacity-100');
            unlist.classList.remove('flex');

        }
        menuOpen = !menuOpen;
    }
</script>