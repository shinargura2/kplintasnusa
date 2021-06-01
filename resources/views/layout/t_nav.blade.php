<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-header">Menu Utama</li>
            <li class="nav-item {{ (request()->segment(1) == '/') ? 'active' : '' }}">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Home
              </p>
            </a>
          </li>
            <li class="nav-item {{-- {{ routeIs('barang*') ? 'active' : ''  }} --}}">
            <a class="nav-link" href="/barang" >
              <i class="nav-icon fa fa-cubes"></i>
              <p>
                Barang
              </p>
            </a>
          </li>

           <li class="nav-item {{ (request()->segment(1) == 'gudang') ? 'active' : '' }}">
            <a href="/gudang" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Gudang
              </p>
            </a>
          </li>

          <li class="nav-item {{ (request()->segment(1) == 'transaksi') ? 'active' : '' }}">
            <a href="/transaksi" class="nav-link">
              <i class="nav-icon fa fa-american-sign-language-interpreting"></i>
              <p>
                Transaksi
              </p>
            </a>
          </li>


          <li class="nav-item {{ (request()->segment(1) == 'home') ? 'supplier' : '' }}">
            <a href="/supplier" class="nav-link">
              <i class="nav-icon fa fa-address-book"></i>
              <p>
                Supplier
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/satuan" class="nav-link">
              <i class="nav-icon fa fa-hourglass-end"></i>
              <p>
                Satuan
              </p>
            </a>
          </li>

      <li class="nav-header">Fitur Laporan</li>
          <li class="nav-item"> 
            <a href="/laporan" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Laporan</p>
            </a>
          </li>
         
      <li class="nav-header">Akun</li>
          <li class="nav-item"> 
            <a href="/logout" class="nav-link">
              <i class="nav-icon fas fa-user"></i>

              <p>Logout</p>
            </a>
          </li>
          
    
      </nav>