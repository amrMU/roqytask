
<!-- Tailwind-css Navbar  -->
<nav class="bg-purple-700 shadow-sm" style="background-color: #1a3058">
  <div class="container mx-auto">
    <div class="sm:flex justify-around">
      <!-- Site-title  -->
      <a href="<?php echo e(url('/')); ?>" class="text-white text-3xl font-bold p-3"><img src="https://storage.googleapis.com/nogoumfm-eu-web/1/2019/12/logo-nogoum-1.png" alt="logo" style="max-width: 64%"></a>

      <!-- Menus  -->
      <ul class="text-gray-400 sm:self-center text-xl border-t-2 sm:border-none" >
        <li class="sm:inline-block">
          <a href="<?php echo e(url('nogoumfm')); ?>" class="p-3 hover:text-white" style="color: white; margin:5px">
            <img src="https://storage.googleapis.com/nogoumfm-eu-web/1/2019/12/logo-nogoum-1.png" style="max-height: 50px" alt="nogoumfm"> 
            
          </a>
        </li>
        <li class="sm:inline-block">
          <a href="<?php echo e(url('9090fm')); ?>" class="p-3 hover:text-white" style="color: white; margin:5px">
            <img src="https://www.9090.fm/images/logo.png" style="max-height: 50px" alt="9090fm"> 

          </a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

<?php /**PATH C:\xampp\htdocs\amrmoh.com\resources\views/front/radio/navebar.blade.php ENDPATH**/ ?>